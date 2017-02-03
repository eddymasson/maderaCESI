<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_20b316ae2c6ff660b38060c41ea9c110415eb29fee349c0d2d5ceeba6b7ad60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09d00eb6e3fdb3415b71e49422ee797ba442c0324ff603373a47dd04f73394ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d00eb6e3fdb3415b71e49422ee797ba442c0324ff603373a47dd04f73394ca->enter($__internal_09d00eb6e3fdb3415b71e49422ee797ba442c0324ff603373a47dd04f73394ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d00eb6e3fdb3415b71e49422ee797ba442c0324ff603373a47dd04f73394ca->leave($__internal_09d00eb6e3fdb3415b71e49422ee797ba442c0324ff603373a47dd04f73394ca_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ba32636910bcaec8d6180dedc6af8f2f48493023c621ddc7169925ca3a6aa305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba32636910bcaec8d6180dedc6af8f2f48493023c621ddc7169925ca3a6aa305->enter($__internal_ba32636910bcaec8d6180dedc6af8f2f48493023c621ddc7169925ca3a6aa305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["menu_options"]) || array_key_exists("menu_options", $context) ? $context["menu_options"] : (function () { throw new Twig_Error_Runtime('Variable "menu_options" does not exist.', 15, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_ba32636910bcaec8d6180dedc6af8f2f48493023c621ddc7169925ca3a6aa305->leave($__internal_ba32636910bcaec8d6180dedc6af8f2f48493023c621ddc7169925ca3a6aa305_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
