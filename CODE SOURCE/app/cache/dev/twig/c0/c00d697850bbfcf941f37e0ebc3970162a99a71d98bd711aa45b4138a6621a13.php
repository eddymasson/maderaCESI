<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_6f7d0e14300bfcaaea7a8b17400e27ea6f76b9e27392ae0c3f4810653cbfd0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fdd63fd643d338f373e3b99d378955a1fefa46c03ffc73b96c84c0aa263275f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdd63fd643d338f373e3b99d378955a1fefa46c03ffc73b96c84c0aa263275f->enter($__internal_7fdd63fd643d338f373e3b99d378955a1fefa46c03ffc73b96c84c0aa263275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_7fdd63fd643d338f373e3b99d378955a1fefa46c03ffc73b96c84c0aa263275f->leave($__internal_7fdd63fd643d338f373e3b99d378955a1fefa46c03ffc73b96c84c0aa263275f_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_b9a162b9bffaf006eabe8c8969f43bce0ed59278f164c71f5a58c4a633128a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a162b9bffaf006eabe8c8969f43bce0ed59278f164c71f5a58c4a633128a96->enter($__internal_b9a162b9bffaf006eabe8c8969f43bce0ed59278f164c71f5a58c4a633128a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim(        $this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim(        $this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] =         $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "


    ";
        // line 24
        if (( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 24, $this->getSourceContext()); })())) ||  !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 24, $this->getSourceContext()); })())))) {
            // line 25
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 31
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 31, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 32
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 33, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 34
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 34, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 34, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                            </div>
                        ";
            }
            // line 38
            echo "
                        ";
            // line 39
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 39, $this->getSourceContext()); })()))) {
                // line 40
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 40, $this->getSourceContext()); })());
                echo "
                        ";
            }
            // line 42
            echo "
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 48
            if (trim((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 48, $this->getSourceContext()); })()))) {
                // line 49
                echo "             <div class=\"row\">
                 ";
                // line 50
                echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 50, $this->getSourceContext()); })());
                echo "
             </div>
        ";
            }
            // line 53
            echo "
        <div class=\"row\">
            ";
            // line 55
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 55, $this->getSourceContext()); })());
            echo "
        </div>
    </div>
     ";
        }
        // line 59
        echo "
";
        
        $__internal_b9a162b9bffaf006eabe8c8969f43bce0ed59278f164c71f5a58c4a633128a96->leave($__internal_b9a162b9bffaf006eabe8c8969f43bce0ed59278f164c71f5a58c4a633128a96_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_3789a847e666142b1beab8f09919d44fe1f7dfe31cad19e9f673a651d57c70ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3789a847e666142b1beab8f09919d44fe1f7dfe31cad19e9f673a651d57c70ac->enter($__internal_3789a847e666142b1beab8f09919d44fe1f7dfe31cad19e9f673a651d57c70ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_3789a847e666142b1beab8f09919d44fe1f7dfe31cad19e9f673a651d57c70ac->leave($__internal_3789a847e666142b1beab8f09919d44fe1f7dfe31cad19e9f673a651d57c70ac_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_42b6fb922cbb5de2987748830fb448eda7241f4074cff62ae4f3c54123a744bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b6fb922cbb5de2987748830fb448eda7241f4074cff62ae4f3c54123a744bd->enter($__internal_42b6fb922cbb5de2987748830fb448eda7241f4074cff62ae4f3c54123a744bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_42b6fb922cbb5de2987748830fb448eda7241f4074cff62ae4f3c54123a744bd->leave($__internal_42b6fb922cbb5de2987748830fb448eda7241f4074cff62ae4f3c54123a744bd_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_85cd9bbac19f3038d4f18bd7ff1f2d6a59e038784d273ddf2802cf4da5e4888f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cd9bbac19f3038d4f18bd7ff1f2d6a59e038784d273ddf2802cf4da5e4888f->enter($__internal_85cd9bbac19f3038d4f18bd7ff1f2d6a59e038784d273ddf2802cf4da5e4888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_85cd9bbac19f3038d4f18bd7ff1f2d6a59e038784d273ddf2802cf4da5e4888f->leave($__internal_85cd9bbac19f3038d4f18bd7ff1f2d6a59e038784d273ddf2802cf4da5e4888f_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_9e342bc91177d1e58d01aae7d4da7238d3d76e96bcac8680fc67df1465f5f073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e342bc91177d1e58d01aae7d4da7238d3d76e96bcac8680fc67df1465f5f073->enter($__internal_9e342bc91177d1e58d01aae7d4da7238d3d76e96bcac8680fc67df1465f5f073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_9e342bc91177d1e58d01aae7d4da7238d3d76e96bcac8680fc67df1465f5f073->leave($__internal_9e342bc91177d1e58d01aae7d4da7238d3d76e96bcac8680fc67df1465f5f073_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 20,  179 => 19,  168 => 18,  157 => 17,  149 => 59,  142 => 55,  138 => 53,  132 => 50,  129 => 49,  127 => 48,  119 => 42,  113 => 40,  111 => 39,  108 => 38,  104 => 36,  89 => 34,  85 => 33,  82 => 32,  80 => 31,  72 => 25,  70 => 24,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table           = block('list_table')|trim %}
    {% set _list_filters         = block('list_filters')|trim %}
    {% set _list_filters_actions = block('list_filters_actions') %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}



    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
             <div class=\"row\">
                 {{ _list_filters|raw }}
             </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
     {% endif %}

{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
