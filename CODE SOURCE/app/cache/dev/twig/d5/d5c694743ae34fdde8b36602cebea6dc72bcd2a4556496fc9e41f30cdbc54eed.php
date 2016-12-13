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
        $__internal_19cbe87f9f52011b280564d18da988d174456d9e54ba7ffa530f49e8dab1214b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cbe87f9f52011b280564d18da988d174456d9e54ba7ffa530f49e8dab1214b->enter($__internal_19cbe87f9f52011b280564d18da988d174456d9e54ba7ffa530f49e8dab1214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

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
        
        $__internal_19cbe87f9f52011b280564d18da988d174456d9e54ba7ffa530f49e8dab1214b->leave($__internal_19cbe87f9f52011b280564d18da988d174456d9e54ba7ffa530f49e8dab1214b_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_6a46e6bb1ea8f8f294ad75dfb242005a78817763a737a9f5b31104f0f6a01fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a46e6bb1ea8f8f294ad75dfb242005a78817763a737a9f5b31104f0f6a01fd2->enter($__internal_6a46e6bb1ea8f8f294ad75dfb242005a78817763a737a9f5b31104f0f6a01fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_6a46e6bb1ea8f8f294ad75dfb242005a78817763a737a9f5b31104f0f6a01fd2->leave($__internal_6a46e6bb1ea8f8f294ad75dfb242005a78817763a737a9f5b31104f0f6a01fd2_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_8d2d61c1d0540a18c26bac169bff261dbc4c8a416d5bbdac2ce3073c8c2a172d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2d61c1d0540a18c26bac169bff261dbc4c8a416d5bbdac2ce3073c8c2a172d->enter($__internal_8d2d61c1d0540a18c26bac169bff261dbc4c8a416d5bbdac2ce3073c8c2a172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_8d2d61c1d0540a18c26bac169bff261dbc4c8a416d5bbdac2ce3073c8c2a172d->leave($__internal_8d2d61c1d0540a18c26bac169bff261dbc4c8a416d5bbdac2ce3073c8c2a172d_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_c2549d0e3617a2a11600a8108166d6e84df69f674f29c41f9870a7111b791100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2549d0e3617a2a11600a8108166d6e84df69f674f29c41f9870a7111b791100->enter($__internal_c2549d0e3617a2a11600a8108166d6e84df69f674f29c41f9870a7111b791100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array());
        
        $__internal_c2549d0e3617a2a11600a8108166d6e84df69f674f29c41f9870a7111b791100->leave($__internal_c2549d0e3617a2a11600a8108166d6e84df69f674f29c41f9870a7111b791100_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_88358cfee63fdca908a14747da118133deb8b3e1efd2b3cd9308bdf358240c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88358cfee63fdca908a14747da118133deb8b3e1efd2b3cd9308bdf358240c26->enter($__internal_88358cfee63fdca908a14747da118133deb8b3e1efd2b3cd9308bdf358240c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_88358cfee63fdca908a14747da118133deb8b3e1efd2b3cd9308bdf358240c26->leave($__internal_88358cfee63fdca908a14747da118133deb8b3e1efd2b3cd9308bdf358240c26_prof);

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
