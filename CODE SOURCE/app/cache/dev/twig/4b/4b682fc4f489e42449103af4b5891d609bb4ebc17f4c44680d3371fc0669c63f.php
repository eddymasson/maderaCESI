<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_dee16dcec851d724cfe682bc490f3e2922c365ad0e34cf6c3785ebe7e9cf8a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", 12);
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
        $__internal_3523080c2b5ce67978e5a1222dbc731944a9b3d61f671f373b72aeb2c3ce341e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3523080c2b5ce67978e5a1222dbc731944a9b3d61f671f373b72aeb2c3ce341e->enter($__internal_3523080c2b5ce67978e5a1222dbc731944a9b3d61f671f373b72aeb2c3ce341e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3523080c2b5ce67978e5a1222dbc731944a9b3d61f671f373b72aeb2c3ce341e->leave($__internal_3523080c2b5ce67978e5a1222dbc731944a9b3d61f671f373b72aeb2c3ce341e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_02c893ca14ef6f270064f6ff5f42d2db83ae1fa8642ca932b902f37f5cb4281a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c893ca14ef6f270064f6ff5f42d2db83ae1fa8642ca932b902f37f5cb4281a->enter($__internal_02c893ca14ef6f270064f6ff5f42d2db83ae1fa8642ca932b902f37f5cb4281a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array());
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <li>
                ";
            // line 19
            if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "hasassociationadmin", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 19, $this->getSourceContext()); })())), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 19, $this->getSourceContext()); })()), 1 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->getSourceContext()); })())), "method"))) {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 20, $this->getSourceContext()); })()), 1 => $context["element"], 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 21, $this->getSourceContext()); })())), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 24
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 24, $this->getSourceContext()); })())), "html", null, true);
                echo "
                ";
            }
            // line 26
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>
";
        
        $__internal_02c893ca14ef6f270064f6ff5f42d2db83ae1fa8642ca932b902f37f5cb4281a->leave($__internal_02c893ca14ef6f270064f6ff5f42d2db83ae1fa8642ca932b902f37f5cb4281a_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  72 => 26,  66 => 24,  60 => 21,  55 => 20,  53 => 19,  50 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    <ul class=\"sonata-ba-show-many-to-many\">
    {% set route_name = field_description.options.route.name %}
        {% for element in value %}
            <li>
                {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.hasAccess(route_name, value)%}
                    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                        {{ element|render_relation_element(field_description) }}
                    </a>
                {% else %}
                    {{ element|render_relation_element(field_description) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_many.html.twig");
    }
}
