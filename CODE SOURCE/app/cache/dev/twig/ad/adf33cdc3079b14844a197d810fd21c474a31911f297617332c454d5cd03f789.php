<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_cd80e339ac6068fe021db65fbea248d7e2e497dc10147e0bf086ab48ca1ed0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cbf9b1ef4f26ac072719b3215c7b48e465912e825834e60cb51fdde5ca24571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbf9b1ef4f26ac072719b3215c7b48e465912e825834e60cb51fdde5ca24571->enter($__internal_0cbf9b1ef4f26ac072719b3215c7b48e465912e825834e60cb51fdde5ca24571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbf9b1ef4f26ac072719b3215c7b48e465912e825834e60cb51fdde5ca24571->leave($__internal_0cbf9b1ef4f26ac072719b3215c7b48e465912e825834e60cb51fdde5ca24571_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d796e6a164cabb255df88da74a3645daca59daa9e3b8fe01ac453c1c833c4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d796e6a164cabb255df88da74a3645daca59daa9e3b8fe01ac453c1c833c4b1->enter($__internal_8d796e6a164cabb255df88da74a3645daca59daa9e3b8fe01ac453c1c833c4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_8d796e6a164cabb255df88da74a3645daca59daa9e3b8fe01ac453c1c833c4b1->leave($__internal_8d796e6a164cabb255df88da74a3645daca59daa9e3b8fe01ac453c1c833c4b1_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_c804b9934a3444e5418321d8fb8f3dde11c6b7758cf88ae7b2ff4f406a363c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c804b9934a3444e5418321d8fb8f3dde11c6b7758cf88ae7b2ff4f406a363c2e->enter($__internal_c804b9934a3444e5418321d8fb8f3dde11c6b7758cf88ae7b2ff4f406a363c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c804b9934a3444e5418321d8fb8f3dde11c6b7758cf88ae7b2ff4f406a363c2e->leave($__internal_c804b9934a3444e5418321d8fb8f3dde11c6b7758cf88ae7b2ff4f406a363c2e_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_44a5346ed7c7a321f0b56170ed24d8f7801b0d104df2e70031264a81fc53fcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a5346ed7c7a321f0b56170ed24d8f7801b0d104df2e70031264a81fc53fcc9->enter($__internal_44a5346ed7c7a321f0b56170ed24d8f7801b0d104df2e70031264a81fc53fcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_44a5346ed7c7a321f0b56170ed24d8f7801b0d104df2e70031264a81fc53fcc9->leave($__internal_44a5346ed7c7a321f0b56170ed24d8f7801b0d104df2e70031264a81fc53fcc9_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9c01d087db8ff779a4a578dbe5ff0b79c627abf760b240b7edf0a6a2b5b6b47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c01d087db8ff779a4a578dbe5ff0b79c627abf760b240b7edf0a6a2b5b6b47c->enter($__internal_9c01d087db8ff779a4a578dbe5ff0b79c627abf760b240b7edf0a6a2b5b6b47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 30, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 30, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_9c01d087db8ff779a4a578dbe5ff0b79c627abf760b240b7edf0a6a2b5b6b47c->leave($__internal_9c01d087db8ff779a4a578dbe5ff0b79c627abf760b240b7edf0a6a2b5b6b47c_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_8fe44f14cbd81ec5063eda87477c9c5e5d87a1d210774ae7740aa1d7d4093c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe44f14cbd81ec5063eda87477c9c5e5d87a1d210774ae7740aa1d7d4093c3f->enter($__internal_8fe44f14cbd81ec5063eda87477c9c5e5d87a1d210774ae7740aa1d7d4093c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_8fe44f14cbd81ec5063eda87477c9c5e5d87a1d210774ae7740aa1d7d4093c3f->leave($__internal_8fe44f14cbd81ec5063eda87477c9c5e5d87a1d210774ae7740aa1d7d4093c3f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
