<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_d5f5c5fe93ac61d1568604f3deb8ba0c26c800bc92fe18a64a760e4daad4e405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e304c0b2fe27ceef05e1a31dfe791bc78f38868aecf23a92256d4de8960be7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e304c0b2fe27ceef05e1a31dfe791bc78f38868aecf23a92256d4de8960be7e->enter($__internal_0e304c0b2fe27ceef05e1a31dfe791bc78f38868aecf23a92256d4de8960be7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e304c0b2fe27ceef05e1a31dfe791bc78f38868aecf23a92256d4de8960be7e->leave($__internal_0e304c0b2fe27ceef05e1a31dfe791bc78f38868aecf23a92256d4de8960be7e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_329ae326ca95c9f813bf75f7b93d377a30286d7cf026dc97bb9a8ebc15e1cb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329ae326ca95c9f813bf75f7b93d377a30286d7cf026dc97bb9a8ebc15e1cb2b->enter($__internal_329ae326ca95c9f813bf75f7b93d377a30286d7cf026dc97bb9a8ebc15e1cb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "options", array()), "format", array()), (isset($context["timezone"]) || array_key_exists("timezone", $context) ? $context["timezone"] : (function () { throw new Twig_Error_Runtime('Variable "timezone" does not exist.', 19, $this->getSourceContext()); })())), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 20
($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->getSourceContext()); })()), null, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 21, $this->getSourceContext()); })()), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
        }
        
        $__internal_329ae326ca95c9f813bf75f7b93d377a30286d7cf026dc97bb9a8ebc15e1cb2b->leave($__internal_329ae326ca95c9f813bf75f7b93d377a30286d7cf026dc97bb9a8ebc15e1cb2b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  52 => 21,  50 => 20,  47 => 19,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_datetime.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
