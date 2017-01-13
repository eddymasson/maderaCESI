<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d1023c893dd3a132c3301f8dacaa93cf0b6193fd92d5ea1f00688fdc6372d567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ac137454986c564214e5b7e595c3b9987c5590a5e81c2cda054bf7563f9ab0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac137454986c564214e5b7e595c3b9987c5590a5e81c2cda054bf7563f9ab0cb->enter($__internal_ac137454986c564214e5b7e595c3b9987c5590a5e81c2cda054bf7563f9ab0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac137454986c564214e5b7e595c3b9987c5590a5e81c2cda054bf7563f9ab0cb->leave($__internal_ac137454986c564214e5b7e595c3b9987c5590a5e81c2cda054bf7563f9ab0cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8a0eb68877b170ea8927a326caf1ed939e1e8de11160d6ac2482b5dedc77302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a0eb68877b170ea8927a326caf1ed939e1e8de11160d6ac2482b5dedc77302->enter($__internal_c8a0eb68877b170ea8927a326caf1ed939e1e8de11160d6ac2482b5dedc77302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c8a0eb68877b170ea8927a326caf1ed939e1e8de11160d6ac2482b5dedc77302->leave($__internal_c8a0eb68877b170ea8927a326caf1ed939e1e8de11160d6ac2482b5dedc77302_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
