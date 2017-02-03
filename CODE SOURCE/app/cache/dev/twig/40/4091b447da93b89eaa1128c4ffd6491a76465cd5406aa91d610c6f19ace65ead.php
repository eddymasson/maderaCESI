<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_df83b499925cf4290356588dae0dc1f9a240b5a3255f32696d39074419ace1d0 extends Twig_Template
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
        $__internal_ac8acba583b127e6309403325b441af5125653c1fb7a7fbdb974a03d0cfbce2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8acba583b127e6309403325b441af5125653c1fb7a7fbdb974a03d0cfbce2b->enter($__internal_ac8acba583b127e6309403325b441af5125653c1fb7a7fbdb974a03d0cfbce2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ac8acba583b127e6309403325b441af5125653c1fb7a7fbdb974a03d0cfbce2b->leave($__internal_ac8acba583b127e6309403325b441af5125653c1fb7a7fbdb974a03d0cfbce2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
