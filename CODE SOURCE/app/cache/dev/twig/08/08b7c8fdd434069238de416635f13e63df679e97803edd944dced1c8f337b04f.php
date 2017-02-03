<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8d3bbe5bd7bf8589ec0d4b921a707cb755fde60c8d85bbf2b189957ff221e31b extends Twig_Template
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
        $__internal_5aa7d81bd0b01eb9aa831d9e62d47b118e3f03a27efe526fceb7c953e8cb32e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa7d81bd0b01eb9aa831d9e62d47b118e3f03a27efe526fceb7c953e8cb32e6->enter($__internal_5aa7d81bd0b01eb9aa831d9e62d47b118e3f03a27efe526fceb7c953e8cb32e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5aa7d81bd0b01eb9aa831d9e62d47b118e3f03a27efe526fceb7c953e8cb32e6->leave($__internal_5aa7d81bd0b01eb9aa831d9e62d47b118e3f03a27efe526fceb7c953e8cb32e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
