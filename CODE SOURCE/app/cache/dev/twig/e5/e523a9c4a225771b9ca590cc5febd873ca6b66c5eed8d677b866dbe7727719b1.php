<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6782d9d76d45484e32e98b37fd9b62c02f837f5365a0b4fc520d3ccd8cbecd6f extends Twig_Template
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
        $__internal_e2de539a3297c9726e6a8815e4732c30ce8e98eca35f6d9bb04d13709ed8a7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2de539a3297c9726e6a8815e4732c30ce8e98eca35f6d9bb04d13709ed8a7e1->enter($__internal_e2de539a3297c9726e6a8815e4732c30ce8e98eca35f6d9bb04d13709ed8a7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_e2de539a3297c9726e6a8815e4732c30ce8e98eca35f6d9bb04d13709ed8a7e1->leave($__internal_e2de539a3297c9726e6a8815e4732c30ce8e98eca35f6d9bb04d13709ed8a7e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
