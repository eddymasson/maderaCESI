<?php

/* ::base.html.twig */
class __TwigTemplate_8299c9921261264274e513bc96edc3010699e68361abb42198541e5e20729297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_250c0c91bb53d75ba89b894f0a2adf3960670eb69cb80c5bd5e4fd8f4a0b00cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250c0c91bb53d75ba89b894f0a2adf3960670eb69cb80c5bd5e4fd8f4a0b00cc->enter($__internal_250c0c91bb53d75ba89b894f0a2adf3960670eb69cb80c5bd5e4fd8f4a0b00cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_250c0c91bb53d75ba89b894f0a2adf3960670eb69cb80c5bd5e4fd8f4a0b00cc->leave($__internal_250c0c91bb53d75ba89b894f0a2adf3960670eb69cb80c5bd5e4fd8f4a0b00cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ac293f4f4e6532eb495edcfd5309b3f7e5ffef44873786ecee64bafe6806050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac293f4f4e6532eb495edcfd5309b3f7e5ffef44873786ecee64bafe6806050->enter($__internal_2ac293f4f4e6532eb495edcfd5309b3f7e5ffef44873786ecee64bafe6806050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2ac293f4f4e6532eb495edcfd5309b3f7e5ffef44873786ecee64bafe6806050->leave($__internal_2ac293f4f4e6532eb495edcfd5309b3f7e5ffef44873786ecee64bafe6806050_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bd808a2ffbe5c0e0dde5d0be604068d7962d6bdb98d6708e4bd1d5beb14194f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd808a2ffbe5c0e0dde5d0be604068d7962d6bdb98d6708e4bd1d5beb14194f->enter($__internal_2bd808a2ffbe5c0e0dde5d0be604068d7962d6bdb98d6708e4bd1d5beb14194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2bd808a2ffbe5c0e0dde5d0be604068d7962d6bdb98d6708e4bd1d5beb14194f->leave($__internal_2bd808a2ffbe5c0e0dde5d0be604068d7962d6bdb98d6708e4bd1d5beb14194f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fda1ead7b100b8a450a24db3afcd31b8b44493239de16eb257152abf1a820608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda1ead7b100b8a450a24db3afcd31b8b44493239de16eb257152abf1a820608->enter($__internal_fda1ead7b100b8a450a24db3afcd31b8b44493239de16eb257152abf1a820608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fda1ead7b100b8a450a24db3afcd31b8b44493239de16eb257152abf1a820608->leave($__internal_fda1ead7b100b8a450a24db3afcd31b8b44493239de16eb257152abf1a820608_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c27c8c59ef6c760ad50b385c6a47ecd4ab80ceb7c86e71233b92d5d34569a2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27c8c59ef6c760ad50b385c6a47ecd4ab80ceb7c86e71233b92d5d34569a2ed->enter($__internal_c27c8c59ef6c760ad50b385c6a47ecd4ab80ceb7c86e71233b92d5d34569a2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c27c8c59ef6c760ad50b385c6a47ecd4ab80ceb7c86e71233b92d5d34569a2ed->leave($__internal_c27c8c59ef6c760ad50b385c6a47ecd4ab80ceb7c86e71233b92d5d34569a2ed_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/app/Resources/views/base.html.twig");
    }
}
