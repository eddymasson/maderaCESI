<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_b4bdcb01a2e46196550d7d19929b5c66cfd43641ee57b324a120ab65bd89180f extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa4548a80269a765344dd40baf3d4ade54b3f061558f7b684aec2f0934917af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4548a80269a765344dd40baf3d4ade54b3f061558f7b684aec2f0934917af1->enter($__internal_aa4548a80269a765344dd40baf3d4ade54b3f061558f7b684aec2f0934917af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4548a80269a765344dd40baf3d4ade54b3f061558f7b684aec2f0934917af1->leave($__internal_aa4548a80269a765344dd40baf3d4ade54b3f061558f7b684aec2f0934917af1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_dfe7b86eb8e56e093a96339782590453708211e0a5723af15b6801c0f4c4427e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe7b86eb8e56e093a96339782590453708211e0a5723af15b6801c0f4c4427e->enter($__internal_dfe7b86eb8e56e093a96339782590453708211e0a5723af15b6801c0f4c4427e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_dfe7b86eb8e56e093a96339782590453708211e0a5723af15b6801c0f4c4427e->leave($__internal_dfe7b86eb8e56e093a96339782590453708211e0a5723af15b6801c0f4c4427e_prof);

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
