<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fcd4c452ce40e11409904e0588c921b2102d7fcc5617fd98dd94b38ce1f1a5ee extends Twig_Template
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
        $__internal_d019f663171d44521874cc1b15d4f20316dfac0baaadde3a963712baa4dbc998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d019f663171d44521874cc1b15d4f20316dfac0baaadde3a963712baa4dbc998->enter($__internal_d019f663171d44521874cc1b15d4f20316dfac0baaadde3a963712baa4dbc998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d019f663171d44521874cc1b15d4f20316dfac0baaadde3a963712baa4dbc998->leave($__internal_d019f663171d44521874cc1b15d4f20316dfac0baaadde3a963712baa4dbc998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
