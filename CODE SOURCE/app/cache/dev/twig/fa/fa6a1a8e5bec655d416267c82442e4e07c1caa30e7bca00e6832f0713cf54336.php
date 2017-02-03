<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_77e407c9f7ead965671a6084ba4106ac1e0f68b9ba3364fc0e7e449980d7983c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5369d631eb4ae2e5356479fa902b2def4c07e38690c1090429b295ca1a4fb7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5369d631eb4ae2e5356479fa902b2def4c07e38690c1090429b295ca1a4fb7d3->enter($__internal_5369d631eb4ae2e5356479fa902b2def4c07e38690c1090429b295ca1a4fb7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_5369d631eb4ae2e5356479fa902b2def4c07e38690c1090429b295ca1a4fb7d3->leave($__internal_5369d631eb4ae2e5356479fa902b2def4c07e38690c1090429b295ca1a4fb7d3_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_190f878499ea5447aa59a87bc70905683c30e87ebb4679d498c7ba23a292351c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190f878499ea5447aa59a87bc70905683c30e87ebb4679d498c7ba23a292351c->enter($__internal_190f878499ea5447aa59a87bc70905683c30e87ebb4679d498c7ba23a292351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 15, $this->getSourceContext()); })()) == "natural")) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 19, $this->getSourceContext()); })()), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_190f878499ea5447aa59a87bc70905683c30e87ebb4679d498c7ba23a292351c->leave($__internal_190f878499ea5447aa59a87bc70905683c30e87ebb4679d498c7ba23a292351c_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_df38fcac4e0bad929d072999dbf79ebd01348a106a86075f1ce1817c1d439257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df38fcac4e0bad929d072999dbf79ebd01348a106a86075f1ce1817c1d439257->enter($__internal_df38fcac4e0bad929d072999dbf79ebd01348a106a86075f1ce1817c1d439257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'widget');
        
        $__internal_df38fcac4e0bad929d072999dbf79ebd01348a106a86075f1ce1817c1d439257->leave($__internal_df38fcac4e0bad929d072999dbf79ebd01348a106a86075f1ce1817c1d439257_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_15af43d3e65a980cbcda9c491505c25d88ff3eebd604d0963d473214558eea92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15af43d3e65a980cbcda9c491505c25d88ff3eebd604d0963d473214558eea92->enter($__internal_15af43d3e65a980cbcda9c491505c25d88ff3eebd604d0963d473214558eea92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 28, $this->getSourceContext()); })()), 'errors');
        
        $__internal_15af43d3e65a980cbcda9c491505c25d88ff3eebd604d0963d473214558eea92->leave($__internal_15af43d3e65a980cbcda9c491505c25d88ff3eebd604d0963d473214558eea92_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 25,  91 => 23,  87 => 21,  81 => 19,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  54 => 29,  52 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 14,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
