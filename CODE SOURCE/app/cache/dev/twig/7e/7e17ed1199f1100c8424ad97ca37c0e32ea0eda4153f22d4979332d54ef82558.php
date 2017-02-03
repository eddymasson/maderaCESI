<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_ebeba00a451411584f9ec012c5ed5d78f5b077a103b557d5a02a1a7385a01338 extends Twig_Template
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
        $__internal_c04cdded0454dc44c927c4b61504bacce3038aea12c0cadd78b3324827c76775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04cdded0454dc44c927c4b61504bacce3038aea12c0cadd78b3324827c76775->enter($__internal_c04cdded0454dc44c927c4b61504bacce3038aea12c0cadd78b3324827c76775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "canAccessObject", array(0 => "history", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 13, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_c04cdded0454dc44c927c4b61504bacce3038aea12c0cadd78b3324827c76775->leave($__internal_c04cdded0454dc44c927c4b61504bacce3038aea12c0cadd78b3324827c76775_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('history', object) }}\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "SonataAdminBundle:Button:history_button.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Button/history_button.html.twig");
    }
}
