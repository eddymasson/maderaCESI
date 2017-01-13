<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6865ea46959bbafc5c718e7e18e3087e19f1fed65bd1bce08ec237c46af5aedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0e4d8485910a87064520791cda90553ec37eb53da6c6bf1dab9aca3d22107f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4d8485910a87064520791cda90553ec37eb53da6c6bf1dab9aca3d22107f49->enter($__internal_0e4d8485910a87064520791cda90553ec37eb53da6c6bf1dab9aca3d22107f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4d8485910a87064520791cda90553ec37eb53da6c6bf1dab9aca3d22107f49->leave($__internal_0e4d8485910a87064520791cda90553ec37eb53da6c6bf1dab9aca3d22107f49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20789fcdb63bffa848b634ddfad1aa610d151ab751131b3117941b1b8bf6c15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20789fcdb63bffa848b634ddfad1aa610d151ab751131b3117941b1b8bf6c15c->enter($__internal_20789fcdb63bffa848b634ddfad1aa610d151ab751131b3117941b1b8bf6c15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_20789fcdb63bffa848b634ddfad1aa610d151ab751131b3117941b1b8bf6c15c->leave($__internal_20789fcdb63bffa848b634ddfad1aa610d151ab751131b3117941b1b8bf6c15c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
