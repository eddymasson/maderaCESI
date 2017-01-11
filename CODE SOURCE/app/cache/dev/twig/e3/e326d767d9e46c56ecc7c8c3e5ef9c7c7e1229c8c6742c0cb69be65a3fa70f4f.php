<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_8ab72b80ab7542b8173d6d4cf14af792ef09b0a0e35d035b98162abb62feb95c extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e85b96d54af493e9e9998407679b3358ffae5302c1e899843e6be881fa1d6d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85b96d54af493e9e9998407679b3358ffae5302c1e899843e6be881fa1d6d4b->enter($__internal_e85b96d54af493e9e9998407679b3358ffae5302c1e899843e6be881fa1d6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e85b96d54af493e9e9998407679b3358ffae5302c1e899843e6be881fa1d6d4b->leave($__internal_e85b96d54af493e9e9998407679b3358ffae5302c1e899843e6be881fa1d6d4b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0c756a7cd2c9ba383b23f4072bbd34b876480f68c051afc77721fee7f06a1076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c756a7cd2c9ba383b23f4072bbd34b876480f68c051afc77721fee7f06a1076->enter($__internal_0c756a7cd2c9ba383b23f4072bbd34b876480f68c051afc77721fee7f06a1076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0c756a7cd2c9ba383b23f4072bbd34b876480f68c051afc77721fee7f06a1076->leave($__internal_0c756a7cd2c9ba383b23f4072bbd34b876480f68c051afc77721fee7f06a1076_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
