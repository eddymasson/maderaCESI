<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_75978d1f404c8e2ded88be8bcfc0049087e3508e6591604f195a85caa6b287f4 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2803f9074b573c89ee5ea385a3e9fc55744c8318d79fb95b236e3f4346fe8d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2803f9074b573c89ee5ea385a3e9fc55744c8318d79fb95b236e3f4346fe8d4b->enter($__internal_2803f9074b573c89ee5ea385a3e9fc55744c8318d79fb95b236e3f4346fe8d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2803f9074b573c89ee5ea385a3e9fc55744c8318d79fb95b236e3f4346fe8d4b->leave($__internal_2803f9074b573c89ee5ea385a3e9fc55744c8318d79fb95b236e3f4346fe8d4b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_91a15598cb357b084ae6d53ffc6df1fb6497d455fb740c2f84c1d0e350a5db5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a15598cb357b084ae6d53ffc6df1fb6497d455fb740c2f84c1d0e350a5db5d->enter($__internal_91a15598cb357b084ae6d53ffc6df1fb6497d455fb740c2f84c1d0e350a5db5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })()), "F j, Y"), "html", null, true);
        }
        
        $__internal_91a15598cb357b084ae6d53ffc6df1fb6497d455fb740c2f84c1d0e350a5db5d->leave($__internal_91a15598cb357b084ae6d53ffc6df1fb6497d455fb740c2f84c1d0e350a5db5d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
