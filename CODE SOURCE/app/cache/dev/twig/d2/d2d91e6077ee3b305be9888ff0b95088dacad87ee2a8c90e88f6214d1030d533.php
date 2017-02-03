<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_b49fd3fb871400cb52527d7e7f94a26f0ef69e56e18744abfc01159b59b078cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e59546064bc111a690d81a9a39b759d86df0cd837ac39e8b1cef065377f4d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e59546064bc111a690d81a9a39b759d86df0cd837ac39e8b1cef065377f4d5c->enter($__internal_6e59546064bc111a690d81a9a39b759d86df0cd837ac39e8b1cef065377f4d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_6e59546064bc111a690d81a9a39b759d86df0cd837ac39e8b1cef065377f4d5c->leave($__internal_6e59546064bc111a690d81a9a39b759d86df0cd837ac39e8b1cef065377f4d5c_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_fd57ec567e571934b46dee8f47ced0d45f0acc7cb0b122142db1737ec652352b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd57ec567e571934b46dee8f47ced0d45f0acc7cb0b122142db1737ec652352b->enter($__internal_fd57ec567e571934b46dee8f47ced0d45f0acc7cb0b122142db1737ec652352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 10, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new Twig_Error_Runtime('Variable "no_padding" does not exist.', 13, $this->getSourceContext()); })())) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 14, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 25, $this->getSourceContext()); })()), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fd57ec567e571934b46dee8f47ced0d45f0acc7cb0b122142db1737ec652352b->leave($__internal_fd57ec567e571934b46dee8f47ced0d45f0acc7cb0b122142db1737ec652352b_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_abf497c022004a81978effc46593fc1591d0011acfc5096c5dad18f683f7f420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf497c022004a81978effc46593fc1591d0011acfc5096c5dad18f683f7f420->enter($__internal_abf497c022004a81978effc46593fc1591d0011acfc5096c5dad18f683f7f420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "name", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_abf497c022004a81978effc46593fc1591d0011acfc5096c5dad18f683f7f420->leave($__internal_abf497c022004a81978effc46593fc1591d0011acfc5096c5dad18f683f7f420_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_433320a688e8184cf15040b8307b75ce5ba918eab7c5e658e81a4e1e5a7475d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433320a688e8184cf15040b8307b75ce5ba918eab7c5e658e81a4e1e5a7475d6->enter($__internal_433320a688e8184cf15040b8307b75ce5ba918eab7c5e658e81a4e1e5a7475d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 28, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 29, $this->getSourceContext()); })()));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_433320a688e8184cf15040b8307b75ce5ba918eab7c5e658e81a4e1e5a7475d6->leave($__internal_433320a688e8184cf15040b8307b75ce5ba918eab7c5e658e81a4e1e5a7475d6_prof);

    }

    // line 3
    public function macro_render_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b6fdb2fa9d3e2effd6d62cec298ae1a845dd5c940f64d1b6ba70fa6859950a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b6fdb2fa9d3e2effd6d62cec298ae1a845dd5c940f64d1b6ba70fa6859950a01->enter($__internal_b6fdb2fa9d3e2effd6d62cec298ae1a845dd5c940f64d1b6ba70fa6859950a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_b6fdb2fa9d3e2effd6d62cec298ae1a845dd5c940f64d1b6ba70fa6859950a01->leave($__internal_b6fdb2fa9d3e2effd6d62cec298ae1a845dd5c940f64d1b6ba70fa6859950a01_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 5,  207 => 4,  187 => 3,  179 => 31,  173 => 29,  171 => 28,  168 => 27,  162 => 26,  152 => 18,  146 => 17,  122 => 34,  108 => 33,  105 => 26,  88 => 25,  81 => 20,  79 => 17,  73 => 14,  67 => 13,  64 => 12,  61 => 11,  43 => 10,  31 => 9,  28 => 8,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.name|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
