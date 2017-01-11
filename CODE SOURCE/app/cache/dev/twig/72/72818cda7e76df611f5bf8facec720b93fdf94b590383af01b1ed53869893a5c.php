<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_723423569318852a7cb17e0bdc506ba28118c025d56586037e551203562e4735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_939dc51b1e9366e163202d3cf405d19b0a07bd5d9ab27b9ba6005554daf42d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939dc51b1e9366e163202d3cf405d19b0a07bd5d9ab27b9ba6005554daf42d03->enter($__internal_939dc51b1e9366e163202d3cf405d19b0a07bd5d9ab27b9ba6005554daf42d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_939dc51b1e9366e163202d3cf405d19b0a07bd5d9ab27b9ba6005554daf42d03->leave($__internal_939dc51b1e9366e163202d3cf405d19b0a07bd5d9ab27b9ba6005554daf42d03_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f0c9cf1ba9380d827a830d5d6b4b24598ebbea0195a8be571a48100ac55c5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0c9cf1ba9380d827a830d5d6b4b24598ebbea0195a8be571a48100ac55c5cd->enter($__internal_5f0c9cf1ba9380d827a830d5d6b4b24598ebbea0195a8be571a48100ac55c5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f0c9cf1ba9380d827a830d5d6b4b24598ebbea0195a8be571a48100ac55c5cd->leave($__internal_5f0c9cf1ba9380d827a830d5d6b4b24598ebbea0195a8be571a48100ac55c5cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9db9812beea9d9774c7ee18602f217d7eb84c6304c48eaf36275d91416121e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db9812beea9d9774c7ee18602f217d7eb84c6304c48eaf36275d91416121e81->enter($__internal_9db9812beea9d9774c7ee18602f217d7eb84c6304c48eaf36275d91416121e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9db9812beea9d9774c7ee18602f217d7eb84c6304c48eaf36275d91416121e81->leave($__internal_9db9812beea9d9774c7ee18602f217d7eb84c6304c48eaf36275d91416121e81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46600e53c942f8aa12417eb2691ddabe9c3961ac46f28138ae07ced1d78c3551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46600e53c942f8aa12417eb2691ddabe9c3961ac46f28138ae07ced1d78c3551->enter($__internal_46600e53c942f8aa12417eb2691ddabe9c3961ac46f28138ae07ced1d78c3551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46600e53c942f8aa12417eb2691ddabe9c3961ac46f28138ae07ced1d78c3551->leave($__internal_46600e53c942f8aa12417eb2691ddabe9c3961ac46f28138ae07ced1d78c3551_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
