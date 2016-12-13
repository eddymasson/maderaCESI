<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_670c35fcf249e36a9ae1b7b3b5ee44da8a5fca704557b8689eb5d3e2f330deab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4a78d0741bedd86645016570700627367bddfcc407fd6ae1233902d9107b7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a78d0741bedd86645016570700627367bddfcc407fd6ae1233902d9107b7b8->enter($__internal_a4a78d0741bedd86645016570700627367bddfcc407fd6ae1233902d9107b7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a78d0741bedd86645016570700627367bddfcc407fd6ae1233902d9107b7b8->leave($__internal_a4a78d0741bedd86645016570700627367bddfcc407fd6ae1233902d9107b7b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_328a18f305f2035f404bd51728f966b42d448a493c59dfe4857a63aa4dc49b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328a18f305f2035f404bd51728f966b42d448a493c59dfe4857a63aa4dc49b39->enter($__internal_328a18f305f2035f404bd51728f966b42d448a493c59dfe4857a63aa4dc49b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_328a18f305f2035f404bd51728f966b42d448a493c59dfe4857a63aa4dc49b39->leave($__internal_328a18f305f2035f404bd51728f966b42d448a493c59dfe4857a63aa4dc49b39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67ae5cbaf2d00f6f2cd8092c6bafb18c5a5f165a40fc515e198b8c480ae8788d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ae5cbaf2d00f6f2cd8092c6bafb18c5a5f165a40fc515e198b8c480ae8788d->enter($__internal_67ae5cbaf2d00f6f2cd8092c6bafb18c5a5f165a40fc515e198b8c480ae8788d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67ae5cbaf2d00f6f2cd8092c6bafb18c5a5f165a40fc515e198b8c480ae8788d->leave($__internal_67ae5cbaf2d00f6f2cd8092c6bafb18c5a5f165a40fc515e198b8c480ae8788d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8e9649fb2bd2dddfda3bce658a142db6d1d5e832da5ee34628bbe55fbcfb243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e9649fb2bd2dddfda3bce658a142db6d1d5e832da5ee34628bbe55fbcfb243->enter($__internal_c8e9649fb2bd2dddfda3bce658a142db6d1d5e832da5ee34628bbe55fbcfb243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8e9649fb2bd2dddfda3bce658a142db6d1d5e832da5ee34628bbe55fbcfb243->leave($__internal_c8e9649fb2bd2dddfda3bce658a142db6d1d5e832da5ee34628bbe55fbcfb243_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
