<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5408b00dc95a4d6a23e32cee4b2982ae46aa02d5c22b379ece2533d7881abac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_82e2057886ed00c70ead288034c41b8f266774d543664a494337db9dccdcc009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e2057886ed00c70ead288034c41b8f266774d543664a494337db9dccdcc009->enter($__internal_82e2057886ed00c70ead288034c41b8f266774d543664a494337db9dccdcc009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e2057886ed00c70ead288034c41b8f266774d543664a494337db9dccdcc009->leave($__internal_82e2057886ed00c70ead288034c41b8f266774d543664a494337db9dccdcc009_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fac3096af64a23daaf08a03354615b2fb4b7e7547d7276f7bfaf6a3c25c3c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fac3096af64a23daaf08a03354615b2fb4b7e7547d7276f7bfaf6a3c25c3c04->enter($__internal_7fac3096af64a23daaf08a03354615b2fb4b7e7547d7276f7bfaf6a3c25c3c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7fac3096af64a23daaf08a03354615b2fb4b7e7547d7276f7bfaf6a3c25c3c04->leave($__internal_7fac3096af64a23daaf08a03354615b2fb4b7e7547d7276f7bfaf6a3c25c3c04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
