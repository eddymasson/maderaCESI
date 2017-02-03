<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_d8e684d523bada9c1ee929080b04e24dd4c945b7c1eff58d23bd36bcf239bd3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f30d23816b1975520e9893018f619bf5b658c8491a1eedcb26322e28b5a4046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f30d23816b1975520e9893018f619bf5b658c8491a1eedcb26322e28b5a4046->enter($__internal_7f30d23816b1975520e9893018f619bf5b658c8491a1eedcb26322e28b5a4046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f30d23816b1975520e9893018f619bf5b658c8491a1eedcb26322e28b5a4046->leave($__internal_7f30d23816b1975520e9893018f619bf5b658c8491a1eedcb26322e28b5a4046_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
