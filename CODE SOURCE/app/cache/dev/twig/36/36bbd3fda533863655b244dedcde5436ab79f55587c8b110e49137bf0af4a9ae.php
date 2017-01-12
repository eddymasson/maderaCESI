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
        $__internal_ab5fbc641392f9a54adfc34ef6522dea86ff23cc4b90c4e1490a37a2b7932949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5fbc641392f9a54adfc34ef6522dea86ff23cc4b90c4e1490a37a2b7932949->enter($__internal_ab5fbc641392f9a54adfc34ef6522dea86ff23cc4b90c4e1490a37a2b7932949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ab5fbc641392f9a54adfc34ef6522dea86ff23cc4b90c4e1490a37a2b7932949->leave($__internal_ab5fbc641392f9a54adfc34ef6522dea86ff23cc4b90c4e1490a37a2b7932949_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e823b9a6881593bee7e8e100707a5863f0571e00366bd98552fc75940420c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e823b9a6881593bee7e8e100707a5863f0571e00366bd98552fc75940420c00->enter($__internal_1e823b9a6881593bee7e8e100707a5863f0571e00366bd98552fc75940420c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1e823b9a6881593bee7e8e100707a5863f0571e00366bd98552fc75940420c00->leave($__internal_1e823b9a6881593bee7e8e100707a5863f0571e00366bd98552fc75940420c00_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4f9213a53fdd6c90bded30042ef9facd795f47180f85be935a61403ef8e773b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f9213a53fdd6c90bded30042ef9facd795f47180f85be935a61403ef8e773b->enter($__internal_a4f9213a53fdd6c90bded30042ef9facd795f47180f85be935a61403ef8e773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4f9213a53fdd6c90bded30042ef9facd795f47180f85be935a61403ef8e773b->leave($__internal_a4f9213a53fdd6c90bded30042ef9facd795f47180f85be935a61403ef8e773b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f8a0bd9574856f09666921b6d2a1f20d219672f4c222093671b2f0c0ce9196a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8a0bd9574856f09666921b6d2a1f20d219672f4c222093671b2f0c0ce9196a->enter($__internal_0f8a0bd9574856f09666921b6d2a1f20d219672f4c222093671b2f0c0ce9196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f8a0bd9574856f09666921b6d2a1f20d219672f4c222093671b2f0c0ce9196a->leave($__internal_0f8a0bd9574856f09666921b6d2a1f20d219672f4c222093671b2f0c0ce9196a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_466619776f3f275294dccd016f0f13b29f89a01896d1d05dc9c74d922aad6632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466619776f3f275294dccd016f0f13b29f89a01896d1d05dc9c74d922aad6632->enter($__internal_466619776f3f275294dccd016f0f13b29f89a01896d1d05dc9c74d922aad6632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_466619776f3f275294dccd016f0f13b29f89a01896d1d05dc9c74d922aad6632->leave($__internal_466619776f3f275294dccd016f0f13b29f89a01896d1d05dc9c74d922aad6632_prof);

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
