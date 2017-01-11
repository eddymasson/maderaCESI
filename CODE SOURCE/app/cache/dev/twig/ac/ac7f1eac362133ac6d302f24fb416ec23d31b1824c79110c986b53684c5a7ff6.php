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
        $__internal_2b6f26ab0fd1e7559e43f6e7c7784e61bed482bf8301fe146472a712e618cbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6f26ab0fd1e7559e43f6e7c7784e61bed482bf8301fe146472a712e618cbc0->enter($__internal_2b6f26ab0fd1e7559e43f6e7c7784e61bed482bf8301fe146472a712e618cbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2b6f26ab0fd1e7559e43f6e7c7784e61bed482bf8301fe146472a712e618cbc0->leave($__internal_2b6f26ab0fd1e7559e43f6e7c7784e61bed482bf8301fe146472a712e618cbc0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_efee5b7f0019c61d881e7296d16cb6e67e4bd1bb0a61e30a1004b5db82d630bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efee5b7f0019c61d881e7296d16cb6e67e4bd1bb0a61e30a1004b5db82d630bd->enter($__internal_efee5b7f0019c61d881e7296d16cb6e67e4bd1bb0a61e30a1004b5db82d630bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_efee5b7f0019c61d881e7296d16cb6e67e4bd1bb0a61e30a1004b5db82d630bd->leave($__internal_efee5b7f0019c61d881e7296d16cb6e67e4bd1bb0a61e30a1004b5db82d630bd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f14de6a8762472fcd9e4f494d8ce912bc2595620e52cf5a3ae268e15c1dcd243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14de6a8762472fcd9e4f494d8ce912bc2595620e52cf5a3ae268e15c1dcd243->enter($__internal_f14de6a8762472fcd9e4f494d8ce912bc2595620e52cf5a3ae268e15c1dcd243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f14de6a8762472fcd9e4f494d8ce912bc2595620e52cf5a3ae268e15c1dcd243->leave($__internal_f14de6a8762472fcd9e4f494d8ce912bc2595620e52cf5a3ae268e15c1dcd243_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ecd963febcff91a9eb03a46e409824038086a37731a11be3218cde16ad69b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecd963febcff91a9eb03a46e409824038086a37731a11be3218cde16ad69b89->enter($__internal_1ecd963febcff91a9eb03a46e409824038086a37731a11be3218cde16ad69b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ecd963febcff91a9eb03a46e409824038086a37731a11be3218cde16ad69b89->leave($__internal_1ecd963febcff91a9eb03a46e409824038086a37731a11be3218cde16ad69b89_prof);

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
