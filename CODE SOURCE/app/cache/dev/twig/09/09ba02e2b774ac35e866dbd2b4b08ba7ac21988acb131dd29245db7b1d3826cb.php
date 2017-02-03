<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c16dfa437e4d0b734d98076bd139372454ec8a123ed81836e1ea71ade1217643 extends Twig_Template
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
        $__internal_dd81285af889ad875ba1bb41826a5d86adb9688684926f873b6259774ade660a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd81285af889ad875ba1bb41826a5d86adb9688684926f873b6259774ade660a->enter($__internal_dd81285af889ad875ba1bb41826a5d86adb9688684926f873b6259774ade660a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd81285af889ad875ba1bb41826a5d86adb9688684926f873b6259774ade660a->leave($__internal_dd81285af889ad875ba1bb41826a5d86adb9688684926f873b6259774ade660a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4632af0b99719533d7a3c6096d71210d30ae99f2d6867dee314ac6516df2158d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4632af0b99719533d7a3c6096d71210d30ae99f2d6867dee314ac6516df2158d->enter($__internal_4632af0b99719533d7a3c6096d71210d30ae99f2d6867dee314ac6516df2158d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4632af0b99719533d7a3c6096d71210d30ae99f2d6867dee314ac6516df2158d->leave($__internal_4632af0b99719533d7a3c6096d71210d30ae99f2d6867dee314ac6516df2158d_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
