<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3de696dbb16600d020603ee70da7e742d52673fc32d1f888bff848769177496a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_3a56ee0e50d2fe796a328eb151861bbb5ef47a383c02c84a293f6a7aa94f690b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a56ee0e50d2fe796a328eb151861bbb5ef47a383c02c84a293f6a7aa94f690b->enter($__internal_3a56ee0e50d2fe796a328eb151861bbb5ef47a383c02c84a293f6a7aa94f690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a56ee0e50d2fe796a328eb151861bbb5ef47a383c02c84a293f6a7aa94f690b->leave($__internal_3a56ee0e50d2fe796a328eb151861bbb5ef47a383c02c84a293f6a7aa94f690b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b981225b5ca5ab82e9d0e60335a8e196cc4de93c8772655be9f090fd9d35dffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b981225b5ca5ab82e9d0e60335a8e196cc4de93c8772655be9f090fd9d35dffb->enter($__internal_b981225b5ca5ab82e9d0e60335a8e196cc4de93c8772655be9f090fd9d35dffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_b981225b5ca5ab82e9d0e60335a8e196cc4de93c8772655be9f090fd9d35dffb->leave($__internal_b981225b5ca5ab82e9d0e60335a8e196cc4de93c8772655be9f090fd9d35dffb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Users/Maxime/Desktop/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
