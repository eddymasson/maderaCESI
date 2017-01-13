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
        $__internal_4bb9e10e50e96a8ca18f57f1efffdb77a2bcf14ddb7c64027285a1f24a3c1441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb9e10e50e96a8ca18f57f1efffdb77a2bcf14ddb7c64027285a1f24a3c1441->enter($__internal_4bb9e10e50e96a8ca18f57f1efffdb77a2bcf14ddb7c64027285a1f24a3c1441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bb9e10e50e96a8ca18f57f1efffdb77a2bcf14ddb7c64027285a1f24a3c1441->leave($__internal_4bb9e10e50e96a8ca18f57f1efffdb77a2bcf14ddb7c64027285a1f24a3c1441_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9f92f480f3aab1bc91a9e232013952daa8d879f70201b22920d3cd0d498bd186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f92f480f3aab1bc91a9e232013952daa8d879f70201b22920d3cd0d498bd186->enter($__internal_9f92f480f3aab1bc91a9e232013952daa8d879f70201b22920d3cd0d498bd186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_9f92f480f3aab1bc91a9e232013952daa8d879f70201b22920d3cd0d498bd186->leave($__internal_9f92f480f3aab1bc91a9e232013952daa8d879f70201b22920d3cd0d498bd186_prof);

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
