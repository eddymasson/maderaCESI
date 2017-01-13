<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a1b911200ab694359740938ab4702313fa8f26c6951fb97e7fc1a2b6a05ff908 extends Twig_Template
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
        $__internal_4f2b5a176f1b3367413ac3ee626ecb4dd5e3c38012d52f956ad1a799ec5b6c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2b5a176f1b3367413ac3ee626ecb4dd5e3c38012d52f956ad1a799ec5b6c50->enter($__internal_4f2b5a176f1b3367413ac3ee626ecb4dd5e3c38012d52f956ad1a799ec5b6c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4f2b5a176f1b3367413ac3ee626ecb4dd5e3c38012d52f956ad1a799ec5b6c50->leave($__internal_4f2b5a176f1b3367413ac3ee626ecb4dd5e3c38012d52f956ad1a799ec5b6c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
