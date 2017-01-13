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
        $__internal_fc8c3ca90eb1117d7d7adce7ab1fbe4ea991f4a30336a827ec810449ce5dfb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8c3ca90eb1117d7d7adce7ab1fbe4ea991f4a30336a827ec810449ce5dfb6b->enter($__internal_fc8c3ca90eb1117d7d7adce7ab1fbe4ea991f4a30336a827ec810449ce5dfb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc8c3ca90eb1117d7d7adce7ab1fbe4ea991f4a30336a827ec810449ce5dfb6b->leave($__internal_fc8c3ca90eb1117d7d7adce7ab1fbe4ea991f4a30336a827ec810449ce5dfb6b_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_96763e702bd7f5604cd8e55c16573c739f02c704b437026f8208819e8e8e9a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96763e702bd7f5604cd8e55c16573c739f02c704b437026f8208819e8e8e9a55->enter($__internal_96763e702bd7f5604cd8e55c16573c739f02c704b437026f8208819e8e8e9a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_96763e702bd7f5604cd8e55c16573c739f02c704b437026f8208819e8e8e9a55->leave($__internal_96763e702bd7f5604cd8e55c16573c739f02c704b437026f8208819e8e8e9a55_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d0fca24ea64885501bef49d8dca9513e67de6652baf81c1184868b4f15741308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fca24ea64885501bef49d8dca9513e67de6652baf81c1184868b4f15741308->enter($__internal_d0fca24ea64885501bef49d8dca9513e67de6652baf81c1184868b4f15741308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d0fca24ea64885501bef49d8dca9513e67de6652baf81c1184868b4f15741308->leave($__internal_d0fca24ea64885501bef49d8dca9513e67de6652baf81c1184868b4f15741308_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_78af62b009e2994fd4c3b72f0abb3dae77961598790dfd3fc844c6d6bc8955f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78af62b009e2994fd4c3b72f0abb3dae77961598790dfd3fc844c6d6bc8955f8->enter($__internal_78af62b009e2994fd4c3b72f0abb3dae77961598790dfd3fc844c6d6bc8955f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_78af62b009e2994fd4c3b72f0abb3dae77961598790dfd3fc844c6d6bc8955f8->leave($__internal_78af62b009e2994fd4c3b72f0abb3dae77961598790dfd3fc844c6d6bc8955f8_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_314e9f803779e35ee3fdd53daa10113464de318b82938fb68b4a297491af8f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314e9f803779e35ee3fdd53daa10113464de318b82938fb68b4a297491af8f58->enter($__internal_314e9f803779e35ee3fdd53daa10113464de318b82938fb68b4a297491af8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_314e9f803779e35ee3fdd53daa10113464de318b82938fb68b4a297491af8f58->leave($__internal_314e9f803779e35ee3fdd53daa10113464de318b82938fb68b4a297491af8f58_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ccc3f33c62aced50519229f4650a469500c05286b77f8dac331c8d2a4fe313c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccc3f33c62aced50519229f4650a469500c05286b77f8dac331c8d2a4fe313c->enter($__internal_8ccc3f33c62aced50519229f4650a469500c05286b77f8dac331c8d2a4fe313c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8ccc3f33c62aced50519229f4650a469500c05286b77f8dac331c8d2a4fe313c->leave($__internal_8ccc3f33c62aced50519229f4650a469500c05286b77f8dac331c8d2a4fe313c_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_1dddb3601e221b5c844d0671f0a49fa03c4c0902b1b8f50d6c69fe367b843f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dddb3601e221b5c844d0671f0a49fa03c4c0902b1b8f50d6c69fe367b843f40->enter($__internal_1dddb3601e221b5c844d0671f0a49fa03c4c0902b1b8f50d6c69fe367b843f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_1dddb3601e221b5c844d0671f0a49fa03c4c0902b1b8f50d6c69fe367b843f40->leave($__internal_1dddb3601e221b5c844d0671f0a49fa03c4c0902b1b8f50d6c69fe367b843f40_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_3824d9a2f8de39b549461e5bcf68d2ba933c163f8d3dd9fcc000900f652cb60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3824d9a2f8de39b549461e5bcf68d2ba933c163f8d3dd9fcc000900f652cb60f->enter($__internal_3824d9a2f8de39b549461e5bcf68d2ba933c163f8d3dd9fcc000900f652cb60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_3824d9a2f8de39b549461e5bcf68d2ba933c163f8d3dd9fcc000900f652cb60f->leave($__internal_3824d9a2f8de39b549461e5bcf68d2ba933c163f8d3dd9fcc000900f652cb60f_prof);

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
