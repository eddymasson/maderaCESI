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
        $__internal_d166f36631765e529b060b1646a0c058a6c7f17ac0bb604339b75323165bfde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d166f36631765e529b060b1646a0c058a6c7f17ac0bb604339b75323165bfde7->enter($__internal_d166f36631765e529b060b1646a0c058a6c7f17ac0bb604339b75323165bfde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d166f36631765e529b060b1646a0c058a6c7f17ac0bb604339b75323165bfde7->leave($__internal_d166f36631765e529b060b1646a0c058a6c7f17ac0bb604339b75323165bfde7_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf0e235f3bdafbd0e809218c7b6082563baa25cbfa54d2041182d42a0cb29851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0e235f3bdafbd0e809218c7b6082563baa25cbfa54d2041182d42a0cb29851->enter($__internal_cf0e235f3bdafbd0e809218c7b6082563baa25cbfa54d2041182d42a0cb29851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_cf0e235f3bdafbd0e809218c7b6082563baa25cbfa54d2041182d42a0cb29851->leave($__internal_cf0e235f3bdafbd0e809218c7b6082563baa25cbfa54d2041182d42a0cb29851_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_6c8cc9cd3e5bb4212904c83386bc65d8588e7a0eb4d455ae10aae43ef3f5881a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8cc9cd3e5bb4212904c83386bc65d8588e7a0eb4d455ae10aae43ef3f5881a->enter($__internal_6c8cc9cd3e5bb4212904c83386bc65d8588e7a0eb4d455ae10aae43ef3f5881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6c8cc9cd3e5bb4212904c83386bc65d8588e7a0eb4d455ae10aae43ef3f5881a->leave($__internal_6c8cc9cd3e5bb4212904c83386bc65d8588e7a0eb4d455ae10aae43ef3f5881a_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8244c6ef53d74666393c656cd774aef15bdff265f034a03cc56455c206fefb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8244c6ef53d74666393c656cd774aef15bdff265f034a03cc56455c206fefb2b->enter($__internal_8244c6ef53d74666393c656cd774aef15bdff265f034a03cc56455c206fefb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_8244c6ef53d74666393c656cd774aef15bdff265f034a03cc56455c206fefb2b->leave($__internal_8244c6ef53d74666393c656cd774aef15bdff265f034a03cc56455c206fefb2b_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_20813042fecb797ab010adef9cb53681f44cfe55a2d974a70fbd2680e2fcd734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20813042fecb797ab010adef9cb53681f44cfe55a2d974a70fbd2680e2fcd734->enter($__internal_20813042fecb797ab010adef9cb53681f44cfe55a2d974a70fbd2680e2fcd734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_20813042fecb797ab010adef9cb53681f44cfe55a2d974a70fbd2680e2fcd734->leave($__internal_20813042fecb797ab010adef9cb53681f44cfe55a2d974a70fbd2680e2fcd734_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_2a12fc816bae3684e2c371d82458a3ea71e9bc06269a76433dab190cf29edb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a12fc816bae3684e2c371d82458a3ea71e9bc06269a76433dab190cf29edb21->enter($__internal_2a12fc816bae3684e2c371d82458a3ea71e9bc06269a76433dab190cf29edb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_2a12fc816bae3684e2c371d82458a3ea71e9bc06269a76433dab190cf29edb21->leave($__internal_2a12fc816bae3684e2c371d82458a3ea71e9bc06269a76433dab190cf29edb21_prof);

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
