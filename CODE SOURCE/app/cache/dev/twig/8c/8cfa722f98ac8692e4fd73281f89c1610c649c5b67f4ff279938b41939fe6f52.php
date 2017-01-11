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
        $__internal_8742e2a4ae2e9871782f5577d7007bb08e2b6f22be49fef1cd6e385c310f01d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8742e2a4ae2e9871782f5577d7007bb08e2b6f22be49fef1cd6e385c310f01d9->enter($__internal_8742e2a4ae2e9871782f5577d7007bb08e2b6f22be49fef1cd6e385c310f01d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8742e2a4ae2e9871782f5577d7007bb08e2b6f22be49fef1cd6e385c310f01d9->leave($__internal_8742e2a4ae2e9871782f5577d7007bb08e2b6f22be49fef1cd6e385c310f01d9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_706ab8e76d073f66f018edae89281194662c159ae79cfd1fdf4b7a6082e89926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706ab8e76d073f66f018edae89281194662c159ae79cfd1fdf4b7a6082e89926->enter($__internal_706ab8e76d073f66f018edae89281194662c159ae79cfd1fdf4b7a6082e89926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_706ab8e76d073f66f018edae89281194662c159ae79cfd1fdf4b7a6082e89926->leave($__internal_706ab8e76d073f66f018edae89281194662c159ae79cfd1fdf4b7a6082e89926_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b5c75b9e18f05673043a6918d75d60e4ac66359c78297212425d99f81775a626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c75b9e18f05673043a6918d75d60e4ac66359c78297212425d99f81775a626->enter($__internal_b5c75b9e18f05673043a6918d75d60e4ac66359c78297212425d99f81775a626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b5c75b9e18f05673043a6918d75d60e4ac66359c78297212425d99f81775a626->leave($__internal_b5c75b9e18f05673043a6918d75d60e4ac66359c78297212425d99f81775a626_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_41e140dc998ba6c7fb654f33be9b2ff0ba6bfd6a4a885c677b1c1e568c040efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e140dc998ba6c7fb654f33be9b2ff0ba6bfd6a4a885c677b1c1e568c040efd->enter($__internal_41e140dc998ba6c7fb654f33be9b2ff0ba6bfd6a4a885c677b1c1e568c040efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_41e140dc998ba6c7fb654f33be9b2ff0ba6bfd6a4a885c677b1c1e568c040efd->leave($__internal_41e140dc998ba6c7fb654f33be9b2ff0ba6bfd6a4a885c677b1c1e568c040efd_prof);

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
