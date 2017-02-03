<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_32096239fd414c352c402b50f41d2d020ef06883845d6cfaa0b6ce5a16be1ebb extends Twig_Template
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
        $__internal_1cb1645ff823bbd6db1a76f8f7da706413e0ca880934bb5fa709972e5cecc2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb1645ff823bbd6db1a76f8f7da706413e0ca880934bb5fa709972e5cecc2d3->enter($__internal_1cb1645ff823bbd6db1a76f8f7da706413e0ca880934bb5fa709972e5cecc2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1cb1645ff823bbd6db1a76f8f7da706413e0ca880934bb5fa709972e5cecc2d3->leave($__internal_1cb1645ff823bbd6db1a76f8f7da706413e0ca880934bb5fa709972e5cecc2d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
