<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7f94d485a8efe85ee546512105afc16fccdd4493dd8a53f652dbf20901dab70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_36b32ef38a524a1ad966abbe60eb33cbf588b19d5b77ad2e11af7707865489cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b32ef38a524a1ad966abbe60eb33cbf588b19d5b77ad2e11af7707865489cc->enter($__internal_36b32ef38a524a1ad966abbe60eb33cbf588b19d5b77ad2e11af7707865489cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b32ef38a524a1ad966abbe60eb33cbf588b19d5b77ad2e11af7707865489cc->leave($__internal_36b32ef38a524a1ad966abbe60eb33cbf588b19d5b77ad2e11af7707865489cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0d9e210384dca15d1509e5ee41cb3862e830840410db8503a021ec24ac89e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d9e210384dca15d1509e5ee41cb3862e830840410db8503a021ec24ac89e55->enter($__internal_a0d9e210384dca15d1509e5ee41cb3862e830840410db8503a021ec24ac89e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a0d9e210384dca15d1509e5ee41cb3862e830840410db8503a021ec24ac89e55->leave($__internal_a0d9e210384dca15d1509e5ee41cb3862e830840410db8503a021ec24ac89e55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
