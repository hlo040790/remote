<?php

namespace Drupal\webform;

use Drupal\Core\Serialization\Yaml;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\PluralTranslatableMarkup;
use Drupal\webform\Entity\WebformOptions;
use Drupal\webform\Utility\WebformArrayHelper;
use Drupal\webform\Utility\WebformOptionsHelper;

/**
 * Provides a webform to set options.
 */
class WebformOptionsForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    /** @var \Drupal\webform\WebformOptionsInterface $webform_options */
    $webform_options = $this->entity;

    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#required' => TRUE,
      '#attributes' => ($webform_options->isNew()) ? ['autofocus' => 'autofocus'] : [],
      '#default_value' => $webform_options->label(),
    ];
    $form['id'] = [
      '#type' => 'machine_name',
      '#machine_name' => [
        'exists' => '\Drupal\webform\Entity\WebformOptions::load',
      ],
      '#required' => TRUE,
      '#disabled' => !$webform_options->isNew(),
      '#default_value' => $webform_options->id(),
    ];

    // Call the isolated edit webform that can be overridden by the
    // webform_ui.module.
    $module_names = $this->alterModuleNames();
    if (count($module_names) && !$form_state->getUserInput()) {
      $t_args = [
        '%title' => $webform_options->label(),
        '%module_names' => WebformArrayHelper::toString($module_names),
        '@module' => new PluralTranslatableMarkup(count($module_names), $this->t('module'), $this->t('modules')),
      ];
      if (empty($webform_options->get('options'))) {
        drupal_set_message($this->t('The %title options are being set by the %module_names @module. Altering any of the below options will override these dynamically populated options.', $t_args), 'warning');
      }
      else {
        drupal_set_message($this->t('The %title options have been customized. Resetting the below options will allow the %module_names @module to dynamically populate these options.', $t_args), 'warning');
      }
    }

    $form = $this->editForm($form, $form_state);

    return parent::form($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);

    /** @var \Drupal\webform\WebformOptionsInterface $webform_options */
    $webform_options = $this->entity;

    // Add reset button if options are altered.
    $module_names = $this->alterModuleNames();
    if (count($module_names) && !empty($webform_options->get('options'))) {
      $actions['#submit']['#weight'] = -100;
      $actions['reset'] = [
        '#type' => 'submit',
        '#value' => $this->t('Reset'),
        '#submit' => ['::submitForm', '::reset'],
      ];
    }

    return $actions;
  }

  /**
   * Get webform options alter module names.
   *
   * @return array
   *   An array of module names that implement
   *   hook_webform_options_WEBFORM_OPTIONS_ID_alter().
   */
  protected function alterModuleNames() {
    /** @var \Drupal\webform\WebformOptionsInterface $webform_options */
    $webform_options = $this->entity;

    if ($webform_options->isNew()) {
      return [];
    }

    $hook_name = 'webform_options_' . $webform_options->id() . '_alter';
    $alter_hooks = $this->moduleHandler->getImplementations($hook_name);
    $module_info = system_get_info('module');
    $module_names = [];
    foreach ($alter_hooks as $options_alter_hook) {
      $module_name = str_replace($hook_name, '', $options_alter_hook);
      $module_names[] = $module_info[$module_name]['name'];
    }
    return $module_names;
  }

  /**
   * Edit webform options source code webform.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The webform structure.
   */
  protected function editForm(array $form, FormStateInterface $form_state) {
    $form['options'] = [
      '#type' => 'webform_codemirror',
      '#mode' => 'yaml',
      '#title' => $this->t('Options (YAML)'),
      '#description' => $this->t('Key-value pairs MUST be specified as "safe_key: \'Some readable option\'". Use of only alphanumeric characters and underscores is recommended in keys. One option per line. Option groups can be created by using just the group name followed by indented group options.'),
      '#default_value' => Yaml::encode($this->getOptions($form, $form_state)),
    ];
    $form['#attached']['library'][] = 'webform/webform.codemirror.yaml';
    return $form;
  }

  /**
   * Get options.
   *
   * @return array
   *   An associative array of options.
   */
  protected function getOptions($form, $form_state) {
    /** @var \Drupal\webform\WebformOptionsInterface $webform_options */
    $webform_options = $this->buildEntity($form, $form_state);

    $options = $webform_options->getOptions();
    if (empty($options)) {
      $options = WebformOptions::getElementOptions(['#options' => $webform_options->id()]);
    }

    return WebformOptionsHelper::convertOptionsToString($options);
  }

  /**
   * Reset options.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function reset(array &$form, FormStateInterface $form_state) {
    /** @var \Drupal\webform\WebformOptionsInterface $webform_options */
    $webform_options = $this->getEntity();
    $webform_options->set('options', '');
    $webform_options->save();

    $this->logger('webform')->notice('Options @label have been reset.', ['@label' => $webform_options->label()]);
    drupal_set_message($this->t('Options %label have been reset.', ['%label' => $webform_options->label()]));

    $form_state->setRedirect('entity.webform_options.collection');
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    /** @var \Drupal\webform\WebformOptionsInterface $webform_options */
    $webform_options = $this->getEntity();
    $webform_options->save();

    $this->logger('webform')->notice('Options @label saved.', ['@label' => $webform_options->label()]);
    drupal_set_message($this->t('Options %label saved.', ['%label' => $webform_options->label()]));

    $form_state->setRedirect('entity.webform_options.collection');
  }

}
