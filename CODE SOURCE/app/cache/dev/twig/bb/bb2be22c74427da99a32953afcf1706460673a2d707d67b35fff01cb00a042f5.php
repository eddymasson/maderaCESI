<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_83669831117a7b7321e7d75b22a011d1605430fd433dc491ba862acd86c03384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_493a5c8deb5e09ad77d2a062fedf24c276933a2c9ad94d889e7457f75ccb2d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493a5c8deb5e09ad77d2a062fedf24c276933a2c9ad94d889e7457f75ccb2d1e->enter($__internal_493a5c8deb5e09ad77d2a062fedf24c276933a2c9ad94d889e7457f75ccb2d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_493a5c8deb5e09ad77d2a062fedf24c276933a2c9ad94d889e7457f75ccb2d1e->leave($__internal_493a5c8deb5e09ad77d2a062fedf24c276933a2c9ad94d889e7457f75ccb2d1e_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_a253ff631500be17a0043547de6d9bc5cc1dd8be1b545480b42767f4cd123f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a253ff631500be17a0043547de6d9bc5cc1dd8be1b545480b42767f4cd123f27->enter($__internal_a253ff631500be17a0043547de6d9bc5cc1dd8be1b545480b42767f4cd123f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 24
        echo "    ";
        echo $this->getAttribute($this, "render_array", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
        echo "
";
        
        $__internal_a253ff631500be17a0043547de6d9bc5cc1dd8be1b545480b42767f4cd123f27->leave($__internal_a253ff631500be17a0043547de6d9bc5cc1dd8be1b545480b42767f4cd123f27_prof);

    }

    // line 11
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ba52e154ff66b40b68e6bb9ca2c78915d7b8467aa5f34d2b27be122a8f9a4d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ba52e154ff66b40b68e6bb9ca2c78915d7b8467aa5f34d2b27be122a8f9a4d07->enter($__internal_ba52e154ff66b40b68e6bb9ca2c78915d7b8467aa5f34d2b27be122a8f9a4d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $this->getAttribute($this, "render_array", array(0 => $context["val"]), "method");
                    echo "}]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ba52e154ff66b40b68e6bb9ca2c78915d7b8467aa5f34d2b27be122a8f9a4d07->leave($__internal_ba52e154ff66b40b68e6bb9ca2c78915d7b8467aa5f34d2b27be122a8f9a4d07_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  80 => 16,  72 => 14,  69 => 13,  64 => 12,  49 => 11,  39 => 24,  33 => 23,  18 => 21,);
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
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ _self.render_array(value) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
