<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_17394c890e3cdabf39699d9dc155d2af78ddbef12482fc6bee67608d17c0553d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6051e42e584262fb800cab69158f1f96a1c4048273719e565863d89b025fa928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6051e42e584262fb800cab69158f1f96a1c4048273719e565863d89b025fa928->enter($__internal_6051e42e584262fb800cab69158f1f96a1c4048273719e565863d89b025fa928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6051e42e584262fb800cab69158f1f96a1c4048273719e565863d89b025fa928->leave($__internal_6051e42e584262fb800cab69158f1f96a1c4048273719e565863d89b025fa928_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec847188beed15255c5acc30b7fb12699f3c84ca934336334c20fe1ef67464b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec847188beed15255c5acc30b7fb12699f3c84ca934336334c20fe1ef67464b3->enter($__internal_ec847188beed15255c5acc30b7fb12699f3c84ca934336334c20fe1ef67464b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ec847188beed15255c5acc30b7fb12699f3c84ca934336334c20fe1ef67464b3->leave($__internal_ec847188beed15255c5acc30b7fb12699f3c84ca934336334c20fe1ef67464b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}