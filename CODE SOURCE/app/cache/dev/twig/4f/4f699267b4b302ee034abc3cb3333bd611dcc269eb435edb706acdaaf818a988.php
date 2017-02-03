<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_62375a7efa0956c2a603f8dd816364437fd8fadd33343d9d221955534a9bf70d extends Twig_Template
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
        $__internal_a3fda4bd99c4131db1f7fbca88d1cb6978719e5c8c7f8cffda33f70a3d2305ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fda4bd99c4131db1f7fbca88d1cb6978719e5c8c7f8cffda33f70a3d2305ea->enter($__internal_a3fda4bd99c4131db1f7fbca88d1cb6978719e5c8c7f8cffda33f70a3d2305ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a3fda4bd99c4131db1f7fbca88d1cb6978719e5c8c7f8cffda33f70a3d2305ea->leave($__internal_a3fda4bd99c4131db1f7fbca88d1cb6978719e5c8c7f8cffda33f70a3d2305ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
