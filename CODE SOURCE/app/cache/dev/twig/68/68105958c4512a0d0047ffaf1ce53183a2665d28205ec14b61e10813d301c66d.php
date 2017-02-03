<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_3e9254a4091061fd625612136ee37c128f1ce0a96e4597ef80b24c01055edb8a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c13ada7d4a68ea0bd0056da759b123fef3f0b1e65ae98ccf67d28902e901e152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13ada7d4a68ea0bd0056da759b123fef3f0b1e65ae98ccf67d28902e901e152->enter($__internal_c13ada7d4a68ea0bd0056da759b123fef3f0b1e65ae98ccf67d28902e901e152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13ada7d4a68ea0bd0056da759b123fef3f0b1e65ae98ccf67d28902e901e152->leave($__internal_c13ada7d4a68ea0bd0056da759b123fef3f0b1e65ae98ccf67d28902e901e152_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9356ff515e5bd80c2c9683b6a3a259306174909e1368e65b9afe30d068a996de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9356ff515e5bd80c2c9683b6a3a259306174909e1368e65b9afe30d068a996de->enter($__internal_9356ff515e5bd80c2c9683b6a3a259306174909e1368e65b9afe30d068a996de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9356ff515e5bd80c2c9683b6a3a259306174909e1368e65b9afe30d068a996de->leave($__internal_9356ff515e5bd80c2c9683b6a3a259306174909e1368e65b9afe30d068a996de_prof);

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
