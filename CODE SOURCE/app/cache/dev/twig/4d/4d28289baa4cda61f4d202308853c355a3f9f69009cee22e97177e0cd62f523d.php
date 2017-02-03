<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f1b27b270b92f2eefba09fe1cc70c2fae4821ba60c5443efbba8e51a02c32de1 extends Twig_Template
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
        $__internal_f8bf5ec34d425180bb980cbf5015d91e47b23d8982bec0aca7fd7d7c0159074c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bf5ec34d425180bb980cbf5015d91e47b23d8982bec0aca7fd7d7c0159074c->enter($__internal_f8bf5ec34d425180bb980cbf5015d91e47b23d8982bec0aca7fd7d7c0159074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f8bf5ec34d425180bb980cbf5015d91e47b23d8982bec0aca7fd7d7c0159074c->leave($__internal_f8bf5ec34d425180bb980cbf5015d91e47b23d8982bec0aca7fd7d7c0159074c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
