<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_345c4d4143abde15da1d0829ccaa1c757e6546db6093d4675284fd82452f948e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_944b27b13f5849a883e4ecdbe5d69cd561b35cc0bfcf9ebbec3456d0bee88d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944b27b13f5849a883e4ecdbe5d69cd561b35cc0bfcf9ebbec3456d0bee88d74->enter($__internal_944b27b13f5849a883e4ecdbe5d69cd561b35cc0bfcf9ebbec3456d0bee88d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944b27b13f5849a883e4ecdbe5d69cd561b35cc0bfcf9ebbec3456d0bee88d74->leave($__internal_944b27b13f5849a883e4ecdbe5d69cd561b35cc0bfcf9ebbec3456d0bee88d74_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
