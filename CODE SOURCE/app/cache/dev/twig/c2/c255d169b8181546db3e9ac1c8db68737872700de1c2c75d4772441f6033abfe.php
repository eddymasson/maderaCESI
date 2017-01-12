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
        $__internal_9278fc2c1c8fc69175dae0a9719a2df8211e3ac593bfae5e4a6b22fecb21f33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9278fc2c1c8fc69175dae0a9719a2df8211e3ac593bfae5e4a6b22fecb21f33c->enter($__internal_9278fc2c1c8fc69175dae0a9719a2df8211e3ac593bfae5e4a6b22fecb21f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9278fc2c1c8fc69175dae0a9719a2df8211e3ac593bfae5e4a6b22fecb21f33c->leave($__internal_9278fc2c1c8fc69175dae0a9719a2df8211e3ac593bfae5e4a6b22fecb21f33c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc64c4312411cb21c468d26a7393c8deeabb40fd1f43a0851b9abc227e63fcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc64c4312411cb21c468d26a7393c8deeabb40fd1f43a0851b9abc227e63fcd4->enter($__internal_bc64c4312411cb21c468d26a7393c8deeabb40fd1f43a0851b9abc227e63fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bc64c4312411cb21c468d26a7393c8deeabb40fd1f43a0851b9abc227e63fcd4->leave($__internal_bc64c4312411cb21c468d26a7393c8deeabb40fd1f43a0851b9abc227e63fcd4_prof);

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
