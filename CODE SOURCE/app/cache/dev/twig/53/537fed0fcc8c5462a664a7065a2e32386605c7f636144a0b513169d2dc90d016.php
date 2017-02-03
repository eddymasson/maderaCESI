<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_58a53e8e74598d0e4573005c2909f0ab1efebd197359f63968dff37b8038fb0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
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
        $__internal_8d2a532a0d7c85c53981b71d01b110887828f8bcae8de3faa8dfcdfce54c2846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2a532a0d7c85c53981b71d01b110887828f8bcae8de3faa8dfcdfce54c2846->enter($__internal_8d2a532a0d7c85c53981b71d01b110887828f8bcae8de3faa8dfcdfce54c2846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2a532a0d7c85c53981b71d01b110887828f8bcae8de3faa8dfcdfce54c2846->leave($__internal_8d2a532a0d7c85c53981b71d01b110887828f8bcae8de3faa8dfcdfce54c2846_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_9af6329fc005c9d25aed24c1da05d6397900b46e17db4823f74ed7643e5af0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af6329fc005c9d25aed24c1da05d6397900b46e17db4823f74ed7643e5af0d6->enter($__internal_9af6329fc005c9d25aed24c1da05d6397900b46e17db4823f74ed7643e5af0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 8, $this->getSourceContext()); })()), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->getSourceContext()); })())), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new Twig_Error_Runtime('Variable "length" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["preserve"]) || array_key_exists("preserve", $context) ? $context["preserve"] : (function () { throw new Twig_Error_Runtime('Variable "preserve" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 12, $this->getSourceContext()); })()));
            } else {
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()));
                }
                // line 17
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })());
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_9af6329fc005c9d25aed24c1da05d6397900b46e17db4823f74ed7643e5af0d6->leave($__internal_9af6329fc005c9d25aed24c1da05d6397900b46e17db4823f74ed7643e5af0d6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  68 => 17,  65 => 15,  63 => 14,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}
