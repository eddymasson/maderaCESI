<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_63579b9a9d9b58534e4b2d21484e8e0b4c6c5c53819228aad5c0b6e249cf1f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_cd8d610ff87ba195178e24e1dfeadd94b6615d89ae03ab8acf318d5c6a3436e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8d610ff87ba195178e24e1dfeadd94b6615d89ae03ab8acf318d5c6a3436e7->enter($__internal_cd8d610ff87ba195178e24e1dfeadd94b6615d89ae03ab8acf318d5c6a3436e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8d610ff87ba195178e24e1dfeadd94b6615d89ae03ab8acf318d5c6a3436e7->leave($__internal_cd8d610ff87ba195178e24e1dfeadd94b6615d89ae03ab8acf318d5c6a3436e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5928b5df6f16046a731411f7fd0959bb80940eb6bcc9e03e239153ca4e9070e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5928b5df6f16046a731411f7fd0959bb80940eb6bcc9e03e239153ca4e9070e6->enter($__internal_5928b5df6f16046a731411f7fd0959bb80940eb6bcc9e03e239153ca4e9070e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5928b5df6f16046a731411f7fd0959bb80940eb6bcc9e03e239153ca4e9070e6->leave($__internal_5928b5df6f16046a731411f7fd0959bb80940eb6bcc9e03e239153ca4e9070e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
