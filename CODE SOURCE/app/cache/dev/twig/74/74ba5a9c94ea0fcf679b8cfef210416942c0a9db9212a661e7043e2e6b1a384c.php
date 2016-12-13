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
        $__internal_49387647d1451bfb81b2a8a5c11cba3d5a313c987d403daf27d5861679f35c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49387647d1451bfb81b2a8a5c11cba3d5a313c987d403daf27d5861679f35c82->enter($__internal_49387647d1451bfb81b2a8a5c11cba3d5a313c987d403daf27d5861679f35c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49387647d1451bfb81b2a8a5c11cba3d5a313c987d403daf27d5861679f35c82->leave($__internal_49387647d1451bfb81b2a8a5c11cba3d5a313c987d403daf27d5861679f35c82_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5e217239285ee72d5ee569cd3d07baddca52fcf94028f38dfcefa91df327179f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e217239285ee72d5ee569cd3d07baddca52fcf94028f38dfcefa91df327179f->enter($__internal_5e217239285ee72d5ee569cd3d07baddca52fcf94028f38dfcefa91df327179f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_5e217239285ee72d5ee569cd3d07baddca52fcf94028f38dfcefa91df327179f->leave($__internal_5e217239285ee72d5ee569cd3d07baddca52fcf94028f38dfcefa91df327179f_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9f17ca8c33d122b9198fd87ceb2c1a27463d4c4fde060b7fc59e452d62eb914a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f17ca8c33d122b9198fd87ceb2c1a27463d4c4fde060b7fc59e452d62eb914a->enter($__internal_9f17ca8c33d122b9198fd87ceb2c1a27463d4c4fde060b7fc59e452d62eb914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_9f17ca8c33d122b9198fd87ceb2c1a27463d4c4fde060b7fc59e452d62eb914a->leave($__internal_9f17ca8c33d122b9198fd87ceb2c1a27463d4c4fde060b7fc59e452d62eb914a_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_6828fb70a07dd539646c503566e7fd810a6bafa0211ca829a70857c883f89bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6828fb70a07dd539646c503566e7fd810a6bafa0211ca829a70857c883f89bd3->enter($__internal_6828fb70a07dd539646c503566e7fd810a6bafa0211ca829a70857c883f89bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_6828fb70a07dd539646c503566e7fd810a6bafa0211ca829a70857c883f89bd3->leave($__internal_6828fb70a07dd539646c503566e7fd810a6bafa0211ca829a70857c883f89bd3_prof);

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
