<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_46799935231646cd518e94e13ed00fd7f193c1adbb0fa7a6e284b11431eae8db extends Twig_Template
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
        $__internal_712e5b9670692f817f07bb468fb00783ec6efd3f6319781f6173d8bff55d940c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712e5b9670692f817f07bb468fb00783ec6efd3f6319781f6173d8bff55d940c->enter($__internal_712e5b9670692f817f07bb468fb00783ec6efd3f6319781f6173d8bff55d940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_712e5b9670692f817f07bb468fb00783ec6efd3f6319781f6173d8bff55d940c->leave($__internal_712e5b9670692f817f07bb468fb00783ec6efd3f6319781f6173d8bff55d940c_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_72e877b87b05d1cb68fd742eaa114a1fb576d373124a16be4a985bfc793fda48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e877b87b05d1cb68fd742eaa114a1fb576d373124a16be4a985bfc793fda48->enter($__internal_72e877b87b05d1cb68fd742eaa114a1fb576d373124a16be4a985bfc793fda48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_72e877b87b05d1cb68fd742eaa114a1fb576d373124a16be4a985bfc793fda48->leave($__internal_72e877b87b05d1cb68fd742eaa114a1fb576d373124a16be4a985bfc793fda48_prof);

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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
