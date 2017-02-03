<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_82ebfeac770618eac39718d3a49047bd07949b83e5de2b7602adff344375f62d extends Twig_Template
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
        $__internal_d6b6b14c9200a7ca05bee94843a72d4539f96421849bf91b0263935af44d0c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b6b14c9200a7ca05bee94843a72d4539f96421849bf91b0263935af44d0c1c->enter($__internal_d6b6b14c9200a7ca05bee94843a72d4539f96421849bf91b0263935af44d0c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d6b6b14c9200a7ca05bee94843a72d4539f96421849bf91b0263935af44d0c1c->leave($__internal_d6b6b14c9200a7ca05bee94843a72d4539f96421849bf91b0263935af44d0c1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
