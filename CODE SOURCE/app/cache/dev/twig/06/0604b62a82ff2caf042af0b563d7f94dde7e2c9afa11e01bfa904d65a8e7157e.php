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
        $__internal_8af0ed570f680e3c0b9fe9ba396651e3ca5b19647b2d713ddf472f0726e8a23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af0ed570f680e3c0b9fe9ba396651e3ca5b19647b2d713ddf472f0726e8a23f->enter($__internal_8af0ed570f680e3c0b9fe9ba396651e3ca5b19647b2d713ddf472f0726e8a23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af0ed570f680e3c0b9fe9ba396651e3ca5b19647b2d713ddf472f0726e8a23f->leave($__internal_8af0ed570f680e3c0b9fe9ba396651e3ca5b19647b2d713ddf472f0726e8a23f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a3a4efb8972cbfb100b2a1580c1a324f15152978d342adb7b9643d049a6c70c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a4efb8972cbfb100b2a1580c1a324f15152978d342adb7b9643d049a6c70c0->enter($__internal_a3a4efb8972cbfb100b2a1580c1a324f15152978d342adb7b9643d049a6c70c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_a3a4efb8972cbfb100b2a1580c1a324f15152978d342adb7b9643d049a6c70c0->leave($__internal_a3a4efb8972cbfb100b2a1580c1a324f15152978d342adb7b9643d049a6c70c0_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_9ad23bb20a6b655d678d47d4a421ae63633b97ae8ed37efdb29de214d077df55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad23bb20a6b655d678d47d4a421ae63633b97ae8ed37efdb29de214d077df55->enter($__internal_9ad23bb20a6b655d678d47d4a421ae63633b97ae8ed37efdb29de214d077df55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_9ad23bb20a6b655d678d47d4a421ae63633b97ae8ed37efdb29de214d077df55->leave($__internal_9ad23bb20a6b655d678d47d4a421ae63633b97ae8ed37efdb29de214d077df55_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_e633be7ed3e77f72715ce96e69060e781bc2c48eda9458aa671fd8be10b3153f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e633be7ed3e77f72715ce96e69060e781bc2c48eda9458aa671fd8be10b3153f->enter($__internal_e633be7ed3e77f72715ce96e69060e781bc2c48eda9458aa671fd8be10b3153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e633be7ed3e77f72715ce96e69060e781bc2c48eda9458aa671fd8be10b3153f->leave($__internal_e633be7ed3e77f72715ce96e69060e781bc2c48eda9458aa671fd8be10b3153f_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_64705d01c9b0882494a4de9a40c71ba9554f6714dfe14d22d77ab3480553b391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64705d01c9b0882494a4de9a40c71ba9554f6714dfe14d22d77ab3480553b391->enter($__internal_64705d01c9b0882494a4de9a40c71ba9554f6714dfe14d22d77ab3480553b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_64705d01c9b0882494a4de9a40c71ba9554f6714dfe14d22d77ab3480553b391->leave($__internal_64705d01c9b0882494a4de9a40c71ba9554f6714dfe14d22d77ab3480553b391_prof);

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
