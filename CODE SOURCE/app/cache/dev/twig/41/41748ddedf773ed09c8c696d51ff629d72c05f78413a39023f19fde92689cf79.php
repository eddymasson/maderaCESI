<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_120434fbf96a5d87a4a85345215989b52193f9a035b395fe64db94ce5e5cac84 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e518a0a12eb01ea6e34d1fc2102a900d822aae310d01bd9e038fadeb6022971c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e518a0a12eb01ea6e34d1fc2102a900d822aae310d01bd9e038fadeb6022971c->enter($__internal_e518a0a12eb01ea6e34d1fc2102a900d822aae310d01bd9e038fadeb6022971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e518a0a12eb01ea6e34d1fc2102a900d822aae310d01bd9e038fadeb6022971c->leave($__internal_e518a0a12eb01ea6e34d1fc2102a900d822aae310d01bd9e038fadeb6022971c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4d4c533cb3e17bcd4bbc4105ac80c7316bbf44e0adf8f17e706853d68bda28ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4c533cb3e17bcd4bbc4105ac80c7316bbf44e0adf8f17e706853d68bda28ab->enter($__internal_4d4c533cb3e17bcd4bbc4105ac80c7316bbf44e0adf8f17e706853d68bda28ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_4d4c533cb3e17bcd4bbc4105ac80c7316bbf44e0adf8f17e706853d68bda28ab->leave($__internal_4d4c533cb3e17bcd4bbc4105ac80c7316bbf44e0adf8f17e706853d68bda28ab_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
