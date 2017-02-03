<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_73244b194c86865e659688e38d86c8e752867eea2c526473b7ca83ee53b0b3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b89c107272c2fad4f6b806e33b19f010316cba7aa09cc0ffb690c50e647b2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b89c107272c2fad4f6b806e33b19f010316cba7aa09cc0ffb690c50e647b2c8->enter($__internal_5b89c107272c2fad4f6b806e33b19f010316cba7aa09cc0ffb690c50e647b2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b89c107272c2fad4f6b806e33b19f010316cba7aa09cc0ffb690c50e647b2c8->leave($__internal_5b89c107272c2fad4f6b806e33b19f010316cba7aa09cc0ffb690c50e647b2c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64912fc24eb4f117f4071a7d702ed1978f17eae96e8469b9d7d1a521b164cd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64912fc24eb4f117f4071a7d702ed1978f17eae96e8469b9d7d1a521b164cd33->enter($__internal_64912fc24eb4f117f4071a7d702ed1978f17eae96e8469b9d7d1a521b164cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_64912fc24eb4f117f4071a7d702ed1978f17eae96e8469b9d7d1a521b164cd33->leave($__internal_64912fc24eb4f117f4071a7d702ed1978f17eae96e8469b9d7d1a521b164cd33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
