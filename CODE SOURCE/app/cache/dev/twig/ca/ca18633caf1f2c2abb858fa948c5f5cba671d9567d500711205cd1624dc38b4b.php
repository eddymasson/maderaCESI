<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_6f303f594e7c677d821a1b50fc30abef21605bf02aa15fc2357b5e83ea8d7238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67fe4a1aed178a1040028b0767075bfea506437d15ff4cb9b157f6ad3925a07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fe4a1aed178a1040028b0767075bfea506437d15ff4cb9b157f6ad3925a07e->enter($__internal_67fe4a1aed178a1040028b0767075bfea506437d15ff4cb9b157f6ad3925a07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fe4a1aed178a1040028b0767075bfea506437d15ff4cb9b157f6ad3925a07e->leave($__internal_67fe4a1aed178a1040028b0767075bfea506437d15ff4cb9b157f6ad3925a07e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_51d74dc15d204159d905064ffa3220bbf16bea0492174d4cbf75d3a966b11ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d74dc15d204159d905064ffa3220bbf16bea0492174d4cbf75d3a966b11ec7->enter($__internal_51d74dc15d204159d905064ffa3220bbf16bea0492174d4cbf75d3a966b11ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })())), "html", null, true);
        }
        
        $__internal_51d74dc15d204159d905064ffa3220bbf16bea0492174d4cbf75d3a966b11ec7->leave($__internal_51d74dc15d204159d905064ffa3220bbf16bea0492174d4cbf75d3a966b11ec7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
