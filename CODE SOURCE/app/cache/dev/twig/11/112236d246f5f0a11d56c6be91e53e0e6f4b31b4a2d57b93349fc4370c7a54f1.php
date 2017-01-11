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
        $__internal_d796698f969d87aeda38926a53b5284fde076d6755ae770bcee281ade01f0697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d796698f969d87aeda38926a53b5284fde076d6755ae770bcee281ade01f0697->enter($__internal_d796698f969d87aeda38926a53b5284fde076d6755ae770bcee281ade01f0697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d796698f969d87aeda38926a53b5284fde076d6755ae770bcee281ade01f0697->leave($__internal_d796698f969d87aeda38926a53b5284fde076d6755ae770bcee281ade01f0697_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bff5814a140e266dee60058383e2c2f6bdc968072b413ab9c7e983514c14fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bff5814a140e266dee60058383e2c2f6bdc968072b413ab9c7e983514c14fba->enter($__internal_5bff5814a140e266dee60058383e2c2f6bdc968072b413ab9c7e983514c14fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_5bff5814a140e266dee60058383e2c2f6bdc968072b413ab9c7e983514c14fba->leave($__internal_5bff5814a140e266dee60058383e2c2f6bdc968072b413ab9c7e983514c14fba_prof);

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
