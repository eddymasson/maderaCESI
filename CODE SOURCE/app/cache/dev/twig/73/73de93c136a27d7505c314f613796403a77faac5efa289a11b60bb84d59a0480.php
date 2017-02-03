<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_b69a27240edf0b5bd1c5f152b8b65f3717717dec9ad2ae4c7d2679f44a01bca2 extends Twig_Template
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
        $__internal_4f1ba6ae7338a5c74f331ca789c66c7c56753c61382af8c3f49e7a3c1f64a871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1ba6ae7338a5c74f331ca789c66c7c56753c61382af8c3f49e7a3c1f64a871->enter($__internal_4f1ba6ae7338a5c74f331ca789c66c7c56753c61382af8c3f49e7a3c1f64a871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) || array_key_exists("is_diff", $context) ? $context["is_diff"] : (function () { throw new Twig_Error_Runtime('Variable "is_diff" does not exist.', 12, $this->getSourceContext()); })()), false)) : (false))) {
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
        
        $__internal_4f1ba6ae7338a5c74f331ca789c66c7c56753c61382af8c3f49e7a3c1f64a871->leave($__internal_4f1ba6ae7338a5c74f331ca789c66c7c56753c61382af8c3f49e7a3c1f64a871_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_7361b1d60197e8ad0aa9b49e4d6fd4bc870cf945c13b528d7e8b8156ea68b68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7361b1d60197e8ad0aa9b49e4d6fd4bc870cf945c13b528d7e8b8156ea68b68e->enter($__internal_7361b1d60197e8ad0aa9b49e4d6fd4bc870cf945c13b528d7e8b8156ea68b68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        
        $__internal_7361b1d60197e8ad0aa9b49e4d6fd4bc870cf945c13b528d7e8b8156ea68b68e->leave($__internal_7361b1d60197e8ad0aa9b49e4d6fd4bc870cf945c13b528d7e8b8156ea68b68e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2257947ae5e1cf7b71383a6b9076f0988d05a1a8084be95016a2250419d5bf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2257947ae5e1cf7b71383a6b9076f0988d05a1a8084be95016a2250419d5bf8d->enter($__internal_2257947ae5e1cf7b71383a6b9076f0988d05a1a8084be95016a2250419d5bf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new Twig_Error_Runtime('Variable "collapse" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
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
        
        $__internal_2257947ae5e1cf7b71383a6b9076f0988d05a1a8084be95016a2250419d5bf8d->leave($__internal_2257947ae5e1cf7b71383a6b9076f0988d05a1a8084be95016a2250419d5bf8d_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_b621dbd99b64e89d541f7e615140cbc9a96bbd09945ed80fbd3a06ed990ed8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b621dbd99b64e89d541f7e615140cbc9a96bbd09945ed80fbd3a06ed990ed8d5->enter($__internal_b621dbd99b64e89d541f7e615140cbc9a96bbd09945ed80fbd3a06ed990ed8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 23, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })());
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_b621dbd99b64e89d541f7e615140cbc9a96bbd09945ed80fbd3a06ed990ed8d5->leave($__internal_b621dbd99b64e89d541f7e615140cbc9a96bbd09945ed80fbd3a06ed990ed8d5_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_ca8f59a66a65d50f5f33b737b4f381f34c3164f970978583885d1aae09a0da06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8f59a66a65d50f5f33b737b4f381f34c3164f970978583885d1aae09a0da06->enter($__internal_ca8f59a66a65d50f5f33b737b4f381f34c3164f970978583885d1aae09a0da06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) || array_key_exists("value_compare", $context) ? $context["value_compare"] : (function () { throw new Twig_Error_Runtime('Variable "value_compare" does not exist.', 36, $this->getSourceContext()); })());
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_ca8f59a66a65d50f5f33b737b4f381f34c3164f970978583885d1aae09a0da06->leave($__internal_ca8f59a66a65d50f5f33b737b4f381f34c3164f970978583885d1aae09a0da06_prof);

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
