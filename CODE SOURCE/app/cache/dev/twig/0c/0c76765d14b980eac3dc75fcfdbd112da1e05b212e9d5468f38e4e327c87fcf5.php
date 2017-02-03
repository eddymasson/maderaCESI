<?php

/* SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_8167896bf77e47d26b0345521e91bf30c67d94a868f2715f8cce41662608b3bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 1, $this->getSourceContext()); })()), "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0b9070c11db08b5db45b05b3628b3af12ff132d47865bcfdd8cf73c3a7c7f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b9070c11db08b5db45b05b3628b3af12ff132d47865bcfdd8cf73c3a7c7f21->enter($__internal_a0b9070c11db08b5db45b05b3628b3af12ff132d47865bcfdd8cf73c3a7c7f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b9070c11db08b5db45b05b3628b3af12ff132d47865bcfdd8cf73c3a7c7f21->leave($__internal_a0b9070c11db08b5db45b05b3628b3af12ff132d47865bcfdd8cf73c3a7c7f21_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_12ee77a4b6ff2a67c7b74450ddad73c2f0bbfc9fda7de992dc7552c0ab9a65f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ee77a4b6ff2a67c7b74450ddad73c2f0bbfc9fda7de992dc7552c0ab9a65f6->enter($__internal_12ee77a4b6ff2a67c7b74450ddad73c2f0bbfc9fda7de992dc7552c0ab9a65f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_12ee77a4b6ff2a67c7b74450ddad73c2f0bbfc9fda7de992dc7552c0ab9a65f6->leave($__internal_12ee77a4b6ff2a67c7b74450ddad73c2f0bbfc9fda7de992dc7552c0ab9a65f6_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_d0fad74865d18f8f605da8f649b39434cfe78082e68eab3116393271096eaa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fad74865d18f8f605da8f649b39434cfe78082e68eab3116393271096eaa89->enter($__internal_d0fad74865d18f8f605da8f649b39434cfe78082e68eab3116393271096eaa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_d0fad74865d18f8f605da8f649b39434cfe78082e68eab3116393271096eaa89->leave($__internal_d0fad74865d18f8f605da8f649b39434cfe78082e68eab3116393271096eaa89_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4a7b446769a2ead2042efbb894efc1fa2881ca936f8acd96d3bf7cd5d543e6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7b446769a2ead2042efbb894efc1fa2881ca936f8acd96d3bf7cd5d543e6f6->enter($__internal_4a7b446769a2ead2042efbb894efc1fa2881ca936f8acd96d3bf7cd5d543e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4a7b446769a2ead2042efbb894efc1fa2881ca936f8acd96d3bf7cd5d543e6f6->leave($__internal_4a7b446769a2ead2042efbb894efc1fa2881ca936f8acd96d3bf7cd5d543e6f6_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_60b04cc0b87237df7fbcd8817e3756033c86ebc15ad6a3d2f8a2dc01c58f1a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b04cc0b87237df7fbcd8817e3756033c86ebc15ad6a3d2f8a2dc01c58f1a7e->enter($__internal_60b04cc0b87237df7fbcd8817e3756033c86ebc15ad6a3d2f8a2dc01c58f1a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_60b04cc0b87237df7fbcd8817e3756033c86ebc15ad6a3d2f8a2dc01c58f1a7e->leave($__internal_60b04cc0b87237df7fbcd8817e3756033c86ebc15ad6a3d2f8a2dc01c58f1a7e_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_84bfcbfe6a4b6d07bb667071883bb173f8c988f50b21cb925ab8fed01369fcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bfcbfe6a4b6d07bb667071883bb173f8c988f50b21cb925ab8fed01369fcb2->enter($__internal_84bfcbfe6a4b6d07bb667071883bb173f8c988f50b21cb925ab8fed01369fcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 19, $this->getSourceContext()); })()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 19, $this->getSourceContext()); })()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 20, $this->getSourceContext()); })()), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
        
        $__internal_84bfcbfe6a4b6d07bb667071883bb173f8c988f50b21cb925ab8fed01369fcb2->leave($__internal_84bfcbfe6a4b6d07bb667071883bb173f8c988f50b21cb925ab8fed01369fcb2_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  110 => 25,  105 => 22,  99 => 20,  97 => 19,  93 => 18,  88 => 15,  82 => 14,  70 => 12,  59 => 9,  48 => 6,  37 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}
                    <span>{{ admin_pool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Admin/Security/Resetting/passwordAlreadyRequested.html.twig");
    }
}
