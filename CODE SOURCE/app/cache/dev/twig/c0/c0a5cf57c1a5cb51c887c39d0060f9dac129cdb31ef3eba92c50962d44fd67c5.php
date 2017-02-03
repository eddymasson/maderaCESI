<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_1e6b9c8abb7403a72f4ffd6e02b94edd7881bf0d220bb6f0ecf7254fd719c6e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_0d33f3bf8f4b53ce5ae6f40b1b6df07e1d2060c6ac1022c9180105e60a80c9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d33f3bf8f4b53ce5ae6f40b1b6df07e1d2060c6ac1022c9180105e60a80c9c4->enter($__internal_0d33f3bf8f4b53ce5ae6f40b1b6df07e1d2060c6ac1022c9180105e60a80c9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d33f3bf8f4b53ce5ae6f40b1b6df07e1d2060c6ac1022c9180105e60a80c9c4->leave($__internal_0d33f3bf8f4b53ce5ae6f40b1b6df07e1d2060c6ac1022c9180105e60a80c9c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_adbd01001bfe770e068251b9a90021a273d98efdadac62ca1c14b1a61311aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbd01001bfe770e068251b9a90021a273d98efdadac62ca1c14b1a61311aa1f->enter($__internal_adbd01001bfe770e068251b9a90021a273d98efdadac62ca1c14b1a61311aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_adbd01001bfe770e068251b9a90021a273d98efdadac62ca1c14b1a61311aa1f->leave($__internal_adbd01001bfe770e068251b9a90021a273d98efdadac62ca1c14b1a61311aa1f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
