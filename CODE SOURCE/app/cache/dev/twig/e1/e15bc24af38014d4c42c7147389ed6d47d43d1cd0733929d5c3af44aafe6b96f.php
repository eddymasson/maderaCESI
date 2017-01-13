<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_84aabf104664f854f1860ec440c4edbc2a58e46b71f94ea552ec4bb43b329717 extends Twig_Template
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
        $__internal_e4e49e956805e9bd653cbeeb439037961fdb7e9b8021a1404153c1848f5642f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e49e956805e9bd653cbeeb439037961fdb7e9b8021a1404153c1848f5642f7->enter($__internal_e4e49e956805e9bd653cbeeb439037961fdb7e9b8021a1404153c1848f5642f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e49e956805e9bd653cbeeb439037961fdb7e9b8021a1404153c1848f5642f7->leave($__internal_e4e49e956805e9bd653cbeeb439037961fdb7e9b8021a1404153c1848f5642f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6f10cdfc9eec0a12df7ac50b38e56f03afdcbd333fc402a3043354a1f8dfe32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f10cdfc9eec0a12df7ac50b38e56f03afdcbd333fc402a3043354a1f8dfe32->enter($__internal_f6f10cdfc9eec0a12df7ac50b38e56f03afdcbd333fc402a3043354a1f8dfe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f6f10cdfc9eec0a12df7ac50b38e56f03afdcbd333fc402a3043354a1f8dfe32->leave($__internal_f6f10cdfc9eec0a12df7ac50b38e56f03afdcbd333fc402a3043354a1f8dfe32_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a425af5b37bfd7b43055e03ba3cf063254faea73bc3bb8699fdda9a53892f630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a425af5b37bfd7b43055e03ba3cf063254faea73bc3bb8699fdda9a53892f630->enter($__internal_a425af5b37bfd7b43055e03ba3cf063254faea73bc3bb8699fdda9a53892f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_a425af5b37bfd7b43055e03ba3cf063254faea73bc3bb8699fdda9a53892f630->leave($__internal_a425af5b37bfd7b43055e03ba3cf063254faea73bc3bb8699fdda9a53892f630_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
