<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_21091b47d0f083f95de95e545a1c57b0e91c171715158e72d950d2b8dc569fe4 extends Twig_Template
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
        $__internal_b7132d59094df8b78ff29005f572bc71e77b524e50a821a25b0c8bd4fc32be0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7132d59094df8b78ff29005f572bc71e77b524e50a821a25b0c8bd4fc32be0f->enter($__internal_b7132d59094df8b78ff29005f572bc71e77b524e50a821a25b0c8bd4fc32be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7132d59094df8b78ff29005f572bc71e77b524e50a821a25b0c8bd4fc32be0f->leave($__internal_b7132d59094df8b78ff29005f572bc71e77b524e50a821a25b0c8bd4fc32be0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
