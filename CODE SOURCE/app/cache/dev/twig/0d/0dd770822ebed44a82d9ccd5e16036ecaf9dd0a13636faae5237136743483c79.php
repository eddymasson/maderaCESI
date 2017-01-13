<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c278ae4ef8fd67099a11ce7c1acc01d9b301e5a92e8e15cb218b5efe43cc293b extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca124c7e81cc977a5c8522bf473f727ea97a471da3ac5d346edd0e61d653cab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca124c7e81cc977a5c8522bf473f727ea97a471da3ac5d346edd0e61d653cab9->enter($__internal_ca124c7e81cc977a5c8522bf473f727ea97a471da3ac5d346edd0e61d653cab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca124c7e81cc977a5c8522bf473f727ea97a471da3ac5d346edd0e61d653cab9->leave($__internal_ca124c7e81cc977a5c8522bf473f727ea97a471da3ac5d346edd0e61d653cab9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4b28ced3bc3cf2f1291d5279f7f44ec8b67638686adcafc8ca09ad215b9ec2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b28ced3bc3cf2f1291d5279f7f44ec8b67638686adcafc8ca09ad215b9ec2d5->enter($__internal_4b28ced3bc3cf2f1291d5279f7f44ec8b67638686adcafc8ca09ad215b9ec2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_4b28ced3bc3cf2f1291d5279f7f44ec8b67638686adcafc8ca09ad215b9ec2d5->leave($__internal_4b28ced3bc3cf2f1291d5279f7f44ec8b67638686adcafc8ca09ad215b9ec2d5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
