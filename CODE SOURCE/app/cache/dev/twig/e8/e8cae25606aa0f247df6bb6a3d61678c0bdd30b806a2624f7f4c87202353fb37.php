<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_5ae67bd24e29700886e9b9750cf9c37ad65f2d27379dd7d9375e3dd79ce4bb20 extends Twig_Template
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
        $__internal_221e2c35d2a579d70d6236777103838f892dd48e048d75fd220b9e41cc636ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221e2c35d2a579d70d6236777103838f892dd48e048d75fd220b9e41cc636ea9->enter($__internal_221e2c35d2a579d70d6236777103838f892dd48e048d75fd220b9e41cc636ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_221e2c35d2a579d70d6236777103838f892dd48e048d75fd220b9e41cc636ea9->leave($__internal_221e2c35d2a579d70d6236777103838f892dd48e048d75fd220b9e41cc636ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
