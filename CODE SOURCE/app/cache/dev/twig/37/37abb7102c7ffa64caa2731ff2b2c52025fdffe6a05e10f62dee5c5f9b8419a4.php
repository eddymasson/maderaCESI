<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_94b43b424483bbf4eb58584170a88e8d520229e9e1ffb6b2102b9609a5ba8f62 extends Twig_Template
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
        $__internal_2c7a549a5c07b1d458fcfc36231521ada27b3c66e7620d1780e0b1c4fa71031a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7a549a5c07b1d458fcfc36231521ada27b3c66e7620d1780e0b1c4fa71031a->enter($__internal_2c7a549a5c07b1d458fcfc36231521ada27b3c66e7620d1780e0b1c4fa71031a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c7a549a5c07b1d458fcfc36231521ada27b3c66e7620d1780e0b1c4fa71031a->leave($__internal_2c7a549a5c07b1d458fcfc36231521ada27b3c66e7620d1780e0b1c4fa71031a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d9003b2acc29e7de93903a02eac5b5cd7baf4870f373d630a93b8941cc7750b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9003b2acc29e7de93903a02eac5b5cd7baf4870f373d630a93b8941cc7750b->enter($__internal_1d9003b2acc29e7de93903a02eac5b5cd7baf4870f373d630a93b8941cc7750b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d9003b2acc29e7de93903a02eac5b5cd7baf4870f373d630a93b8941cc7750b->leave($__internal_1d9003b2acc29e7de93903a02eac5b5cd7baf4870f373d630a93b8941cc7750b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_086187f9487f9e13fd7fb79a75cc5bc1cbf5918a4ddc049ea88a32686f8ea1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086187f9487f9e13fd7fb79a75cc5bc1cbf5918a4ddc049ea88a32686f8ea1c0->enter($__internal_086187f9487f9e13fd7fb79a75cc5bc1cbf5918a4ddc049ea88a32686f8ea1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_086187f9487f9e13fd7fb79a75cc5bc1cbf5918a4ddc049ea88a32686f8ea1c0->leave($__internal_086187f9487f9e13fd7fb79a75cc5bc1cbf5918a4ddc049ea88a32686f8ea1c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_936021636a66719ab6d045060552703ef5181c8d2bc0ef1ba2fa14de07e88bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936021636a66719ab6d045060552703ef5181c8d2bc0ef1ba2fa14de07e88bef->enter($__internal_936021636a66719ab6d045060552703ef5181c8d2bc0ef1ba2fa14de07e88bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_936021636a66719ab6d045060552703ef5181c8d2bc0ef1ba2fa14de07e88bef->leave($__internal_936021636a66719ab6d045060552703ef5181c8d2bc0ef1ba2fa14de07e88bef_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Maxime/PhpstormProjects/madera/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
