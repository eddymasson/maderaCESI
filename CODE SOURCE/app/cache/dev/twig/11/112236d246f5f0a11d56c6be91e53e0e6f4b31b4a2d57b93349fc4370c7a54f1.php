<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c76e516177c5b4981413feeeafb326bcab722090316613bd8f9d245268de374d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bada498c638923ec098a6556d696b5e5d7301b7ca5ace2e48b7c341556863c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bada498c638923ec098a6556d696b5e5d7301b7ca5ace2e48b7c341556863c3f->enter($__internal_bada498c638923ec098a6556d696b5e5d7301b7ca5ace2e48b7c341556863c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bada498c638923ec098a6556d696b5e5d7301b7ca5ace2e48b7c341556863c3f->leave($__internal_bada498c638923ec098a6556d696b5e5d7301b7ca5ace2e48b7c341556863c3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc5d1b5c21722af6ff79c48c391ade36a68755056172716a879c4eba9ba03f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5d1b5c21722af6ff79c48c391ade36a68755056172716a879c4eba9ba03f37->enter($__internal_bc5d1b5c21722af6ff79c48c391ade36a68755056172716a879c4eba9ba03f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_bc5d1b5c21722af6ff79c48c391ade36a68755056172716a879c4eba9ba03f37->leave($__internal_bc5d1b5c21722af6ff79c48c391ade36a68755056172716a879c4eba9ba03f37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
