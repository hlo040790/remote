<?php

/* modules/contrib/webform/templates/webform-help.html.twig */
class __TwigTemplate_f9f338d1318a9d7f231dfc9f1d44ab44cfc221571c514ad5f28a2498a757a506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6868686ec6c50f5636cded291a60ed315dcc8ff09a153ffed3f6173157948d2f = $this->env->getExtension("native_profiler");
        $__internal_6868686ec6c50f5636cded291a60ed315dcc8ff09a153ffed3f6173157948d2f->enter($__internal_6868686ec6c50f5636cded291a60ed315dcc8ff09a153ffed3f6173157948d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-help.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 17);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.help"), "html", null, true));
        echo "
";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true));
        echo "
";
        
        $__internal_6868686ec6c50f5636cded291a60ed315dcc8ff09a153ffed3f6173157948d2f->leave($__internal_6868686ec6c50f5636cded291a60ed315dcc8ff09a153ffed3f6173157948d2f_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme implementation for webform help.*/
/*  **/
/*  * Available variables*/
/*  * - title: Help title.*/
/*  * - content: Help content.*/
/*  * - youtube_id: YouTube video id.*/
/*  * - help: A render array content help title and content inside a details element.*/
/*  **/
/*  * @see template_preprocess_webform_help()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('webform/webform.help') }}*/
/* {{ help }}*/
/* */
