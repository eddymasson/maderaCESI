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
        $__internal_d1ad5adefccbeb4e198792f6506bf829da68f52cfd0b8873a9e77d9a64aaaf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ad5adefccbeb4e198792f6506bf829da68f52cfd0b8873a9e77d9a64aaaf21->enter($__internal_d1ad5adefccbeb4e198792f6506bf829da68f52cfd0b8873a9e77d9a64aaaf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ad5adefccbeb4e198792f6506bf829da68f52cfd0b8873a9e77d9a64aaaf21->leave($__internal_d1ad5adefccbeb4e198792f6506bf829da68f52cfd0b8873a9e77d9a64aaaf21_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a6aab048729f941a6ced64c0f1a538cf93752301a2788cd432accb9fb5df2871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6aab048729f941a6ced64c0f1a538cf93752301a2788cd432accb9fb5df2871->enter($__internal_a6aab048729f941a6ced64c0f1a538cf93752301a2788cd432accb9fb5df2871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_a6aab048729f941a6ced64c0f1a538cf93752301a2788cd432accb9fb5df2871->leave($__internal_a6aab048729f941a6ced64c0f1a538cf93752301a2788cd432accb9fb5df2871_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_c779f4c854cc6af4f8be5e3f6f32810ae37312e6d16ee3e4c8822e5a439991b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c779f4c854cc6af4f8be5e3f6f32810ae37312e6d16ee3e4c8822e5a439991b1->enter($__internal_c779f4c854cc6af4f8be5e3f6f32810ae37312e6d16ee3e4c8822e5a439991b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_c779f4c854cc6af4f8be5e3f6f32810ae37312e6d16ee3e4c8822e5a439991b1->leave($__internal_c779f4c854cc6af4f8be5e3f6f32810ae37312e6d16ee3e4c8822e5a439991b1_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_ccb3e6c498a02c4720d948923fa0b4c80eef4b5bd4abc3ace8259dea81051ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb3e6c498a02c4720d948923fa0b4c80eef4b5bd4abc3ace8259dea81051ffe->enter($__internal_ccb3e6c498a02c4720d948923fa0b4c80eef4b5bd4abc3ace8259dea81051ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_ccb3e6c498a02c4720d948923fa0b4c80eef4b5bd4abc3ace8259dea81051ffe->leave($__internal_ccb3e6c498a02c4720d948923fa0b4c80eef4b5bd4abc3ace8259dea81051ffe_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_df586510175661788fe72b0bb0b1d5a3feccbeb1615ba2bd24a5e72ad0e54b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df586510175661788fe72b0bb0b1d5a3feccbeb1615ba2bd24a5e72ad0e54b33->enter($__internal_df586510175661788fe72b0bb0b1d5a3feccbeb1615ba2bd24a5e72ad0e54b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_df586510175661788fe72b0bb0b1d5a3feccbeb1615ba2bd24a5e72ad0e54b33->leave($__internal_df586510175661788fe72b0bb0b1d5a3feccbeb1615ba2bd24a5e72ad0e54b33_prof);

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
