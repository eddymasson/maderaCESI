<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_141bf93e5db6782f2e91a05b4ab334695b81728fa4c945774d1301e1a3e63183 extends Twig_Template
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
        $__internal_9723455330c56ca77169b2a32f85d89c3c48c73f3f2c1251d850c4137216a7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9723455330c56ca77169b2a32f85d89c3c48c73f3f2c1251d850c4137216a7aa->enter($__internal_9723455330c56ca77169b2a32f85d89c3c48c73f3f2c1251d850c4137216a7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9723455330c56ca77169b2a32f85d89c3c48c73f3f2c1251d850c4137216a7aa->leave($__internal_9723455330c56ca77169b2a32f85d89c3c48c73f3f2c1251d850c4137216a7aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
