<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_296eabcc046617183205f5d306c1d8a315528feee20ae2590cc2c4eeef30fc49 extends Twig_Template
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
        $__internal_ad7cd86d11a688edf3f0bec65b2aab05887a05350c7676097adbc7b884c94abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7cd86d11a688edf3f0bec65b2aab05887a05350c7676097adbc7b884c94abe->enter($__internal_ad7cd86d11a688edf3f0bec65b2aab05887a05350c7676097adbc7b884c94abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad7cd86d11a688edf3f0bec65b2aab05887a05350c7676097adbc7b884c94abe->leave($__internal_ad7cd86d11a688edf3f0bec65b2aab05887a05350c7676097adbc7b884c94abe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8a1bffc9d241d35c19f3000e57ccd3a364e638414e46f211ee0f8d3cf110e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a1bffc9d241d35c19f3000e57ccd3a364e638414e46f211ee0f8d3cf110e94->enter($__internal_a8a1bffc9d241d35c19f3000e57ccd3a364e638414e46f211ee0f8d3cf110e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_a8a1bffc9d241d35c19f3000e57ccd3a364e638414e46f211ee0f8d3cf110e94->leave($__internal_a8a1bffc9d241d35c19f3000e57ccd3a364e638414e46f211ee0f8d3cf110e94_prof);

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
