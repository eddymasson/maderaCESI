<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_29cb650bafda2ec779d662918988a90fae707f9582cf9fc6cc75987450a6df31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71097e06954d2026f8bb74cf1eb121a1f3e4cb6544e1bf3f8c408004b5c58668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71097e06954d2026f8bb74cf1eb121a1f3e4cb6544e1bf3f8c408004b5c58668->enter($__internal_71097e06954d2026f8bb74cf1eb121a1f3e4cb6544e1bf3f8c408004b5c58668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71097e06954d2026f8bb74cf1eb121a1f3e4cb6544e1bf3f8c408004b5c58668->leave($__internal_71097e06954d2026f8bb74cf1eb121a1f3e4cb6544e1bf3f8c408004b5c58668_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fc499a4a6b3c8ceaf213668f77f7b91ac134bc4a5792f801bf38cae4dab48b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc499a4a6b3c8ceaf213668f77f7b91ac134bc4a5792f801bf38cae4dab48b08->enter($__internal_fc499a4a6b3c8ceaf213668f77f7b91ac134bc4a5792f801bf38cae4dab48b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_fc499a4a6b3c8ceaf213668f77f7b91ac134bc4a5792f801bf38cae4dab48b08->leave($__internal_fc499a4a6b3c8ceaf213668f77f7b91ac134bc4a5792f801bf38cae4dab48b08_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
