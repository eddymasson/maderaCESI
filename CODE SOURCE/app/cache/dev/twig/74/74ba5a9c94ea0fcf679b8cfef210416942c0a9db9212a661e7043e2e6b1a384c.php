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
        $__internal_965c6558cfd79dbc39a132c9e90d9ad3a0e34aaafa797f82c068bfc8ca82c01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965c6558cfd79dbc39a132c9e90d9ad3a0e34aaafa797f82c068bfc8ca82c01f->enter($__internal_965c6558cfd79dbc39a132c9e90d9ad3a0e34aaafa797f82c068bfc8ca82c01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965c6558cfd79dbc39a132c9e90d9ad3a0e34aaafa797f82c068bfc8ca82c01f->leave($__internal_965c6558cfd79dbc39a132c9e90d9ad3a0e34aaafa797f82c068bfc8ca82c01f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_54297346b6ad864faa9f3c9b6711bfdf7d75eb7d727cdc117caf9e217e831386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54297346b6ad864faa9f3c9b6711bfdf7d75eb7d727cdc117caf9e217e831386->enter($__internal_54297346b6ad864faa9f3c9b6711bfdf7d75eb7d727cdc117caf9e217e831386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_54297346b6ad864faa9f3c9b6711bfdf7d75eb7d727cdc117caf9e217e831386->leave($__internal_54297346b6ad864faa9f3c9b6711bfdf7d75eb7d727cdc117caf9e217e831386_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b2593cce5aa621c5c45a2deb2418b5733d95f454913c2aedac749006f4a90e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2593cce5aa621c5c45a2deb2418b5733d95f454913c2aedac749006f4a90e91->enter($__internal_b2593cce5aa621c5c45a2deb2418b5733d95f454913c2aedac749006f4a90e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_b2593cce5aa621c5c45a2deb2418b5733d95f454913c2aedac749006f4a90e91->leave($__internal_b2593cce5aa621c5c45a2deb2418b5733d95f454913c2aedac749006f4a90e91_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9ee3acf300aae14bc8c1c18f7b025a2b3b36553223730df204dbc70830fc583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ee3acf300aae14bc8c1c18f7b025a2b3b36553223730df204dbc70830fc583->enter($__internal_a9ee3acf300aae14bc8c1c18f7b025a2b3b36553223730df204dbc70830fc583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_a9ee3acf300aae14bc8c1c18f7b025a2b3b36553223730df204dbc70830fc583->leave($__internal_a9ee3acf300aae14bc8c1c18f7b025a2b3b36553223730df204dbc70830fc583_prof);

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
