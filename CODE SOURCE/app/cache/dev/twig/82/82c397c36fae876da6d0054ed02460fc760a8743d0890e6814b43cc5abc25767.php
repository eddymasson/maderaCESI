<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_a6be7672ecf2518945eb9baa8139782c79c74acf3504bb6e3a10d0d87a32fbe4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d223f95c8ba77497ddd24b8fa8d17afffc651c12e6b086b68cfa6523ddad725a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d223f95c8ba77497ddd24b8fa8d17afffc651c12e6b086b68cfa6523ddad725a->enter($__internal_d223f95c8ba77497ddd24b8fa8d17afffc651c12e6b086b68cfa6523ddad725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d223f95c8ba77497ddd24b8fa8d17afffc651c12e6b086b68cfa6523ddad725a->leave($__internal_d223f95c8ba77497ddd24b8fa8d17afffc651c12e6b086b68cfa6523ddad725a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_399fc6db17b1e4ac6eaa0b4647aa9401e2d7e42e001b8fe1b00dd112c5dafd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399fc6db17b1e4ac6eaa0b4647aa9401e2d7e42e001b8fe1b00dd112c5dafd34->enter($__internal_399fc6db17b1e4ac6eaa0b4647aa9401e2d7e42e001b8fe1b00dd112c5dafd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_399fc6db17b1e4ac6eaa0b4647aa9401e2d7e42e001b8fe1b00dd112c5dafd34->leave($__internal_399fc6db17b1e4ac6eaa0b4647aa9401e2d7e42e001b8fe1b00dd112c5dafd34_prof);

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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}