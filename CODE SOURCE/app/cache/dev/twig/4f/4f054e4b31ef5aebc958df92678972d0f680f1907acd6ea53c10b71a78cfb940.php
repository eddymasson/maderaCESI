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
        $__internal_0557482bdb6b9373b919e2bc19ec633874c7b6722932d70d8ee82727e91f0b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0557482bdb6b9373b919e2bc19ec633874c7b6722932d70d8ee82727e91f0b8d->enter($__internal_0557482bdb6b9373b919e2bc19ec633874c7b6722932d70d8ee82727e91f0b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_0557482bdb6b9373b919e2bc19ec633874c7b6722932d70d8ee82727e91f0b8d->leave($__internal_0557482bdb6b9373b919e2bc19ec633874c7b6722932d70d8ee82727e91f0b8d_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_1b5f1003824419459530d037fe58aeb4de62e35161cc376a62992fef80284085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5f1003824419459530d037fe58aeb4de62e35161cc376a62992fef80284085->enter($__internal_1b5f1003824419459530d037fe58aeb4de62e35161cc376a62992fef80284085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_1b5f1003824419459530d037fe58aeb4de62e35161cc376a62992fef80284085->leave($__internal_1b5f1003824419459530d037fe58aeb4de62e35161cc376a62992fef80284085_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_82c37527d7330121fc85aab35905c528055ee372a371020556c5ec2697255c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c37527d7330121fc85aab35905c528055ee372a371020556c5ec2697255c07->enter($__internal_82c37527d7330121fc85aab35905c528055ee372a371020556c5ec2697255c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_82c37527d7330121fc85aab35905c528055ee372a371020556c5ec2697255c07->leave($__internal_82c37527d7330121fc85aab35905c528055ee372a371020556c5ec2697255c07_prof);

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
