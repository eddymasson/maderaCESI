<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_416df24f0d1645dc8131c39dbce616ccf97c19f1287021825939bbd624dbcd05 extends Twig_Template
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
        $__internal_4ca2f0839760b8bea17d2bd833a1448030217b44ff8509dfd644c594e8e368d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca2f0839760b8bea17d2bd833a1448030217b44ff8509dfd644c594e8e368d3->enter($__internal_4ca2f0839760b8bea17d2bd833a1448030217b44ff8509dfd644c594e8e368d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca2f0839760b8bea17d2bd833a1448030217b44ff8509dfd644c594e8e368d3->leave($__internal_4ca2f0839760b8bea17d2bd833a1448030217b44ff8509dfd644c594e8e368d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b706e8f9947fe75eb94917813489f068396e596dfbf7c2b15c203976f1cbf5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b706e8f9947fe75eb94917813489f068396e596dfbf7c2b15c203976f1cbf5cc->enter($__internal_b706e8f9947fe75eb94917813489f068396e596dfbf7c2b15c203976f1cbf5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b706e8f9947fe75eb94917813489f068396e596dfbf7c2b15c203976f1cbf5cc->leave($__internal_b706e8f9947fe75eb94917813489f068396e596dfbf7c2b15c203976f1cbf5cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9baed25eb799de2bf59cd0255c7b206069aad3cc4261e789a2b2afbd991010f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9baed25eb799de2bf59cd0255c7b206069aad3cc4261e789a2b2afbd991010f->enter($__internal_a9baed25eb799de2bf59cd0255c7b206069aad3cc4261e789a2b2afbd991010f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9baed25eb799de2bf59cd0255c7b206069aad3cc4261e789a2b2afbd991010f->leave($__internal_a9baed25eb799de2bf59cd0255c7b206069aad3cc4261e789a2b2afbd991010f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3c20010d72d43ad010ff9a3f6098b4f6a39f00be0cc4570402ed67538daa951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c20010d72d43ad010ff9a3f6098b4f6a39f00be0cc4570402ed67538daa951->enter($__internal_c3c20010d72d43ad010ff9a3f6098b4f6a39f00be0cc4570402ed67538daa951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c3c20010d72d43ad010ff9a3f6098b4f6a39f00be0cc4570402ed67538daa951->leave($__internal_c3c20010d72d43ad010ff9a3f6098b4f6a39f00be0cc4570402ed67538daa951_prof);

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
