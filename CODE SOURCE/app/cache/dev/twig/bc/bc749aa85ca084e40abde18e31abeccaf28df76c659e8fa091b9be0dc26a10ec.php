<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_a9f09a3fad48213dfb016ad4b2136e9e874141c69fabe35927c640413bc761d1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75b479c64ef811b4c8bcf243ac644ddb04d24a078d2c42013520409fafb90a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b479c64ef811b4c8bcf243ac644ddb04d24a078d2c42013520409fafb90a2f->enter($__internal_75b479c64ef811b4c8bcf243ac644ddb04d24a078d2c42013520409fafb90a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b479c64ef811b4c8bcf243ac644ddb04d24a078d2c42013520409fafb90a2f->leave($__internal_75b479c64ef811b4c8bcf243ac644ddb04d24a078d2c42013520409fafb90a2f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5340471c66cecb0e71ec45808f3b96eb3e6cfeffe33ba8feb76b48cf109364bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5340471c66cecb0e71ec45808f3b96eb3e6cfeffe33ba8feb76b48cf109364bf->enter($__internal_5340471c66cecb0e71ec45808f3b96eb3e6cfeffe33ba8feb76b48cf109364bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_5340471c66cecb0e71ec45808f3b96eb3e6cfeffe33ba8feb76b48cf109364bf->leave($__internal_5340471c66cecb0e71ec45808f3b96eb3e6cfeffe33ba8feb76b48cf109364bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
