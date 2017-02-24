<?php

/* core/themes/classy/templates/user/username.html.twig */
class __TwigTemplate_1bd74a047c5fd0c8c7d7191302e2ef37f8c3dfcc08605bfa7a577e675b9ae985 extends Twig_Template
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
        $__internal_cfcdd4138193ecd920a5e95f3fadc8beae8a541b7c78e0ea2bf33469fed42e2a = $this->env->getExtension("native_profiler");
        $__internal_cfcdd4138193ecd920a5e95f3fadc8beae8a541b7c78e0ea2bf33469fed42e2a->enter($__internal_cfcdd4138193ecd920a5e95f3fadc8beae8a541b7c78e0ea2bf33469fed42e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/user/username.html.twig"));

        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
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

        // line 19
        if ((isset($context["link_path"]) ? $context["link_path"] : null)) {
            // line 20
            echo "<a";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "username"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true));
            echo "</a>";
        } else {
            // line 22
            echo "<span";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true));
            echo "</span>";
        }
        
        $__internal_cfcdd4138193ecd920a5e95f3fadc8beae8a541b7c78e0ea2bf33469fed42e2a->leave($__internal_cfcdd4138193ecd920a5e95f3fadc8beae8a541b7c78e0ea2bf33469fed42e2a_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  48 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for displaying a username.*/
/*  **/
/*  * Available variables:*/
/*  * - account: The full account information for the user.*/
/*  * - name: The user's name, sanitized.*/
/*  * - extra: Additional text to append to the user's name, sanitized.*/
/*  * - link_path: The path or URL of the user's profile page, home page,*/
/*  *   or other desired page to link to for more information about the user.*/
/*  * - link_options: Options to set on the \Drupal\Core\Url object if linking the*/
/*  *   user's name to the user's page.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  **/
/*  * @see template_preprocess_username()*/
/*  *//* */
/* #}*/
/* {% if link_path -%}*/
/*   <a{{ attributes.addClass('username') }}>{{ name }}{{ extra }}</a>*/
/* {%- else -%}*/
/*   <span{{ attributes }}>{{ name }}{{ extra }}</span>*/
/* {%- endif -%}*/
/* */
