<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0f270e2b85fef0a309cff4ead5bff4ba455dae4a6b3dcb3c3424ce73831ca7c4 extends Twig_Template
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
        $__internal_1e025b591524bbbd4623e69ebb02c5ddf2646866fddfb13168bccf11fc34a238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e025b591524bbbd4623e69ebb02c5ddf2646866fddfb13168bccf11fc34a238->enter($__internal_1e025b591524bbbd4623e69ebb02c5ddf2646866fddfb13168bccf11fc34a238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1e025b591524bbbd4623e69ebb02c5ddf2646866fddfb13168bccf11fc34a238->leave($__internal_1e025b591524bbbd4623e69ebb02c5ddf2646866fddfb13168bccf11fc34a238_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
