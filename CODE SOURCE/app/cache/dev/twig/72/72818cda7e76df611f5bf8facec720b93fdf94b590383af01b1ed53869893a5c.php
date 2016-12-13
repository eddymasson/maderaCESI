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
        $__internal_03a018ffab164f9f582d0310f1e55fcf448c04129a0f18d9e9cfb7971020c711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a018ffab164f9f582d0310f1e55fcf448c04129a0f18d9e9cfb7971020c711->enter($__internal_03a018ffab164f9f582d0310f1e55fcf448c04129a0f18d9e9cfb7971020c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a018ffab164f9f582d0310f1e55fcf448c04129a0f18d9e9cfb7971020c711->leave($__internal_03a018ffab164f9f582d0310f1e55fcf448c04129a0f18d9e9cfb7971020c711_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_049f986c2afa7dba21da1c38ae61ac1cea999be7135f951f108efdbce4efcbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049f986c2afa7dba21da1c38ae61ac1cea999be7135f951f108efdbce4efcbeb->enter($__internal_049f986c2afa7dba21da1c38ae61ac1cea999be7135f951f108efdbce4efcbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_049f986c2afa7dba21da1c38ae61ac1cea999be7135f951f108efdbce4efcbeb->leave($__internal_049f986c2afa7dba21da1c38ae61ac1cea999be7135f951f108efdbce4efcbeb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bf1a34a7f35d4f29ed6e3adfb8b786ded29b0c1f2a247b4bb68735b6da7f9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf1a34a7f35d4f29ed6e3adfb8b786ded29b0c1f2a247b4bb68735b6da7f9c8->enter($__internal_7bf1a34a7f35d4f29ed6e3adfb8b786ded29b0c1f2a247b4bb68735b6da7f9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7bf1a34a7f35d4f29ed6e3adfb8b786ded29b0c1f2a247b4bb68735b6da7f9c8->leave($__internal_7bf1a34a7f35d4f29ed6e3adfb8b786ded29b0c1f2a247b4bb68735b6da7f9c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f61d0197263a605377ff63fbf91e63e92512be435a23b1a51f2bf450b753490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f61d0197263a605377ff63fbf91e63e92512be435a23b1a51f2bf450b753490->enter($__internal_8f61d0197263a605377ff63fbf91e63e92512be435a23b1a51f2bf450b753490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f61d0197263a605377ff63fbf91e63e92512be435a23b1a51f2bf450b753490->leave($__internal_8f61d0197263a605377ff63fbf91e63e92512be435a23b1a51f2bf450b753490_prof);

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
