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
        $__internal_230d0b9f440a74edcb4d19ad34b7c3c0af498b44e35986301a5389e85536925a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230d0b9f440a74edcb4d19ad34b7c3c0af498b44e35986301a5389e85536925a->enter($__internal_230d0b9f440a74edcb4d19ad34b7c3c0af498b44e35986301a5389e85536925a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_230d0b9f440a74edcb4d19ad34b7c3c0af498b44e35986301a5389e85536925a->leave($__internal_230d0b9f440a74edcb4d19ad34b7c3c0af498b44e35986301a5389e85536925a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05fd117e950b9554fedf6f0dd55ea899d4e364610ebaba5deaee0983d0a700c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fd117e950b9554fedf6f0dd55ea899d4e364610ebaba5deaee0983d0a700c7->enter($__internal_05fd117e950b9554fedf6f0dd55ea899d4e364610ebaba5deaee0983d0a700c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05fd117e950b9554fedf6f0dd55ea899d4e364610ebaba5deaee0983d0a700c7->leave($__internal_05fd117e950b9554fedf6f0dd55ea899d4e364610ebaba5deaee0983d0a700c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c35e96b7afec0b62a266a4c3e0850ed9fa78070dbe20e9b1dac62f9d53488f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35e96b7afec0b62a266a4c3e0850ed9fa78070dbe20e9b1dac62f9d53488f09->enter($__internal_c35e96b7afec0b62a266a4c3e0850ed9fa78070dbe20e9b1dac62f9d53488f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c35e96b7afec0b62a266a4c3e0850ed9fa78070dbe20e9b1dac62f9d53488f09->leave($__internal_c35e96b7afec0b62a266a4c3e0850ed9fa78070dbe20e9b1dac62f9d53488f09_prof);

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
