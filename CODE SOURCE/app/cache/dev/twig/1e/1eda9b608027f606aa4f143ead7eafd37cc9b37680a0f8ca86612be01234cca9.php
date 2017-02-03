<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a509b441a3f5e9c2c966729720cd0b0f56200f0df2e0ef1b0777eec9b6be9b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_692455caeee7a12b78d1059c5ce25f70487dd5f2f57e92a6b6be24f84e90ef1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692455caeee7a12b78d1059c5ce25f70487dd5f2f57e92a6b6be24f84e90ef1d->enter($__internal_692455caeee7a12b78d1059c5ce25f70487dd5f2f57e92a6b6be24f84e90ef1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692455caeee7a12b78d1059c5ce25f70487dd5f2f57e92a6b6be24f84e90ef1d->leave($__internal_692455caeee7a12b78d1059c5ce25f70487dd5f2f57e92a6b6be24f84e90ef1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3894aa083fe0af573565fc449a51d6fce08fa440f1d2aa1975a8c1ceae2048de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3894aa083fe0af573565fc449a51d6fce08fa440f1d2aa1975a8c1ceae2048de->enter($__internal_3894aa083fe0af573565fc449a51d6fce08fa440f1d2aa1975a8c1ceae2048de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3894aa083fe0af573565fc449a51d6fce08fa440f1d2aa1975a8c1ceae2048de->leave($__internal_3894aa083fe0af573565fc449a51d6fce08fa440f1d2aa1975a8c1ceae2048de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
