<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_96f4dc2d3394c6d8d079cf410ecca5c9bb7577cea6696186c6dd538835b2c33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e62335cad3f4feb1d636ccf9ca4b99e6e79971d5e2c95cdd4e3bd92ee89891b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e62335cad3f4feb1d636ccf9ca4b99e6e79971d5e2c95cdd4e3bd92ee89891b->enter($__internal_6e62335cad3f4feb1d636ccf9ca4b99e6e79971d5e2c95cdd4e3bd92ee89891b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e62335cad3f4feb1d636ccf9ca4b99e6e79971d5e2c95cdd4e3bd92ee89891b->leave($__internal_6e62335cad3f4feb1d636ccf9ca4b99e6e79971d5e2c95cdd4e3bd92ee89891b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6b93795e7c95dfb1fd2bee983c9767717c057a71f1c16439d9a7cd3cafbdbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b93795e7c95dfb1fd2bee983c9767717c057a71f1c16439d9a7cd3cafbdbae->enter($__internal_c6b93795e7c95dfb1fd2bee983c9767717c057a71f1c16439d9a7cd3cafbdbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c6b93795e7c95dfb1fd2bee983c9767717c057a71f1c16439d9a7cd3cafbdbae->leave($__internal_c6b93795e7c95dfb1fd2bee983c9767717c057a71f1c16439d9a7cd3cafbdbae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd4c2d73d9570792f49ec170c9ba11a1c16113571c15ebafcdcfe0e4c3c3c5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4c2d73d9570792f49ec170c9ba11a1c16113571c15ebafcdcfe0e4c3c3c5f9->enter($__internal_fd4c2d73d9570792f49ec170c9ba11a1c16113571c15ebafcdcfe0e4c3c3c5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd4c2d73d9570792f49ec170c9ba11a1c16113571c15ebafcdcfe0e4c3c3c5f9->leave($__internal_fd4c2d73d9570792f49ec170c9ba11a1c16113571c15ebafcdcfe0e4c3c3c5f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_572f3066b58c9eb6007b124e0467dd7dfc7322b11f9ae844adb38a6dcbfc48c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572f3066b58c9eb6007b124e0467dd7dfc7322b11f9ae844adb38a6dcbfc48c6->enter($__internal_572f3066b58c9eb6007b124e0467dd7dfc7322b11f9ae844adb38a6dcbfc48c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_572f3066b58c9eb6007b124e0467dd7dfc7322b11f9ae844adb38a6dcbfc48c6->leave($__internal_572f3066b58c9eb6007b124e0467dd7dfc7322b11f9ae844adb38a6dcbfc48c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
