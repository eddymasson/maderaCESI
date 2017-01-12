<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c88c19edcbab93737fd357a7acfc9891b4f557f24658332492ec16cc5be90d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fae64593146ee51bf49f9bf53bc38c4bf4136336e588d2d4132b8efbb7fa9b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae64593146ee51bf49f9bf53bc38c4bf4136336e588d2d4132b8efbb7fa9b69->enter($__internal_fae64593146ee51bf49f9bf53bc38c4bf4136336e588d2d4132b8efbb7fa9b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae64593146ee51bf49f9bf53bc38c4bf4136336e588d2d4132b8efbb7fa9b69->leave($__internal_fae64593146ee51bf49f9bf53bc38c4bf4136336e588d2d4132b8efbb7fa9b69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6459eabaf0cbdb6ace87c39df162b8314c87b9e7037d22c82fa0918443f1d12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6459eabaf0cbdb6ace87c39df162b8314c87b9e7037d22c82fa0918443f1d12b->enter($__internal_6459eabaf0cbdb6ace87c39df162b8314c87b9e7037d22c82fa0918443f1d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6459eabaf0cbdb6ace87c39df162b8314c87b9e7037d22c82fa0918443f1d12b->leave($__internal_6459eabaf0cbdb6ace87c39df162b8314c87b9e7037d22c82fa0918443f1d12b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
