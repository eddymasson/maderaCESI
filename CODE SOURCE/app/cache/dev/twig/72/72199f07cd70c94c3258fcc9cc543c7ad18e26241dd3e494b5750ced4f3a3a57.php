<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_b582eba2ba9f51d1c7739bd1cea100dbc3b998de5aacadd583e5d61aa9053cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285f5a07f83128b56439c4a3e328668ab41c0c7d9d3bed84a6dc269e0cb6af54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285f5a07f83128b56439c4a3e328668ab41c0c7d9d3bed84a6dc269e0cb6af54->enter($__internal_285f5a07f83128b56439c4a3e328668ab41c0c7d9d3bed84a6dc269e0cb6af54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_285f5a07f83128b56439c4a3e328668ab41c0c7d9d3bed84a6dc269e0cb6af54->leave($__internal_285f5a07f83128b56439c4a3e328668ab41c0c7d9d3bed84a6dc269e0cb6af54_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_8af4e1e08689d1a410db8f693c95945f38aeea3a9b0fd7c3a123262ad8caa2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af4e1e08689d1a410db8f693c95945f38aeea3a9b0fd7c3a123262ad8caa2bf->enter($__internal_8af4e1e08689d1a410db8f693c95945f38aeea3a9b0fd7c3a123262ad8caa2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_8af4e1e08689d1a410db8f693c95945f38aeea3a9b0fd7c3a123262ad8caa2bf->leave($__internal_8af4e1e08689d1a410db8f693c95945f38aeea3a9b0fd7c3a123262ad8caa2bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
