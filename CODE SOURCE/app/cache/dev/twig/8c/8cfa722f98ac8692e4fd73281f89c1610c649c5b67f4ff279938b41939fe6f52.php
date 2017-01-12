<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_668fe4a079b3f357145cc1a6ef51f79afb42aaa61484ba73856685662ae3f077 extends Twig_Template
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
        $__internal_91ee055a4b62efebaf3eb74cd0b57d5fa3a3c9e302dc788a4782060e31cf8ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ee055a4b62efebaf3eb74cd0b57d5fa3a3c9e302dc788a4782060e31cf8ecc->enter($__internal_91ee055a4b62efebaf3eb74cd0b57d5fa3a3c9e302dc788a4782060e31cf8ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_91ee055a4b62efebaf3eb74cd0b57d5fa3a3c9e302dc788a4782060e31cf8ecc->leave($__internal_91ee055a4b62efebaf3eb74cd0b57d5fa3a3c9e302dc788a4782060e31cf8ecc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_59f39ed04f7b93fea601826b7025d0b554f17c90aee36f4119c6797957ad54ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f39ed04f7b93fea601826b7025d0b554f17c90aee36f4119c6797957ad54ac->enter($__internal_59f39ed04f7b93fea601826b7025d0b554f17c90aee36f4119c6797957ad54ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_59f39ed04f7b93fea601826b7025d0b554f17c90aee36f4119c6797957ad54ac->leave($__internal_59f39ed04f7b93fea601826b7025d0b554f17c90aee36f4119c6797957ad54ac_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ea2589c915db523693eef12ebbf1dc6b1ea98e9286bed565a121bbf660bece0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea2589c915db523693eef12ebbf1dc6b1ea98e9286bed565a121bbf660bece0->enter($__internal_9ea2589c915db523693eef12ebbf1dc6b1ea98e9286bed565a121bbf660bece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ea2589c915db523693eef12ebbf1dc6b1ea98e9286bed565a121bbf660bece0->leave($__internal_9ea2589c915db523693eef12ebbf1dc6b1ea98e9286bed565a121bbf660bece0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7778174a56acf7aaf6cc72bc70a87c7215b277c95bbd99588ead1ab833e5b789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7778174a56acf7aaf6cc72bc70a87c7215b277c95bbd99588ead1ab833e5b789->enter($__internal_7778174a56acf7aaf6cc72bc70a87c7215b277c95bbd99588ead1ab833e5b789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7778174a56acf7aaf6cc72bc70a87c7215b277c95bbd99588ead1ab833e5b789->leave($__internal_7778174a56acf7aaf6cc72bc70a87c7215b277c95bbd99588ead1ab833e5b789_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
