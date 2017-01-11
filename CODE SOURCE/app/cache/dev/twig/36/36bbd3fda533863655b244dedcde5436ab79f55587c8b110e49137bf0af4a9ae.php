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
        $__internal_518316e224bb5cf23ad28b2f8b2a54a539f09c4c89b93630ee282e0c7c0935a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518316e224bb5cf23ad28b2f8b2a54a539f09c4c89b93630ee282e0c7c0935a6->enter($__internal_518316e224bb5cf23ad28b2f8b2a54a539f09c4c89b93630ee282e0c7c0935a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_518316e224bb5cf23ad28b2f8b2a54a539f09c4c89b93630ee282e0c7c0935a6->leave($__internal_518316e224bb5cf23ad28b2f8b2a54a539f09c4c89b93630ee282e0c7c0935a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf93c8de57a03822b847583df598a4015c914f145a7b16686e2456bab97065d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf93c8de57a03822b847583df598a4015c914f145a7b16686e2456bab97065d3->enter($__internal_bf93c8de57a03822b847583df598a4015c914f145a7b16686e2456bab97065d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bf93c8de57a03822b847583df598a4015c914f145a7b16686e2456bab97065d3->leave($__internal_bf93c8de57a03822b847583df598a4015c914f145a7b16686e2456bab97065d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8336e07e360cafcc8b6062f7e10488a108921a297f0781b6bb7f8cb0a1c15d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8336e07e360cafcc8b6062f7e10488a108921a297f0781b6bb7f8cb0a1c15d60->enter($__internal_8336e07e360cafcc8b6062f7e10488a108921a297f0781b6bb7f8cb0a1c15d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8336e07e360cafcc8b6062f7e10488a108921a297f0781b6bb7f8cb0a1c15d60->leave($__internal_8336e07e360cafcc8b6062f7e10488a108921a297f0781b6bb7f8cb0a1c15d60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a0fcac9ab80cdc3544e2d4212753c23cbb2e7bfabb85178015e791eadd7608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a0fcac9ab80cdc3544e2d4212753c23cbb2e7bfabb85178015e791eadd7608->enter($__internal_66a0fcac9ab80cdc3544e2d4212753c23cbb2e7bfabb85178015e791eadd7608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_66a0fcac9ab80cdc3544e2d4212753c23cbb2e7bfabb85178015e791eadd7608->leave($__internal_66a0fcac9ab80cdc3544e2d4212753c23cbb2e7bfabb85178015e791eadd7608_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfa064ca3b5fde5c4049097c13b28253375781cad7bcc806d8442d14ca54ab22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa064ca3b5fde5c4049097c13b28253375781cad7bcc806d8442d14ca54ab22->enter($__internal_cfa064ca3b5fde5c4049097c13b28253375781cad7bcc806d8442d14ca54ab22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfa064ca3b5fde5c4049097c13b28253375781cad7bcc806d8442d14ca54ab22->leave($__internal_cfa064ca3b5fde5c4049097c13b28253375781cad7bcc806d8442d14ca54ab22_prof);

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
