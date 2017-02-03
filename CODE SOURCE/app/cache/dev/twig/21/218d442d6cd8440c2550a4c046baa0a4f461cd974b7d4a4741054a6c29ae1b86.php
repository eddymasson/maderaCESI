<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_297e79eb43b72d43f0aea46f6743bcbfb2dcacc244a9109c0763b25828a97871 extends Twig_Template
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
        $__internal_1f4492d54bc86de7bccb97e0f76d2a5af52b643891dfb34fded372625b6a5d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4492d54bc86de7bccb97e0f76d2a5af52b643891dfb34fded372625b6a5d89->enter($__internal_1f4492d54bc86de7bccb97e0f76d2a5af52b643891dfb34fded372625b6a5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1f4492d54bc86de7bccb97e0f76d2a5af52b643891dfb34fded372625b6a5d89->leave($__internal_1f4492d54bc86de7bccb97e0f76d2a5af52b643891dfb34fded372625b6a5d89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
