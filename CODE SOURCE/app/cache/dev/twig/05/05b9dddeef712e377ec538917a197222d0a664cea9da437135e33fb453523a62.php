<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_6a1b24345c2cd2577ee5c2b7adee66a05e755fd3cbb17089a22a9d595e67090a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3a83bf0eef60437173d607ca4618e6ec5401f86177c4fbdcbf820cec8e59822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a83bf0eef60437173d607ca4618e6ec5401f86177c4fbdcbf820cec8e59822->enter($__internal_c3a83bf0eef60437173d607ca4618e6ec5401f86177c4fbdcbf820cec8e59822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a83bf0eef60437173d607ca4618e6ec5401f86177c4fbdcbf820cec8e59822->leave($__internal_c3a83bf0eef60437173d607ca4618e6ec5401f86177c4fbdcbf820cec8e59822_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_19d3aadd55bcd906790d3d834b125ece327ce38ebf6c5810844a5d4e21bcfdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d3aadd55bcd906790d3d834b125ece327ce38ebf6c5810844a5d4e21bcfdd2->enter($__internal_19d3aadd55bcd906790d3d834b125ece327ce38ebf6c5810844a5d4e21bcfdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_19d3aadd55bcd906790d3d834b125ece327ce38ebf6c5810844a5d4e21bcfdd2->leave($__internal_19d3aadd55bcd906790d3d834b125ece327ce38ebf6c5810844a5d4e21bcfdd2_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_ddab8710c2813b2cbbf1c6856bfcb7b7d9181042025aed8ddbf2c33340ff0e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddab8710c2813b2cbbf1c6856bfcb7b7d9181042025aed8ddbf2c33340ff0e68->enter($__internal_ddab8710c2813b2cbbf1c6856bfcb7b7d9181042025aed8ddbf2c33340ff0e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_ddab8710c2813b2cbbf1c6856bfcb7b7d9181042025aed8ddbf2c33340ff0e68->leave($__internal_ddab8710c2813b2cbbf1c6856bfcb7b7d9181042025aed8ddbf2c33340ff0e68_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_832c67ed8508d6f73eee6aac478f89763030509644e88748695a5b09a1ee05c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832c67ed8508d6f73eee6aac478f89763030509644e88748695a5b09a1ee05c1->enter($__internal_832c67ed8508d6f73eee6aac478f89763030509644e88748695a5b09a1ee05c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_832c67ed8508d6f73eee6aac478f89763030509644e88748695a5b09a1ee05c1->leave($__internal_832c67ed8508d6f73eee6aac478f89763030509644e88748695a5b09a1ee05c1_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_acf7c102ef92d0e1d57f1fa4d9fbe3e5cfaf6492d294fa194151b45c460aa8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf7c102ef92d0e1d57f1fa4d9fbe3e5cfaf6492d294fa194151b45c460aa8cc->enter($__internal_acf7c102ef92d0e1d57f1fa4d9fbe3e5cfaf6492d294fa194151b45c460aa8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_acf7c102ef92d0e1d57f1fa4d9fbe3e5cfaf6492d294fa194151b45c460aa8cc->leave($__internal_acf7c102ef92d0e1d57f1fa4d9fbe3e5cfaf6492d294fa194151b45c460aa8cc_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_2742636cd25112da824c9a8faed277617a7ee34c6877e0419f5ac0f175c09386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2742636cd25112da824c9a8faed277617a7ee34c6877e0419f5ac0f175c09386->enter($__internal_2742636cd25112da824c9a8faed277617a7ee34c6877e0419f5ac0f175c09386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_2742636cd25112da824c9a8faed277617a7ee34c6877e0419f5ac0f175c09386->leave($__internal_2742636cd25112da824c9a8faed277617a7ee34c6877e0419f5ac0f175c09386_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
