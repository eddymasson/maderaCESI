<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_3b0230962959cfdb58add9bae7cd460e5b98dc57be66ddc7dfb76dec4416dd71 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e5c9f825d7a7097f1df49dab28b6e72de456e38a96973705310f8273e6e41ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5c9f825d7a7097f1df49dab28b6e72de456e38a96973705310f8273e6e41ca->enter($__internal_0e5c9f825d7a7097f1df49dab28b6e72de456e38a96973705310f8273e6e41ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5c9f825d7a7097f1df49dab28b6e72de456e38a96973705310f8273e6e41ca->leave($__internal_0e5c9f825d7a7097f1df49dab28b6e72de456e38a96973705310f8273e6e41ca_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_89903f39e034ef7a19b77ec26e92a1bb6deba893bd2416ea870ca818632b16fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89903f39e034ef7a19b77ec26e92a1bb6deba893bd2416ea870ca818632b16fb->enter($__internal_89903f39e034ef7a19b77ec26e92a1bb6deba893bd2416ea870ca818632b16fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_89903f39e034ef7a19b77ec26e92a1bb6deba893bd2416ea870ca818632b16fb->leave($__internal_89903f39e034ef7a19b77ec26e92a1bb6deba893bd2416ea870ca818632b16fb_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_099e429b498fd9f7055c906270cacc700e75fe4663a98d39799e4a24e778adb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099e429b498fd9f7055c906270cacc700e75fe4663a98d39799e4a24e778adb9->enter($__internal_099e429b498fd9f7055c906270cacc700e75fe4663a98d39799e4a24e778adb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 20, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_099e429b498fd9f7055c906270cacc700e75fe4663a98d39799e4a24e778adb9->leave($__internal_099e429b498fd9f7055c906270cacc700e75fe4663a98d39799e4a24e778adb9_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_41cc5c2f0e25bcd03b0a22436a41ddc3a3d290d90efb0f47a6871d62a9bddbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cc5c2f0e25bcd03b0a22436a41ddc3a3d290d90efb0f47a6871d62a9bddbf6->enter($__internal_41cc5c2f0e25bcd03b0a22436a41ddc3a3d290d90efb0f47a6871d62a9bddbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_41cc5c2f0e25bcd03b0a22436a41ddc3a3d290d90efb0f47a6871d62a9bddbf6->leave($__internal_41cc5c2f0e25bcd03b0a22436a41ddc3a3d290d90efb0f47a6871d62a9bddbf6_prof);

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
