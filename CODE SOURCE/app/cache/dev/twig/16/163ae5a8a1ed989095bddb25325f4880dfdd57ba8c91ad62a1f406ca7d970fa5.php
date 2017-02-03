<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_9a069304a847aca272cb525ae923ed2c74513d02fa7e0fdd05be211747a1348c extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285184cbb07904e0388a4d3f86963398b1f2cd51066d1f7cb1323bb48accf16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285184cbb07904e0388a4d3f86963398b1f2cd51066d1f7cb1323bb48accf16b->enter($__internal_285184cbb07904e0388a4d3f86963398b1f2cd51066d1f7cb1323bb48accf16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285184cbb07904e0388a4d3f86963398b1f2cd51066d1f7cb1323bb48accf16b->leave($__internal_285184cbb07904e0388a4d3f86963398b1f2cd51066d1f7cb1323bb48accf16b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b4e8f9f9a86c4758d263c5f5f45eabfcbd01cee1d739cd0d7510954ed39de7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e8f9f9a86c4758d263c5f5f45eabfcbd01cee1d739cd0d7510954ed39de7bf->enter($__internal_b4e8f9f9a86c4758d263c5f5f45eabfcbd01cee1d739cd0d7510954ed39de7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_b4e8f9f9a86c4758d263c5f5f45eabfcbd01cee1d739cd0d7510954ed39de7bf->leave($__internal_b4e8f9f9a86c4758d263c5f5f45eabfcbd01cee1d739cd0d7510954ed39de7bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
