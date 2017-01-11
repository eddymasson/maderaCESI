<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_356a3860487dc9596511e99497084204ff9408890b5a6043a74b6fd199f92bec extends Twig_Template
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
        $__internal_e4a2cfbb0b628e4c0fb9f2b893a3f2a954c37ba7e0079d709ac21158abd17d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a2cfbb0b628e4c0fb9f2b893a3f2a954c37ba7e0079d709ac21158abd17d13->enter($__internal_e4a2cfbb0b628e4c0fb9f2b893a3f2a954c37ba7e0079d709ac21158abd17d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e4a2cfbb0b628e4c0fb9f2b893a3f2a954c37ba7e0079d709ac21158abd17d13->leave($__internal_e4a2cfbb0b628e4c0fb9f2b893a3f2a954c37ba7e0079d709ac21158abd17d13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
