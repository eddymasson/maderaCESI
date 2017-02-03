<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_230b902879f33812c028d28ef012db4b4c3edcd81ae870bc865b73b03fa3b6a7 extends Twig_Template
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
        $__internal_630dd4f613fa6fd361ff9932359183ce929feb0098ed106f4b9a84f670a41754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630dd4f613fa6fd361ff9932359183ce929feb0098ed106f4b9a84f670a41754->enter($__internal_630dd4f613fa6fd361ff9932359183ce929feb0098ed106f4b9a84f670a41754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_630dd4f613fa6fd361ff9932359183ce929feb0098ed106f4b9a84f670a41754->leave($__internal_630dd4f613fa6fd361ff9932359183ce929feb0098ed106f4b9a84f670a41754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
