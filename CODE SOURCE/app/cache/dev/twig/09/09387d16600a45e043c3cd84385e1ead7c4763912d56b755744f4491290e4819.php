<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d1023c893dd3a132c3301f8dacaa93cf0b6193fd92d5ea1f00688fdc6372d567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b9b6d4955d795c5cbf2d126d8e4df805f538f40963182842964b9f187cae593e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b6d4955d795c5cbf2d126d8e4df805f538f40963182842964b9f187cae593e->enter($__internal_b9b6d4955d795c5cbf2d126d8e4df805f538f40963182842964b9f187cae593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b6d4955d795c5cbf2d126d8e4df805f538f40963182842964b9f187cae593e->leave($__internal_b9b6d4955d795c5cbf2d126d8e4df805f538f40963182842964b9f187cae593e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffda1890331b3a55784fd62f92b2ad920c9e6c0e9e8e61a664fbc9884da23eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffda1890331b3a55784fd62f92b2ad920c9e6c0e9e8e61a664fbc9884da23eb7->enter($__internal_ffda1890331b3a55784fd62f92b2ad920c9e6c0e9e8e61a664fbc9884da23eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ffda1890331b3a55784fd62f92b2ad920c9e6c0e9e8e61a664fbc9884da23eb7->leave($__internal_ffda1890331b3a55784fd62f92b2ad920c9e6c0e9e8e61a664fbc9884da23eb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
