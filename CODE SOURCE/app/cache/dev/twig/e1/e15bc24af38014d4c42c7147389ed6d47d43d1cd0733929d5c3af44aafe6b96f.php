<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_84aabf104664f854f1860ec440c4edbc2a58e46b71f94ea552ec4bb43b329717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2257705a4f24b46d1676a43ab7fd8ed83a84359ff26c6bcdeb34487a0cbf4efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2257705a4f24b46d1676a43ab7fd8ed83a84359ff26c6bcdeb34487a0cbf4efa->enter($__internal_2257705a4f24b46d1676a43ab7fd8ed83a84359ff26c6bcdeb34487a0cbf4efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2257705a4f24b46d1676a43ab7fd8ed83a84359ff26c6bcdeb34487a0cbf4efa->leave($__internal_2257705a4f24b46d1676a43ab7fd8ed83a84359ff26c6bcdeb34487a0cbf4efa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab29b832c5792f7aad49cf56265dd5a3838c09e1ddfdbaf09484b391706eb7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab29b832c5792f7aad49cf56265dd5a3838c09e1ddfdbaf09484b391706eb7f6->enter($__internal_ab29b832c5792f7aad49cf56265dd5a3838c09e1ddfdbaf09484b391706eb7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab29b832c5792f7aad49cf56265dd5a3838c09e1ddfdbaf09484b391706eb7f6->leave($__internal_ab29b832c5792f7aad49cf56265dd5a3838c09e1ddfdbaf09484b391706eb7f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1d8e9f38cba4be153717b26963a653d37e91153cdbeb692d4cc0e622fb29ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d8e9f38cba4be153717b26963a653d37e91153cdbeb692d4cc0e622fb29ce5->enter($__internal_d1d8e9f38cba4be153717b26963a653d37e91153cdbeb692d4cc0e622fb29ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d1d8e9f38cba4be153717b26963a653d37e91153cdbeb692d4cc0e622fb29ce5->leave($__internal_d1d8e9f38cba4be153717b26963a653d37e91153cdbeb692d4cc0e622fb29ce5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
