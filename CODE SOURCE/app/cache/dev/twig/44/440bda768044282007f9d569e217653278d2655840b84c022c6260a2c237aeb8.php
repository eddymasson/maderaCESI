<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7f94d485a8efe85ee546512105afc16fccdd4493dd8a53f652dbf20901dab70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_50518be711d897a03da5f8299b15656a19afb915747c029cd9c840796ddef0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50518be711d897a03da5f8299b15656a19afb915747c029cd9c840796ddef0f8->enter($__internal_50518be711d897a03da5f8299b15656a19afb915747c029cd9c840796ddef0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50518be711d897a03da5f8299b15656a19afb915747c029cd9c840796ddef0f8->leave($__internal_50518be711d897a03da5f8299b15656a19afb915747c029cd9c840796ddef0f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03875349b2d7b1409ff5523bd79eff3753b8ed13887dc036aff221790d5cff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03875349b2d7b1409ff5523bd79eff3753b8ed13887dc036aff221790d5cff8f->enter($__internal_03875349b2d7b1409ff5523bd79eff3753b8ed13887dc036aff221790d5cff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_03875349b2d7b1409ff5523bd79eff3753b8ed13887dc036aff221790d5cff8f->leave($__internal_03875349b2d7b1409ff5523bd79eff3753b8ed13887dc036aff221790d5cff8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
