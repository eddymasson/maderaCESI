<?php

/* SonataUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42b07f426731ba4548b78327101aa940c045c8dc88087007f86c44284a47e791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6d4196f88708b8c0e37e53a712a8867cdf2852afc332f34954576fba53629c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4196f88708b8c0e37e53a712a8867cdf2852afc332f34954576fba53629c27->enter($__internal_6d4196f88708b8c0e37e53a712a8867cdf2852afc332f34954576fba53629c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4196f88708b8c0e37e53a712a8867cdf2852afc332f34954576fba53629c27->leave($__internal_6d4196f88708b8c0e37e53a712a8867cdf2852afc332f34954576fba53629c27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89c1978a429cc8f873b5987af4c9be985e8d82929458630b996cb1d23afba447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c1978a429cc8f873b5987af4c9be985e8d82929458630b996cb1d23afba447->enter($__internal_89c1978a429cc8f873b5987af4c9be985e8d82929458630b996cb1d23afba447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 9
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "SonataUserBundle:Resetting:request.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_89c1978a429cc8f873b5987af4c9be985e8d82929458630b996cb1d23afba447->leave($__internal_89c1978a429cc8f873b5987af4c9be985e8d82929458630b996cb1d23afba447_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "SonataUserBundle:Resetting:request.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
