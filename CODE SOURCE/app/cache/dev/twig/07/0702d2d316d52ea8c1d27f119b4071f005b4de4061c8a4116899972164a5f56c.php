<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3f4962327cacd082f0a58196f27ea587e42d5e7a639be1798fe8873d4c1b2322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9874e23e141c1401f80bdcae9dbd375f3c03e18431ecbb99b3e577cbb1cb28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9874e23e141c1401f80bdcae9dbd375f3c03e18431ecbb99b3e577cbb1cb28f->enter($__internal_a9874e23e141c1401f80bdcae9dbd375f3c03e18431ecbb99b3e577cbb1cb28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9874e23e141c1401f80bdcae9dbd375f3c03e18431ecbb99b3e577cbb1cb28f->leave($__internal_a9874e23e141c1401f80bdcae9dbd375f3c03e18431ecbb99b3e577cbb1cb28f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da0ca13f0b1a807e92adc21374138e1f0fa403a16702d3cca0bc0fa807b176c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0ca13f0b1a807e92adc21374138e1f0fa403a16702d3cca0bc0fa807b176c8->enter($__internal_da0ca13f0b1a807e92adc21374138e1f0fa403a16702d3cca0bc0fa807b176c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_da0ca13f0b1a807e92adc21374138e1f0fa403a16702d3cca0bc0fa807b176c8->leave($__internal_da0ca13f0b1a807e92adc21374138e1f0fa403a16702d3cca0bc0fa807b176c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
