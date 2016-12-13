<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_a7ad51503fb128319db8160784814ae943831bbc2e471b006349400e9fd83e50 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69acd801da1d05eca42e8ced90fb21e82d73b3f737123abe4653669b9fa178d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69acd801da1d05eca42e8ced90fb21e82d73b3f737123abe4653669b9fa178d4->enter($__internal_69acd801da1d05eca42e8ced90fb21e82d73b3f737123abe4653669b9fa178d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69acd801da1d05eca42e8ced90fb21e82d73b3f737123abe4653669b9fa178d4->leave($__internal_69acd801da1d05eca42e8ced90fb21e82d73b3f737123abe4653669b9fa178d4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d9938c8fe00f597c2ebbed4c4c0bef2d80d1056e8e36c0182933d82e28bc2811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9938c8fe00f597c2ebbed4c4c0bef2d80d1056e8e36c0182933d82e28bc2811->enter($__internal_d9938c8fe00f597c2ebbed4c4c0bef2d80d1056e8e36c0182933d82e28bc2811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_d9938c8fe00f597c2ebbed4c4c0bef2d80d1056e8e36c0182933d82e28bc2811->leave($__internal_d9938c8fe00f597c2ebbed4c4c0bef2d80d1056e8e36c0182933d82e28bc2811_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  55 => 20,  50 => 19,  47 => 18,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
