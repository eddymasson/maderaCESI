<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_8d9cd61aaa4d0f47050eb95da899859f8d791f90fd2f5d5528f43d7cb1b2f1be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e83542bf90cc9baecbea3870d4d1a035d35e0cee16d7c6161c455089750fbee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83542bf90cc9baecbea3870d4d1a035d35e0cee16d7c6161c455089750fbee8->enter($__internal_e83542bf90cc9baecbea3870d4d1a035d35e0cee16d7c6161c455089750fbee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e83542bf90cc9baecbea3870d4d1a035d35e0cee16d7c6161c455089750fbee8->leave($__internal_e83542bf90cc9baecbea3870d4d1a035d35e0cee16d7c6161c455089750fbee8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
