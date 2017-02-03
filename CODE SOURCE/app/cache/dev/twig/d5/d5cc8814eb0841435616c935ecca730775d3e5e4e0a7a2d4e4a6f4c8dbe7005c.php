<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_a27b47744ee6ce7f5201fcee6442691580de5c6087f60c0692c28e430f0b689d extends Twig_Template
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
        $__internal_4400cfe3144a2a58318ea3ab306816c6301253c1aae5c91935f3d2e6232281e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4400cfe3144a2a58318ea3ab306816c6301253c1aae5c91935f3d2e6232281e1->enter($__internal_4400cfe3144a2a58318ea3ab306816c6301253c1aae5c91935f3d2e6232281e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_4400cfe3144a2a58318ea3ab306816c6301253c1aae5c91935f3d2e6232281e1->leave($__internal_4400cfe3144a2a58318ea3ab306816c6301253c1aae5c91935f3d2e6232281e1_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
