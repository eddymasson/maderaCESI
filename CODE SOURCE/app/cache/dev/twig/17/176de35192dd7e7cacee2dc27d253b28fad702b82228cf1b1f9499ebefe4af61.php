<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_0ac4e8169800610feb12da24a3b05447696685a400e290e33b5fe2e58fd447f3 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_663f74e42db61c732657b3239159bddb91142e2bfae12e504874c5be702210f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663f74e42db61c732657b3239159bddb91142e2bfae12e504874c5be702210f3->enter($__internal_663f74e42db61c732657b3239159bddb91142e2bfae12e504874c5be702210f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_663f74e42db61c732657b3239159bddb91142e2bfae12e504874c5be702210f3->leave($__internal_663f74e42db61c732657b3239159bddb91142e2bfae12e504874c5be702210f3_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e90b12063e6b6b82bbcb4ab995f580d2e86edfafd4ce61f00ff67ed242102d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e90b12063e6b6b82bbcb4ab995f580d2e86edfafd4ce61f00ff67ed242102d3->enter($__internal_1e90b12063e6b6b82bbcb4ab995f580d2e86edfafd4ce61f00ff67ed242102d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_1e90b12063e6b6b82bbcb4ab995f580d2e86edfafd4ce61f00ff67ed242102d3->leave($__internal_1e90b12063e6b6b82bbcb4ab995f580d2e86edfafd4ce61f00ff67ed242102d3_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_04a3aa87c55e8d3cebe18ea92c0216c4f3771d99f26a62efc72299e91f3eb36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a3aa87c55e8d3cebe18ea92c0216c4f3771d99f26a62efc72299e91f3eb36b->enter($__internal_04a3aa87c55e8d3cebe18ea92c0216c4f3771d99f26a62efc72299e91f3eb36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_04a3aa87c55e8d3cebe18ea92c0216c4f3771d99f26a62efc72299e91f3eb36b->leave($__internal_04a3aa87c55e8d3cebe18ea92c0216c4f3771d99f26a62efc72299e91f3eb36b_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1bf7b830f06b986706e6cacaa30a72a3e28fd80359f9b780e5922c670a00ffe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf7b830f06b986706e6cacaa30a72a3e28fd80359f9b780e5922c670a00ffe4->enter($__internal_1bf7b830f06b986706e6cacaa30a72a3e28fd80359f9b780e5922c670a00ffe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_1bf7b830f06b986706e6cacaa30a72a3e28fd80359f9b780e5922c670a00ffe4->leave($__internal_1bf7b830f06b986706e6cacaa30a72a3e28fd80359f9b780e5922c670a00ffe4_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_afd7d821ebd974884806f3f5f79515015509dced8e36c04322e1e4f930d0fb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd7d821ebd974884806f3f5f79515015509dced8e36c04322e1e4f930d0fb6c->enter($__internal_afd7d821ebd974884806f3f5f79515015509dced8e36c04322e1e4f930d0fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_afd7d821ebd974884806f3f5f79515015509dced8e36c04322e1e4f930d0fb6c->leave($__internal_afd7d821ebd974884806f3f5f79515015509dced8e36c04322e1e4f930d0fb6c_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_2f943f3d4669a70771c45da3e5022599d12a80f7cf7bd02482d733162564e8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f943f3d4669a70771c45da3e5022599d12a80f7cf7bd02482d733162564e8a3->enter($__internal_2f943f3d4669a70771c45da3e5022599d12a80f7cf7bd02482d733162564e8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_2f943f3d4669a70771c45da3e5022599d12a80f7cf7bd02482d733162564e8a3->leave($__internal_2f943f3d4669a70771c45da3e5022599d12a80f7cf7bd02482d733162564e8a3_prof);

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
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
