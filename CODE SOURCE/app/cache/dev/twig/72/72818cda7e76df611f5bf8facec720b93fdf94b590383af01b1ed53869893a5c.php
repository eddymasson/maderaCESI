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
        $__internal_ff03ea7b5091f5de1bc5d34a0a95084881488ef758fa8b8a0e028b763bdae1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff03ea7b5091f5de1bc5d34a0a95084881488ef758fa8b8a0e028b763bdae1e1->enter($__internal_ff03ea7b5091f5de1bc5d34a0a95084881488ef758fa8b8a0e028b763bdae1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff03ea7b5091f5de1bc5d34a0a95084881488ef758fa8b8a0e028b763bdae1e1->leave($__internal_ff03ea7b5091f5de1bc5d34a0a95084881488ef758fa8b8a0e028b763bdae1e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_997da61aabdb6211c1d57f68f1d160ab437a06350e494d93033e4923b20bc28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997da61aabdb6211c1d57f68f1d160ab437a06350e494d93033e4923b20bc28f->enter($__internal_997da61aabdb6211c1d57f68f1d160ab437a06350e494d93033e4923b20bc28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_997da61aabdb6211c1d57f68f1d160ab437a06350e494d93033e4923b20bc28f->leave($__internal_997da61aabdb6211c1d57f68f1d160ab437a06350e494d93033e4923b20bc28f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cfe7bea3637f455b0e78389b2b7ba5736ced7e96112a85aa2d79a40b91a18ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe7bea3637f455b0e78389b2b7ba5736ced7e96112a85aa2d79a40b91a18ebf->enter($__internal_cfe7bea3637f455b0e78389b2b7ba5736ced7e96112a85aa2d79a40b91a18ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfe7bea3637f455b0e78389b2b7ba5736ced7e96112a85aa2d79a40b91a18ebf->leave($__internal_cfe7bea3637f455b0e78389b2b7ba5736ced7e96112a85aa2d79a40b91a18ebf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44bc0c048e635232fbb9d44f2eec4adb2c64802a44b9cae3f7de050b1a79b498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bc0c048e635232fbb9d44f2eec4adb2c64802a44b9cae3f7de050b1a79b498->enter($__internal_44bc0c048e635232fbb9d44f2eec4adb2c64802a44b9cae3f7de050b1a79b498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44bc0c048e635232fbb9d44f2eec4adb2c64802a44b9cae3f7de050b1a79b498->leave($__internal_44bc0c048e635232fbb9d44f2eec4adb2c64802a44b9cae3f7de050b1a79b498_prof);

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
