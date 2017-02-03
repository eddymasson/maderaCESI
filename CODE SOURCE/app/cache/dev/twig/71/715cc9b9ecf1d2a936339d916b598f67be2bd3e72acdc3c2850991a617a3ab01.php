<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_8a30a6e33b339c3580af501c1e28ac2386d0f8ef1534400ba6d02f590e291dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f464359b726dec7ae16d3abf848be05ceecfb5b1cec8d0e30f12bc0dec6acb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f464359b726dec7ae16d3abf848be05ceecfb5b1cec8d0e30f12bc0dec6acb9->enter($__internal_3f464359b726dec7ae16d3abf848be05ceecfb5b1cec8d0e30f12bc0dec6acb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f464359b726dec7ae16d3abf848be05ceecfb5b1cec8d0e30f12bc0dec6acb9->leave($__internal_3f464359b726dec7ae16d3abf848be05ceecfb5b1cec8d0e30f12bc0dec6acb9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
