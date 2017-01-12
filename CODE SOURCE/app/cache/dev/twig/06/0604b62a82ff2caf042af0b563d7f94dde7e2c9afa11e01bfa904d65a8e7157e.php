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
        $__internal_a276806ebccb21916a999c403aa977ebac8cda862ad14bcabe925e5858de8b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a276806ebccb21916a999c403aa977ebac8cda862ad14bcabe925e5858de8b75->enter($__internal_a276806ebccb21916a999c403aa977ebac8cda862ad14bcabe925e5858de8b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a276806ebccb21916a999c403aa977ebac8cda862ad14bcabe925e5858de8b75->leave($__internal_a276806ebccb21916a999c403aa977ebac8cda862ad14bcabe925e5858de8b75_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_aa38155690b07977e64ca5bcfc2d0175150035a64d12ae498e08f7ea7637a043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa38155690b07977e64ca5bcfc2d0175150035a64d12ae498e08f7ea7637a043->enter($__internal_aa38155690b07977e64ca5bcfc2d0175150035a64d12ae498e08f7ea7637a043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_aa38155690b07977e64ca5bcfc2d0175150035a64d12ae498e08f7ea7637a043->leave($__internal_aa38155690b07977e64ca5bcfc2d0175150035a64d12ae498e08f7ea7637a043_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_67d0c560b8289f2289f423a944e514f2677c929971bb3f47f24a3ef9be9a42f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d0c560b8289f2289f423a944e514f2677c929971bb3f47f24a3ef9be9a42f3->enter($__internal_67d0c560b8289f2289f423a944e514f2677c929971bb3f47f24a3ef9be9a42f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_67d0c560b8289f2289f423a944e514f2677c929971bb3f47f24a3ef9be9a42f3->leave($__internal_67d0c560b8289f2289f423a944e514f2677c929971bb3f47f24a3ef9be9a42f3_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_ff6a64e08a3dae05308a2ced4ade9bdd896b7ca7d2204fe30d3f2e9036add8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6a64e08a3dae05308a2ced4ade9bdd896b7ca7d2204fe30d3f2e9036add8a0->enter($__internal_ff6a64e08a3dae05308a2ced4ade9bdd896b7ca7d2204fe30d3f2e9036add8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_ff6a64e08a3dae05308a2ced4ade9bdd896b7ca7d2204fe30d3f2e9036add8a0->leave($__internal_ff6a64e08a3dae05308a2ced4ade9bdd896b7ca7d2204fe30d3f2e9036add8a0_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_e7503947c5a3d990a873e0842643364542a1e28849cbad99b33edf5a10ee8eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7503947c5a3d990a873e0842643364542a1e28849cbad99b33edf5a10ee8eb2->enter($__internal_e7503947c5a3d990a873e0842643364542a1e28849cbad99b33edf5a10ee8eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e7503947c5a3d990a873e0842643364542a1e28849cbad99b33edf5a10ee8eb2->leave($__internal_e7503947c5a3d990a873e0842643364542a1e28849cbad99b33edf5a10ee8eb2_prof);

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
