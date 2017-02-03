<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_e2f85b454f44f4aa9925b7f8b4a2b7becc5181b64477bab294a0342af30ed128 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca9566e191218e86727087dd2d4f39a69c1025c4ca7965c905a6b6f4a05dddf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9566e191218e86727087dd2d4f39a69c1025c4ca7965c905a6b6f4a05dddf3->enter($__internal_ca9566e191218e86727087dd2d4f39a69c1025c4ca7965c905a6b6f4a05dddf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9566e191218e86727087dd2d4f39a69c1025c4ca7965c905a6b6f4a05dddf3->leave($__internal_ca9566e191218e86727087dd2d4f39a69c1025c4ca7965c905a6b6f4a05dddf3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5fed11db5771c24b5935ce58e3b8589af74da6b88a361ada5a5a901c6641c63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fed11db5771c24b5935ce58e3b8589af74da6b88a361ada5a5a901c6641c63e->enter($__internal_5fed11db5771c24b5935ce58e3b8589af74da6b88a361ada5a5a901c6641c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_5fed11db5771c24b5935ce58e3b8589af74da6b88a361ada5a5a901c6641c63e->leave($__internal_5fed11db5771c24b5935ce58e3b8589af74da6b88a361ada5a5a901c6641c63e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
