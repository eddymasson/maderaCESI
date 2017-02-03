<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_f005fb1384da5bd20fa5a144cf9ddfe62b874db6f1353cfc3e6906977eaf1e17 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c41d2e5ee4177b7ab734414104f4bfc6e3a9584e569ae886469b4130d620da33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41d2e5ee4177b7ab734414104f4bfc6e3a9584e569ae886469b4130d620da33->enter($__internal_c41d2e5ee4177b7ab734414104f4bfc6e3a9584e569ae886469b4130d620da33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c41d2e5ee4177b7ab734414104f4bfc6e3a9584e569ae886469b4130d620da33->leave($__internal_c41d2e5ee4177b7ab734414104f4bfc6e3a9584e569ae886469b4130d620da33_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4117268935ee0614c07c3ddfcd3f8bc8ca5681dfd3a3b1c062e46c9e650de41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4117268935ee0614c07c3ddfcd3f8bc8ca5681dfd3a3b1c062e46c9e650de41e->enter($__internal_4117268935ee0614c07c3ddfcd3f8bc8ca5681dfd3a3b1c062e46c9e650de41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4117268935ee0614c07c3ddfcd3f8bc8ca5681dfd3a3b1c062e46c9e650de41e->leave($__internal_4117268935ee0614c07c3ddfcd3f8bc8ca5681dfd3a3b1c062e46c9e650de41e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
