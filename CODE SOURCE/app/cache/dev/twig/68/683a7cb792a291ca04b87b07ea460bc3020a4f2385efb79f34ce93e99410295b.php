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
        $__internal_fb692e65dfa0ac093b400cc8880d0bd5fe297972fae58ac4afddd3173fb0931b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb692e65dfa0ac093b400cc8880d0bd5fe297972fae58ac4afddd3173fb0931b->enter($__internal_fb692e65dfa0ac093b400cc8880d0bd5fe297972fae58ac4afddd3173fb0931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb692e65dfa0ac093b400cc8880d0bd5fe297972fae58ac4afddd3173fb0931b->leave($__internal_fb692e65dfa0ac093b400cc8880d0bd5fe297972fae58ac4afddd3173fb0931b_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_feb6142d392ba09515861d9e00ff9a2f8da128f142588988ca155ae28f3f476a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb6142d392ba09515861d9e00ff9a2f8da128f142588988ca155ae28f3f476a->enter($__internal_feb6142d392ba09515861d9e00ff9a2f8da128f142588988ca155ae28f3f476a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_feb6142d392ba09515861d9e00ff9a2f8da128f142588988ca155ae28f3f476a->leave($__internal_feb6142d392ba09515861d9e00ff9a2f8da128f142588988ca155ae28f3f476a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_7c8dcc23e683966e442ee7744c921cc5fb0bec63f3a8a42b0aab9cb6ed334b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8dcc23e683966e442ee7744c921cc5fb0bec63f3a8a42b0aab9cb6ed334b94->enter($__internal_7c8dcc23e683966e442ee7744c921cc5fb0bec63f3a8a42b0aab9cb6ed334b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_7c8dcc23e683966e442ee7744c921cc5fb0bec63f3a8a42b0aab9cb6ed334b94->leave($__internal_7c8dcc23e683966e442ee7744c921cc5fb0bec63f3a8a42b0aab9cb6ed334b94_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3e26f9efe53e4e513e4e0babe771649fcb75e5ea761ec4f594601cf368a29a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e26f9efe53e4e513e4e0babe771649fcb75e5ea761ec4f594601cf368a29a2e->enter($__internal_3e26f9efe53e4e513e4e0babe771649fcb75e5ea761ec4f594601cf368a29a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_3e26f9efe53e4e513e4e0babe771649fcb75e5ea761ec4f594601cf368a29a2e->leave($__internal_3e26f9efe53e4e513e4e0babe771649fcb75e5ea761ec4f594601cf368a29a2e_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_87ebf4e29eaddbe0a759142560a45e49b54f4704a21cbacbc40db83308c536a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ebf4e29eaddbe0a759142560a45e49b54f4704a21cbacbc40db83308c536a2->enter($__internal_87ebf4e29eaddbe0a759142560a45e49b54f4704a21cbacbc40db83308c536a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_87ebf4e29eaddbe0a759142560a45e49b54f4704a21cbacbc40db83308c536a2->leave($__internal_87ebf4e29eaddbe0a759142560a45e49b54f4704a21cbacbc40db83308c536a2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_874a044530ff79b75794dc10f72c7896edc420a378200928e8ea6e37c9f63bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874a044530ff79b75794dc10f72c7896edc420a378200928e8ea6e37c9f63bfd->enter($__internal_874a044530ff79b75794dc10f72c7896edc420a378200928e8ea6e37c9f63bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_874a044530ff79b75794dc10f72c7896edc420a378200928e8ea6e37c9f63bfd->leave($__internal_874a044530ff79b75794dc10f72c7896edc420a378200928e8ea6e37c9f63bfd_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b6c2dee6e953158ad63f285870d6a43d83bc42161fdb73ae7004640a5602fd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c2dee6e953158ad63f285870d6a43d83bc42161fdb73ae7004640a5602fd47->enter($__internal_b6c2dee6e953158ad63f285870d6a43d83bc42161fdb73ae7004640a5602fd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_b6c2dee6e953158ad63f285870d6a43d83bc42161fdb73ae7004640a5602fd47->leave($__internal_b6c2dee6e953158ad63f285870d6a43d83bc42161fdb73ae7004640a5602fd47_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_ae2756995a45c6e2ce77a5e6a67cd4078014ee222094b93e74a6bab5d5f1accc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2756995a45c6e2ce77a5e6a67cd4078014ee222094b93e74a6bab5d5f1accc->enter($__internal_ae2756995a45c6e2ce77a5e6a67cd4078014ee222094b93e74a6bab5d5f1accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_ae2756995a45c6e2ce77a5e6a67cd4078014ee222094b93e74a6bab5d5f1accc->leave($__internal_ae2756995a45c6e2ce77a5e6a67cd4078014ee222094b93e74a6bab5d5f1accc_prof);

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
