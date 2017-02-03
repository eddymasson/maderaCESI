<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_92142ddfeae04469c7f0fcfdef4269f8935e5ef201666b2d9e6ea31c9b8a9c72 extends Twig_Template
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
        $__internal_9aa18d2a975582eb32c76611c389c0a606b70433dcea1e4cbacb2691a04cd5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa18d2a975582eb32c76611c389c0a606b70433dcea1e4cbacb2691a04cd5b1->enter($__internal_9aa18d2a975582eb32c76611c389c0a606b70433dcea1e4cbacb2691a04cd5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9aa18d2a975582eb32c76611c389c0a606b70433dcea1e4cbacb2691a04cd5b1->leave($__internal_9aa18d2a975582eb32c76611c389c0a606b70433dcea1e4cbacb2691a04cd5b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
