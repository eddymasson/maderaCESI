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
        $__internal_49188172be97339fd57f017ab10dabd05f158135d962045448561ff930e762f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49188172be97339fd57f017ab10dabd05f158135d962045448561ff930e762f4->enter($__internal_49188172be97339fd57f017ab10dabd05f158135d962045448561ff930e762f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_49188172be97339fd57f017ab10dabd05f158135d962045448561ff930e762f4->leave($__internal_49188172be97339fd57f017ab10dabd05f158135d962045448561ff930e762f4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3ac7ba49a37e56f498d462340bdf13ec11c47b40c508706b5ff912267d84c535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac7ba49a37e56f498d462340bdf13ec11c47b40c508706b5ff912267d84c535->enter($__internal_3ac7ba49a37e56f498d462340bdf13ec11c47b40c508706b5ff912267d84c535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3ac7ba49a37e56f498d462340bdf13ec11c47b40c508706b5ff912267d84c535->leave($__internal_3ac7ba49a37e56f498d462340bdf13ec11c47b40c508706b5ff912267d84c535_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_476d12da1ae3d8ee62f5f9a34874b377039c2dcbe8666b72d135d261f802a2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476d12da1ae3d8ee62f5f9a34874b377039c2dcbe8666b72d135d261f802a2fe->enter($__internal_476d12da1ae3d8ee62f5f9a34874b377039c2dcbe8666b72d135d261f802a2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_476d12da1ae3d8ee62f5f9a34874b377039c2dcbe8666b72d135d261f802a2fe->leave($__internal_476d12da1ae3d8ee62f5f9a34874b377039c2dcbe8666b72d135d261f802a2fe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2d7d5e1d7a3c3b864d43e4094c466051913150ebb99ab689e5b72a7d8b69185a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7d5e1d7a3c3b864d43e4094c466051913150ebb99ab689e5b72a7d8b69185a->enter($__internal_2d7d5e1d7a3c3b864d43e4094c466051913150ebb99ab689e5b72a7d8b69185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2d7d5e1d7a3c3b864d43e4094c466051913150ebb99ab689e5b72a7d8b69185a->leave($__internal_2d7d5e1d7a3c3b864d43e4094c466051913150ebb99ab689e5b72a7d8b69185a_prof);

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
