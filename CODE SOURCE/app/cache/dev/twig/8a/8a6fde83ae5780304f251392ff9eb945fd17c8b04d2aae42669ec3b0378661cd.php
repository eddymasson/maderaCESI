<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_f344226d18ad0ed36b6eebe21511b7044b9d4f2c53d2c27fac6af3a4e2aed4a5 extends Twig_Template
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
        $__internal_28d9fc20a05e42e4985103f48e9c198da41bb58faab3d2c42d57fdc2dea5da61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d9fc20a05e42e4985103f48e9c198da41bb58faab3d2c42d57fdc2dea5da61->enter($__internal_28d9fc20a05e42e4985103f48e9c198da41bb58faab3d2c42d57fdc2dea5da61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d9fc20a05e42e4985103f48e9c198da41bb58faab3d2c42d57fdc2dea5da61->leave($__internal_28d9fc20a05e42e4985103f48e9c198da41bb58faab3d2c42d57fdc2dea5da61_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_504333eed75502eb3710f497613e30b9c9e1876ade0cdc26067710a9a8aea3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504333eed75502eb3710f497613e30b9c9e1876ade0cdc26067710a9a8aea3c2->enter($__internal_504333eed75502eb3710f497613e30b9c9e1876ade0cdc26067710a9a8aea3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_504333eed75502eb3710f497613e30b9c9e1876ade0cdc26067710a9a8aea3c2->leave($__internal_504333eed75502eb3710f497613e30b9c9e1876ade0cdc26067710a9a8aea3c2_prof);

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