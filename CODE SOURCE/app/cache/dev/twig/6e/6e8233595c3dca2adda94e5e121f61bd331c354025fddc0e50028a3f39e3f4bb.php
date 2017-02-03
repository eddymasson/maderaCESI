<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_82bbdd9f67bc23b021343948361ad68d8035820f248a78b5da3adddd753c8ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1eaa60433bd5ada13fd8205451a93f83095e42d880f7129ba9cb9e6f79f735f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1eaa60433bd5ada13fd8205451a93f83095e42d880f7129ba9cb9e6f79f735f->enter($__internal_b1eaa60433bd5ada13fd8205451a93f83095e42d880f7129ba9cb9e6f79f735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1eaa60433bd5ada13fd8205451a93f83095e42d880f7129ba9cb9e6f79f735f->leave($__internal_b1eaa60433bd5ada13fd8205451a93f83095e42d880f7129ba9cb9e6f79f735f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3daf48b800dd160a7635e61a2a1df45ff5d0f881bcb9f457b097e3833765cc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3daf48b800dd160a7635e61a2a1df45ff5d0f881bcb9f457b097e3833765cc33->enter($__internal_3daf48b800dd160a7635e61a2a1df45ff5d0f881bcb9f457b097e3833765cc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_3daf48b800dd160a7635e61a2a1df45ff5d0f881bcb9f457b097e3833765cc33->leave($__internal_3daf48b800dd160a7635e61a2a1df45ff5d0f881bcb9f457b097e3833765cc33_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
