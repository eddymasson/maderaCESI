<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_79ec0dc412ca9b6786c74983b06f0bc00cb82d3ef2a42fb26a67efe1c8c1ba34 extends Twig_Template
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
        $__internal_dfc3829776bb197b25df977acd22d1f6c818c50707bfcd7a5d3aa586aae31d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc3829776bb197b25df977acd22d1f6c818c50707bfcd7a5d3aa586aae31d18->enter($__internal_dfc3829776bb197b25df977acd22d1f6c818c50707bfcd7a5d3aa586aae31d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dfc3829776bb197b25df977acd22d1f6c818c50707bfcd7a5d3aa586aae31d18->leave($__internal_dfc3829776bb197b25df977acd22d1f6c818c50707bfcd7a5d3aa586aae31d18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
