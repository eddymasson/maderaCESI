<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_88d5252fed9894fb2b80b568d838f7c1380198f6201a007f297e3f180809732a extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6291837a95a8658db633e53dfa07d112c4204760bd7d0c52f257ded9c75e0c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6291837a95a8658db633e53dfa07d112c4204760bd7d0c52f257ded9c75e0c4c->enter($__internal_6291837a95a8658db633e53dfa07d112c4204760bd7d0c52f257ded9c75e0c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6291837a95a8658db633e53dfa07d112c4204760bd7d0c52f257ded9c75e0c4c->leave($__internal_6291837a95a8658db633e53dfa07d112c4204760bd7d0c52f257ded9c75e0c4c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_64d8a503d06c110876ce290d16e2352c1d9d83a4c0a06a685971e68165bdc8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d8a503d06c110876ce290d16e2352c1d9d83a4c0a06a685971e68165bdc8a0->enter($__internal_64d8a503d06c110876ce290d16e2352c1d9d83a4c0a06a685971e68165bdc8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_64d8a503d06c110876ce290d16e2352c1d9d83a4c0a06a685971e68165bdc8a0->leave($__internal_64d8a503d06c110876ce290d16e2352c1d9d83a4c0a06a685971e68165bdc8a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
