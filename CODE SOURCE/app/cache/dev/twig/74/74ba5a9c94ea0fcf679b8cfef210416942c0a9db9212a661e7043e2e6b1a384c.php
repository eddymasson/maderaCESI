<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_f063c1f7620a6aa8002c722bb0471f42d1a670f9fa823751ebbcaa1181343ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49a44766a07f9805ab3902ad0fd934e09ba712b0520a7294681afeca8c97825d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a44766a07f9805ab3902ad0fd934e09ba712b0520a7294681afeca8c97825d->enter($__internal_49a44766a07f9805ab3902ad0fd934e09ba712b0520a7294681afeca8c97825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49a44766a07f9805ab3902ad0fd934e09ba712b0520a7294681afeca8c97825d->leave($__internal_49a44766a07f9805ab3902ad0fd934e09ba712b0520a7294681afeca8c97825d_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8cd6ecffc59f21fcd586b0b540919c728cc39cfbecd631100adb587b72dcd508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd6ecffc59f21fcd586b0b540919c728cc39cfbecd631100adb587b72dcd508->enter($__internal_8cd6ecffc59f21fcd586b0b540919c728cc39cfbecd631100adb587b72dcd508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_8cd6ecffc59f21fcd586b0b540919c728cc39cfbecd631100adb587b72dcd508->leave($__internal_8cd6ecffc59f21fcd586b0b540919c728cc39cfbecd631100adb587b72dcd508_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_5f0055be95a3883c9eead9960338b7f7ef076bb357f44007c52ce91d58ef4bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0055be95a3883c9eead9960338b7f7ef076bb357f44007c52ce91d58ef4bba->enter($__internal_5f0055be95a3883c9eead9960338b7f7ef076bb357f44007c52ce91d58ef4bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_5f0055be95a3883c9eead9960338b7f7ef076bb357f44007c52ce91d58ef4bba->leave($__internal_5f0055be95a3883c9eead9960338b7f7ef076bb357f44007c52ce91d58ef4bba_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c22d327d0bf2e9367246fcb04f5d5045477e26d161544d860f7e3323f647598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c22d327d0bf2e9367246fcb04f5d5045477e26d161544d860f7e3323f647598->enter($__internal_2c22d327d0bf2e9367246fcb04f5d5045477e26d161544d860f7e3323f647598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_2c22d327d0bf2e9367246fcb04f5d5045477e26d161544d860f7e3323f647598->leave($__internal_2c22d327d0bf2e9367246fcb04f5d5045477e26d161544d860f7e3323f647598_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
