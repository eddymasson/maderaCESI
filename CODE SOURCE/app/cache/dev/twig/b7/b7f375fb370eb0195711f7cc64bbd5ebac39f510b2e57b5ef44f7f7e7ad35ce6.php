<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d96e8d742d93311f87cd7d145c61fdd7f2733fdc63ec5aa0cd9de0e04728e324 extends Twig_Template
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
        $__internal_7e2d4ff46ac6fe47a63fa945e7c8feaae8a2e6c77645bd69857f57d47ecccda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2d4ff46ac6fe47a63fa945e7c8feaae8a2e6c77645bd69857f57d47ecccda6->enter($__internal_7e2d4ff46ac6fe47a63fa945e7c8feaae8a2e6c77645bd69857f57d47ecccda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7e2d4ff46ac6fe47a63fa945e7c8feaae8a2e6c77645bd69857f57d47ecccda6->leave($__internal_7e2d4ff46ac6fe47a63fa945e7c8feaae8a2e6c77645bd69857f57d47ecccda6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4323d9d624d39e7c204fe6047c7459b594806b2705d3032772e878a72ddeade3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4323d9d624d39e7c204fe6047c7459b594806b2705d3032772e878a72ddeade3->enter($__internal_4323d9d624d39e7c204fe6047c7459b594806b2705d3032772e878a72ddeade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4323d9d624d39e7c204fe6047c7459b594806b2705d3032772e878a72ddeade3->leave($__internal_4323d9d624d39e7c204fe6047c7459b594806b2705d3032772e878a72ddeade3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
