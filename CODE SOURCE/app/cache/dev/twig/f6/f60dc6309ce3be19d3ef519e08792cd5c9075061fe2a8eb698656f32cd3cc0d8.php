<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c5816cd5af795e3f32bf21e9836e3e4bc5cbc5746d1024711ce57b3d46ef6571 extends Twig_Template
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
        $__internal_59669e83c368e936545d04fd2d4e2f7f3c2d56f6f36d74d1021b6aed98daeccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59669e83c368e936545d04fd2d4e2f7f3c2d56f6f36d74d1021b6aed98daeccb->enter($__internal_59669e83c368e936545d04fd2d4e2f7f3c2d56f6f36d74d1021b6aed98daeccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_59669e83c368e936545d04fd2d4e2f7f3c2d56f6f36d74d1021b6aed98daeccb->leave($__internal_59669e83c368e936545d04fd2d4e2f7f3c2d56f6f36d74d1021b6aed98daeccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
