<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_61e4ca97301633c572e00d35f542227dd00a8cbec36a9d9cef6a84fc43dae1c3 extends Twig_Template
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
        $__internal_41116e3f49a8f7c3a3c4b83bcd0d338a627a8159a0256dae42aa943a51ea67ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41116e3f49a8f7c3a3c4b83bcd0d338a627a8159a0256dae42aa943a51ea67ce->enter($__internal_41116e3f49a8f7c3a3c4b83bcd0d338a627a8159a0256dae42aa943a51ea67ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_41116e3f49a8f7c3a3c4b83bcd0d338a627a8159a0256dae42aa943a51ea67ce->leave($__internal_41116e3f49a8f7c3a3c4b83bcd0d338a627a8159a0256dae42aa943a51ea67ce_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
