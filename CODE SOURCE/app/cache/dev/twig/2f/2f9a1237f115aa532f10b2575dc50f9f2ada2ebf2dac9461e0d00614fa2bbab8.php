<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_3de7c58bb4827c748b9e30f735451682d80e432f95adc673865fc0bb5f2dde8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dd2a3d7fe61a9ea76a08699fe3c4e7c93c2623132fdbdf76cdd48cd4e200b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd2a3d7fe61a9ea76a08699fe3c4e7c93c2623132fdbdf76cdd48cd4e200b6d->enter($__internal_8dd2a3d7fe61a9ea76a08699fe3c4e7c93c2623132fdbdf76cdd48cd4e200b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter(($context["is_diff"] ?? $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_8dd2a3d7fe61a9ea76a08699fe3c4e7c93c2623132fdbdf76cdd48cd4e200b6d->leave($__internal_8dd2a3d7fe61a9ea76a08699fe3c4e7c93c2623132fdbdf76cdd48cd4e200b6d_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_4c0c72438d5b024d72f519a801a022367632e89b5fe8b8356ad6bca43c2f25d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0c72438d5b024d72f519a801a022367632e89b5fe8b8356ad6bca43c2f25d9->enter($__internal_4c0c72438d5b024d72f519a801a022367632e89b5fe8b8356ad6bca43c2f25d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_4c0c72438d5b024d72f519a801a022367632e89b5fe8b8356ad6bca43c2f25d9->leave($__internal_4c0c72438d5b024d72f519a801a022367632e89b5fe8b8356ad6bca43c2f25d9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c8c17fba7cbf03e6a1d06344be145166f7d6c043a36c76a999eb54bb6bddede7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c17fba7cbf03e6a1d06344be145166f7d6c043a36c76a999eb54bb6bddede7->enter($__internal_c8c17fba7cbf03e6a1d06344be145166f7d6c043a36c76a999eb54bb6bddede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if (($context["collapse"] ?? $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c8c17fba7cbf03e6a1d06344be145166f7d6c043a36c76a999eb54bb6bddede7->leave($__internal_c8c17fba7cbf03e6a1d06344be145166f7d6c043a36c76a999eb54bb6bddede7_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_8be7369b56e8e53efb228304ff683dac5241f8588c3176c45142cddcf6ba48f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be7369b56e8e53efb228304ff683dac5241f8588c3176c45142cddcf6ba48f1->enter($__internal_8be7369b56e8e53efb228304ff683dac5241f8588c3176c45142cddcf6ba48f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo ($context["value"] ?? $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_8be7369b56e8e53efb228304ff683dac5241f8588c3176c45142cddcf6ba48f1->leave($__internal_8be7369b56e8e53efb228304ff683dac5241f8588c3176c45142cddcf6ba48f1_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_c2bc32d03916dc6441db299f0929a4d34631305e72d7f889793fe95af4e622e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bc32d03916dc6441db299f0929a4d34631305e72d7f889793fe95af4e622e2->enter($__internal_c2bc32d03916dc6441db299f0929a4d34631305e72d7f889793fe95af4e622e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = ($context["value_compare"] ?? $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_c2bc32d03916dc6441db299f0929a4d34631305e72d7f889793fe95af4e622e2->leave($__internal_c2bc32d03916dc6441db299f0929a4d34631305e72d7f889793fe95af4e622e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 37,  143 => 36,  140 => 35,  137 => 34,  131 => 33,  124 => 24,  117 => 23,  111 => 22,  103 => 29,  97 => 27,  93 => 25,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  68 => 15,  62 => 14,  50 => 12,  43 => 33,  39 => 31,  37 => 14,  29 => 12,  26 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
