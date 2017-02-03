<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_273fd7ad121747f46958208276adb6c8ea28f3120b77dfdbfe044f1d6df0f9c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_94179986b1a2166d8a6006429bdc5492d706ec911b005f69b338ea569f6ba559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94179986b1a2166d8a6006429bdc5492d706ec911b005f69b338ea569f6ba559->enter($__internal_94179986b1a2166d8a6006429bdc5492d706ec911b005f69b338ea569f6ba559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94179986b1a2166d8a6006429bdc5492d706ec911b005f69b338ea569f6ba559->leave($__internal_94179986b1a2166d8a6006429bdc5492d706ec911b005f69b338ea569f6ba559_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_38e000d2099516eff432a4adc44bfc5010a3ad9401143ea17edb486f20d70566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e000d2099516eff432a4adc44bfc5010a3ad9401143ea17edb486f20d70566->enter($__internal_38e000d2099516eff432a4adc44bfc5010a3ad9401143ea17edb486f20d70566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_38e000d2099516eff432a4adc44bfc5010a3ad9401143ea17edb486f20d70566->leave($__internal_38e000d2099516eff432a4adc44bfc5010a3ad9401143ea17edb486f20d70566_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
