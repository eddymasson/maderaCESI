<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_07c11a44e274a51e6776ef7b7f1ca0c2b65ffb38dba27a2da5775d353b718573 extends Twig_Template
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
        $__internal_ba0ac4a26c8beb758c10956f8a21538c82e137f278bb58b8db9d1b06c9a21ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0ac4a26c8beb758c10956f8a21538c82e137f278bb58b8db9d1b06c9a21ced->enter($__internal_ba0ac4a26c8beb758c10956f8a21538c82e137f278bb58b8db9d1b06c9a21ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ba0ac4a26c8beb758c10956f8a21538c82e137f278bb58b8db9d1b06c9a21ced->leave($__internal_ba0ac4a26c8beb758c10956f8a21538c82e137f278bb58b8db9d1b06c9a21ced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}