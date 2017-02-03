<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_36979a77b2326d67d156ec9f7ee93b8db613e2dd22e64ea1e25bd6c426227ed3 extends Twig_Template
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
        $__internal_7ff562a09ce44316f94905bceb8c97053e67e118ac7cbd4d3fecd61af6680131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff562a09ce44316f94905bceb8c97053e67e118ac7cbd4d3fecd61af6680131->enter($__internal_7ff562a09ce44316f94905bceb8c97053e67e118ac7cbd4d3fecd61af6680131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff562a09ce44316f94905bceb8c97053e67e118ac7cbd4d3fecd61af6680131->leave($__internal_7ff562a09ce44316f94905bceb8c97053e67e118ac7cbd4d3fecd61af6680131_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_68686488de69f936afe9f90ef48eb9eff01ce15461918d99d14cece96ddac8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68686488de69f936afe9f90ef48eb9eff01ce15461918d99d14cece96ddac8ee->enter($__internal_68686488de69f936afe9f90ef48eb9eff01ce15461918d99d14cece96ddac8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_68686488de69f936afe9f90ef48eb9eff01ce15461918d99d14cece96ddac8ee->leave($__internal_68686488de69f936afe9f90ef48eb9eff01ce15461918d99d14cece96ddac8ee_prof);

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
