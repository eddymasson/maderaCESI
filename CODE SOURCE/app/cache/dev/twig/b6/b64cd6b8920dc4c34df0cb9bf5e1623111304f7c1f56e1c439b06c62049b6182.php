<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fef508196a06c624a526496572ffdcc4d622f0c5de51bfceeab0e8ad446df2d5 extends Twig_Template
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
        $__internal_41b3bd54d9f0c095701cd235900b28ba972c61ccf42fff0c43c819e9f52ef7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b3bd54d9f0c095701cd235900b28ba972c61ccf42fff0c43c819e9f52ef7e4->enter($__internal_41b3bd54d9f0c095701cd235900b28ba972c61ccf42fff0c43c819e9f52ef7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_41b3bd54d9f0c095701cd235900b28ba972c61ccf42fff0c43c819e9f52ef7e4->leave($__internal_41b3bd54d9f0c095701cd235900b28ba972c61ccf42fff0c43c819e9f52ef7e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
