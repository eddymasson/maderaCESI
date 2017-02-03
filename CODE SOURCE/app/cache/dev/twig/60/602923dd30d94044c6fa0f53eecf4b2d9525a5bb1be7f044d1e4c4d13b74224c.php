<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_5a3f88abe7242b547b0796425a2bd5cf8bda2967c4e22812b394dfa3a9dae3d8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4af4ce26fc63c670f7198f25fff9995a51f0d0b46d85fb9d9783b784254a91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4af4ce26fc63c670f7198f25fff9995a51f0d0b46d85fb9d9783b784254a91c->enter($__internal_c4af4ce26fc63c670f7198f25fff9995a51f0d0b46d85fb9d9783b784254a91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4af4ce26fc63c670f7198f25fff9995a51f0d0b46d85fb9d9783b784254a91c->leave($__internal_c4af4ce26fc63c670f7198f25fff9995a51f0d0b46d85fb9d9783b784254a91c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_49d32d3914b3a295be2fea7918ca9857bc7ec7e386631cc28046eb1bd5b30f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d32d3914b3a295be2fea7918ca9857bc7ec7e386631cc28046eb1bd5b30f6e->enter($__internal_49d32d3914b3a295be2fea7918ca9857bc7ec7e386631cc28046eb1bd5b30f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 16, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_49d32d3914b3a295be2fea7918ca9857bc7ec7e386631cc28046eb1bd5b30f6e->leave($__internal_49d32d3914b3a295be2fea7918ca9857bc7ec7e386631cc28046eb1bd5b30f6e_prof);

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
