<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_37bdae076df4e0666a08c2959d8d650b012730c6624190127b8f7f07a9d162d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2ae837af1d79d2f5d22983e6cf140415e6df2ec2d27e157ef70dce5ed96539f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae837af1d79d2f5d22983e6cf140415e6df2ec2d27e157ef70dce5ed96539f1->enter($__internal_2ae837af1d79d2f5d22983e6cf140415e6df2ec2d27e157ef70dce5ed96539f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae837af1d79d2f5d22983e6cf140415e6df2ec2d27e157ef70dce5ed96539f1->leave($__internal_2ae837af1d79d2f5d22983e6cf140415e6df2ec2d27e157ef70dce5ed96539f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3956473f9f57a4ccebba37e5f80c448c3b2057594231b3b6f26064aa17f7caa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3956473f9f57a4ccebba37e5f80c448c3b2057594231b3b6f26064aa17f7caa2->enter($__internal_3956473f9f57a4ccebba37e5f80c448c3b2057594231b3b6f26064aa17f7caa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3956473f9f57a4ccebba37e5f80c448c3b2057594231b3b6f26064aa17f7caa2->leave($__internal_3956473f9f57a4ccebba37e5f80c448c3b2057594231b3b6f26064aa17f7caa2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
