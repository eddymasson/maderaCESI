<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_34b24d6fcb2073dabeaaef9c2e5301845f75b45bd6b0d8616edc3553a5715c7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_4d777ed0d2be6d975b6c00ecbe638acb19074416ec742993251583ba5090ac69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d777ed0d2be6d975b6c00ecbe638acb19074416ec742993251583ba5090ac69->enter($__internal_4d777ed0d2be6d975b6c00ecbe638acb19074416ec742993251583ba5090ac69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d777ed0d2be6d975b6c00ecbe638acb19074416ec742993251583ba5090ac69->leave($__internal_4d777ed0d2be6d975b6c00ecbe638acb19074416ec742993251583ba5090ac69_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b25bbe269ca0d34eee378f9be5cf28b6d34c5ca78c94720c2a7e119f6e0bfa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25bbe269ca0d34eee378f9be5cf28b6d34c5ca78c94720c2a7e119f6e0bfa4e->enter($__internal_b25bbe269ca0d34eee378f9be5cf28b6d34c5ca78c94720c2a7e119f6e0bfa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_b25bbe269ca0d34eee378f9be5cf28b6d34c5ca78c94720c2a7e119f6e0bfa4e->leave($__internal_b25bbe269ca0d34eee378f9be5cf28b6d34c5ca78c94720c2a7e119f6e0bfa4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
