<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_811b43ea5808ed5814641332f2aaca5508fb4c0284ab4805ac0ac043750543f5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_598e142d1da01d8742d88fa8133fabcd71277b6feb67937c4478e7e30730d387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598e142d1da01d8742d88fa8133fabcd71277b6feb67937c4478e7e30730d387->enter($__internal_598e142d1da01d8742d88fa8133fabcd71277b6feb67937c4478e7e30730d387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598e142d1da01d8742d88fa8133fabcd71277b6feb67937c4478e7e30730d387->leave($__internal_598e142d1da01d8742d88fa8133fabcd71277b6feb67937c4478e7e30730d387_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_fb92af2a5fa2d2f5c35f835b328604a3485b04645093590e6f9f9fdc1571e2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb92af2a5fa2d2f5c35f835b328604a3485b04645093590e6f9f9fdc1571e2f9->enter($__internal_fb92af2a5fa2d2f5c35f835b328604a3485b04645093590e6f9f9fdc1571e2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_fb92af2a5fa2d2f5c35f835b328604a3485b04645093590e6f9f9fdc1571e2f9->leave($__internal_fb92af2a5fa2d2f5c35f835b328604a3485b04645093590e6f9f9fdc1571e2f9_prof);

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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
