<?php

/* SonataUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e2d67a043a61de8bddcd895d72e0a51fa95c8e27917802b26812b2456fab6926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b19b223014c0e437d115dd3988bd0d1adbf9e63f3cd867289268f390ec7a39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b19b223014c0e437d115dd3988bd0d1adbf9e63f3cd867289268f390ec7a39c->enter($__internal_1b19b223014c0e437d115dd3988bd0d1adbf9e63f3cd867289268f390ec7a39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b19b223014c0e437d115dd3988bd0d1adbf9e63f3cd867289268f390ec7a39c->leave($__internal_1b19b223014c0e437d115dd3988bd0d1adbf9e63f3cd867289268f390ec7a39c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1405b4519fba66a2a9950563eb17db64f0262ee74d339d38178efabcee8c00c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1405b4519fba66a2a9950563eb17db64f0262ee74d339d38178efabcee8c00c5->enter($__internal_1405b4519fba66a2a9950563eb17db64f0262ee74d339d38178efabcee8c00c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "SonataUserBundle:Resetting:reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_1405b4519fba66a2a9950563eb17db64f0262ee74d339d38178efabcee8c00c5->leave($__internal_1405b4519fba66a2a9950563eb17db64f0262ee74d339d38178efabcee8c00c5_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting_reset\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "SonataUserBundle:Resetting:reset.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
