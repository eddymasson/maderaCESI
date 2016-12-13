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
        $__internal_f0aea36d09b174363c6ef14763adc88ac45bd1a9928b9d4110a716190f9bd3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0aea36d09b174363c6ef14763adc88ac45bd1a9928b9d4110a716190f9bd3e7->enter($__internal_f0aea36d09b174363c6ef14763adc88ac45bd1a9928b9d4110a716190f9bd3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0aea36d09b174363c6ef14763adc88ac45bd1a9928b9d4110a716190f9bd3e7->leave($__internal_f0aea36d09b174363c6ef14763adc88ac45bd1a9928b9d4110a716190f9bd3e7_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_c3b157944443d2ca175dfda5f925711ed8b7d39c27c82028ef414eaab16ef40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b157944443d2ca175dfda5f925711ed8b7d39c27c82028ef414eaab16ef40d->enter($__internal_c3b157944443d2ca175dfda5f925711ed8b7d39c27c82028ef414eaab16ef40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 24
        echo "    ";
        echo $this->getAttribute($this, "render_array", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
        echo "
";
        
        $__internal_c3b157944443d2ca175dfda5f925711ed8b7d39c27c82028ef414eaab16ef40d->leave($__internal_c3b157944443d2ca175dfda5f925711ed8b7d39c27c82028ef414eaab16ef40d_prof);

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
            $__internal_861324ab4b8685831796d67239a0d4f9ba4d03c5430094faa5225eb3c57b87a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_861324ab4b8685831796d67239a0d4f9ba4d03c5430094faa5225eb3c57b87a6->enter($__internal_861324ab4b8685831796d67239a0d4f9ba4d03c5430094faa5225eb3c57b87a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

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
            
            $__internal_861324ab4b8685831796d67239a0d4f9ba4d03c5430094faa5225eb3c57b87a6->leave($__internal_861324ab4b8685831796d67239a0d4f9ba4d03c5430094faa5225eb3c57b87a6_prof);

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
