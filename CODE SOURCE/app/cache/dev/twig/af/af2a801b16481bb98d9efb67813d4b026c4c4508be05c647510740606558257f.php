<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0b9516c816cf38303996b73a2df6d59ba2465f59be1c4b8c0b261ce140622ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_40068cd4724b5063042cc0954c1f9820802bde074211f7d9de1e699fee7dcbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40068cd4724b5063042cc0954c1f9820802bde074211f7d9de1e699fee7dcbe2->enter($__internal_40068cd4724b5063042cc0954c1f9820802bde074211f7d9de1e699fee7dcbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40068cd4724b5063042cc0954c1f9820802bde074211f7d9de1e699fee7dcbe2->leave($__internal_40068cd4724b5063042cc0954c1f9820802bde074211f7d9de1e699fee7dcbe2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f6c8c742b9441c02d6100b363f8bdafd7396f85a34522a8c7fb74ebf76edaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6c8c742b9441c02d6100b363f8bdafd7396f85a34522a8c7fb74ebf76edaba->enter($__internal_8f6c8c742b9441c02d6100b363f8bdafd7396f85a34522a8c7fb74ebf76edaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8f6c8c742b9441c02d6100b363f8bdafd7396f85a34522a8c7fb74ebf76edaba->leave($__internal_8f6c8c742b9441c02d6100b363f8bdafd7396f85a34522a8c7fb74ebf76edaba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
