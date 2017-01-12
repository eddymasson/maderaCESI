<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_209f9f3272b8b05f22e95d4b7140f511522ddc0696f5aef3d12878a83b4dca96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e652cb22537d068fdd78edb6e4f798a947e6993facb293facb32d52080349c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e652cb22537d068fdd78edb6e4f798a947e6993facb293facb32d52080349c8->enter($__internal_9e652cb22537d068fdd78edb6e4f798a947e6993facb293facb32d52080349c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e652cb22537d068fdd78edb6e4f798a947e6993facb293facb32d52080349c8->leave($__internal_9e652cb22537d068fdd78edb6e4f798a947e6993facb293facb32d52080349c8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4924882350f2d5fe7b3ee9bccd00377e8e8621f69977a4246303756215998ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4924882350f2d5fe7b3ee9bccd00377e8e8621f69977a4246303756215998ade->enter($__internal_4924882350f2d5fe7b3ee9bccd00377e8e8621f69977a4246303756215998ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4924882350f2d5fe7b3ee9bccd00377e8e8621f69977a4246303756215998ade->leave($__internal_4924882350f2d5fe7b3ee9bccd00377e8e8621f69977a4246303756215998ade_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_147a28001f86304b7798ae427d4c29d9cbadd7d69994d9541a80f31f8d762410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147a28001f86304b7798ae427d4c29d9cbadd7d69994d9541a80f31f8d762410->enter($__internal_147a28001f86304b7798ae427d4c29d9cbadd7d69994d9541a80f31f8d762410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_147a28001f86304b7798ae427d4c29d9cbadd7d69994d9541a80f31f8d762410->leave($__internal_147a28001f86304b7798ae427d4c29d9cbadd7d69994d9541a80f31f8d762410_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_51678ebd165ee035953bea915951b040ff61aa4fd65ae33b7cf177b6bf2b0b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51678ebd165ee035953bea915951b040ff61aa4fd65ae33b7cf177b6bf2b0b32->enter($__internal_51678ebd165ee035953bea915951b040ff61aa4fd65ae33b7cf177b6bf2b0b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_51678ebd165ee035953bea915951b040ff61aa4fd65ae33b7cf177b6bf2b0b32->leave($__internal_51678ebd165ee035953bea915951b040ff61aa4fd65ae33b7cf177b6bf2b0b32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
