<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_3895de40ce86d268141c8859626dc2f90c9348d3c4c02a1e483176d96498f871 extends Twig_Template
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
        $__internal_a93bfdcef3a7402ca9ad1bfebb5874ce4cc2be35d4272d273cec0e2b65ed4a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93bfdcef3a7402ca9ad1bfebb5874ce4cc2be35d4272d273cec0e2b65ed4a5a->enter($__internal_a93bfdcef3a7402ca9ad1bfebb5874ce4cc2be35d4272d273cec0e2b65ed4a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a93bfdcef3a7402ca9ad1bfebb5874ce4cc2be35d4272d273cec0e2b65ed4a5a->leave($__internal_a93bfdcef3a7402ca9ad1bfebb5874ce4cc2be35d4272d273cec0e2b65ed4a5a_prof);

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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
