<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5d3d22d5e0265e1e40bcf61e6b32ff98caf01823a153936ff613b524dbf04906 extends Twig_Template
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
        $__internal_dc27012c5ecb038d3b2ae63f93e29749b8d7b18348650fa8b57c5c65dc010008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc27012c5ecb038d3b2ae63f93e29749b8d7b18348650fa8b57c5c65dc010008->enter($__internal_dc27012c5ecb038d3b2ae63f93e29749b8d7b18348650fa8b57c5c65dc010008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc27012c5ecb038d3b2ae63f93e29749b8d7b18348650fa8b57c5c65dc010008->leave($__internal_dc27012c5ecb038d3b2ae63f93e29749b8d7b18348650fa8b57c5c65dc010008_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eeb4bdc9100e97557710c026222824362c618b27365cf1783ad6e296e47f8c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb4bdc9100e97557710c026222824362c618b27365cf1783ad6e296e47f8c40->enter($__internal_eeb4bdc9100e97557710c026222824362c618b27365cf1783ad6e296e47f8c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eeb4bdc9100e97557710c026222824362c618b27365cf1783ad6e296e47f8c40->leave($__internal_eeb4bdc9100e97557710c026222824362c618b27365cf1783ad6e296e47f8c40_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c06ad6ac1f4e9a858952e206d51d4f651c6e137db4076262c4207b602b8baa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06ad6ac1f4e9a858952e206d51d4f651c6e137db4076262c4207b602b8baa5d->enter($__internal_c06ad6ac1f4e9a858952e206d51d4f651c6e137db4076262c4207b602b8baa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c06ad6ac1f4e9a858952e206d51d4f651c6e137db4076262c4207b602b8baa5d->leave($__internal_c06ad6ac1f4e9a858952e206d51d4f651c6e137db4076262c4207b602b8baa5d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2602193a0a3c0ca1e14aa40aa4284d51595b50ec1acbc7260f6c6864eaf03415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2602193a0a3c0ca1e14aa40aa4284d51595b50ec1acbc7260f6c6864eaf03415->enter($__internal_2602193a0a3c0ca1e14aa40aa4284d51595b50ec1acbc7260f6c6864eaf03415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2602193a0a3c0ca1e14aa40aa4284d51595b50ec1acbc7260f6c6864eaf03415->leave($__internal_2602193a0a3c0ca1e14aa40aa4284d51595b50ec1acbc7260f6c6864eaf03415_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Maxime/Desktop/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
