<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2b61359d5cbe5ec4cf842425a4f749b38c0d118e4387ec678a0a417cf4c9cd76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ab6beaa876e859e0cf97af67dc5b189777aa552b16bfcc8b64b5f44bebfeda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab6beaa876e859e0cf97af67dc5b189777aa552b16bfcc8b64b5f44bebfeda4->enter($__internal_2ab6beaa876e859e0cf97af67dc5b189777aa552b16bfcc8b64b5f44bebfeda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2ab6beaa876e859e0cf97af67dc5b189777aa552b16bfcc8b64b5f44bebfeda4->leave($__internal_2ab6beaa876e859e0cf97af67dc5b189777aa552b16bfcc8b64b5f44bebfeda4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4dcc04cebd1930072a946cf008490360953baa8afc5c851ab871b371013921c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcc04cebd1930072a946cf008490360953baa8afc5c851ab871b371013921c3->enter($__internal_4dcc04cebd1930072a946cf008490360953baa8afc5c851ab871b371013921c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4dcc04cebd1930072a946cf008490360953baa8afc5c851ab871b371013921c3->leave($__internal_4dcc04cebd1930072a946cf008490360953baa8afc5c851ab871b371013921c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
