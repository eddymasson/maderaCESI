<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d1f9ce1f92711d4bc765dab1c51d96605944b57b4e218d376897c3f1af6f2445 extends Twig_Template
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
        $__internal_1e3a9d507e1c9fca4c2d4f8d31aff035ce2137c70bafe5d9a5035143b2975d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3a9d507e1c9fca4c2d4f8d31aff035ce2137c70bafe5d9a5035143b2975d9b->enter($__internal_1e3a9d507e1c9fca4c2d4f8d31aff035ce2137c70bafe5d9a5035143b2975d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1e3a9d507e1c9fca4c2d4f8d31aff035ce2137c70bafe5d9a5035143b2975d9b->leave($__internal_1e3a9d507e1c9fca4c2d4f8d31aff035ce2137c70bafe5d9a5035143b2975d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
