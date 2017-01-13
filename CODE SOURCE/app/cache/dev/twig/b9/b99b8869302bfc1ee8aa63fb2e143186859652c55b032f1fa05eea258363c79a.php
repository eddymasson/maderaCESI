<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8e9e3f54a31231636fb2b62127597e3baeaec203c6f01dc4b41213997f541bc2 extends Twig_Template
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
        $__internal_7f6b055bc551b8d1c8b4219e419c9eb2d06e107f9d7c7d25bff85fd76045310d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b055bc551b8d1c8b4219e419c9eb2d06e107f9d7c7d25bff85fd76045310d->enter($__internal_7f6b055bc551b8d1c8b4219e419c9eb2d06e107f9d7c7d25bff85fd76045310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7f6b055bc551b8d1c8b4219e419c9eb2d06e107f9d7c7d25bff85fd76045310d->leave($__internal_7f6b055bc551b8d1c8b4219e419c9eb2d06e107f9d7c7d25bff85fd76045310d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
