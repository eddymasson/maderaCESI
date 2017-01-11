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
        $__internal_5a8ec316c310368f1a877bcf65afbf42123a2eef61b2eb72310755c28552b944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8ec316c310368f1a877bcf65afbf42123a2eef61b2eb72310755c28552b944->enter($__internal_5a8ec316c310368f1a877bcf65afbf42123a2eef61b2eb72310755c28552b944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8ec316c310368f1a877bcf65afbf42123a2eef61b2eb72310755c28552b944->leave($__internal_5a8ec316c310368f1a877bcf65afbf42123a2eef61b2eb72310755c28552b944_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc2999a0bf09fb50fe9fb8506bc688dd1913e2c453cd9e85374f604f5f00b1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2999a0bf09fb50fe9fb8506bc688dd1913e2c453cd9e85374f604f5f00b1ca->enter($__internal_cc2999a0bf09fb50fe9fb8506bc688dd1913e2c453cd9e85374f604f5f00b1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_cc2999a0bf09fb50fe9fb8506bc688dd1913e2c453cd9e85374f604f5f00b1ca->leave($__internal_cc2999a0bf09fb50fe9fb8506bc688dd1913e2c453cd9e85374f604f5f00b1ca_prof);

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
