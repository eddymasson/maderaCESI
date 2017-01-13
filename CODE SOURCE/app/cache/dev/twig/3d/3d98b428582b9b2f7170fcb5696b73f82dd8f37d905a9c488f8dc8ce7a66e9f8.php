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
        $__internal_4bfd79a2c3a35c479a01dcd397cd9ad1bd48cec04bc6438eefd722ab1a3bddf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfd79a2c3a35c479a01dcd397cd9ad1bd48cec04bc6438eefd722ab1a3bddf9->enter($__internal_4bfd79a2c3a35c479a01dcd397cd9ad1bd48cec04bc6438eefd722ab1a3bddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bfd79a2c3a35c479a01dcd397cd9ad1bd48cec04bc6438eefd722ab1a3bddf9->leave($__internal_4bfd79a2c3a35c479a01dcd397cd9ad1bd48cec04bc6438eefd722ab1a3bddf9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf5be26ab6c63cf2c4576f155856d4eab150ef483d382ffa5983dc2743b8d532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5be26ab6c63cf2c4576f155856d4eab150ef483d382ffa5983dc2743b8d532->enter($__internal_cf5be26ab6c63cf2c4576f155856d4eab150ef483d382ffa5983dc2743b8d532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cf5be26ab6c63cf2c4576f155856d4eab150ef483d382ffa5983dc2743b8d532->leave($__internal_cf5be26ab6c63cf2c4576f155856d4eab150ef483d382ffa5983dc2743b8d532_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_76755f59acc7b61f55fd87d70b911b86bb14baa74a7c69a154acf3c5a96b1da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76755f59acc7b61f55fd87d70b911b86bb14baa74a7c69a154acf3c5a96b1da4->enter($__internal_76755f59acc7b61f55fd87d70b911b86bb14baa74a7c69a154acf3c5a96b1da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_76755f59acc7b61f55fd87d70b911b86bb14baa74a7c69a154acf3c5a96b1da4->leave($__internal_76755f59acc7b61f55fd87d70b911b86bb14baa74a7c69a154acf3c5a96b1da4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b580bc7a29f9fec5d3fa01be698e839b30641d1db92bb428306eb0bd86cf7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b580bc7a29f9fec5d3fa01be698e839b30641d1db92bb428306eb0bd86cf7c0->enter($__internal_6b580bc7a29f9fec5d3fa01be698e839b30641d1db92bb428306eb0bd86cf7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6b580bc7a29f9fec5d3fa01be698e839b30641d1db92bb428306eb0bd86cf7c0->leave($__internal_6b580bc7a29f9fec5d3fa01be698e839b30641d1db92bb428306eb0bd86cf7c0_prof);

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
