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
        $__internal_a5efbcb85417166d407474cf6fd9ae5ced5704edc9227d3de959d44c9a6a88fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5efbcb85417166d407474cf6fd9ae5ced5704edc9227d3de959d44c9a6a88fa->enter($__internal_a5efbcb85417166d407474cf6fd9ae5ced5704edc9227d3de959d44c9a6a88fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a5efbcb85417166d407474cf6fd9ae5ced5704edc9227d3de959d44c9a6a88fa->leave($__internal_a5efbcb85417166d407474cf6fd9ae5ced5704edc9227d3de959d44c9a6a88fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f05e97c7c8806a7d9797d87662c318211cf5d432d5db2fe5c9601078e08f7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f05e97c7c8806a7d9797d87662c318211cf5d432d5db2fe5c9601078e08f7b8->enter($__internal_7f05e97c7c8806a7d9797d87662c318211cf5d432d5db2fe5c9601078e08f7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7f05e97c7c8806a7d9797d87662c318211cf5d432d5db2fe5c9601078e08f7b8->leave($__internal_7f05e97c7c8806a7d9797d87662c318211cf5d432d5db2fe5c9601078e08f7b8_prof);

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
