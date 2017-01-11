<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_60cf484a73a518d996d182f3077b54bafcd621adcfa0adf23daf28de46655187 extends Twig_Template
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
        $__internal_b2e606ed2ddf5cae5a2708d246d031e5128f87ca2a1d2a4c8f7a8d05d4895259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e606ed2ddf5cae5a2708d246d031e5128f87ca2a1d2a4c8f7a8d05d4895259->enter($__internal_b2e606ed2ddf5cae5a2708d246d031e5128f87ca2a1d2a4c8f7a8d05d4895259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b2e606ed2ddf5cae5a2708d246d031e5128f87ca2a1d2a4c8f7a8d05d4895259->leave($__internal_b2e606ed2ddf5cae5a2708d246d031e5128f87ca2a1d2a4c8f7a8d05d4895259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
