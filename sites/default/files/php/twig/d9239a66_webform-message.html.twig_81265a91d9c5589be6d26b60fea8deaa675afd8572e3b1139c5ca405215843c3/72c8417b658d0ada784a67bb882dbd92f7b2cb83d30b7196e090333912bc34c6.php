<?php

/* modules/contrib/webform/templates/webform-message.html.twig */
class __TwigTemplate_a455bf920e5bbff1db38aee9a4eede1ff5e27375970ed5b39564038665e30909 extends Twig_Template
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
        $__internal_65677e318c41852619884bacead6026a9344280862be81fd307de13d4b95aab9 = $this->env->getExtension("native_profiler");
        $__internal_65677e318c41852619884bacead6026a9344280862be81fd307de13d4b95aab9->enter($__internal_65677e318c41852619884bacead6026a9344280862be81fd307de13d4b95aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-message.html.twig"));

        $tags = array("set" => 20, "if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 20
        $context["classes"] = array(0 => ((        // line 21
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 22
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : ("")));
        // line 25
        if ( !(isset($context["closed"]) ? $context["closed"] : null)) {
            // line 26
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
            echo "</div>
";
        }
        
        $__internal_65677e318c41852619884bacead6026a9344280862be81fd307de13d4b95aab9->leave($__internal_65677e318c41852619884bacead6026a9344280862be81fd307de13d4b95aab9_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 26,  50 => 25,  48 => 22,  47 => 21,  46 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a Webform message container.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - message: The rendered status_messages elements.*/
/*  * - has_parent: A flag to indicate that the container has one or more parent*/
/*  *    containers.*/
/*  * - closed: A flag to indicate that the message has been been closed and should*/
/*  *    not be displayed.*/
/*  **/
/*  * @see template_preprocess_webform_message()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     has_parent ? 'js-form-wrapper',*/
/*     has_parent ? 'form-wrapper',*/
/*   ]*/
/* %}*/
/* {% if not closed %}*/
/* <div{{ attributes.addClass(classes) }}>{{ message }}</div>*/
/* {% endif %}*/
/* */
