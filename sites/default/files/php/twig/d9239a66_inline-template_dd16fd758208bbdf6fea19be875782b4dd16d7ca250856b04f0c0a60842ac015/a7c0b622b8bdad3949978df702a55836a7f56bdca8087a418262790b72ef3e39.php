<?php

/* {# inline_template_start #}{{ configuration_error_list }} */
class __TwigTemplate_16c72be86023ceb0f510c7707aa5eb8cdba75d67a60d02ddfea406476234606e extends Twig_Template
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
        $__internal_b7de3d3e576b0b21c77495afc47bf1c55be4ac7684c8ffbee9fad4a816378422 = $this->env->getExtension("native_profiler");
        $__internal_b7de3d3e576b0b21c77495afc47bf1c55be4ac7684c8ffbee9fad4a816378422->enter($__internal_b7de3d3e576b0b21c77495afc47bf1c55be4ac7684c8ffbee9fad4a816378422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ configuration_error_list }}"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["configuration_error_list"]) ? $context["configuration_error_list"] : null), "html", null, true));
        
        $__internal_b7de3d3e576b0b21c77495afc47bf1c55be4ac7684c8ffbee9fad4a816378422->leave($__internal_b7de3d3e576b0b21c77495afc47bf1c55be4ac7684c8ffbee9fad4a816378422_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ configuration_error_list }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}{{ configuration_error_list }}*/
