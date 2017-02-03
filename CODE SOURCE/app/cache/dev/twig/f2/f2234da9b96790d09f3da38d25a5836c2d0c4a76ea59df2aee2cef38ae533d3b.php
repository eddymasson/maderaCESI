<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e86bb69d9f26500879668544dab8bf01a6a2bb0c7f0594a124d419ea18006ae8 extends Twig_Template
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
        $__internal_24fc56b260bf25373a9b0ac2546a0c89dc39dee58ce081384a72dbc27268d1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fc56b260bf25373a9b0ac2546a0c89dc39dee58ce081384a72dbc27268d1bc->enter($__internal_24fc56b260bf25373a9b0ac2546a0c89dc39dee58ce081384a72dbc27268d1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_24fc56b260bf25373a9b0ac2546a0c89dc39dee58ce081384a72dbc27268d1bc->leave($__internal_24fc56b260bf25373a9b0ac2546a0c89dc39dee58ce081384a72dbc27268d1bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
