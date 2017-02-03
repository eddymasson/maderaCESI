<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_06d34a6a704149c0c0abde27af72ead3756dd391416437cbe69bdaa303199f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1642c40c773a3ea814ccc9bedde987424e27a9436c38742761b0b01ff96b039e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1642c40c773a3ea814ccc9bedde987424e27a9436c38742761b0b01ff96b039e->enter($__internal_1642c40c773a3ea814ccc9bedde987424e27a9436c38742761b0b01ff96b039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1642c40c773a3ea814ccc9bedde987424e27a9436c38742761b0b01ff96b039e->leave($__internal_1642c40c773a3ea814ccc9bedde987424e27a9436c38742761b0b01ff96b039e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07bdad5776cca67c9ca1b640298576ef8132b68b30a021046cacb5ef5fd4e78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bdad5776cca67c9ca1b640298576ef8132b68b30a021046cacb5ef5fd4e78f->enter($__internal_07bdad5776cca67c9ca1b640298576ef8132b68b30a021046cacb5ef5fd4e78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_07bdad5776cca67c9ca1b640298576ef8132b68b30a021046cacb5ef5fd4e78f->leave($__internal_07bdad5776cca67c9ca1b640298576ef8132b68b30a021046cacb5ef5fd4e78f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65ab29cf2a3430e6a735a7eb9302ef62cc3d4cf38440a4aeca2eb0e1257aef73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ab29cf2a3430e6a735a7eb9302ef62cc3d4cf38440a4aeca2eb0e1257aef73->enter($__internal_65ab29cf2a3430e6a735a7eb9302ef62cc3d4cf38440a4aeca2eb0e1257aef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_65ab29cf2a3430e6a735a7eb9302ef62cc3d4cf38440a4aeca2eb0e1257aef73->leave($__internal_65ab29cf2a3430e6a735a7eb9302ef62cc3d4cf38440a4aeca2eb0e1257aef73_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
