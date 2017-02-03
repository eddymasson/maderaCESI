<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_7ab4c811e425f91f4fda59c1958b77d7169f15ffc009bafe4630e5ee53114bf1 extends Twig_Template
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
        $__internal_635cbe58dd0b7a0396f0146deb12ab617ae28d5829d08c174ab36680dac2ab83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635cbe58dd0b7a0396f0146deb12ab617ae28d5829d08c174ab36680dac2ab83->enter($__internal_635cbe58dd0b7a0396f0146deb12ab617ae28d5829d08c174ab36680dac2ab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasAccess", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "create"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "subClasses", array()))) {
                // line 14
                echo "        <a class=\"sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <li class=\"divider\" role=\"presentation\"></li>
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 19, $this->getSourceContext()); })()), "subclasses", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 20
                    echo "            <li>
                <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 21, $this->getSourceContext()); })()), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        <li class=\"divider\" role=\"presentation\"></li>
    ";
            }
        }
        
        $__internal_635cbe58dd0b7a0396f0146deb12ab617ae28d5829d08c174ab36680dac2ab83->leave($__internal_635cbe58dd0b7a0396f0146deb12ab617ae28d5829d08c174ab36680dac2ab83_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  56 => 23,  51 => 21,  48 => 20,  44 => 19,  41 => 18,  36 => 16,  30 => 14,  27 => 13,  25 => 12,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('create') and admin.hasRoute('create') %}
    {% if admin.subClasses is empty %}
        <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create') }}\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }}</a>
    {% else %}
        <li class=\"divider\" role=\"presentation\"></li>
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }} {{ subclass|trans({}, admin.translationdomain) }}
                </a>
            </li>
        {% endfor %}
        <li class=\"divider\" role=\"presentation\"></li>
    {% endif %}
{% endif %}
", "SonataAdminBundle:Button:create_button.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Button/create_button.html.twig");
    }
}
