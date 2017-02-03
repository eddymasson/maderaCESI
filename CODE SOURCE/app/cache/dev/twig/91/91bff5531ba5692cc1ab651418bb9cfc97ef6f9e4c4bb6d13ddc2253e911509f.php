<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6b4a67d6df44a078c7b87c8f71ed591d1d957d55e46c30af9bb6a6d46fa110b5 extends Twig_Template
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
        $__internal_e143ba29a9d436179b3b71a0387865e9f2b1074b8150f1f1d75ce06f6de86cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e143ba29a9d436179b3b71a0387865e9f2b1074b8150f1f1d75ce06f6de86cec->enter($__internal_e143ba29a9d436179b3b71a0387865e9f2b1074b8150f1f1d75ce06f6de86cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e143ba29a9d436179b3b71a0387865e9f2b1074b8150f1f1d75ce06f6de86cec->leave($__internal_e143ba29a9d436179b3b71a0387865e9f2b1074b8150f1f1d75ce06f6de86cec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
