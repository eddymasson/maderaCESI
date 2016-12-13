<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1f5e8abb014aca7b0eecc97c046d9184f6011665964d7d9921200fa855a4ae5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8204957f83ce1cd51966ec64507b17b732300cf44cd7c9e316a2d44c458ba26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8204957f83ce1cd51966ec64507b17b732300cf44cd7c9e316a2d44c458ba26f->enter($__internal_8204957f83ce1cd51966ec64507b17b732300cf44cd7c9e316a2d44c458ba26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8204957f83ce1cd51966ec64507b17b732300cf44cd7c9e316a2d44c458ba26f->leave($__internal_8204957f83ce1cd51966ec64507b17b732300cf44cd7c9e316a2d44c458ba26f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a8d9bdee6fdd36838d61c19cfe397d8ef4bfbfda9932eef57ad602131be6b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8d9bdee6fdd36838d61c19cfe397d8ef4bfbfda9932eef57ad602131be6b7d->enter($__internal_4a8d9bdee6fdd36838d61c19cfe397d8ef4bfbfda9932eef57ad602131be6b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4a8d9bdee6fdd36838d61c19cfe397d8ef4bfbfda9932eef57ad602131be6b7d->leave($__internal_4a8d9bdee6fdd36838d61c19cfe397d8ef4bfbfda9932eef57ad602131be6b7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
