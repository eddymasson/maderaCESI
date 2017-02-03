<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_5efef75797ea02f2b391e31afde69a4ab4e310e27b07f37ddda58e778548573a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fde717f1cb21b224c0068b0c6ee48c31a00a9cf64a4c9cf114a7f4aa3190fbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde717f1cb21b224c0068b0c6ee48c31a00a9cf64a4c9cf114a7f4aa3190fbf7->enter($__internal_fde717f1cb21b224c0068b0c6ee48c31a00a9cf64a4c9cf114a7f4aa3190fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde717f1cb21b224c0068b0c6ee48c31a00a9cf64a4c9cf114a7f4aa3190fbf7->leave($__internal_fde717f1cb21b224c0068b0c6ee48c31a00a9cf64a4c9cf114a7f4aa3190fbf7_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_152987ac1b53c0a3a702fbc74cc0a50ca26b849f587e738800bbe1f33ca8128c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152987ac1b53c0a3a702fbc74cc0a50ca26b849f587e738800bbe1f33ca8128c->enter($__internal_152987ac1b53c0a3a702fbc74cc0a50ca26b849f587e738800bbe1f33ca8128c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        
        $__internal_152987ac1b53c0a3a702fbc74cc0a50ca26b849f587e738800bbe1f33ca8128c->leave($__internal_152987ac1b53c0a3a702fbc74cc0a50ca26b849f587e738800bbe1f33ca8128c_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_85c6feab45f77ee1eafae0a743dc1ef3e87ba391063b91e5f3f07c2c14b4afcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c6feab45f77ee1eafae0a743dc1ef3e87ba391063b91e5f3f07c2c14b4afcb->enter($__internal_85c6feab45f77ee1eafae0a743dc1ef3e87ba391063b91e5f3f07c2c14b4afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_85c6feab45f77ee1eafae0a743dc1ef3e87ba391063b91e5f3f07c2c14b4afcb->leave($__internal_85c6feab45f77ee1eafae0a743dc1ef3e87ba391063b91e5f3f07c2c14b4afcb_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_56eb3014470901d2b15b41e8b7fa9f5034e30db0679cbcf0aeeb7646edcfa1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56eb3014470901d2b15b41e8b7fa9f5034e30db0679cbcf0aeeb7646edcfa1e8->enter($__internal_56eb3014470901d2b15b41e8b7fa9f5034e30db0679cbcf0aeeb7646edcfa1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 17, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 19, $this->getSourceContext()); })()) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\">

        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 23, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 24
                echo "            ";
                $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 25, $this->getSourceContext()); })())) {
                        // line 26
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 27
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
            ";
                // line 29
                if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 29, $this->getSourceContext()); })())) {
                    // line 30
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 31
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 31, $this->getSourceContext()); })()) + 1);
                        // line 32
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "isGranted", array(0 => "CREATE"), "method")) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "isGranted", array(0 => "LIST"), "method")))) {
                            // line 33
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 36
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 36, $this->getSourceContext()); })()), "admin_code" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 37
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 40
$context["group"], "icon", array()))));
                            // line 41
                            echo "
                    ";
                        }
                        // line 43
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
    ";
        }
        // line 48
        echo "
";
        
        $__internal_56eb3014470901d2b15b41e8b7fa9f5034e30db0679cbcf0aeeb7646edcfa1e8->leave($__internal_56eb3014470901d2b15b41e8b7fa9f5034e30db0679cbcf0aeeb7646edcfa1e8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  143 => 46,  137 => 45,  134 => 44,  128 => 43,  124 => 41,  122 => 40,  121 => 37,  120 => 36,  118 => 33,  115 => 32,  112 => 31,  107 => 30,  105 => 29,  102 => 28,  95 => 27,  92 => 26,  86 => 25,  83 => 24,  79 => 23,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\">

        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.isGranted('CREATE') or admin.hasRoute('list') and admin.isGranted('LIST') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Core/search.html.twig");
    }
}
