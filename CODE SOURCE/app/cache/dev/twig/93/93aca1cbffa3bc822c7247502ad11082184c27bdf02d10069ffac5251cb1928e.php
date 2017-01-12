<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_938e0108957d2b43a2bf43d8d2c41fe9b1d25b2d6b49f91969dec1876a6d3427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71d78282fb962b8243b2bec6b732bbdaa048e2e6b515b79b53e1f3a8f1456a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d78282fb962b8243b2bec6b732bbdaa048e2e6b515b79b53e1f3a8f1456a65->enter($__internal_71d78282fb962b8243b2bec6b732bbdaa048e2e6b515b79b53e1f3a8f1456a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d78282fb962b8243b2bec6b732bbdaa048e2e6b515b79b53e1f3a8f1456a65->leave($__internal_71d78282fb962b8243b2bec6b732bbdaa048e2e6b515b79b53e1f3a8f1456a65_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_27f784437cfe152dead91e26c7d7b57d70ebc0b96dea76fb6f89226eba06f05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f784437cfe152dead91e26c7d7b57d70ebc0b96dea76fb6f89226eba06f05d->enter($__internal_27f784437cfe152dead91e26c7d7b57d70ebc0b96dea76fb6f89226eba06f05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute(($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute(($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute(($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? $this->getContext($context, "value"))), ($context["length"] ?? $this->getContext($context, "length")), ($context["preserve"] ?? $this->getContext($context, "preserve")), ($context["separator"] ?? $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? $this->getContext($context, "value")));
                }
                // line 17
                echo ($context["value"] ?? $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_27f784437cfe152dead91e26c7d7b57d70ebc0b96dea76fb6f89226eba06f05d->leave($__internal_27f784437cfe152dead91e26c7d7b57d70ebc0b96dea76fb6f89226eba06f05d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  68 => 17,  65 => 15,  63 => 14,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}
