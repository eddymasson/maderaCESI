<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_a5cb5e7a037b93fd9a701fc1b9ccb9acbd6a83dd1402656241ea248c6e95b30e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb15a9a0eddb2e6cd6e39f70254297856aaff6d2c6a7371cde6695b917c02d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb15a9a0eddb2e6cd6e39f70254297856aaff6d2c6a7371cde6695b917c02d79->enter($__internal_cb15a9a0eddb2e6cd6e39f70254297856aaff6d2c6a7371cde6695b917c02d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb15a9a0eddb2e6cd6e39f70254297856aaff6d2c6a7371cde6695b917c02d79->leave($__internal_cb15a9a0eddb2e6cd6e39f70254297856aaff6d2c6a7371cde6695b917c02d79_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4b7890b47431813cd0ba4ababeaee9cc438502540323c66dcac41f61607780db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7890b47431813cd0ba4ababeaee9cc438502540323c66dcac41f61607780db->enter($__internal_4b7890b47431813cd0ba4ababeaee9cc438502540323c66dcac41f61607780db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4b7890b47431813cd0ba4ababeaee9cc438502540323c66dcac41f61607780db->leave($__internal_4b7890b47431813cd0ba4ababeaee9cc438502540323c66dcac41f61607780db_prof);

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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
