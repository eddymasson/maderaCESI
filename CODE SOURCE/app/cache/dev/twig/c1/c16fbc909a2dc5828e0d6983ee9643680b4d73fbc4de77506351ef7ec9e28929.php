<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_6dff2e2fd5f9a40506cfb9f3552a3f34cffb0b7897114fb23e62b77a5d6a0252 extends Twig_Template
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
        $__internal_b5947079a741eb13f6123e956d57d08f829ef232a97634286b33da5b75abdb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5947079a741eb13f6123e956d57d08f829ef232a97634286b33da5b75abdb75->enter($__internal_b5947079a741eb13f6123e956d57d08f829ef232a97634286b33da5b75abdb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5947079a741eb13f6123e956d57d08f829ef232a97634286b33da5b75abdb75->leave($__internal_b5947079a741eb13f6123e956d57d08f829ef232a97634286b33da5b75abdb75_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_362128d0a44935d2a739b1e12e0e1e181b07e192b46fc773173006fcafb6b5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362128d0a44935d2a739b1e12e0e1e181b07e192b46fc773173006fcafb6b5e9->enter($__internal_362128d0a44935d2a739b1e12e0e1e181b07e192b46fc773173006fcafb6b5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_362128d0a44935d2a739b1e12e0e1e181b07e192b46fc773173006fcafb6b5e9->leave($__internal_362128d0a44935d2a739b1e12e0e1e181b07e192b46fc773173006fcafb6b5e9_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_febf853e892baf7268ba14306dbe2c34ff2a4be64e995f07d19b3feeb4764580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febf853e892baf7268ba14306dbe2c34ff2a4be64e995f07d19b3feeb4764580->enter($__internal_febf853e892baf7268ba14306dbe2c34ff2a4be64e995f07d19b3feeb4764580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_febf853e892baf7268ba14306dbe2c34ff2a4be64e995f07d19b3feeb4764580->leave($__internal_febf853e892baf7268ba14306dbe2c34ff2a4be64e995f07d19b3feeb4764580_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_a803a898be63d507c8bcd63dcc0cd8c33d185a3e5b2825627d77a0d4ae7aa98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a803a898be63d507c8bcd63dcc0cd8c33d185a3e5b2825627d77a0d4ae7aa98d->enter($__internal_a803a898be63d507c8bcd63dcc0cd8c33d185a3e5b2825627d77a0d4ae7aa98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

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
        
        $__internal_a803a898be63d507c8bcd63dcc0cd8c33d185a3e5b2825627d77a0d4ae7aa98d->leave($__internal_a803a898be63d507c8bcd63dcc0cd8c33d185a3e5b2825627d77a0d4ae7aa98d_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_cc8b6647d63210deaa5d1e80c41c4f60272de1ef93d0c5632947eafa3e5901e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8b6647d63210deaa5d1e80c41c4f60272de1ef93d0c5632947eafa3e5901e7->enter($__internal_cc8b6647d63210deaa5d1e80c41c4f60272de1ef93d0c5632947eafa3e5901e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 33, $this->getSourceContext()); })()), "showgroups", array()));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 46, $this->getSourceContext()); })()), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 46, $this->getSourceContext()); })()));
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
        
        $__internal_cc8b6647d63210deaa5d1e80c41c4f60272de1ef93d0c5632947eafa3e5901e7->leave($__internal_cc8b6647d63210deaa5d1e80c41c4f60272de1ef93d0c5632947eafa3e5901e7_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_b5f2d8488dcdd247ab87b899ccae192ca8523124ef4f298ef58b263263894394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f2d8488dcdd247ab87b899ccae192ca8523124ef4f298ef58b263263894394->enter($__internal_b5f2d8488dcdd247ab87b899ccae192ca8523124ef4f298ef58b263263894394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_b5f2d8488dcdd247ab87b899ccae192ca8523124ef4f298ef58b263263894394->leave($__internal_b5f2d8488dcdd247ab87b899ccae192ca8523124ef4f298ef58b263263894394_prof);

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
