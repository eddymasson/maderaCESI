<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_6b98ead9f0f8a5ef09c5369cf2fd34b3a8a6f519f71b46eb31f43d01c63333dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_0fcfb678f0b8756a7891e9a5397e5ac87c2a4476fdebef13cb33487a1fb22952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcfb678f0b8756a7891e9a5397e5ac87c2a4476fdebef13cb33487a1fb22952->enter($__internal_0fcfb678f0b8756a7891e9a5397e5ac87c2a4476fdebef13cb33487a1fb22952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fcfb678f0b8756a7891e9a5397e5ac87c2a4476fdebef13cb33487a1fb22952->leave($__internal_0fcfb678f0b8756a7891e9a5397e5ac87c2a4476fdebef13cb33487a1fb22952_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_839e0ead66ca32436f7ee8f20bfdb3e2daba1adda8326771aadf8bacb5c074cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839e0ead66ca32436f7ee8f20bfdb3e2daba1adda8326771aadf8bacb5c074cb->enter($__internal_839e0ead66ca32436f7ee8f20bfdb3e2daba1adda8326771aadf8bacb5c074cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_839e0ead66ca32436f7ee8f20bfdb3e2daba1adda8326771aadf8bacb5c074cb->leave($__internal_839e0ead66ca32436f7ee8f20bfdb3e2daba1adda8326771aadf8bacb5c074cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
