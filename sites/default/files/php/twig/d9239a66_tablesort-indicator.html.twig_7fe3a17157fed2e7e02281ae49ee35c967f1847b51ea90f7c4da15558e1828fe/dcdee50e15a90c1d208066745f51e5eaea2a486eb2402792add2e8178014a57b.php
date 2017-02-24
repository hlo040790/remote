<?php

/* core/themes/stable/templates/admin/tablesort-indicator.html.twig */
class __TwigTemplate_cc76c85d187df3958d0560b5f27c450d824b39a5594c9a79fa0785adce417d74 extends Twig_Template
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
        $__internal_8ffb8bbca2607826d6b35d9c23097eb9313d22a934771a3ef5229c2b0090138a = $this->env->getExtension("native_profiler");
        $__internal_8ffb8bbca2607826d6b35d9c23097eb9313d22a934771a3ef5229c2b0090138a->enter($__internal_8ffb8bbca2607826d6b35d9c23097eb9313d22a934771a3ef5229c2b0090138a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/tablesort-indicator.html.twig"));

        $tags = array("set" => 11, "if" => 18);
        $filters = array("t" => 19);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
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

        // line 11
        $context["classes"] = array(0 => "tablesort", 1 => ("tablesort--" .         // line 13
(isset($context["style"]) ? $context["style"] : null)));
        // line 16
        echo "<span";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <span class=\"visually-hidden\">
    ";
        // line 18
        if (((isset($context["style"]) ? $context["style"] : null) == "asc")) {
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sort ascending")));
            echo "
    ";
        } else {
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sort descending")));
            echo "
    ";
        }
        // line 23
        echo "  </span>
</span>
";
        
        $__internal_8ffb8bbca2607826d6b35d9c23097eb9313d22a934771a3ef5229c2b0090138a->leave($__internal_8ffb8bbca2607826d6b35d9c23097eb9313d22a934771a3ef5229c2b0090138a_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  62 => 21,  57 => 19,  55 => 18,  49 => 16,  47 => 13,  46 => 11,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for displaying a tablesort indicator.*/
/*  **/
/*  * Available variables:*/
/*  * - style: Either 'asc' or 'desc', indicating the sorting direction.*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'tablesort',*/
/*     'tablesort--' ~ style,*/
/*   ]*/
/* %}*/
/* <span{{ attributes.addClass(classes) }}>*/
/*   <span class="visually-hidden">*/
/*     {% if style == 'asc' -%}*/
/*       {{ 'Sort ascending'|t }}*/
/*     {% else -%}*/
/*       {{ 'Sort descending'|t }}*/
/*     {% endif %}*/
/*   </span>*/
/* </span>*/
/* */
