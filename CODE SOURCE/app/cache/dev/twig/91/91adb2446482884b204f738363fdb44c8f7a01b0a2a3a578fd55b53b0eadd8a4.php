<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_bd7726fa52a23216fc71f76df3ffe287abd829cdf4f2f8ada136436ac5fe2053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1c41bff1103e054c4a3409522b3c6ff54e214d7c3d83c88eb3f5d6a8f62fe1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c41bff1103e054c4a3409522b3c6ff54e214d7c3d83c88eb3f5d6a8f62fe1c->enter($__internal_b1c41bff1103e054c4a3409522b3c6ff54e214d7c3d83c88eb3f5d6a8f62fe1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c41bff1103e054c4a3409522b3c6ff54e214d7c3d83c88eb3f5d6a8f62fe1c->leave($__internal_b1c41bff1103e054c4a3409522b3c6ff54e214d7c3d83c88eb3f5d6a8f62fe1c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
