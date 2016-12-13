<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_b05a32ca39d3c3097f3a5e64273fed5767583228c927cdb0d716c0e2ee1e3a57 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1498266bad9dc5f922af13ad5b07a9019798d1ce6e83229ccc4a2fb53846115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1498266bad9dc5f922af13ad5b07a9019798d1ce6e83229ccc4a2fb53846115d->enter($__internal_1498266bad9dc5f922af13ad5b07a9019798d1ce6e83229ccc4a2fb53846115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1498266bad9dc5f922af13ad5b07a9019798d1ce6e83229ccc4a2fb53846115d->leave($__internal_1498266bad9dc5f922af13ad5b07a9019798d1ce6e83229ccc4a2fb53846115d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ee7e60dfb226051f795bc309832f0b63ceafb004c0aa122e3336b5c84d55257e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7e60dfb226051f795bc309832f0b63ceafb004c0aa122e3336b5c84d55257e->enter($__internal_ee7e60dfb226051f795bc309832f0b63ceafb004c0aa122e3336b5c84d55257e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ee7e60dfb226051f795bc309832f0b63ceafb004c0aa122e3336b5c84d55257e->leave($__internal_ee7e60dfb226051f795bc309832f0b63ceafb004c0aa122e3336b5c84d55257e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
