<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_aca63e1a678a976597a43879de67fbf072995f0d329f02134825fe492c6e28c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9702192062de9cc51fec2ceb0cb64b8cedecd75f53bede945184eae4ed391813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9702192062de9cc51fec2ceb0cb64b8cedecd75f53bede945184eae4ed391813->enter($__internal_9702192062de9cc51fec2ceb0cb64b8cedecd75f53bede945184eae4ed391813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9702192062de9cc51fec2ceb0cb64b8cedecd75f53bede945184eae4ed391813->leave($__internal_9702192062de9cc51fec2ceb0cb64b8cedecd75f53bede945184eae4ed391813_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9427685e88edc68f20fbbab6079d63e846b69a9b64dd9383a683bb56bd3894d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9427685e88edc68f20fbbab6079d63e846b69a9b64dd9383a683bb56bd3894d->enter($__internal_d9427685e88edc68f20fbbab6079d63e846b69a9b64dd9383a683bb56bd3894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d9427685e88edc68f20fbbab6079d63e846b69a9b64dd9383a683bb56bd3894d->leave($__internal_d9427685e88edc68f20fbbab6079d63e846b69a9b64dd9383a683bb56bd3894d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
