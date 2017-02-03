<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_3ba6b5d1ba077973d8fc91593a5de28d00974afb4117a8007fde31de99b45f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69b355fb3c246cc8b809e9a21e3f46e28a98de2ef745fd2e034cf9a59dcbeb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b355fb3c246cc8b809e9a21e3f46e28a98de2ef745fd2e034cf9a59dcbeb5e->enter($__internal_69b355fb3c246cc8b809e9a21e3f46e28a98de2ef745fd2e034cf9a59dcbeb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b355fb3c246cc8b809e9a21e3f46e28a98de2ef745fd2e034cf9a59dcbeb5e->leave($__internal_69b355fb3c246cc8b809e9a21e3f46e28a98de2ef745fd2e034cf9a59dcbeb5e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
