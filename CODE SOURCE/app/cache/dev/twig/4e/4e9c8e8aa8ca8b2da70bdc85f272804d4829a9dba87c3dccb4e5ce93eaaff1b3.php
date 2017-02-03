<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_58bbe00c2761a6798fe1a4186d14d46cbce8e885017d5853ffd910dac122fcda extends Twig_Template
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
        $__internal_262ff04afc421070f55ba3a152f9d37a4c975ee48a9806e87c722f7600a6e8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262ff04afc421070f55ba3a152f9d37a4c975ee48a9806e87c722f7600a6e8a3->enter($__internal_262ff04afc421070f55ba3a152f9d37a4c975ee48a9806e87c722f7600a6e8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_262ff04afc421070f55ba3a152f9d37a4c975ee48a9806e87c722f7600a6e8a3->leave($__internal_262ff04afc421070f55ba3a152f9d37a4c975ee48a9806e87c722f7600a6e8a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
