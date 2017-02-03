<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_1d1404264e2a0799d969af5db1e0896f1063f328423b6c38f8115ee0a280e7af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_65b3ce17a36fc3593ee6619fceb12e9d7ef46f50017d0f905f1578439ce69963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b3ce17a36fc3593ee6619fceb12e9d7ef46f50017d0f905f1578439ce69963->enter($__internal_65b3ce17a36fc3593ee6619fceb12e9d7ef46f50017d0f905f1578439ce69963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b3ce17a36fc3593ee6619fceb12e9d7ef46f50017d0f905f1578439ce69963->leave($__internal_65b3ce17a36fc3593ee6619fceb12e9d7ef46f50017d0f905f1578439ce69963_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_52a57acc4129587198d554a47aada36dc4bd398d7511fb361988d5c0becf4fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a57acc4129587198d554a47aada36dc4bd398d7511fb361988d5c0becf4fd7->enter($__internal_52a57acc4129587198d554a47aada36dc4bd398d7511fb361988d5c0becf4fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_52a57acc4129587198d554a47aada36dc4bd398d7511fb361988d5c0becf4fd7->leave($__internal_52a57acc4129587198d554a47aada36dc4bd398d7511fb361988d5c0becf4fd7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
