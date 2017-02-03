<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f46ca710bfaf8be83036b80554bb232d7ff785eb003fcf705a54bda905adda85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ff77dc9ea7a034028db57dd20881f85d920e38eec6867bde06993e6e6013d39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff77dc9ea7a034028db57dd20881f85d920e38eec6867bde06993e6e6013d39d->enter($__internal_ff77dc9ea7a034028db57dd20881f85d920e38eec6867bde06993e6e6013d39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff77dc9ea7a034028db57dd20881f85d920e38eec6867bde06993e6e6013d39d->leave($__internal_ff77dc9ea7a034028db57dd20881f85d920e38eec6867bde06993e6e6013d39d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5eb8cff4f855d3acdddc709fef294db086981db12fe6dd25a998957a6d650fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb8cff4f855d3acdddc709fef294db086981db12fe6dd25a998957a6d650fd1->enter($__internal_5eb8cff4f855d3acdddc709fef294db086981db12fe6dd25a998957a6d650fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5eb8cff4f855d3acdddc709fef294db086981db12fe6dd25a998957a6d650fd1->leave($__internal_5eb8cff4f855d3acdddc709fef294db086981db12fe6dd25a998957a6d650fd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
