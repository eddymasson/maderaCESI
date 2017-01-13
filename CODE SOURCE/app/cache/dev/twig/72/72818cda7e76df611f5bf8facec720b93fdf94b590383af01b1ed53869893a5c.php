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
        $__internal_28e0e8bf22808894f18f556cd51e38bbdd8f2b425eca10a948a1522693fcd638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e0e8bf22808894f18f556cd51e38bbdd8f2b425eca10a948a1522693fcd638->enter($__internal_28e0e8bf22808894f18f556cd51e38bbdd8f2b425eca10a948a1522693fcd638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e0e8bf22808894f18f556cd51e38bbdd8f2b425eca10a948a1522693fcd638->leave($__internal_28e0e8bf22808894f18f556cd51e38bbdd8f2b425eca10a948a1522693fcd638_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b66d2f25fd43d5c9ebb0efd73baef3a73a875e5b64de018af87693900e8ad033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66d2f25fd43d5c9ebb0efd73baef3a73a875e5b64de018af87693900e8ad033->enter($__internal_b66d2f25fd43d5c9ebb0efd73baef3a73a875e5b64de018af87693900e8ad033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b66d2f25fd43d5c9ebb0efd73baef3a73a875e5b64de018af87693900e8ad033->leave($__internal_b66d2f25fd43d5c9ebb0efd73baef3a73a875e5b64de018af87693900e8ad033_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcb79652bdebd3f82961b8ccc10882bdd5c96f7cb2f3c00353a4920ab6e85eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb79652bdebd3f82961b8ccc10882bdd5c96f7cb2f3c00353a4920ab6e85eb1->enter($__internal_fcb79652bdebd3f82961b8ccc10882bdd5c96f7cb2f3c00353a4920ab6e85eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fcb79652bdebd3f82961b8ccc10882bdd5c96f7cb2f3c00353a4920ab6e85eb1->leave($__internal_fcb79652bdebd3f82961b8ccc10882bdd5c96f7cb2f3c00353a4920ab6e85eb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a2b741fb1be4e37c85f4d45d7671b915087fe4dfacd914d479d539c8028523f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2b741fb1be4e37c85f4d45d7671b915087fe4dfacd914d479d539c8028523f->enter($__internal_3a2b741fb1be4e37c85f4d45d7671b915087fe4dfacd914d479d539c8028523f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a2b741fb1be4e37c85f4d45d7671b915087fe4dfacd914d479d539c8028523f->leave($__internal_3a2b741fb1be4e37c85f4d45d7671b915087fe4dfacd914d479d539c8028523f_prof);

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
