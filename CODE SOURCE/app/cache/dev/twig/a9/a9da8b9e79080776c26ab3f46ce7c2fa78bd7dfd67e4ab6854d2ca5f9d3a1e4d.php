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
        $__internal_70bf131fe3203fbf1102419928f51414d5d41b2e81aac6d5c05aa1f2b623681c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bf131fe3203fbf1102419928f51414d5d41b2e81aac6d5c05aa1f2b623681c->enter($__internal_70bf131fe3203fbf1102419928f51414d5d41b2e81aac6d5c05aa1f2b623681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_70bf131fe3203fbf1102419928f51414d5d41b2e81aac6d5c05aa1f2b623681c->leave($__internal_70bf131fe3203fbf1102419928f51414d5d41b2e81aac6d5c05aa1f2b623681c_prof);

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
