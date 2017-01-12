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
        $__internal_e4b285a3c6f33604808e391b4a9bc34a58d7897d04a1b34e836ec14523b7c400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b285a3c6f33604808e391b4a9bc34a58d7897d04a1b34e836ec14523b7c400->enter($__internal_e4b285a3c6f33604808e391b4a9bc34a58d7897d04a1b34e836ec14523b7c400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b285a3c6f33604808e391b4a9bc34a58d7897d04a1b34e836ec14523b7c400->leave($__internal_e4b285a3c6f33604808e391b4a9bc34a58d7897d04a1b34e836ec14523b7c400_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_22ffe75e5255fbfb3370531c6f3e244202e20b91c33164cbea6421ca16c039bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ffe75e5255fbfb3370531c6f3e244202e20b91c33164cbea6421ca16c039bd->enter($__internal_22ffe75e5255fbfb3370531c6f3e244202e20b91c33164cbea6421ca16c039bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_22ffe75e5255fbfb3370531c6f3e244202e20b91c33164cbea6421ca16c039bd->leave($__internal_22ffe75e5255fbfb3370531c6f3e244202e20b91c33164cbea6421ca16c039bd_prof);

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
