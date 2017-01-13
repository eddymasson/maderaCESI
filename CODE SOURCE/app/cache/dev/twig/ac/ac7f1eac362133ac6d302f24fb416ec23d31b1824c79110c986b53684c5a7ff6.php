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
        $__internal_64a67f26e63dcbc640c935d6036edc7ba91c67753d9f9e303ac0630de8a39462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a67f26e63dcbc640c935d6036edc7ba91c67753d9f9e303ac0630de8a39462->enter($__internal_64a67f26e63dcbc640c935d6036edc7ba91c67753d9f9e303ac0630de8a39462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_64a67f26e63dcbc640c935d6036edc7ba91c67753d9f9e303ac0630de8a39462->leave($__internal_64a67f26e63dcbc640c935d6036edc7ba91c67753d9f9e303ac0630de8a39462_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_37f4f1c450b80090fe577d3d131e67c0b57b808519fa64e1e030d4073c25f3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f4f1c450b80090fe577d3d131e67c0b57b808519fa64e1e030d4073c25f3d8->enter($__internal_37f4f1c450b80090fe577d3d131e67c0b57b808519fa64e1e030d4073c25f3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_37f4f1c450b80090fe577d3d131e67c0b57b808519fa64e1e030d4073c25f3d8->leave($__internal_37f4f1c450b80090fe577d3d131e67c0b57b808519fa64e1e030d4073c25f3d8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4d614a1db6e56ae7dfa9261360c46bdcc3be602cada8ffd290a75d9cc92bc2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d614a1db6e56ae7dfa9261360c46bdcc3be602cada8ffd290a75d9cc92bc2fe->enter($__internal_4d614a1db6e56ae7dfa9261360c46bdcc3be602cada8ffd290a75d9cc92bc2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4d614a1db6e56ae7dfa9261360c46bdcc3be602cada8ffd290a75d9cc92bc2fe->leave($__internal_4d614a1db6e56ae7dfa9261360c46bdcc3be602cada8ffd290a75d9cc92bc2fe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c86c477fbfdb24ead98f1df28409e964edd584a11e3959cacc59780c7dfa83bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86c477fbfdb24ead98f1df28409e964edd584a11e3959cacc59780c7dfa83bd->enter($__internal_c86c477fbfdb24ead98f1df28409e964edd584a11e3959cacc59780c7dfa83bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c86c477fbfdb24ead98f1df28409e964edd584a11e3959cacc59780c7dfa83bd->leave($__internal_c86c477fbfdb24ead98f1df28409e964edd584a11e3959cacc59780c7dfa83bd_prof);

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
