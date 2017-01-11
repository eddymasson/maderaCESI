<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_63e04c1d48fc0d65ea2ce7dcd38eeac1ec731c5ba0706122a521971e96ee1c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f26f784d165bdc28deb750e9f256b421e9026173eafbb5ac45726356e8013c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26f784d165bdc28deb750e9f256b421e9026173eafbb5ac45726356e8013c6f->enter($__internal_f26f784d165bdc28deb750e9f256b421e9026173eafbb5ac45726356e8013c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["filter_form"] ?? $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_f26f784d165bdc28deb750e9f256b421e9026173eafbb5ac45726356e8013c6f->leave($__internal_f26f784d165bdc28deb750e9f256b421e9026173eafbb5ac45726356e8013c6f_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_a457cfd153b59104aa88023e7887e2d4758073aa7f74197dcb02f182028e823b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a457cfd153b59104aa88023e7887e2d4758073aa7f74197dcb02f182028e823b->enter($__internal_a457cfd153b59104aa88023e7887e2d4758073aa7f74197dcb02f182028e823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_a457cfd153b59104aa88023e7887e2d4758073aa7f74197dcb02f182028e823b->leave($__internal_a457cfd153b59104aa88023e7887e2d4758073aa7f74197dcb02f182028e823b_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_1666cb96444522b50812f4b331f7a3624ffa3f1b16d4280769a81e08d9c10541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1666cb96444522b50812f4b331f7a3624ffa3f1b16d4280769a81e08d9c10541->enter($__internal_1666cb96444522b50812f4b331f7a3624ffa3f1b16d4280769a81e08d9c10541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_1666cb96444522b50812f4b331f7a3624ffa3f1b16d4280769a81e08d9c10541->leave($__internal_1666cb96444522b50812f4b331f7a3624ffa3f1b16d4280769a81e08d9c10541_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
