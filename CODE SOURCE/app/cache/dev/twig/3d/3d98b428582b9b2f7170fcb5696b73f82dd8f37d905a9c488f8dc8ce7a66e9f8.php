<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_96f4dc2d3394c6d8d079cf410ecca5c9bb7577cea6696186c6dd538835b2c33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f30b4467c2b82a4b2604772687806418fb6e3f9f8b01d95392bfd9e67e04841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f30b4467c2b82a4b2604772687806418fb6e3f9f8b01d95392bfd9e67e04841->enter($__internal_6f30b4467c2b82a4b2604772687806418fb6e3f9f8b01d95392bfd9e67e04841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f30b4467c2b82a4b2604772687806418fb6e3f9f8b01d95392bfd9e67e04841->leave($__internal_6f30b4467c2b82a4b2604772687806418fb6e3f9f8b01d95392bfd9e67e04841_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e386251c3d9f93086532f9ae473b1f392f79f0ea51a274499c403199e35759c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e386251c3d9f93086532f9ae473b1f392f79f0ea51a274499c403199e35759c->enter($__internal_0e386251c3d9f93086532f9ae473b1f392f79f0ea51a274499c403199e35759c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e386251c3d9f93086532f9ae473b1f392f79f0ea51a274499c403199e35759c->leave($__internal_0e386251c3d9f93086532f9ae473b1f392f79f0ea51a274499c403199e35759c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50221e794c81217cf40336691fb8a23cde8e11c759a578dc59ad6d26b4a5acb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50221e794c81217cf40336691fb8a23cde8e11c759a578dc59ad6d26b4a5acb6->enter($__internal_50221e794c81217cf40336691fb8a23cde8e11c759a578dc59ad6d26b4a5acb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50221e794c81217cf40336691fb8a23cde8e11c759a578dc59ad6d26b4a5acb6->leave($__internal_50221e794c81217cf40336691fb8a23cde8e11c759a578dc59ad6d26b4a5acb6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c7afc0afd3aabd2b8c15874d7d12ae888160454c33d1c7e3417c747fd1a0a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7afc0afd3aabd2b8c15874d7d12ae888160454c33d1c7e3417c747fd1a0a64->enter($__internal_5c7afc0afd3aabd2b8c15874d7d12ae888160454c33d1c7e3417c747fd1a0a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5c7afc0afd3aabd2b8c15874d7d12ae888160454c33d1c7e3417c747fd1a0a64->leave($__internal_5c7afc0afd3aabd2b8c15874d7d12ae888160454c33d1c7e3417c747fd1a0a64_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
