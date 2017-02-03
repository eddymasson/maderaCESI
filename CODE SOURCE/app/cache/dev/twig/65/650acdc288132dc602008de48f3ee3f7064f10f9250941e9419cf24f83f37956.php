<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_5df209ffc09cfffce30569bb62b5b1c9b6616853cc5a32c5443eff4b78a569fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe9601262ef3220f76076b0fbb401f04724b0a6835cc7b0f51124888e4bdc611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9601262ef3220f76076b0fbb401f04724b0a6835cc7b0f51124888e4bdc611->enter($__internal_fe9601262ef3220f76076b0fbb401f04724b0a6835cc7b0f51124888e4bdc611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe9601262ef3220f76076b0fbb401f04724b0a6835cc7b0f51124888e4bdc611->leave($__internal_fe9601262ef3220f76076b0fbb401f04724b0a6835cc7b0f51124888e4bdc611_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_9696370a08f800c81d90f8b7774b92f159a7a2b7021488cb4b85b7a6437a1865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9696370a08f800c81d90f8b7774b92f159a7a2b7021488cb4b85b7a6437a1865->enter($__internal_9696370a08f800c81d90f8b7774b92f159a7a2b7021488cb4b85b7a6437a1865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_9696370a08f800c81d90f8b7774b92f159a7a2b7021488cb4b85b7a6437a1865->leave($__internal_9696370a08f800c81d90f8b7774b92f159a7a2b7021488cb4b85b7a6437a1865_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_6abd02d7157fb15d20a5b74c25f72f843ed12f4b8f2242cf4052abe3aeec6063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abd02d7157fb15d20a5b74c25f72f843ed12f4b8f2242cf4052abe3aeec6063->enter($__internal_6abd02d7157fb15d20a5b74c25f72f843ed12f4b8f2242cf4052abe3aeec6063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_6abd02d7157fb15d20a5b74c25f72f843ed12f4b8f2242cf4052abe3aeec6063->leave($__internal_6abd02d7157fb15d20a5b74c25f72f843ed12f4b8f2242cf4052abe3aeec6063_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_507cad4944592dd64f40583e0cc823bdaa0ac6fbc4583a881d414a24216adcce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507cad4944592dd64f40583e0cc823bdaa0ac6fbc4583a881d414a24216adcce->enter($__internal_507cad4944592dd64f40583e0cc823bdaa0ac6fbc4583a881d414a24216adcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })()), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 23, $this->getSourceContext()); })()), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })()), "post", array());
        }
        
        $__internal_507cad4944592dd64f40583e0cc823bdaa0ac6fbc4583a881d414a24216adcce->leave($__internal_507cad4944592dd64f40583e0cc823bdaa0ac6fbc4583a881d414a24216adcce_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_bd7c23ef38e32ab4a494c94498492649d8628a971fe472ddfec2b26a900d5dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7c23ef38e32ab4a494c94498492649d8628a971fe472ddfec2b26a900d5dc2->enter($__internal_bd7c23ef38e32ab4a494c94498492649d8628a971fe472ddfec2b26a900d5dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_bd7c23ef38e32ab4a494c94498492649d8628a971fe472ddfec2b26a900d5dc2->leave($__internal_bd7c23ef38e32ab4a494c94498492649d8628a971fe472ddfec2b26a900d5dc2_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
