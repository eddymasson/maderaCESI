<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_bf4cbb9fc6f380d284cef75725be65b8aac38d96e20a17b1d1e4ad722706f7a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_de360f95e73bcf24b8f4884d992a16e37e6eac77cedf8fe29de4230ddbed77b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de360f95e73bcf24b8f4884d992a16e37e6eac77cedf8fe29de4230ddbed77b1->enter($__internal_de360f95e73bcf24b8f4884d992a16e37e6eac77cedf8fe29de4230ddbed77b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de360f95e73bcf24b8f4884d992a16e37e6eac77cedf8fe29de4230ddbed77b1->leave($__internal_de360f95e73bcf24b8f4884d992a16e37e6eac77cedf8fe29de4230ddbed77b1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1047ffbd7ee31a9822a533da9dbcf6cc7b0fb1643e1a20fb5c8c98b9e2cb8a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1047ffbd7ee31a9822a533da9dbcf6cc7b0fb1643e1a20fb5c8c98b9e2cb8a06->enter($__internal_1047ffbd7ee31a9822a533da9dbcf6cc7b0fb1643e1a20fb5c8c98b9e2cb8a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_1047ffbd7ee31a9822a533da9dbcf6cc7b0fb1643e1a20fb5c8c98b9e2cb8a06->leave($__internal_1047ffbd7ee31a9822a533da9dbcf6cc7b0fb1643e1a20fb5c8c98b9e2cb8a06_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}