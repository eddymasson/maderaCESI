<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_85e10e91b26d056aececc9ae756000610e93bd5af1bc7866e312c13d3dcb0f0d extends Twig_Template
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
        $__internal_4f7011734fe21e1741039693018e5558073b6fde0a4c0bf3d984ef287290eebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7011734fe21e1741039693018e5558073b6fde0a4c0bf3d984ef287290eebd->enter($__internal_4f7011734fe21e1741039693018e5558073b6fde0a4c0bf3d984ef287290eebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "history", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_4f7011734fe21e1741039693018e5558073b6fde0a4c0bf3d984ef287290eebd->leave($__internal_4f7011734fe21e1741039693018e5558073b6fde0a4c0bf3d984ef287290eebd_prof);

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

{% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('history', object) }}\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "SonataAdminBundle:Button:history_button.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Button/history_button.html.twig");
    }
}
