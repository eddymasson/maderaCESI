<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bc6a8ec7c97552829c84c84eec2c69488f7d00b58a61f689105343900ef2fe46 extends Twig_Template
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
        $__internal_41444536799f97a28fd82e08a14bbeb80198b4cac49a28d801c0b87dfc7fa85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41444536799f97a28fd82e08a14bbeb80198b4cac49a28d801c0b87dfc7fa85e->enter($__internal_41444536799f97a28fd82e08a14bbeb80198b4cac49a28d801c0b87dfc7fa85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41444536799f97a28fd82e08a14bbeb80198b4cac49a28d801c0b87dfc7fa85e->leave($__internal_41444536799f97a28fd82e08a14bbeb80198b4cac49a28d801c0b87dfc7fa85e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3b1ce6c505a4cdf7ffbde0e0a4dc8c77eb3c895e87b7f5d77964708765059d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b1ce6c505a4cdf7ffbde0e0a4dc8c77eb3c895e87b7f5d77964708765059d3->enter($__internal_f3b1ce6c505a4cdf7ffbde0e0a4dc8c77eb3c895e87b7f5d77964708765059d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f3b1ce6c505a4cdf7ffbde0e0a4dc8c77eb3c895e87b7f5d77964708765059d3->leave($__internal_f3b1ce6c505a4cdf7ffbde0e0a4dc8c77eb3c895e87b7f5d77964708765059d3_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
