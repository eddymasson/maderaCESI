<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_c48c2191393a385fc3ef4930c56145b86a51d2108701a265184792dac68441da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a493f759e489dfe26ba1ac94012e158ae32d6ec5af3580750d5650681ea51a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a493f759e489dfe26ba1ac94012e158ae32d6ec5af3580750d5650681ea51a85->enter($__internal_a493f759e489dfe26ba1ac94012e158ae32d6ec5af3580750d5650681ea51a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a493f759e489dfe26ba1ac94012e158ae32d6ec5af3580750d5650681ea51a85->leave($__internal_a493f759e489dfe26ba1ac94012e158ae32d6ec5af3580750d5650681ea51a85_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
