<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3b79f7df6b1d97aa88888af15e38e4dbae94a21bd6bed6aa5788331f0b6661ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_197888af2443d0757af03b68d84fea418740ccd0bd6573177887942f84d947fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197888af2443d0757af03b68d84fea418740ccd0bd6573177887942f84d947fb->enter($__internal_197888af2443d0757af03b68d84fea418740ccd0bd6573177887942f84d947fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_197888af2443d0757af03b68d84fea418740ccd0bd6573177887942f84d947fb->leave($__internal_197888af2443d0757af03b68d84fea418740ccd0bd6573177887942f84d947fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f7d863cb6d106916b27d5ed88260afe12e90f87ddd108a4ac9bd23e3cbbd011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7d863cb6d106916b27d5ed88260afe12e90f87ddd108a4ac9bd23e3cbbd011->enter($__internal_3f7d863cb6d106916b27d5ed88260afe12e90f87ddd108a4ac9bd23e3cbbd011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f7d863cb6d106916b27d5ed88260afe12e90f87ddd108a4ac9bd23e3cbbd011->leave($__internal_3f7d863cb6d106916b27d5ed88260afe12e90f87ddd108a4ac9bd23e3cbbd011_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3a8df1ce5f3df42b45653d5a8079eb427ec75175895eed417787d341de40c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a8df1ce5f3df42b45653d5a8079eb427ec75175895eed417787d341de40c06->enter($__internal_a3a8df1ce5f3df42b45653d5a8079eb427ec75175895eed417787d341de40c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3a8df1ce5f3df42b45653d5a8079eb427ec75175895eed417787d341de40c06->leave($__internal_a3a8df1ce5f3df42b45653d5a8079eb427ec75175895eed417787d341de40c06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94607abde018f4bf655f9ef401f939b94893b3a8a3e8e73b65555d01e2c358f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94607abde018f4bf655f9ef401f939b94893b3a8a3e8e73b65555d01e2c358f2->enter($__internal_94607abde018f4bf655f9ef401f939b94893b3a8a3e8e73b65555d01e2c358f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_94607abde018f4bf655f9ef401f939b94893b3a8a3e8e73b65555d01e2c358f2->leave($__internal_94607abde018f4bf655f9ef401f939b94893b3a8a3e8e73b65555d01e2c358f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
