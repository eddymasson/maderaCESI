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
        $__internal_e6b1d71851c06e35730598c94df817382f32c413f324156b05925f696d8cd847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b1d71851c06e35730598c94df817382f32c413f324156b05925f696d8cd847->enter($__internal_e6b1d71851c06e35730598c94df817382f32c413f324156b05925f696d8cd847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6b1d71851c06e35730598c94df817382f32c413f324156b05925f696d8cd847->leave($__internal_e6b1d71851c06e35730598c94df817382f32c413f324156b05925f696d8cd847_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aa7d47f0552f8860d9713bad907cf73b6da6af10400a841ddac882e213cb76fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7d47f0552f8860d9713bad907cf73b6da6af10400a841ddac882e213cb76fd->enter($__internal_aa7d47f0552f8860d9713bad907cf73b6da6af10400a841ddac882e213cb76fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_aa7d47f0552f8860d9713bad907cf73b6da6af10400a841ddac882e213cb76fd->leave($__internal_aa7d47f0552f8860d9713bad907cf73b6da6af10400a841ddac882e213cb76fd_prof);

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