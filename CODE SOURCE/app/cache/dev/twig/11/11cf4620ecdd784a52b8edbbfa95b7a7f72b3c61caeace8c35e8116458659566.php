<?php

/* SonataUserBundle:Admin/Field:impersonating.html.twig */
class __TwigTemplate_243fcca8b8281e0b60b6834087b310066005f5890c0032c58a566b134ae1a8fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataUserBundle:Admin/Field:impersonating.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a27a8da0cad108a83f5c0068e1ca6548a80067a3faaeb9822f668c245963b4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27a8da0cad108a83f5c0068e1ca6548a80067a3faaeb9822f668c245963b4d2->enter($__internal_a27a8da0cad108a83f5c0068e1ca6548a80067a3faaeb9822f668c245963b4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Field:impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27a8da0cad108a83f5c0068e1ca6548a80067a3faaeb9822f668c245963b4d2->leave($__internal_a27a8da0cad108a83f5c0068e1ca6548a80067a3faaeb9822f668c245963b4d2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_34c2a2e4fee5f160faf9847fc746699eba4699e9ced1c562fb3fc22c28bf67f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c2a2e4fee5f160faf9847fc746699eba4699e9ced1c562fb3fc22c28bf67f8->enter($__internal_34c2a2e4fee5f160faf9847fc746699eba4699e9ced1c562fb3fc22c28bf67f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "user", array()) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })()), "username", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "user", array()), "username", array()))) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 15, $this->getSourceContext()); })()), "impersonating", array()))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 16, $this->getSourceContext()); })()), "impersonating", array()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 16, $this->getSourceContext()); })()), "impersonating", array()), "parameters", array()), array("_switch_user" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })()), "username", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
    ";
        } else {
            // line 20
            echo "        -
    ";
        }
        
        $__internal_34c2a2e4fee5f160faf9847fc746699eba4699e9ced1c562fb3fc22c28bf67f8->leave($__internal_34c2a2e4fee5f160faf9847fc746699eba4699e9ced1c562fb3fc22c28bf67f8_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Field:impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if app.user and object.username != app.user.username and sonata_user.impersonating %}
        <a href=\"{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters | merge({'_switch_user': object.username})) }}\" title=\"{{ 'switch_user'|trans({}, 'SonataUserBundle')}}\">
            <i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
    {% else %}
        -
    {% endif %}
{% endblock %}
", "SonataUserBundle:Admin/Field:impersonating.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Admin/Field/impersonating.html.twig");
    }
}
