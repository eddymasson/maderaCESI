<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_ce491adebd5ebef2e70eeda887dbb54f4faaf564c9dccce416aad8cd8aceda42 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc592f5c42ebc72f63ba4476334f61788acbd0697425b9857b442ef71cbd92cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc592f5c42ebc72f63ba4476334f61788acbd0697425b9857b442ef71cbd92cf->enter($__internal_fc592f5c42ebc72f63ba4476334f61788acbd0697425b9857b442ef71cbd92cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc592f5c42ebc72f63ba4476334f61788acbd0697425b9857b442ef71cbd92cf->leave($__internal_fc592f5c42ebc72f63ba4476334f61788acbd0697425b9857b442ef71cbd92cf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e2cb8f9575112b24768e0eaa3d625e0f38b65511871114b2cf680b5129b33f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cb8f9575112b24768e0eaa3d625e0f38b65511871114b2cf680b5129b33f06->enter($__internal_e2cb8f9575112b24768e0eaa3d625e0f38b65511871114b2cf680b5129b33f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e2cb8f9575112b24768e0eaa3d625e0f38b65511871114b2cf680b5129b33f06->leave($__internal_e2cb8f9575112b24768e0eaa3d625e0f38b65511871114b2cf680b5129b33f06_prof);

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
