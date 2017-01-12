<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_293652f8bd8c3d92cd98a19dece12a04159b45cc533f8d65ad9dfceec112470a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7354e7364da0c7a6623b2ef2cd2f7e36ee504f5528e668dbaf6e11da7841ffb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7354e7364da0c7a6623b2ef2cd2f7e36ee504f5528e668dbaf6e11da7841ffb6->enter($__internal_7354e7364da0c7a6623b2ef2cd2f7e36ee504f5528e668dbaf6e11da7841ffb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7354e7364da0c7a6623b2ef2cd2f7e36ee504f5528e668dbaf6e11da7841ffb6->leave($__internal_7354e7364da0c7a6623b2ef2cd2f7e36ee504f5528e668dbaf6e11da7841ffb6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
