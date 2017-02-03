<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c5bba645c20804d9e05d522ba495f4acdeb64dfcefd27984322a078c432aa9d6 extends Twig_Template
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
        $__internal_54965e8848bc6dbcbce9c5a9f480730c3cbc08e6c05ebe1f08861efb9c768ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54965e8848bc6dbcbce9c5a9f480730c3cbc08e6c05ebe1f08861efb9c768ef4->enter($__internal_54965e8848bc6dbcbce9c5a9f480730c3cbc08e6c05ebe1f08861efb9c768ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_54965e8848bc6dbcbce9c5a9f480730c3cbc08e6c05ebe1f08861efb9c768ef4->leave($__internal_54965e8848bc6dbcbce9c5a9f480730c3cbc08e6c05ebe1f08861efb9c768ef4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
