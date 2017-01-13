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
        $__internal_f5ea213c8d4bbe7e45f776a255c987d0f5fa3469a04a53e97a35b6525ab32cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ea213c8d4bbe7e45f776a255c987d0f5fa3469a04a53e97a35b6525ab32cd3->enter($__internal_f5ea213c8d4bbe7e45f776a255c987d0f5fa3469a04a53e97a35b6525ab32cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ea213c8d4bbe7e45f776a255c987d0f5fa3469a04a53e97a35b6525ab32cd3->leave($__internal_f5ea213c8d4bbe7e45f776a255c987d0f5fa3469a04a53e97a35b6525ab32cd3_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a79b18126641be5ebecb01c371fa2048b9df84d38ac01fc594d1d5d266ccfc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79b18126641be5ebecb01c371fa2048b9df84d38ac01fc594d1d5d266ccfc9d->enter($__internal_a79b18126641be5ebecb01c371fa2048b9df84d38ac01fc594d1d5d266ccfc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_a79b18126641be5ebecb01c371fa2048b9df84d38ac01fc594d1d5d266ccfc9d->leave($__internal_a79b18126641be5ebecb01c371fa2048b9df84d38ac01fc594d1d5d266ccfc9d_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_0fec63f188d3380f71494f74dadd6ba775a5991490cb1fdd5d8189ad21917d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fec63f188d3380f71494f74dadd6ba775a5991490cb1fdd5d8189ad21917d29->enter($__internal_0fec63f188d3380f71494f74dadd6ba775a5991490cb1fdd5d8189ad21917d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_0fec63f188d3380f71494f74dadd6ba775a5991490cb1fdd5d8189ad21917d29->leave($__internal_0fec63f188d3380f71494f74dadd6ba775a5991490cb1fdd5d8189ad21917d29_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_e32969a94ddd3deb1240d6af3ba393ddc89ac1121e2dad62d8df0559b7e9fbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32969a94ddd3deb1240d6af3ba393ddc89ac1121e2dad62d8df0559b7e9fbde->enter($__internal_e32969a94ddd3deb1240d6af3ba393ddc89ac1121e2dad62d8df0559b7e9fbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

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
        
        $__internal_e32969a94ddd3deb1240d6af3ba393ddc89ac1121e2dad62d8df0559b7e9fbde->leave($__internal_e32969a94ddd3deb1240d6af3ba393ddc89ac1121e2dad62d8df0559b7e9fbde_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_44a32c51f36538fe6450e2172b8fcd115d64b2e380e77276ddb29cdef9452b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a32c51f36538fe6450e2172b8fcd115d64b2e380e77276ddb29cdef9452b37->enter($__internal_44a32c51f36538fe6450e2172b8fcd115d64b2e380e77276ddb29cdef9452b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

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
        
        $__internal_44a32c51f36538fe6450e2172b8fcd115d64b2e380e77276ddb29cdef9452b37->leave($__internal_44a32c51f36538fe6450e2172b8fcd115d64b2e380e77276ddb29cdef9452b37_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_1d7f9de5e90acda916f3b9580961a6a879c010b6e9e8fa21f8000b7883850524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7f9de5e90acda916f3b9580961a6a879c010b6e9e8fa21f8000b7883850524->enter($__internal_1d7f9de5e90acda916f3b9580961a6a879c010b6e9e8fa21f8000b7883850524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_1d7f9de5e90acda916f3b9580961a6a879c010b6e9e8fa21f8000b7883850524->leave($__internal_1d7f9de5e90acda916f3b9580961a6a879c010b6e9e8fa21f8000b7883850524_prof);

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
