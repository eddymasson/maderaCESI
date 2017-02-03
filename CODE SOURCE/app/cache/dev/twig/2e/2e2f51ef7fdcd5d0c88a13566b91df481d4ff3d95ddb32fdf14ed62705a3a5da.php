<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d92dcbafaea97d487208ae40fe4e75412044c0a059fd6fb59fe07666b2d2fe4f extends Twig_Template
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
        $__internal_b11009a41c2baf600626c3e5f1181e2c3c3c935e030518b9e7e5e352a967746b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11009a41c2baf600626c3e5f1181e2c3c3c935e030518b9e7e5e352a967746b->enter($__internal_b11009a41c2baf600626c3e5f1181e2c3c3c935e030518b9e7e5e352a967746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b11009a41c2baf600626c3e5f1181e2c3c3c935e030518b9e7e5e352a967746b->leave($__internal_b11009a41c2baf600626c3e5f1181e2c3c3c935e030518b9e7e5e352a967746b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
