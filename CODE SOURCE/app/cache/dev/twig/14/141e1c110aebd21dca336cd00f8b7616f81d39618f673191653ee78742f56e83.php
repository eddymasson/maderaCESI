<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_32244ac737b449c27c0e58182b5423b161f2ffb21164668143b5869dc75afc2a extends Twig_Template
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
        $__internal_7954f71d5f066cb1c89dfb7c75b4b98305a2b626e44df97daf80858fc61a11f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7954f71d5f066cb1c89dfb7c75b4b98305a2b626e44df97daf80858fc61a11f1->enter($__internal_7954f71d5f066cb1c89dfb7c75b4b98305a2b626e44df97daf80858fc61a11f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7954f71d5f066cb1c89dfb7c75b4b98305a2b626e44df97daf80858fc61a11f1->leave($__internal_7954f71d5f066cb1c89dfb7c75b4b98305a2b626e44df97daf80858fc61a11f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}