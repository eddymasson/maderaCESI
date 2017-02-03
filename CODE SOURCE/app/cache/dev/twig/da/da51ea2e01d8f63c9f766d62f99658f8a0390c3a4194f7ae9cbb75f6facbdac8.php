<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_bc6c688490728d35b7331c50e1832f81a922105acc90124dab72be6ebde390bf extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36a53a58e835c4a753a822e77923689ee99b5b284f26b70a7fb42a621da48815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a53a58e835c4a753a822e77923689ee99b5b284f26b70a7fb42a621da48815->enter($__internal_36a53a58e835c4a753a822e77923689ee99b5b284f26b70a7fb42a621da48815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a53a58e835c4a753a822e77923689ee99b5b284f26b70a7fb42a621da48815->leave($__internal_36a53a58e835c4a753a822e77923689ee99b5b284f26b70a7fb42a621da48815_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_17f3c5ca4775f70acbcc46bc18cde98c2539c3ee17a5666c94c1f50fd5afbce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f3c5ca4775f70acbcc46bc18cde98c2539c3ee17a5666c94c1f50fd5afbce2->enter($__internal_17f3c5ca4775f70acbcc46bc18cde98c2539c3ee17a5666c94c1f50fd5afbce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_17f3c5ca4775f70acbcc46bc18cde98c2539c3ee17a5666c94c1f50fd5afbce2->leave($__internal_17f3c5ca4775f70acbcc46bc18cde98c2539c3ee17a5666c94c1f50fd5afbce2_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
