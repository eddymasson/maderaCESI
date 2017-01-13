<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_ca617976c212561ef9116eaa20bb28deb789fbf1b393e29b6c0f5e0cd2413c39 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c1a9482972251f69e871d8b0ccbc9cc882b73afd29fc4184bbf9c5a4945f706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1a9482972251f69e871d8b0ccbc9cc882b73afd29fc4184bbf9c5a4945f706->enter($__internal_1c1a9482972251f69e871d8b0ccbc9cc882b73afd29fc4184bbf9c5a4945f706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c1a9482972251f69e871d8b0ccbc9cc882b73afd29fc4184bbf9c5a4945f706->leave($__internal_1c1a9482972251f69e871d8b0ccbc9cc882b73afd29fc4184bbf9c5a4945f706_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_858cf80da2c9f3253f54c60852b415110b442eb0c13c850dd07ef2a4c6dfb12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858cf80da2c9f3253f54c60852b415110b442eb0c13c850dd07ef2a4c6dfb12f->enter($__internal_858cf80da2c9f3253f54c60852b415110b442eb0c13c850dd07ef2a4c6dfb12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_858cf80da2c9f3253f54c60852b415110b442eb0c13c850dd07ef2a4c6dfb12f->leave($__internal_858cf80da2c9f3253f54c60852b415110b442eb0c13c850dd07ef2a4c6dfb12f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
