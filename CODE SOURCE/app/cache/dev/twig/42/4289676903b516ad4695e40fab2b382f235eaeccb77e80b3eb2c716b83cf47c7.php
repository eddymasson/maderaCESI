<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_81d1fb5204db3b201e4886bbcf323456e35be13fad022ebc6f677254f41e2495 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2262bfa8834604124bf0bdcd6300d57ad7a3c9960691989be789cae44a977003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2262bfa8834604124bf0bdcd6300d57ad7a3c9960691989be789cae44a977003->enter($__internal_2262bfa8834604124bf0bdcd6300d57ad7a3c9960691989be789cae44a977003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2262bfa8834604124bf0bdcd6300d57ad7a3c9960691989be789cae44a977003->leave($__internal_2262bfa8834604124bf0bdcd6300d57ad7a3c9960691989be789cae44a977003_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ff1393ddb2ed7395c72585c236a315e84a8e0b0b2789bd543965292fb31c5de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1393ddb2ed7395c72585c236a315e84a8e0b0b2789bd543965292fb31c5de6->enter($__internal_ff1393ddb2ed7395c72585c236a315e84a8e0b0b2789bd543965292fb31c5de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_ff1393ddb2ed7395c72585c236a315e84a8e0b0b2789bd543965292fb31c5de6->leave($__internal_ff1393ddb2ed7395c72585c236a315e84a8e0b0b2789bd543965292fb31c5de6_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_9106a0fab9218329868e5baba9fec50e5dbf86657d0984d1fbf04428950319ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9106a0fab9218329868e5baba9fec50e5dbf86657d0984d1fbf04428950319ba->enter($__internal_9106a0fab9218329868e5baba9fec50e5dbf86657d0984d1fbf04428950319ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_9106a0fab9218329868e5baba9fec50e5dbf86657d0984d1fbf04428950319ba->leave($__internal_9106a0fab9218329868e5baba9fec50e5dbf86657d0984d1fbf04428950319ba_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a546bd41312fb62c54e76e1093dfeeb14b26f1e73916439afc925c01fedd5b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a546bd41312fb62c54e76e1093dfeeb14b26f1e73916439afc925c01fedd5b3c->enter($__internal_a546bd41312fb62c54e76e1093dfeeb14b26f1e73916439afc925c01fedd5b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclRolesForm"]) || array_key_exists("aclRolesForm", $context) ? $context["aclRolesForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclRolesForm" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 22, $this->getSourceContext()); })()), "td_role", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_a546bd41312fb62c54e76e1093dfeeb14b26f1e73916439afc925c01fedd5b3c->leave($__internal_a546bd41312fb62c54e76e1093dfeeb14b26f1e73916439afc925c01fedd5b3c_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_313141fd8c289a15267bf3f8e7ff70abeff1ca339b29aac729095dce8cd38c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313141fd8c289a15267bf3f8e7ff70abeff1ca339b29aac729095dce8cd38c8f->enter($__internal_313141fd8c289a15267bf3f8e7ff70abeff1ca339b29aac729095dce8cd38c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclUsersForm"]) || array_key_exists("aclUsersForm", $context) ? $context["aclUsersForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclUsersForm" does not exist.', 25, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 25, $this->getSourceContext()); })()), "td_username", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_313141fd8c289a15267bf3f8e7ff70abeff1ca339b29aac729095dce8cd38c8f->leave($__internal_313141fd8c289a15267bf3f8e7ff70abeff1ca339b29aac729095dce8cd38c8f_prof);

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
