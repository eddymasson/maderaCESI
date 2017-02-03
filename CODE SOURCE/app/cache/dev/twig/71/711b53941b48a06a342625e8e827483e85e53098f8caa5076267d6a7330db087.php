<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_07380fb250881ac1fd4f3f2ab37dd0c2ac0cc5218e494897a6f3bd035dcfd16d extends Twig_Template
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
        $__internal_861142313053cfae6ea40ec1c728c7fcfd0672052502560c7248623a2f2357f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861142313053cfae6ea40ec1c728c7fcfd0672052502560c7248623a2f2357f2->enter($__internal_861142313053cfae6ea40ec1c728c7fcfd0672052502560c7248623a2f2357f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_861142313053cfae6ea40ec1c728c7fcfd0672052502560c7248623a2f2357f2->leave($__internal_861142313053cfae6ea40ec1c728c7fcfd0672052502560c7248623a2f2357f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
