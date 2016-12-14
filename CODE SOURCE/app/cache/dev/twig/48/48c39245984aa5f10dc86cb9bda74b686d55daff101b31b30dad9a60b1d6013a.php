<?php

/* base.html.twig */
class __TwigTemplate_63d78ba999018b9c29c4c17ca1c32d151a42728d528986afae01f798ac1cf25d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_593d0b56c4a90e2a2ebd67cfaaffe56090aace7c5f51bfa2ce8f7cfa428276d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593d0b56c4a90e2a2ebd67cfaaffe56090aace7c5f51bfa2ce8f7cfa428276d4->enter($__internal_593d0b56c4a90e2a2ebd67cfaaffe56090aace7c5f51bfa2ce8f7cfa428276d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_593d0b56c4a90e2a2ebd67cfaaffe56090aace7c5f51bfa2ce8f7cfa428276d4->leave($__internal_593d0b56c4a90e2a2ebd67cfaaffe56090aace7c5f51bfa2ce8f7cfa428276d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a14b2c83499c89fce5778c0b90bb9eab3f89427318e2c5b6d62b10c675e33a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a14b2c83499c89fce5778c0b90bb9eab3f89427318e2c5b6d62b10c675e33a2->enter($__internal_8a14b2c83499c89fce5778c0b90bb9eab3f89427318e2c5b6d62b10c675e33a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a14b2c83499c89fce5778c0b90bb9eab3f89427318e2c5b6d62b10c675e33a2->leave($__internal_8a14b2c83499c89fce5778c0b90bb9eab3f89427318e2c5b6d62b10c675e33a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0ccc565cb4c5a0e387f96a5b65758da6eb06e848530a0b311003b34768d08f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ccc565cb4c5a0e387f96a5b65758da6eb06e848530a0b311003b34768d08f3->enter($__internal_b0ccc565cb4c5a0e387f96a5b65758da6eb06e848530a0b311003b34768d08f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0ccc565cb4c5a0e387f96a5b65758da6eb06e848530a0b311003b34768d08f3->leave($__internal_b0ccc565cb4c5a0e387f96a5b65758da6eb06e848530a0b311003b34768d08f3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36ffdedc8d1dd251bea2008caa6882eb65f4bb1d5b06c2ffe4e7274edd139b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ffdedc8d1dd251bea2008caa6882eb65f4bb1d5b06c2ffe4e7274edd139b37->enter($__internal_36ffdedc8d1dd251bea2008caa6882eb65f4bb1d5b06c2ffe4e7274edd139b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36ffdedc8d1dd251bea2008caa6882eb65f4bb1d5b06c2ffe4e7274edd139b37->leave($__internal_36ffdedc8d1dd251bea2008caa6882eb65f4bb1d5b06c2ffe4e7274edd139b37_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d69ed9b7f8415a8b347f6ce235d03a6a017bfdcf6ec801c2743dccd10ca8d159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69ed9b7f8415a8b347f6ce235d03a6a017bfdcf6ec801c2743dccd10ca8d159->enter($__internal_d69ed9b7f8415a8b347f6ce235d03a6a017bfdcf6ec801c2743dccd10ca8d159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d69ed9b7f8415a8b347f6ce235d03a6a017bfdcf6ec801c2743dccd10ca8d159->leave($__internal_d69ed9b7f8415a8b347f6ce235d03a6a017bfdcf6ec801c2743dccd10ca8d159_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/app/Resources/views/base.html.twig");
    }
}
