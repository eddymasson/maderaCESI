<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_d6c437da7d539a548fe0a44f3f7b4dfbe5ce5133f84d325c6346b8fe4cd305fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99d0a0f070e65b88d04841f637e397afad6c5a1f3f75e4ee3091441961866ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d0a0f070e65b88d04841f637e397afad6c5a1f3f75e4ee3091441961866ae5->enter($__internal_99d0a0f070e65b88d04841f637e397afad6c5a1f3f75e4ee3091441961866ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99d0a0f070e65b88d04841f637e397afad6c5a1f3f75e4ee3091441961866ae5->leave($__internal_99d0a0f070e65b88d04841f637e397afad6c5a1f3f75e4ee3091441961866ae5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
