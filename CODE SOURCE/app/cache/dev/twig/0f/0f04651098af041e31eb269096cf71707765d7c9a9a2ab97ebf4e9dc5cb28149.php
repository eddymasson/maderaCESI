<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9b5b2fc1f68c3bc993c4efc2a2dba15babefd2b171bf71ef6826dedd6f1f11f2 extends Twig_Template
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
        $__internal_8bd7e251fb0caa59f1ad9d22c060e539d0e0da1e869e0edabf8bbe749431d37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd7e251fb0caa59f1ad9d22c060e539d0e0da1e869e0edabf8bbe749431d37d->enter($__internal_8bd7e251fb0caa59f1ad9d22c060e539d0e0da1e869e0edabf8bbe749431d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8bd7e251fb0caa59f1ad9d22c060e539d0e0da1e869e0edabf8bbe749431d37d->leave($__internal_8bd7e251fb0caa59f1ad9d22c060e539d0e0da1e869e0edabf8bbe749431d37d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
