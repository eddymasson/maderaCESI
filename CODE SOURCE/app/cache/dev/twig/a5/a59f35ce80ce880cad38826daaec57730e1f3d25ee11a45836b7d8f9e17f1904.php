<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_154858a8372c7589b23af7d17db8cef83af36acdf8ad3ed8567cc169866fd87f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5fc8cee791e42ab7abcde63b38acd00fae5ab177d9a7747bdb25b65df024314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fc8cee791e42ab7abcde63b38acd00fae5ab177d9a7747bdb25b65df024314->enter($__internal_a5fc8cee791e42ab7abcde63b38acd00fae5ab177d9a7747bdb25b65df024314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 21, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 25, $this->getSourceContext()); })()), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_a5fc8cee791e42ab7abcde63b38acd00fae5ab177d9a7747bdb25b65df024314->leave($__internal_a5fc8cee791e42ab7abcde63b38acd00fae5ab177d9a7747bdb25b65df024314_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_b8b5ccb7cce3091101b13dcdcef76fdcb2e8b1ee70d26b04fee391f09b3c6908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b5ccb7cce3091101b13dcdcef76fdcb2e8b1ee70d26b04fee391f09b3c6908->enter($__internal_b8b5ccb7cce3091101b13dcdcef76fdcb2e8b1ee70d26b04fee391f09b3c6908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 15, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_b8b5ccb7cce3091101b13dcdcef76fdcb2e8b1ee70d26b04fee391f09b3c6908->leave($__internal_b8b5ccb7cce3091101b13dcdcef76fdcb2e8b1ee70d26b04fee391f09b3c6908_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_57e44ee02af909c139d12eab24363e2d70523c6818405937c878b92a06011ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e44ee02af909c139d12eab24363e2d70523c6818405937c878b92a06011ad7->enter($__internal_57e44ee02af909c139d12eab24363e2d70523c6818405937c878b92a06011ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        
        $__internal_57e44ee02af909c139d12eab24363e2d70523c6818405937c878b92a06011ad7->leave($__internal_57e44ee02af909c139d12eab24363e2d70523c6818405937c878b92a06011ad7_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_40825d51dd9cdda7a9e530ce6bf208a56ea37b682f93254e5d17c36d4d4217f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40825d51dd9cdda7a9e530ce6bf208a56ea37b682f93254e5d17c36d4d4217f5->enter($__internal_40825d51dd9cdda7a9e530ce6bf208a56ea37b682f93254e5d17c36d4d4217f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 26, $this->getSourceContext()); })()), "help", array());
        
        $__internal_40825d51dd9cdda7a9e530ce6bf208a56ea37b682f93254e5d17c36d4d4217f5->leave($__internal_40825d51dd9cdda7a9e530ce6bf208a56ea37b682f93254e5d17c36d4d4217f5_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_29517129a8c3218fdecab65894d6314c33fd7188732e127267b5742e0751ca67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29517129a8c3218fdecab65894d6314c33fd7188732e127267b5742e0751ca67->enter($__internal_29517129a8c3218fdecab65894d6314c33fd7188732e127267b5742e0751ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        
        $__internal_29517129a8c3218fdecab65894d6314c33fd7188732e127267b5742e0751ca67->leave($__internal_29517129a8c3218fdecab65894d6314c33fd7188732e127267b5742e0751ca67_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  123 => 26,  111 => 23,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 13,  72 => 31,  70 => 30,  66 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  42 => 21,  39 => 20,  37 => 13,  29 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
