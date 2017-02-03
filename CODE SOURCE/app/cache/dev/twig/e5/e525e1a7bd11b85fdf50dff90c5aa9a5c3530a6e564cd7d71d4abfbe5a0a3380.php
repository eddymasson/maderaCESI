<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_9518390a0a63deefd1d6803d6e2d80b9e8a3a7139ba1e97c451255e92c43ee80 extends Twig_Template
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
        // line 22
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32e33552368dc07ed65e792cbd778b5724f39e35b08725bfc1d557cc48bd46d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e33552368dc07ed65e792cbd778b5724f39e35b08725bfc1d557cc48bd46d7->enter($__internal_32e33552368dc07ed65e792cbd778b5724f39e35b08725bfc1d557cc48bd46d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32e33552368dc07ed65e792cbd778b5724f39e35b08725bfc1d557cc48bd46d7->leave($__internal_32e33552368dc07ed65e792cbd778b5724f39e35b08725bfc1d557cc48bd46d7_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_371a08bf6eafb0ba1a33b5b86385dad1666239fd79c6ac8d887115ddba5f80c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371a08bf6eafb0ba1a33b5b86385dad1666239fd79c6ac8d887115ddba5f80c8->enter($__internal_371a08bf6eafb0ba1a33b5b86385dad1666239fd79c6ac8d887115ddba5f80c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_371a08bf6eafb0ba1a33b5b86385dad1666239fd79c6ac8d887115ddba5f80c8->leave($__internal_371a08bf6eafb0ba1a33b5b86385dad1666239fd79c6ac8d887115ddba5f80c8_prof);

    }

    // line 12
    public function macro_render_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_52ac7c7542bb812332b5464f6c1bea50852050cd70e8d5ea5ceb0fc5639f7d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_52ac7c7542bb812332b5464f6c1bea50852050cd70e8d5ea5ceb0fc5639f7d40->enter($__internal_52ac7c7542bb812332b5464f6c1bea50852050cd70e8d5ea5ceb0fc5639f7d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->macro_render_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_52ac7c7542bb812332b5464f6c1bea50852050cd70e8d5ea5ceb0fc5639f7d40->leave($__internal_52ac7c7542bb812332b5464f6c1bea50852050cd70e8d5ea5ceb0fc5639f7d40_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
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
        return array (  91 => 19,  83 => 17,  75 => 15,  72 => 14,  67 => 13,  52 => 12,  42 => 25,  36 => 24,  29 => 22,  27 => 11,  18 => 22,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
