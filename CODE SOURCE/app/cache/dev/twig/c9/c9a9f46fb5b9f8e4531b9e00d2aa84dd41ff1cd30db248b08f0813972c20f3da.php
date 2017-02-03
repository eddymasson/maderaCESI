<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_0960e57f238f16e41b17b4a4a30d972c633a52b90138a0b311ceaaa36250b59a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 1, $this->getSourceContext()); })()), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b816ec61eb6065d81bd8567b512f07e932bba9216c20935b9aa4cc4bb101ef8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b816ec61eb6065d81bd8567b512f07e932bba9216c20935b9aa4cc4bb101ef8e->enter($__internal_b816ec61eb6065d81bd8567b512f07e932bba9216c20935b9aa4cc4bb101ef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b816ec61eb6065d81bd8567b512f07e932bba9216c20935b9aa4cc4bb101ef8e->leave($__internal_b816ec61eb6065d81bd8567b512f07e932bba9216c20935b9aa4cc4bb101ef8e_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f3870cf628dbd614f7b2785b9d31d9ad23c36b817766bb597f65c8c6fa4198cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3870cf628dbd614f7b2785b9d31d9ad23c36b817766bb597f65c8c6fa4198cd->enter($__internal_f3870cf628dbd614f7b2785b9d31d9ad23c36b817766bb597f65c8c6fa4198cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_f3870cf628dbd614f7b2785b9d31d9ad23c36b817766bb597f65c8c6fa4198cd->leave($__internal_f3870cf628dbd614f7b2785b9d31d9ad23c36b817766bb597f65c8c6fa4198cd_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_1c7dbf1de6bd36ea3c4ece7026cc53e8e7129b65d0f47bc943479187a7f1f505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7dbf1de6bd36ea3c4ece7026cc53e8e7129b65d0f47bc943479187a7f1f505->enter($__internal_1c7dbf1de6bd36ea3c4ece7026cc53e8e7129b65d0f47bc943479187a7f1f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_1c7dbf1de6bd36ea3c4ece7026cc53e8e7129b65d0f47bc943479187a7f1f505->leave($__internal_1c7dbf1de6bd36ea3c4ece7026cc53e8e7129b65d0f47bc943479187a7f1f505_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_39c64f747fd8fb0b5aec0055c6b12773466d098ca956698df4f7e086ae0d9205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c64f747fd8fb0b5aec0055c6b12773466d098ca956698df4f7e086ae0d9205->enter($__internal_39c64f747fd8fb0b5aec0055c6b12773466d098ca956698df4f7e086ae0d9205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_39c64f747fd8fb0b5aec0055c6b12773466d098ca956698df4f7e086ae0d9205->leave($__internal_39c64f747fd8fb0b5aec0055c6b12773466d098ca956698df4f7e086ae0d9205_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_014e8a034d151c2e12b2743453765c79490c06706128d5d0461774c026be49d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014e8a034d151c2e12b2743453765c79490c06706128d5d0461774c026be49d0->enter($__internal_014e8a034d151c2e12b2743453765c79490c06706128d5d0461774c026be49d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_014e8a034d151c2e12b2743453765c79490c06706128d5d0461774c026be49d0->leave($__internal_014e8a034d151c2e12b2743453765c79490c06706128d5d0461774c026be49d0_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_397a1578520e86a7301c9faba5f4066c9e9d8e02c28b77c464294db16bc4f334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397a1578520e86a7301c9faba5f4066c9e9d8e02c28b77c464294db16bc4f334->enter($__internal_397a1578520e86a7301c9faba5f4066c9e9d8e02c28b77c464294db16bc4f334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 25, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_397a1578520e86a7301c9faba5f4066c9e9d8e02c28b77c464294db16bc4f334->leave($__internal_397a1578520e86a7301c9faba5f4066c9e9d8e02c28b77c464294db16bc4f334_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
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
            <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Admin/Security/Resetting/checkEmail.html.twig");
    }
}
