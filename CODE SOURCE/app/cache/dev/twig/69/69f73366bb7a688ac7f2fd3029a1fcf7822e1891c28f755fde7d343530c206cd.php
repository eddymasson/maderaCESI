<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_6c780c23b413e6fddcce80bf73819d9de95e078cec35d7869191fed9a4f46f27 extends Twig_Template
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
        $__internal_3037e26986ad4d6d0f130d0abff10a1ca66e3803a76f81ee5ea81f4992f9ad64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3037e26986ad4d6d0f130d0abff10a1ca66e3803a76f81ee5ea81f4992f9ad64->enter($__internal_3037e26986ad4d6d0f130d0abff10a1ca66e3803a76f81ee5ea81f4992f9ad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3037e26986ad4d6d0f130d0abff10a1ca66e3803a76f81ee5ea81f4992f9ad64->leave($__internal_3037e26986ad4d6d0f130d0abff10a1ca66e3803a76f81ee5ea81f4992f9ad64_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7851a919b493ddfed481c64f4853a73ab8946ebbb20f0b555e6f261c551f806a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7851a919b493ddfed481c64f4853a73ab8946ebbb20f0b555e6f261c551f806a->enter($__internal_7851a919b493ddfed481c64f4853a73ab8946ebbb20f0b555e6f261c551f806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_7851a919b493ddfed481c64f4853a73ab8946ebbb20f0b555e6f261c551f806a->leave($__internal_7851a919b493ddfed481c64f4853a73ab8946ebbb20f0b555e6f261c551f806a_prof);

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
