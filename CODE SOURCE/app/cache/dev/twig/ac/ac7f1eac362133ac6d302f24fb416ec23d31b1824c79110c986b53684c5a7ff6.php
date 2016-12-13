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
        $__internal_d1e2f9eda6be27f310d07dc9c0aa4e44ae1a31d491530485b972896b396f0f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e2f9eda6be27f310d07dc9c0aa4e44ae1a31d491530485b972896b396f0f8e->enter($__internal_d1e2f9eda6be27f310d07dc9c0aa4e44ae1a31d491530485b972896b396f0f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d1e2f9eda6be27f310d07dc9c0aa4e44ae1a31d491530485b972896b396f0f8e->leave($__internal_d1e2f9eda6be27f310d07dc9c0aa4e44ae1a31d491530485b972896b396f0f8e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c6460135f03e7a09f007f3786af48eac4cfdd5730074bdbbbaf25115643f465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6460135f03e7a09f007f3786af48eac4cfdd5730074bdbbbaf25115643f465->enter($__internal_4c6460135f03e7a09f007f3786af48eac4cfdd5730074bdbbbaf25115643f465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4c6460135f03e7a09f007f3786af48eac4cfdd5730074bdbbbaf25115643f465->leave($__internal_4c6460135f03e7a09f007f3786af48eac4cfdd5730074bdbbbaf25115643f465_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c56fbc185f207231c4f55c8fe39e18a13b50f7e208f3ab2c884a70246555bf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56fbc185f207231c4f55c8fe39e18a13b50f7e208f3ab2c884a70246555bf1a->enter($__internal_c56fbc185f207231c4f55c8fe39e18a13b50f7e208f3ab2c884a70246555bf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c56fbc185f207231c4f55c8fe39e18a13b50f7e208f3ab2c884a70246555bf1a->leave($__internal_c56fbc185f207231c4f55c8fe39e18a13b50f7e208f3ab2c884a70246555bf1a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_66fc25ac4700d4460dfec8a65a8000882a94e402587bd918cc3d06d6dc4af5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fc25ac4700d4460dfec8a65a8000882a94e402587bd918cc3d06d6dc4af5e2->enter($__internal_66fc25ac4700d4460dfec8a65a8000882a94e402587bd918cc3d06d6dc4af5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_66fc25ac4700d4460dfec8a65a8000882a94e402587bd918cc3d06d6dc4af5e2->leave($__internal_66fc25ac4700d4460dfec8a65a8000882a94e402587bd918cc3d06d6dc4af5e2_prof);

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
