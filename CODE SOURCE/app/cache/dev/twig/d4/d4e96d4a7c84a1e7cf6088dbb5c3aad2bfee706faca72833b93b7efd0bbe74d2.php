<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_4262fe818ce2b023eb383f6b9182418da4cce5b631027d201ec09571a3c7174e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_406ac53a4b601008b915399766604ab87990f8ff721996527e3d88b904cd4a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406ac53a4b601008b915399766604ab87990f8ff721996527e3d88b904cd4a55->enter($__internal_406ac53a4b601008b915399766604ab87990f8ff721996527e3d88b904cd4a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406ac53a4b601008b915399766604ab87990f8ff721996527e3d88b904cd4a55->leave($__internal_406ac53a4b601008b915399766604ab87990f8ff721996527e3d88b904cd4a55_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7e63c6ffe528fa972b56be82f633e6d69291b606e50b548ffd07ac518c2d51ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e63c6ffe528fa972b56be82f633e6d69291b606e50b548ffd07ac518c2d51ae->enter($__internal_7e63c6ffe528fa972b56be82f633e6d69291b606e50b548ffd07ac518c2d51ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_7e63c6ffe528fa972b56be82f633e6d69291b606e50b548ffd07ac518c2d51ae->leave($__internal_7e63c6ffe528fa972b56be82f633e6d69291b606e50b548ffd07ac518c2d51ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
