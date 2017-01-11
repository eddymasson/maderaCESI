<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_f0d3ed0998b39a3ffb078b943321444ea246837d3abdb64a76fb66b9b84111d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3b9d00e1c5eafe599f97fbc5c606f164dea206ecf99e7d480213e3fc79fb77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b9d00e1c5eafe599f97fbc5c606f164dea206ecf99e7d480213e3fc79fb77b->enter($__internal_b3b9d00e1c5eafe599f97fbc5c606f164dea206ecf99e7d480213e3fc79fb77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3b9d00e1c5eafe599f97fbc5c606f164dea206ecf99e7d480213e3fc79fb77b->leave($__internal_b3b9d00e1c5eafe599f97fbc5c606f164dea206ecf99e7d480213e3fc79fb77b_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_2bdc9c3bd402cd94f1752a7880ab4b2099d7e205577e01900ed66fa2d3590e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdc9c3bd402cd94f1752a7880ab4b2099d7e205577e01900ed66fa2d3590e24->enter($__internal_2bdc9c3bd402cd94f1752a7880ab4b2099d7e205577e01900ed66fa2d3590e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_2bdc9c3bd402cd94f1752a7880ab4b2099d7e205577e01900ed66fa2d3590e24->leave($__internal_2bdc9c3bd402cd94f1752a7880ab4b2099d7e205577e01900ed66fa2d3590e24_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ce922e110c28f1755bb3ce116c75134ce6304505a78dcc29b9a5eff7498df9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce922e110c28f1755bb3ce116c75134ce6304505a78dcc29b9a5eff7498df9b8->enter($__internal_ce922e110c28f1755bb3ce116c75134ce6304505a78dcc29b9a5eff7498df9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ce922e110c28f1755bb3ce116c75134ce6304505a78dcc29b9a5eff7498df9b8->leave($__internal_ce922e110c28f1755bb3ce116c75134ce6304505a78dcc29b9a5eff7498df9b8_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a2d93ecf5d0e0b40f572c9bd3da666427a3f0688aed875404715689329bd6921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d93ecf5d0e0b40f572c9bd3da666427a3f0688aed875404715689329bd6921->enter($__internal_a2d93ecf5d0e0b40f572c9bd3da666427a3f0688aed875404715689329bd6921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a2d93ecf5d0e0b40f572c9bd3da666427a3f0688aed875404715689329bd6921->leave($__internal_a2d93ecf5d0e0b40f572c9bd3da666427a3f0688aed875404715689329bd6921_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_4092b714d04aeb6b78b45da90605cf787ca449ef4e80db4b7076011abe22d5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4092b714d04aeb6b78b45da90605cf787ca449ef4e80db4b7076011abe22d5fd->enter($__internal_4092b714d04aeb6b78b45da90605cf787ca449ef4e80db4b7076011abe22d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_4092b714d04aeb6b78b45da90605cf787ca449ef4e80db4b7076011abe22d5fd->leave($__internal_4092b714d04aeb6b78b45da90605cf787ca449ef4e80db4b7076011abe22d5fd_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28e66a686f837f2bb6e768f8c17adceb9a411156adc45283673a76556066c489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e66a686f837f2bb6e768f8c17adceb9a411156adc45283673a76556066c489->enter($__internal_28e66a686f837f2bb6e768f8c17adceb9a411156adc45283673a76556066c489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_28e66a686f837f2bb6e768f8c17adceb9a411156adc45283673a76556066c489->leave($__internal_28e66a686f837f2bb6e768f8c17adceb9a411156adc45283673a76556066c489_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_4c91ff27adf94e87fcb285edfa277e50f6f8c1460526cc8d2ccac94535426634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c91ff27adf94e87fcb285edfa277e50f6f8c1460526cc8d2ccac94535426634->enter($__internal_4c91ff27adf94e87fcb285edfa277e50f6f8c1460526cc8d2ccac94535426634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_4c91ff27adf94e87fcb285edfa277e50f6f8c1460526cc8d2ccac94535426634->leave($__internal_4c91ff27adf94e87fcb285edfa277e50f6f8c1460526cc8d2ccac94535426634_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_4c64abeed0eb65d82b96420b45d8ee8c1d3a95f25aa386b88601be581cc58102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c64abeed0eb65d82b96420b45d8ee8c1d3a95f25aa386b88601be581cc58102->enter($__internal_4c64abeed0eb65d82b96420b45d8ee8c1d3a95f25aa386b88601be581cc58102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_4c64abeed0eb65d82b96420b45d8ee8c1d3a95f25aa386b88601be581cc58102->leave($__internal_4c64abeed0eb65d82b96420b45d8ee8c1d3a95f25aa386b88601be581cc58102_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
