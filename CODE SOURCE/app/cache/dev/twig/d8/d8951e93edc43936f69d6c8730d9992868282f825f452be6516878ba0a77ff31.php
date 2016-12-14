<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8aef5d60775d9f1fc1caf21aa482f06f83d0b99328d48848d52321d1d9c22d3c extends Twig_Template
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
        $__internal_02c2814fb431ddad12e592189665cc83709eacd9dded22f6ca6cf9265020eac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c2814fb431ddad12e592189665cc83709eacd9dded22f6ca6cf9265020eac5->enter($__internal_02c2814fb431ddad12e592189665cc83709eacd9dded22f6ca6cf9265020eac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_02c2814fb431ddad12e592189665cc83709eacd9dded22f6ca6cf9265020eac5->leave($__internal_02c2814fb431ddad12e592189665cc83709eacd9dded22f6ca6cf9265020eac5_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d42814029b49a6705571fc57fafcfaf0b8c832a8e7e99e53be5b47657b584778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42814029b49a6705571fc57fafcfaf0b8c832a8e7e99e53be5b47657b584778->enter($__internal_d42814029b49a6705571fc57fafcfaf0b8c832a8e7e99e53be5b47657b584778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d42814029b49a6705571fc57fafcfaf0b8c832a8e7e99e53be5b47657b584778->leave($__internal_d42814029b49a6705571fc57fafcfaf0b8c832a8e7e99e53be5b47657b584778_prof);

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
