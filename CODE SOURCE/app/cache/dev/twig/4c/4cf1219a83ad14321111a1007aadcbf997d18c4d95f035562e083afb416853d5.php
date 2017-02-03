<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_971dafa257722ee58b193ebf3a35d9b300bcb07bb8a0c13500c6fc9b0364a471 extends Twig_Template
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
        $__internal_f99970dee08b11544a5b02065bd2ebda8b8716c2edfe316c1fddc1a103ebc879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99970dee08b11544a5b02065bd2ebda8b8716c2edfe316c1fddc1a103ebc879->enter($__internal_f99970dee08b11544a5b02065bd2ebda8b8716c2edfe316c1fddc1a103ebc879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f99970dee08b11544a5b02065bd2ebda8b8716c2edfe316c1fddc1a103ebc879->leave($__internal_f99970dee08b11544a5b02065bd2ebda8b8716c2edfe316c1fddc1a103ebc879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
