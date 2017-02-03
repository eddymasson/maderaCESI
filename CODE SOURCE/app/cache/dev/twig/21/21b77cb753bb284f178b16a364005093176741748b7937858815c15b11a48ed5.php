<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_b6ac2025ae37a0b36428e56d6663019eac9d3cf82c7945d248245ce03d1c0308 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65f343fb3257423f945e66e794ed20626723dc2c62716358cb9df2c82d2627a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f343fb3257423f945e66e794ed20626723dc2c62716358cb9df2c82d2627a1->enter($__internal_65f343fb3257423f945e66e794ed20626723dc2c62716358cb9df2c82d2627a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f343fb3257423f945e66e794ed20626723dc2c62716358cb9df2c82d2627a1->leave($__internal_65f343fb3257423f945e66e794ed20626723dc2c62716358cb9df2c82d2627a1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9dd9dff164a31c4c7950e47d90d147aed319071ade5089a1b2f89f714e8f2d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd9dff164a31c4c7950e47d90d147aed319071ade5089a1b2f89f714e8f2d02->enter($__internal_9dd9dff164a31c4c7950e47d90d147aed319071ade5089a1b2f89f714e8f2d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9dd9dff164a31c4c7950e47d90d147aed319071ade5089a1b2f89f714e8f2d02->leave($__internal_9dd9dff164a31c4c7950e47d90d147aed319071ade5089a1b2f89f714e8f2d02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
