<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_d1d93441a9f3d58412a368b1831482f43f9e9aa25278b357c7e86c643098ef9c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be2f29a9c2e646e488cf2a5a0a083cfe9b891d5a98e0d86ece3e834902ba7af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2f29a9c2e646e488cf2a5a0a083cfe9b891d5a98e0d86ece3e834902ba7af3->enter($__internal_be2f29a9c2e646e488cf2a5a0a083cfe9b891d5a98e0d86ece3e834902ba7af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2f29a9c2e646e488cf2a5a0a083cfe9b891d5a98e0d86ece3e834902ba7af3->leave($__internal_be2f29a9c2e646e488cf2a5a0a083cfe9b891d5a98e0d86ece3e834902ba7af3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}
", "SonataAdminBundle:CRUD:list_string.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
