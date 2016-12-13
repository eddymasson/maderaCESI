<?php

/* ::base.html.twig */
class __TwigTemplate_9a099113a3d6d44d625cba5f2157b49f449ff9102ad48a2c4dd89236f7d6b944 extends Twig_Template
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
        $__internal_677a888ad8d06e596671008ac26138950a89fac3c3dee413504365f1fd34b210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677a888ad8d06e596671008ac26138950a89fac3c3dee413504365f1fd34b210->enter($__internal_677a888ad8d06e596671008ac26138950a89fac3c3dee413504365f1fd34b210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_677a888ad8d06e596671008ac26138950a89fac3c3dee413504365f1fd34b210->leave($__internal_677a888ad8d06e596671008ac26138950a89fac3c3dee413504365f1fd34b210_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b918ceae8085767c7dcc2c2c2f9ff839c30253fa77126c62e53ac4a981ee910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b918ceae8085767c7dcc2c2c2f9ff839c30253fa77126c62e53ac4a981ee910->enter($__internal_5b918ceae8085767c7dcc2c2c2f9ff839c30253fa77126c62e53ac4a981ee910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5b918ceae8085767c7dcc2c2c2f9ff839c30253fa77126c62e53ac4a981ee910->leave($__internal_5b918ceae8085767c7dcc2c2c2f9ff839c30253fa77126c62e53ac4a981ee910_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61e198957e6d42d2a0e7f6f52aaab51e1193087fd07b2781f5a9fbd160bd9ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e198957e6d42d2a0e7f6f52aaab51e1193087fd07b2781f5a9fbd160bd9ed9->enter($__internal_61e198957e6d42d2a0e7f6f52aaab51e1193087fd07b2781f5a9fbd160bd9ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_61e198957e6d42d2a0e7f6f52aaab51e1193087fd07b2781f5a9fbd160bd9ed9->leave($__internal_61e198957e6d42d2a0e7f6f52aaab51e1193087fd07b2781f5a9fbd160bd9ed9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d09cf8aae6c7a105c24ca9f23acade34303d3a1612218ef0b1b8039894607aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d09cf8aae6c7a105c24ca9f23acade34303d3a1612218ef0b1b8039894607aa->enter($__internal_6d09cf8aae6c7a105c24ca9f23acade34303d3a1612218ef0b1b8039894607aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d09cf8aae6c7a105c24ca9f23acade34303d3a1612218ef0b1b8039894607aa->leave($__internal_6d09cf8aae6c7a105c24ca9f23acade34303d3a1612218ef0b1b8039894607aa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_399426ba1acd3378274c53cae4e2c08886f3334a70ee0859230aace49beb9c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399426ba1acd3378274c53cae4e2c08886f3334a70ee0859230aace49beb9c58->enter($__internal_399426ba1acd3378274c53cae4e2c08886f3334a70ee0859230aace49beb9c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_399426ba1acd3378274c53cae4e2c08886f3334a70ee0859230aace49beb9c58->leave($__internal_399426ba1acd3378274c53cae4e2c08886f3334a70ee0859230aace49beb9c58_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/app/Resources/views/base.html.twig");
    }
}
