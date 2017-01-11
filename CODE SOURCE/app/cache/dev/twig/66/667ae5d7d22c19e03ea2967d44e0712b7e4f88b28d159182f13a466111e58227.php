<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_309f2543f7a9ae7d75411febd475a8d97e40658c31cd3d35ab190cd816726aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3988b9a812f9a3bf946097e8498191b1f078fee3c0fba2954dc1f95a6de2f0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3988b9a812f9a3bf946097e8498191b1f078fee3c0fba2954dc1f95a6de2f0e7->enter($__internal_3988b9a812f9a3bf946097e8498191b1f078fee3c0fba2954dc1f95a6de2f0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3988b9a812f9a3bf946097e8498191b1f078fee3c0fba2954dc1f95a6de2f0e7->leave($__internal_3988b9a812f9a3bf946097e8498191b1f078fee3c0fba2954dc1f95a6de2f0e7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aff234d22219c0db3406f21c07c8d6b54c2a9783b2211f3e63423640e0c3e6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff234d22219c0db3406f21c07c8d6b54c2a9783b2211f3e63423640e0c3e6a7->enter($__internal_aff234d22219c0db3406f21c07c8d6b54c2a9783b2211f3e63423640e0c3e6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_aff234d22219c0db3406f21c07c8d6b54c2a9783b2211f3e63423640e0c3e6a7->leave($__internal_aff234d22219c0db3406f21c07c8d6b54c2a9783b2211f3e63423640e0c3e6a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
