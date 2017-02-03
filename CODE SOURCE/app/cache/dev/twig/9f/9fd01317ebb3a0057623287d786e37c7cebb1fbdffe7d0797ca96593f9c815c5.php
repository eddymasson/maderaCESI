<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e31565bc51be3dc140964596185352f01872890df4c812e10f5f31c42866a1d2 extends Twig_Template
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
        $__internal_db61cb88ed9eaf243687663b3256e123d54035e45835b341c348283fd0660ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db61cb88ed9eaf243687663b3256e123d54035e45835b341c348283fd0660ea1->enter($__internal_db61cb88ed9eaf243687663b3256e123d54035e45835b341c348283fd0660ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_db61cb88ed9eaf243687663b3256e123d54035e45835b341c348283fd0660ea1->leave($__internal_db61cb88ed9eaf243687663b3256e123d54035e45835b341c348283fd0660ea1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
