<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_40542104a753724d464a5e77f684b78b98fbef5ff5d1fb8d328c2d7c49fdcf80 extends Twig_Template
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
        $__internal_ad5e814e8a9dc648c7a2f39068f925fdb098e5f65bf11cd94e96c4ab3cbe077b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5e814e8a9dc648c7a2f39068f925fdb098e5f65bf11cd94e96c4ab3cbe077b->enter($__internal_ad5e814e8a9dc648c7a2f39068f925fdb098e5f65bf11cd94e96c4ab3cbe077b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ad5e814e8a9dc648c7a2f39068f925fdb098e5f65bf11cd94e96c4ab3cbe077b->leave($__internal_ad5e814e8a9dc648c7a2f39068f925fdb098e5f65bf11cd94e96c4ab3cbe077b_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}