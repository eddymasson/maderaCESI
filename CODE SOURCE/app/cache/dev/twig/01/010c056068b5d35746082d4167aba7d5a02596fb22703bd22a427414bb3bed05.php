<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2fe8ca7912f34a32b199f86508c6db72ab12dae09b4f1091ddaa1dbbc6a7e4a5 extends Twig_Template
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
        $__internal_ce3d9c477844f5d4c89980855e3c8770516e25ab9e6d700f7de6d0e82ccf731d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3d9c477844f5d4c89980855e3c8770516e25ab9e6d700f7de6d0e82ccf731d->enter($__internal_ce3d9c477844f5d4c89980855e3c8770516e25ab9e6d700f7de6d0e82ccf731d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ce3d9c477844f5d4c89980855e3c8770516e25ab9e6d700f7de6d0e82ccf731d->leave($__internal_ce3d9c477844f5d4c89980855e3c8770516e25ab9e6d700f7de6d0e82ccf731d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
