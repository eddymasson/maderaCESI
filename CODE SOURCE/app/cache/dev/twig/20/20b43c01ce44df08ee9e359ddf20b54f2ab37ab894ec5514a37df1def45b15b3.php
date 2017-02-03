<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_c27f5cdd4f8ae8092921f02ea3c6e1a44c72850bd22c1222f2eca3d5469eb2d7 extends Twig_Template
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
        $__internal_be95723c2d03e5eb16a3e145d23c94508c7b46b6d575ee95c9c2ea233e1c2617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be95723c2d03e5eb16a3e145d23c94508c7b46b6d575ee95c9c2ea233e1c2617->enter($__internal_be95723c2d03e5eb16a3e145d23c94508c7b46b6d575ee95c9c2ea233e1c2617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "canAccessObject", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 13, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_be95723c2d03e5eb16a3e145d23c94508c7b46b6d575ee95c9c2ea233e1c2617->leave($__internal_be95723c2d03e5eb16a3e145d23c94508c7b46b6d575ee95c9c2ea233e1c2617_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "SonataAdminBundle:Button:edit_button.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
