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
        $__internal_47ea885586316f8c6aac234475166b4b8b85b018694b6eb725ed90f2f8230d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ea885586316f8c6aac234475166b4b8b85b018694b6eb725ed90f2f8230d71->enter($__internal_47ea885586316f8c6aac234475166b4b8b85b018694b6eb725ed90f2f8230d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_47ea885586316f8c6aac234475166b4b8b85b018694b6eb725ed90f2f8230d71->leave($__internal_47ea885586316f8c6aac234475166b4b8b85b018694b6eb725ed90f2f8230d71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a85b8e025205120dbc3675ce09495b7063c7c6b9de9398c0c9f66e9064c1cb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85b8e025205120dbc3675ce09495b7063c7c6b9de9398c0c9f66e9064c1cb1c->enter($__internal_a85b8e025205120dbc3675ce09495b7063c7c6b9de9398c0c9f66e9064c1cb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a85b8e025205120dbc3675ce09495b7063c7c6b9de9398c0c9f66e9064c1cb1c->leave($__internal_a85b8e025205120dbc3675ce09495b7063c7c6b9de9398c0c9f66e9064c1cb1c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f153dddff0eea5cd24a5b2524c4758d8bd680df0ff521f55f017a53e0f3d2f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f153dddff0eea5cd24a5b2524c4758d8bd680df0ff521f55f017a53e0f3d2f86->enter($__internal_f153dddff0eea5cd24a5b2524c4758d8bd680df0ff521f55f017a53e0f3d2f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f153dddff0eea5cd24a5b2524c4758d8bd680df0ff521f55f017a53e0f3d2f86->leave($__internal_f153dddff0eea5cd24a5b2524c4758d8bd680df0ff521f55f017a53e0f3d2f86_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eb7755b3aa58bcdb8a01da926373951fb87af3ef350ab767552ab517ed4141e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb7755b3aa58bcdb8a01da926373951fb87af3ef350ab767552ab517ed4141e->enter($__internal_2eb7755b3aa58bcdb8a01da926373951fb87af3ef350ab767552ab517ed4141e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2eb7755b3aa58bcdb8a01da926373951fb87af3ef350ab767552ab517ed4141e->leave($__internal_2eb7755b3aa58bcdb8a01da926373951fb87af3ef350ab767552ab517ed4141e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc2c4a29137ce5da78bdf8875d4ffd5ecd1162ebc8cff6b66ecb4e8939934a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2c4a29137ce5da78bdf8875d4ffd5ecd1162ebc8cff6b66ecb4e8939934a40->enter($__internal_fc2c4a29137ce5da78bdf8875d4ffd5ecd1162ebc8cff6b66ecb4e8939934a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fc2c4a29137ce5da78bdf8875d4ffd5ecd1162ebc8cff6b66ecb4e8939934a40->leave($__internal_fc2c4a29137ce5da78bdf8875d4ffd5ecd1162ebc8cff6b66ecb4e8939934a40_prof);

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
