<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4fb45e686b87d527bad8c894e6e4695604cd63ff37d42b4848284d78e6a349b5 extends Twig_Template
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
        $__internal_42cb760898e34f5229173dfc2af5a76a87c6f1ec47a3aea84822b7f27341883a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cb760898e34f5229173dfc2af5a76a87c6f1ec47a3aea84822b7f27341883a->enter($__internal_42cb760898e34f5229173dfc2af5a76a87c6f1ec47a3aea84822b7f27341883a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_42cb760898e34f5229173dfc2af5a76a87c6f1ec47a3aea84822b7f27341883a->leave($__internal_42cb760898e34f5229173dfc2af5a76a87c6f1ec47a3aea84822b7f27341883a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
