<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_72fec4c7a82b703b586b9b079fb721e98f32c7358d56660faa378172ea3206d4 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d789d30e8b9492de175c070a57407b1f45b9ea07bfed1d6b2e72ebb6aa9d1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d789d30e8b9492de175c070a57407b1f45b9ea07bfed1d6b2e72ebb6aa9d1e2->enter($__internal_9d789d30e8b9492de175c070a57407b1f45b9ea07bfed1d6b2e72ebb6aa9d1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d789d30e8b9492de175c070a57407b1f45b9ea07bfed1d6b2e72ebb6aa9d1e2->leave($__internal_9d789d30e8b9492de175c070a57407b1f45b9ea07bfed1d6b2e72ebb6aa9d1e2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fec92c140b3cbd047256aaa9a64140c68d30d8d5b0020d64d3ce1dd0a9f33189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec92c140b3cbd047256aaa9a64140c68d30d8d5b0020d64d3ce1dd0a9f33189->enter($__internal_fec92c140b3cbd047256aaa9a64140c68d30d8d5b0020d64d3ce1dd0a9f33189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_fec92c140b3cbd047256aaa9a64140c68d30d8d5b0020d64d3ce1dd0a9f33189->leave($__internal_fec92c140b3cbd047256aaa9a64140c68d30d8d5b0020d64d3ce1dd0a9f33189_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
