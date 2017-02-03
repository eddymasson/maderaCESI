<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_441608dfab0400daec284cb777d7220248b7104765289d5e388683bf17978a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff1c1db0476238f5c8237b629e0b332f407f50d3f7d21fd92cb173d9a47099cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1c1db0476238f5c8237b629e0b332f407f50d3f7d21fd92cb173d9a47099cc->enter($__internal_ff1c1db0476238f5c8237b629e0b332f407f50d3f7d21fd92cb173d9a47099cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_ff1c1db0476238f5c8237b629e0b332f407f50d3f7d21fd92cb173d9a47099cc->leave($__internal_ff1c1db0476238f5c8237b629e0b332f407f50d3f7d21fd92cb173d9a47099cc_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_491722a5eeaf51a5a86b5bf74f53cc73ba109759c12e2744e83d6372b19f868e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491722a5eeaf51a5a86b5bf74f53cc73ba109759c12e2744e83d6372b19f868e->enter($__internal_491722a5eeaf51a5a86b5bf74f53cc73ba109759c12e2744e83d6372b19f868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_491722a5eeaf51a5a86b5bf74f53cc73ba109759c12e2744e83d6372b19f868e->leave($__internal_491722a5eeaf51a5a86b5bf74f53cc73ba109759c12e2744e83d6372b19f868e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>", "SonataUserBundle::layout.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/layout.html.twig");
    }
}
