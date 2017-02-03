<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_55ebce99ad1b14b2d782d66232b6cdfa96f70a2434a8db8912bb241af2d26d37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba782f1a636a77a5f65dd23098fe5d1c7d710881f303a0f075b3eee4fbc9b7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba782f1a636a77a5f65dd23098fe5d1c7d710881f303a0f075b3eee4fbc9b7a6->enter($__internal_ba782f1a636a77a5f65dd23098fe5d1c7d710881f303a0f075b3eee4fbc9b7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 23, $this->getSourceContext()); })()), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_ba782f1a636a77a5f65dd23098fe5d1c7d710881f303a0f075b3eee4fbc9b7a6->leave($__internal_ba782f1a636a77a5f65dd23098fe5d1c7d710881f303a0f075b3eee4fbc9b7a6_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_8b9e296a356e4292994fbd5ab5a46eb636897eb8e07c1e26644e18cfbdccc6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9e296a356e4292994fbd5ab5a46eb636897eb8e07c1e26644e18cfbdccc6bd->enter($__internal_8b9e296a356e4292994fbd5ab5a46eb636897eb8e07c1e26644e18cfbdccc6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 16, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 16, $this->getSourceContext()); })()), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 18, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_8b9e296a356e4292994fbd5ab5a46eb636897eb8e07c1e26644e18cfbdccc6bd->leave($__internal_8b9e296a356e4292994fbd5ab5a46eb636897eb8e07c1e26644e18cfbdccc6bd_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_433504228dcfe499dd4b3208723b72d0bf2e0b09122b4c4bd7bfb9ae49c3af55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433504228dcfe499dd4b3208723b72d0bf2e0b09122b4c4bd7bfb9ae49c3af55->enter($__internal_433504228dcfe499dd4b3208723b72d0bf2e0b09122b4c4bd7bfb9ae49c3af55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        
        $__internal_433504228dcfe499dd4b3208723b72d0bf2e0b09122b4c4bd7bfb9ae49c3af55->leave($__internal_433504228dcfe499dd4b3208723b72d0bf2e0b09122b4c4bd7bfb9ae49c3af55_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
