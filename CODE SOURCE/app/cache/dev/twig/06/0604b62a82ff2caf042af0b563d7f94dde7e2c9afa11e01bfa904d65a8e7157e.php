<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_477dd238af5636842b33822a57339691846ce607eecd9aa9009be4f1c5b300d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be90697186838dd05c7e9f585e8efd857f909261dcb0abd8550cf3ad280ecf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be90697186838dd05c7e9f585e8efd857f909261dcb0abd8550cf3ad280ecf06->enter($__internal_be90697186838dd05c7e9f585e8efd857f909261dcb0abd8550cf3ad280ecf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be90697186838dd05c7e9f585e8efd857f909261dcb0abd8550cf3ad280ecf06->leave($__internal_be90697186838dd05c7e9f585e8efd857f909261dcb0abd8550cf3ad280ecf06_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_47d96ae105f0f825e70490c21685a8ae9f81e3c71677393846bfeb58c704d963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d96ae105f0f825e70490c21685a8ae9f81e3c71677393846bfeb58c704d963->enter($__internal_47d96ae105f0f825e70490c21685a8ae9f81e3c71677393846bfeb58c704d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_47d96ae105f0f825e70490c21685a8ae9f81e3c71677393846bfeb58c704d963->leave($__internal_47d96ae105f0f825e70490c21685a8ae9f81e3c71677393846bfeb58c704d963_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_cded88b8f0f0f469be7c0deeac65201bdb5fc81172ee67b78f695f908eb21abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cded88b8f0f0f469be7c0deeac65201bdb5fc81172ee67b78f695f908eb21abf->enter($__internal_cded88b8f0f0f469be7c0deeac65201bdb5fc81172ee67b78f695f908eb21abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_cded88b8f0f0f469be7c0deeac65201bdb5fc81172ee67b78f695f908eb21abf->leave($__internal_cded88b8f0f0f469be7c0deeac65201bdb5fc81172ee67b78f695f908eb21abf_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_284a3206dac320af3a56f4d2f74c6b03a1bc6dfc715b2e5fa99d468a3aa01531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284a3206dac320af3a56f4d2f74c6b03a1bc6dfc715b2e5fa99d468a3aa01531->enter($__internal_284a3206dac320af3a56f4d2f74c6b03a1bc6dfc715b2e5fa99d468a3aa01531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_284a3206dac320af3a56f4d2f74c6b03a1bc6dfc715b2e5fa99d468a3aa01531->leave($__internal_284a3206dac320af3a56f4d2f74c6b03a1bc6dfc715b2e5fa99d468a3aa01531_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_1bed505cd58e837903bc8fddd9e2a61f8150d9189c579d90d77b00482b563b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bed505cd58e837903bc8fddd9e2a61f8150d9189c579d90d77b00482b563b05->enter($__internal_1bed505cd58e837903bc8fddd9e2a61f8150d9189c579d90d77b00482b563b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_1bed505cd58e837903bc8fddd9e2a61f8150d9189c579d90d77b00482b563b05->leave($__internal_1bed505cd58e837903bc8fddd9e2a61f8150d9189c579d90d77b00482b563b05_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
