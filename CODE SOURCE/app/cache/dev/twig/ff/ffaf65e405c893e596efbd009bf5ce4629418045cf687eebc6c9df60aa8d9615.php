<?php

/* SonataAdminBundle:CRUD:action_buttons.html.twig */
class __TwigTemplate_fb1688f29c25e982dc020fee9444088f2dc8666c9649d5b3e2343aa9cd28eab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33d76cd5c417469dd2b7e926cc222550e8c4379eaeaf282ba363fb3121cbd375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d76cd5c417469dd2b7e926cc222550e8c4379eaeaf282ba363fb3121cbd375->enter($__internal_33d76cd5c417469dd2b7e926cc222550e8c4379eaeaf282ba363fb3121cbd375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action_buttons.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getActionButtons", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 12, $this->getSourceContext()); })()), 1 => ((array_key_exists("object", $context)) ? (_twig_default_filter((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })()), null)) : (null))), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "template", array(), "any", true, true)) {
                // line 14
                echo "            <li>";
                $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "template", array()), "SonataAdminBundle:CRUD:action_buttons.html.twig", 14)->display($context);
                echo "</li>
        ";
            }
            // line 16
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_33d76cd5c417469dd2b7e926cc222550e8c4379eaeaf282ba363fb3121cbd375->leave($__internal_33d76cd5c417469dd2b7e926cc222550e8c4379eaeaf282ba363fb3121cbd375_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  45 => 14,  42 => 13,  24 => 12,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% spaceless %}
    {% for item in admin.getActionButtons(action, object|default(null)) %}
        {% if item.template is defined %}
            <li>{% include item.template %}</li>
        {% endif %}
    {% endfor %}
{% endspaceless %}
", "SonataAdminBundle:CRUD:action_buttons.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action_buttons.html.twig");
    }
}
