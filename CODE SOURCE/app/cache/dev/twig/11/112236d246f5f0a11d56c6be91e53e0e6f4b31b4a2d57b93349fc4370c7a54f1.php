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
        $__internal_6a9509bb088b471ba87f0f774c1146f36a5e2922a12edb79e4805ef451be7336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9509bb088b471ba87f0f774c1146f36a5e2922a12edb79e4805ef451be7336->enter($__internal_6a9509bb088b471ba87f0f774c1146f36a5e2922a12edb79e4805ef451be7336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9509bb088b471ba87f0f774c1146f36a5e2922a12edb79e4805ef451be7336->leave($__internal_6a9509bb088b471ba87f0f774c1146f36a5e2922a12edb79e4805ef451be7336_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34fcf151a341c2fb5fc830ddaf6f5f48817209db52642ef7741a21fc91f573cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fcf151a341c2fb5fc830ddaf6f5f48817209db52642ef7741a21fc91f573cd->enter($__internal_34fcf151a341c2fb5fc830ddaf6f5f48817209db52642ef7741a21fc91f573cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_34fcf151a341c2fb5fc830ddaf6f5f48817209db52642ef7741a21fc91f573cd->leave($__internal_34fcf151a341c2fb5fc830ddaf6f5f48817209db52642ef7741a21fc91f573cd_prof);

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
