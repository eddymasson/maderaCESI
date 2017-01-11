<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_57961ae88ad24b1cdd93f33ce8dc1d9ea0ab2c3e58f7d29c36b9c1c67777723c extends Twig_Template
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
        $__internal_55456c008df1994c2eebfa40ec7d656a6ebc3cbb8fd8ecb8865064729acc5d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55456c008df1994c2eebfa40ec7d656a6ebc3cbb8fd8ecb8865064729acc5d68->enter($__internal_55456c008df1994c2eebfa40ec7d656a6ebc3cbb8fd8ecb8865064729acc5d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
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
        if ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array())) {
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
        
        $__internal_55456c008df1994c2eebfa40ec7d656a6ebc3cbb8fd8ecb8865064729acc5d68->leave($__internal_55456c008df1994c2eebfa40ec7d656a6ebc3cbb8fd8ecb8865064729acc5d68_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_ba8e6ba30272379a50a5c286e9e34fbe7ddc59fd963fa619a570bffb79708e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8e6ba30272379a50a5c286e9e34fbe7ddc59fd963fa619a570bffb79708e1a->enter($__internal_ba8e6ba30272379a50a5c286e9e34fbe7ddc59fd963fa619a570bffb79708e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_ba8e6ba30272379a50a5c286e9e34fbe7ddc59fd963fa619a570bffb79708e1a->leave($__internal_ba8e6ba30272379a50a5c286e9e34fbe7ddc59fd963fa619a570bffb79708e1a_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_94b6d891e2141398d5f136dc53b9c4e11d812cee390980c99ab23a82ff8e93fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b6d891e2141398d5f136dc53b9c4e11d812cee390980c99ab23a82ff8e93fa->enter($__internal_94b6d891e2141398d5f136dc53b9c4e11d812cee390980c99ab23a82ff8e93fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_94b6d891e2141398d5f136dc53b9c4e11d812cee390980c99ab23a82ff8e93fa->leave($__internal_94b6d891e2141398d5f136dc53b9c4e11d812cee390980c99ab23a82ff8e93fa_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_b556fd6180004fc5d78089c0a254e2a69151a4b34f0019ca0c5d27dda37e1415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b556fd6180004fc5d78089c0a254e2a69151a4b34f0019ca0c5d27dda37e1415->enter($__internal_b556fd6180004fc5d78089c0a254e2a69151a4b34f0019ca0c5d27dda37e1415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array());
        
        $__internal_b556fd6180004fc5d78089c0a254e2a69151a4b34f0019ca0c5d27dda37e1415->leave($__internal_b556fd6180004fc5d78089c0a254e2a69151a4b34f0019ca0c5d27dda37e1415_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_126faa0f79447ceadc718e7c9c6de0c185c195cab23de7f13f103af5c7205d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126faa0f79447ceadc718e7c9c6de0c185c195cab23de7f13f103af5c7205d95->enter($__internal_126faa0f79447ceadc718e7c9c6de0c185c195cab23de7f13f103af5c7205d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_126faa0f79447ceadc718e7c9c6de0c185c195cab23de7f13f103af5c7205d95->leave($__internal_126faa0f79447ceadc718e7c9c6de0c185c195cab23de7f13f103af5c7205d95_prof);

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
