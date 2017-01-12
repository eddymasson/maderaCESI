<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a21718e4eb127e7987f62dc7871fc341dadcd2066c035f40897678894afb3294 extends Twig_Template
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
        $__internal_3b78b7e3f9b2965013c6ea7c006baa3aee582f4c7c78d19cca0650422347ce32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b78b7e3f9b2965013c6ea7c006baa3aee582f4c7c78d19cca0650422347ce32->enter($__internal_3b78b7e3f9b2965013c6ea7c006baa3aee582f4c7c78d19cca0650422347ce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3b78b7e3f9b2965013c6ea7c006baa3aee582f4c7c78d19cca0650422347ce32->leave($__internal_3b78b7e3f9b2965013c6ea7c006baa3aee582f4c7c78d19cca0650422347ce32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
