<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b82c99e1efa9ecca8960a3d4aba82d6cbfa822f9e490b41c0e51c6088caf11a4 extends Twig_Template
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
        $__internal_752573b612567029fcb48dfc2965761c6a82a0e14f66c6bba6dea21d7eaeaf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752573b612567029fcb48dfc2965761c6a82a0e14f66c6bba6dea21d7eaeaf19->enter($__internal_752573b612567029fcb48dfc2965761c6a82a0e14f66c6bba6dea21d7eaeaf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752573b612567029fcb48dfc2965761c6a82a0e14f66c6bba6dea21d7eaeaf19->leave($__internal_752573b612567029fcb48dfc2965761c6a82a0e14f66c6bba6dea21d7eaeaf19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5d02ba0f0bf2715c0bf1451eaef59f9e7a8c23fb150e7e03e39d6c5b84887a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d02ba0f0bf2715c0bf1451eaef59f9e7a8c23fb150e7e03e39d6c5b84887a2->enter($__internal_d5d02ba0f0bf2715c0bf1451eaef59f9e7a8c23fb150e7e03e39d6c5b84887a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d5d02ba0f0bf2715c0bf1451eaef59f9e7a8c23fb150e7e03e39d6c5b84887a2->leave($__internal_d5d02ba0f0bf2715c0bf1451eaef59f9e7a8c23fb150e7e03e39d6c5b84887a2_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
