<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c5816cd5af795e3f32bf21e9836e3e4bc5cbc5746d1024711ce57b3d46ef6571 extends Twig_Template
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
        $__internal_10e7093cf5a63226e51d314c435fdedf17a5f8857469cbb7ee06dec14f0f22ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e7093cf5a63226e51d314c435fdedf17a5f8857469cbb7ee06dec14f0f22ce->enter($__internal_10e7093cf5a63226e51d314c435fdedf17a5f8857469cbb7ee06dec14f0f22ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_10e7093cf5a63226e51d314c435fdedf17a5f8857469cbb7ee06dec14f0f22ce->leave($__internal_10e7093cf5a63226e51d314c435fdedf17a5f8857469cbb7ee06dec14f0f22ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
