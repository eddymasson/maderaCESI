<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_44eb1d2ac50a7dbfa579028fa2d367766c1422d9cd185fd803315fb5c89090c0 extends Twig_Template
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
        $__internal_dc6dc18db0a1ff972c94b08140b892638e9671a0b17953bab4d7dae62a656165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6dc18db0a1ff972c94b08140b892638e9671a0b17953bab4d7dae62a656165->enter($__internal_dc6dc18db0a1ff972c94b08140b892638e9671a0b17953bab4d7dae62a656165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc6dc18db0a1ff972c94b08140b892638e9671a0b17953bab4d7dae62a656165->leave($__internal_dc6dc18db0a1ff972c94b08140b892638e9671a0b17953bab4d7dae62a656165_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41989a6c3a9a809376f7345911a1809a179742fd9e3e6faa1d590caa92481878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41989a6c3a9a809376f7345911a1809a179742fd9e3e6faa1d590caa92481878->enter($__internal_41989a6c3a9a809376f7345911a1809a179742fd9e3e6faa1d590caa92481878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41989a6c3a9a809376f7345911a1809a179742fd9e3e6faa1d590caa92481878->leave($__internal_41989a6c3a9a809376f7345911a1809a179742fd9e3e6faa1d590caa92481878_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4bf8cde97ab905d83bf8c6aaa5c0388f9a36882f47d8a2036fd9e5ea0efd865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bf8cde97ab905d83bf8c6aaa5c0388f9a36882f47d8a2036fd9e5ea0efd865->enter($__internal_c4bf8cde97ab905d83bf8c6aaa5c0388f9a36882f47d8a2036fd9e5ea0efd865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c4bf8cde97ab905d83bf8c6aaa5c0388f9a36882f47d8a2036fd9e5ea0efd865->leave($__internal_c4bf8cde97ab905d83bf8c6aaa5c0388f9a36882f47d8a2036fd9e5ea0efd865_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0ab9359fb16b60ab86b7e9d41e251f3052b107d1b773989357a08fba4c98b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ab9359fb16b60ab86b7e9d41e251f3052b107d1b773989357a08fba4c98b65->enter($__internal_b0ab9359fb16b60ab86b7e9d41e251f3052b107d1b773989357a08fba4c98b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b0ab9359fb16b60ab86b7e9d41e251f3052b107d1b773989357a08fba4c98b65->leave($__internal_b0ab9359fb16b60ab86b7e9d41e251f3052b107d1b773989357a08fba4c98b65_prof);

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
