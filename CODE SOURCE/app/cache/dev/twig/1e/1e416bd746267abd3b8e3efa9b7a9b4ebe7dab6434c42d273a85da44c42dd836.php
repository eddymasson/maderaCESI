<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ee70596f9cc5ace3ec13952c117cda89d31484375c0ddb7d7aa2cf9fc9d8fc6d extends Twig_Template
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
        $__internal_267e85e556ebcc1667967f8ada112f41bdd0b3fd38a13e27aa51b24988c8eb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267e85e556ebcc1667967f8ada112f41bdd0b3fd38a13e27aa51b24988c8eb3a->enter($__internal_267e85e556ebcc1667967f8ada112f41bdd0b3fd38a13e27aa51b24988c8eb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_267e85e556ebcc1667967f8ada112f41bdd0b3fd38a13e27aa51b24988c8eb3a->leave($__internal_267e85e556ebcc1667967f8ada112f41bdd0b3fd38a13e27aa51b24988c8eb3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
