<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_957814f5a2fee7bf71b87709c37a84b2fb1a9e7cc0ba409cae198e65a2d38192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2209d6146b7fc2db8c631c3a3f50815222e91b1294af0a5c02c6c8fd4c6a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2209d6146b7fc2db8c631c3a3f50815222e91b1294af0a5c02c6c8fd4c6a28->enter($__internal_7a2209d6146b7fc2db8c631c3a3f50815222e91b1294af0a5c02c6c8fd4c6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_7a2209d6146b7fc2db8c631c3a3f50815222e91b1294af0a5c02c6c8fd4c6a28->leave($__internal_7a2209d6146b7fc2db8c631c3a3f50815222e91b1294af0a5c02c6c8fd4c6a28_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ede16b1e5f9054ee942bceaa667cef335d79a367355bc1b6fc2fe1782523655b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede16b1e5f9054ee942bceaa667cef335d79a367355bc1b6fc2fe1782523655b->enter($__internal_ede16b1e5f9054ee942bceaa667cef335d79a367355bc1b6fc2fe1782523655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        
        $__internal_ede16b1e5f9054ee942bceaa667cef335d79a367355bc1b6fc2fe1782523655b->leave($__internal_ede16b1e5f9054ee942bceaa667cef335d79a367355bc1b6fc2fe1782523655b_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c7039f5e453388aeaeee6900c2be036722fb21dd5fe95096a152557e60d43302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7039f5e453388aeaeee6900c2be036722fb21dd5fe95096a152557e60d43302->enter($__internal_c7039f5e453388aeaeee6900c2be036722fb21dd5fe95096a152557e60d43302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_c7039f5e453388aeaeee6900c2be036722fb21dd5fe95096a152557e60d43302->leave($__internal_c7039f5e453388aeaeee6900c2be036722fb21dd5fe95096a152557e60d43302_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_9ea58b78b09f46ae205fc88ba12fcdaef34eca4978f67a4215d985288ef3246e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea58b78b09f46ae205fc88ba12fcdaef34eca4978f67a4215d985288ef3246e->enter($__internal_9ea58b78b09f46ae205fc88ba12fcdaef34eca4978f67a4215d985288ef3246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'errors');
        
        $__internal_9ea58b78b09f46ae205fc88ba12fcdaef34eca4978f67a4215d985288ef3246e->leave($__internal_9ea58b78b09f46ae205fc88ba12fcdaef34eca4978f67a4215d985288ef3246e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
