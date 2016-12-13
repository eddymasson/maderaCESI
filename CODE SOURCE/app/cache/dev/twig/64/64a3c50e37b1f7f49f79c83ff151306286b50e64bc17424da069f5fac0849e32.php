<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_6ee63f618737a676a45fc5701dfa6a42232292322d34abaa16116c5f9db73d65 extends Twig_Template
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
        $__internal_c2f9090353c73331fa72ad442efc488fbb8f8a7c4bfbe780894fd8b0c7688ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f9090353c73331fa72ad442efc488fbb8f8a7c4bfbe780894fd8b0c7688ef6->enter($__internal_c2f9090353c73331fa72ad442efc488fbb8f8a7c4bfbe780894fd8b0c7688ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f9090353c73331fa72ad442efc488fbb8f8a7c4bfbe780894fd8b0c7688ef6->leave($__internal_c2f9090353c73331fa72ad442efc488fbb8f8a7c4bfbe780894fd8b0c7688ef6_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_1e17a207b846f0f6657ae941bd95f2625172de242cae15f2e807a8ba4c6420fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e17a207b846f0f6657ae941bd95f2625172de242cae15f2e807a8ba4c6420fe->enter($__internal_1e17a207b846f0f6657ae941bd95f2625172de242cae15f2e807a8ba4c6420fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_1e17a207b846f0f6657ae941bd95f2625172de242cae15f2e807a8ba4c6420fe->leave($__internal_1e17a207b846f0f6657ae941bd95f2625172de242cae15f2e807a8ba4c6420fe_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
