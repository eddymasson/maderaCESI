<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_da171b9b6ee45677f7a127d04c4c4ebe0062b3b08fdadac0bac1a71573ac7c08 extends Twig_Template
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
        $__internal_d33948a66f3d22c362af97e5593a1d2ef8282635dbfe2eb694889e952e228d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33948a66f3d22c362af97e5593a1d2ef8282635dbfe2eb694889e952e228d8d->enter($__internal_d33948a66f3d22c362af97e5593a1d2ef8282635dbfe2eb694889e952e228d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d33948a66f3d22c362af97e5593a1d2ef8282635dbfe2eb694889e952e228d8d->leave($__internal_d33948a66f3d22c362af97e5593a1d2ef8282635dbfe2eb694889e952e228d8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
