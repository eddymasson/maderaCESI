<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_e593242e8064c1c8ac4ae799fcf0e4e04ba1e8e6e8c39629623bb05a9f524204 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29442b1f41b0e4e81f19cef02b2afe1ff0759b98fe40febc67bf1d70dcfcd4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29442b1f41b0e4e81f19cef02b2afe1ff0759b98fe40febc67bf1d70dcfcd4f9->enter($__internal_29442b1f41b0e4e81f19cef02b2afe1ff0759b98fe40febc67bf1d70dcfcd4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29442b1f41b0e4e81f19cef02b2afe1ff0759b98fe40febc67bf1d70dcfcd4f9->leave($__internal_29442b1f41b0e4e81f19cef02b2afe1ff0759b98fe40febc67bf1d70dcfcd4f9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_76d94f8d1f8933b30535c75f71486cc7800767c6d14afd2ae10234ebc3001d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d94f8d1f8933b30535c75f71486cc7800767c6d14afd2ae10234ebc3001d03->enter($__internal_76d94f8d1f8933b30535c75f71486cc7800767c6d14afd2ae10234ebc3001d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_76d94f8d1f8933b30535c75f71486cc7800767c6d14afd2ae10234ebc3001d03->leave($__internal_76d94f8d1f8933b30535c75f71486cc7800767c6d14afd2ae10234ebc3001d03_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
