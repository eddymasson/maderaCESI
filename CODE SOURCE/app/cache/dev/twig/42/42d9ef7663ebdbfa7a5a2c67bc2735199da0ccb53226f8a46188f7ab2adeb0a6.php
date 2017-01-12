<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_1518e2c10e359088b09716498c11a0de0984b18e59d8025c910249630050ae03 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_372d7e7109c13a2a133d89a594524439ea3f2186991ddbe9510ce4d6b1e9bb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372d7e7109c13a2a133d89a594524439ea3f2186991ddbe9510ce4d6b1e9bb79->enter($__internal_372d7e7109c13a2a133d89a594524439ea3f2186991ddbe9510ce4d6b1e9bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_372d7e7109c13a2a133d89a594524439ea3f2186991ddbe9510ce4d6b1e9bb79->leave($__internal_372d7e7109c13a2a133d89a594524439ea3f2186991ddbe9510ce4d6b1e9bb79_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7695271101b49ec764a000ddf78576c319dfac687079eee68d7f8d9735d39f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7695271101b49ec764a000ddf78576c319dfac687079eee68d7f8d9735d39f2a->enter($__internal_7695271101b49ec764a000ddf78576c319dfac687079eee68d7f8d9735d39f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf(($context["valueFormat"] ?? $this->getContext($context, "valueFormat")), ($context["value"] ?? $this->getContext($context, "value"))), array(), ($context["translationDomain"] ?? $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_7695271101b49ec764a000ddf78576c319dfac687079eee68d7f8d9735d39f2a->leave($__internal_7695271101b49ec764a000ddf78576c319dfac687079eee68d7f8d9735d39f2a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
