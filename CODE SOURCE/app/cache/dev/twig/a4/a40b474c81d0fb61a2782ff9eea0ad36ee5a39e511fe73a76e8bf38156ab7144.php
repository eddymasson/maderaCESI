<?php

/* SonataAdminBundle:CRUD:list_url.html.twig */
class __TwigTemplate_39449a3cd529a43c6e4b834b64d56faca49c3527176295cb69216a9a0884c7a0 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_url.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ce5f72a000ce321b279435aff58d5801fe1a0edada12fee4b96eaba0ed868d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce5f72a000ce321b279435aff58d5801fe1a0edada12fee4b96eaba0ed868d0->enter($__internal_2ce5f72a000ce321b279435aff58d5801fe1a0edada12fee4b96eaba0ed868d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_url.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce5f72a000ce321b279435aff58d5801fe1a0edada12fee4b96eaba0ed868d0->leave($__internal_2ce5f72a000ce321b279435aff58d5801fe1a0edada12fee4b96eaba0ed868d0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_639a497e7f76a93b49174c09d31c45d2a7c11876d023c1ba5e97ae7002c51706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639a497e7f76a93b49174c09d31c45d2a7c11876d023c1ba5e97ae7002c51706->enter($__internal_639a497e7f76a93b49174c09d31c45d2a7c11876d023c1ba5e97ae7002c51706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "url", array(), "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 21, $this->getSourceContext()); })()), "options", array()), "url", array());
                // line 22
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", true, true) && !twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 22, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array()), array(0 => "edit", 1 => "show")))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array()));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "identifier_parameter_name", array(), "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 28, $this->getSourceContext()); })()), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 28, $this->getSourceContext()); })()), "options", array()), "route", array()), "identifier_parameter_name", array()) => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "normalizedidentifier", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 28, $this->getSourceContext()); })())), "method")));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array()), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 32, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array()), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 32, $this->getSourceContext()); })()));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 34, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array()), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 34, $this->getSourceContext()); })()));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 38, $this->getSourceContext()); })());
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "hide_protocol", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "hide_protocol", array()), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = twig_replace_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 42, $this->getSourceContext()); })()), array("http://" => "", "https://" => ""));
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["url_address"]) || array_key_exists("url_address", $context) ? $context["url_address"] : (function () { throw new Twig_Error_Runtime('Variable "url_address" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_639a497e7f76a93b49174c09d31c45d2a7c11876d023c1ba5e97ae7002c51706->leave($__internal_639a497e7f76a93b49174c09d31c45d2a7c11876d023c1ba5e97ae7002c51706_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  115 => 44,  112 => 43,  109 => 42,  107 => 41,  104 => 40,  101 => 39,  98 => 38,  96 => 37,  93 => 36,  90 => 35,  87 => 34,  84 => 33,  81 => 32,  79 => 31,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  64 => 25,  61 => 24,  59 => 23,  56 => 22,  53 => 21,  51 => 20,  48 => 19,  44 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
{% spaceless %}
    {% if value is empty %}
        &nbsp;
    {% else %}
        {% if field_description.options.url is defined %}
            {# target url is string #}
            {% set url_address = field_description.options.url %}
        {% elseif field_description.options.route is defined and field_description.options.route.name not in ['edit', 'show'] %}
            {# target url is Symfony route #}
            {% set parameters = field_description.options.route.parameters|default([]) %}

            {# route with paramter related to object ID #}
            {% if field_description.options.route.identifier_parameter_name is defined %}
                {% set parameters = parameters|merge({(field_description.options.route.identifier_parameter_name):(admin.normalizedidentifier(object))}) %}
            {% endif %}

            {% if field_description.options.route.absolute|default(false) %}
                {% set url_address = url(field_description.options.route.name, parameters) %}
            {% else %}
                {% set url_address = path(field_description.options.route.name, parameters) %}
            {% endif %}
        {% else %}
            {# value is url #}
            {% set url_address = value %}
        {% endif %}

        {% if field_description.options.hide_protocol|default(false) %}
            {% set value = value|replace({'http://': '', 'https://': ''}) %}
        {% endif %}

        <a href=\"{{ url_address }}\">{{ value }}</a>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_url.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_url.html.twig");
    }
}
