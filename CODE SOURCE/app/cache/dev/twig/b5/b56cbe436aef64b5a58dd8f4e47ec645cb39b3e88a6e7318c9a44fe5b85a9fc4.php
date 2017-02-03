<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ee23ac09d4bce08618f1b246dc903854ed95abd2b12eaa3325f1f472f4b95d5b extends Twig_Template
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
        $__internal_535ea4d8f767d3bbcfb5ff0335dad1c8683ae2160c24b3627261731171ac6cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535ea4d8f767d3bbcfb5ff0335dad1c8683ae2160c24b3627261731171ac6cc1->enter($__internal_535ea4d8f767d3bbcfb5ff0335dad1c8683ae2160c24b3627261731171ac6cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_535ea4d8f767d3bbcfb5ff0335dad1c8683ae2160c24b3627261731171ac6cc1->leave($__internal_535ea4d8f767d3bbcfb5ff0335dad1c8683ae2160c24b3627261731171ac6cc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
