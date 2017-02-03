<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bb29e46f6ac4f8c53e5c5a06e31ed2c998c868f6a9551912e7105accc58df1bb extends Twig_Template
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
        $__internal_3549a18dab45e9beb889812a00103526b6428b29692a74cd53fe3176a9594d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3549a18dab45e9beb889812a00103526b6428b29692a74cd53fe3176a9594d1e->enter($__internal_3549a18dab45e9beb889812a00103526b6428b29692a74cd53fe3176a9594d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3549a18dab45e9beb889812a00103526b6428b29692a74cd53fe3176a9594d1e->leave($__internal_3549a18dab45e9beb889812a00103526b6428b29692a74cd53fe3176a9594d1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
