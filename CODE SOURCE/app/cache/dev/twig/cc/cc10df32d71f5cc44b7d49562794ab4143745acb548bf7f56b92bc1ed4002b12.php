<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_2b3ff176be03e3503782922fa3b36881bd448f0a9af702956dd6283cf3f2ecf5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7df0749b47ef4840906ed7657cf391a5c0125e810aea11089aefdb1ab642081f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df0749b47ef4840906ed7657cf391a5c0125e810aea11089aefdb1ab642081f->enter($__internal_7df0749b47ef4840906ed7657cf391a5c0125e810aea11089aefdb1ab642081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df0749b47ef4840906ed7657cf391a5c0125e810aea11089aefdb1ab642081f->leave($__internal_7df0749b47ef4840906ed7657cf391a5c0125e810aea11089aefdb1ab642081f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_34686c9d2b6d54a888d9a561fc7ef84f75bc3605bb90fc2fd1f4275342c573bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34686c9d2b6d54a888d9a561fc7ef84f75bc3605bb90fc2fd1f4275342c573bd->enter($__internal_34686c9d2b6d54a888d9a561fc7ef84f75bc3605bb90fc2fd1f4275342c573bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_34686c9d2b6d54a888d9a561fc7ef84f75bc3605bb90fc2fd1f4275342c573bd->leave($__internal_34686c9d2b6d54a888d9a561fc7ef84f75bc3605bb90fc2fd1f4275342c573bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
