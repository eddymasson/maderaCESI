<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_a1b856984d8c82d83de2dbf1bc1a90819ac5f0aa6d9a6ab8098c961846dae0ce extends Twig_Template
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
        $__internal_63114e8e64286c90addb668a77cd206bdf8b0db12b6dbb175c0b2c98e5d72f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63114e8e64286c90addb668a77cd206bdf8b0db12b6dbb175c0b2c98e5d72f1b->enter($__internal_63114e8e64286c90addb668a77cd206bdf8b0db12b6dbb175c0b2c98e5d72f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        // line 11
        if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_63114e8e64286c90addb668a77cd206bdf8b0db12b6dbb175c0b2c98e5d72f1b->leave($__internal_63114e8e64286c90addb668a77cd206bdf8b0db12b6dbb175c0b2c98e5d72f1b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 14,  24 => 12,  22 => 11,);
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
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "SonataAdminBundle:Button:acl_button.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Button/acl_button.html.twig");
    }
}
