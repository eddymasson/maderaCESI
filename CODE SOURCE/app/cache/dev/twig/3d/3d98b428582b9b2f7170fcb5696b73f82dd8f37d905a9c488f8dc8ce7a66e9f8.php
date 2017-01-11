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
        $__internal_b533343b0736afe6d82a91122d6357bd6d6ae9e876f227fb1bc1fb49066eff64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b533343b0736afe6d82a91122d6357bd6d6ae9e876f227fb1bc1fb49066eff64->enter($__internal_b533343b0736afe6d82a91122d6357bd6d6ae9e876f227fb1bc1fb49066eff64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b533343b0736afe6d82a91122d6357bd6d6ae9e876f227fb1bc1fb49066eff64->leave($__internal_b533343b0736afe6d82a91122d6357bd6d6ae9e876f227fb1bc1fb49066eff64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d88ae28f678c2016cc6a940ab146f18c55ec8f64b2eb8422d50062383117d324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88ae28f678c2016cc6a940ab146f18c55ec8f64b2eb8422d50062383117d324->enter($__internal_d88ae28f678c2016cc6a940ab146f18c55ec8f64b2eb8422d50062383117d324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d88ae28f678c2016cc6a940ab146f18c55ec8f64b2eb8422d50062383117d324->leave($__internal_d88ae28f678c2016cc6a940ab146f18c55ec8f64b2eb8422d50062383117d324_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07f2966566ed049106763de202e5b0255b6dc0eb7522dcf67c1f189795c64557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f2966566ed049106763de202e5b0255b6dc0eb7522dcf67c1f189795c64557->enter($__internal_07f2966566ed049106763de202e5b0255b6dc0eb7522dcf67c1f189795c64557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07f2966566ed049106763de202e5b0255b6dc0eb7522dcf67c1f189795c64557->leave($__internal_07f2966566ed049106763de202e5b0255b6dc0eb7522dcf67c1f189795c64557_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5a82230dbd1a95e087fa970009f5e8b4321752e9b71a1e2e59dc7b285c1e8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a82230dbd1a95e087fa970009f5e8b4321752e9b71a1e2e59dc7b285c1e8a4->enter($__internal_d5a82230dbd1a95e087fa970009f5e8b4321752e9b71a1e2e59dc7b285c1e8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d5a82230dbd1a95e087fa970009f5e8b4321752e9b71a1e2e59dc7b285c1e8a4->leave($__internal_d5a82230dbd1a95e087fa970009f5e8b4321752e9b71a1e2e59dc7b285c1e8a4_prof);

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
