<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1376f6df7c4287bd8eb5a2af0ae136f199f7bf6ab15c81ede94dc1e5df891b24 extends Twig_Template
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
        $__internal_87db43515378950d1719e4ea1e47d4319c087fd385fec72be05e6fb32dfb84ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87db43515378950d1719e4ea1e47d4319c087fd385fec72be05e6fb32dfb84ae->enter($__internal_87db43515378950d1719e4ea1e47d4319c087fd385fec72be05e6fb32dfb84ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_87db43515378950d1719e4ea1e47d4319c087fd385fec72be05e6fb32dfb84ae->leave($__internal_87db43515378950d1719e4ea1e47d4319c087fd385fec72be05e6fb32dfb84ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
