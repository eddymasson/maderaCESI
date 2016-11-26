<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_99bb4ca17808766abab2ad911482c6e7515d10e9afef5e2a0267236acc66fe25 extends Twig_Template
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
        $__internal_ea5499fc2c80c7fb6ed791573f6256f54cacf96d7a2dfa74b9c795d802f432b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5499fc2c80c7fb6ed791573f6256f54cacf96d7a2dfa74b9c795d802f432b4->enter($__internal_ea5499fc2c80c7fb6ed791573f6256f54cacf96d7a2dfa74b9c795d802f432b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_ea5499fc2c80c7fb6ed791573f6256f54cacf96d7a2dfa74b9c795d802f432b4->leave($__internal_ea5499fc2c80c7fb6ed791573f6256f54cacf96d7a2dfa74b9c795d802f432b4_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_144ee17259fa805a247d626f8b9dbc25f831f04f03086ec7666509ce6c040275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144ee17259fa805a247d626f8b9dbc25f831f04f03086ec7666509ce6c040275->enter($__internal_144ee17259fa805a247d626f8b9dbc25f831f04f03086ec7666509ce6c040275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_144ee17259fa805a247d626f8b9dbc25f831f04f03086ec7666509ce6c040275->leave($__internal_144ee17259fa805a247d626f8b9dbc25f831f04f03086ec7666509ce6c040275_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/Maxime/PhpstormProjects/madera/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
