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
        $__internal_e75426408fbe14d1cf9eb8a1c2a566a83ae933e5f66171d7f9ede7633042d17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75426408fbe14d1cf9eb8a1c2a566a83ae933e5f66171d7f9ede7633042d17b->enter($__internal_e75426408fbe14d1cf9eb8a1c2a566a83ae933e5f66171d7f9ede7633042d17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e75426408fbe14d1cf9eb8a1c2a566a83ae933e5f66171d7f9ede7633042d17b->leave($__internal_e75426408fbe14d1cf9eb8a1c2a566a83ae933e5f66171d7f9ede7633042d17b_prof);

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
