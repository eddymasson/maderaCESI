<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_0a4452ead92e19b71809db2f39f6b9478e685ccf0360a413d8f7d61476fa90fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_311d5c2939f1f74c3810e0644bbc223bfb2a64a44c2c3df00f9b461f0c677329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311d5c2939f1f74c3810e0644bbc223bfb2a64a44c2c3df00f9b461f0c677329->enter($__internal_311d5c2939f1f74c3810e0644bbc223bfb2a64a44c2c3df00f9b461f0c677329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_311d5c2939f1f74c3810e0644bbc223bfb2a64a44c2c3df00f9b461f0c677329->leave($__internal_311d5c2939f1f74c3810e0644bbc223bfb2a64a44c2c3df00f9b461f0c677329_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05e0bc29a6210cd89671d111c7f56bd8fdbf7a75a95fa8c2503de0e8a919803f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e0bc29a6210cd89671d111c7f56bd8fdbf7a75a95fa8c2503de0e8a919803f->enter($__internal_05e0bc29a6210cd89671d111c7f56bd8fdbf7a75a95fa8c2503de0e8a919803f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_05e0bc29a6210cd89671d111c7f56bd8fdbf7a75a95fa8c2503de0e8a919803f->leave($__internal_05e0bc29a6210cd89671d111c7f56bd8fdbf7a75a95fa8c2503de0e8a919803f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
