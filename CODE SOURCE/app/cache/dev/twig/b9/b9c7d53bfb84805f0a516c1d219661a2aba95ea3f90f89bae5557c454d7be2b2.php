<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_f00c9882d44e92f0fe2ba740c4e6a4cf836c9757fea274c1a09b01bd37080e74 extends Twig_Template
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
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 1, $this->getSourceContext()); })()), "SonataUserBundle:Admin/Security:login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_642ca3fca759f86b12e821f60b3008430e11b04a73a0e2e31f5d1ace30df824f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642ca3fca759f86b12e821f60b3008430e11b04a73a0e2e31f5d1ace30df824f->enter($__internal_642ca3fca759f86b12e821f60b3008430e11b04a73a0e2e31f5d1ace30df824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_642ca3fca759f86b12e821f60b3008430e11b04a73a0e2e31f5d1ace30df824f->leave($__internal_642ca3fca759f86b12e821f60b3008430e11b04a73a0e2e31f5d1ace30df824f_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_789de895df2f552ac6f8b1e4da0a947238b642410fd6b18be491902bb0d6bc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789de895df2f552ac6f8b1e4da0a947238b642410fd6b18be491902bb0d6bc91->enter($__internal_789de895df2f552ac6f8b1e4da0a947238b642410fd6b18be491902bb0d6bc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_789de895df2f552ac6f8b1e4da0a947238b642410fd6b18be491902bb0d6bc91->leave($__internal_789de895df2f552ac6f8b1e4da0a947238b642410fd6b18be491902bb0d6bc91_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_67d8639bc0958f4afc00dfd2ea585e3bd80f1198a690b4564da7e06200f05590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d8639bc0958f4afc00dfd2ea585e3bd80f1198a690b4564da7e06200f05590->enter($__internal_67d8639bc0958f4afc00dfd2ea585e3bd80f1198a690b4564da7e06200f05590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_67d8639bc0958f4afc00dfd2ea585e3bd80f1198a690b4564da7e06200f05590->leave($__internal_67d8639bc0958f4afc00dfd2ea585e3bd80f1198a690b4564da7e06200f05590_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_df384036062c0ed3c1d8fb5c7bc0e9eaa8a3de68047afb887c32a5d0205e4e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df384036062c0ed3c1d8fb5c7bc0e9eaa8a3de68047afb887c32a5d0205e4e75->enter($__internal_df384036062c0ed3c1d8fb5c7bc0e9eaa8a3de68047afb887c32a5d0205e4e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_df384036062c0ed3c1d8fb5c7bc0e9eaa8a3de68047afb887c32a5d0205e4e75->leave($__internal_df384036062c0ed3c1d8fb5c7bc0e9eaa8a3de68047afb887c32a5d0205e4e75_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f7b5cd1fd10fc8111c41ad0995b8c3f598f634e14e84cb43c4fb9db6eff5e14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b5cd1fd10fc8111c41ad0995b8c3f598f634e14e84cb43c4fb9db6eff5e14e->enter($__internal_f7b5cd1fd10fc8111c41ad0995b8c3f598f634e14e84cb43c4fb9db6eff5e14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_f7b5cd1fd10fc8111c41ad0995b8c3f598f634e14e84cb43c4fb9db6eff5e14e->leave($__internal_f7b5cd1fd10fc8111c41ad0995b8c3f598f634e14e84cb43c4fb9db6eff5e14e_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ff2eb081c259b8b1d5eab0c852d49b902ed5ae26f148dab26292c6ed3e6cb10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2eb081c259b8b1d5eab0c852d49b902ed5ae26f148dab26292c6ed3e6cb10f->enter($__internal_ff2eb081c259b8b1d5eab0c852d49b902ed5ae26f148dab26292c6ed3e6cb10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        if ((("single_image" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 19, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 19, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <div>
                        <img style=\"width:64px;\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 21, $this->getSourceContext()); })()), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 21, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 24
        echo "                ";
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 24, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 24, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 25
            echo "                    <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 30
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 70
        echo "        </div>
    </div>

";
        
        $__internal_ff2eb081c259b8b1d5eab0c852d49b902ed5ae26f148dab26292c6ed3e6cb10f->leave($__internal_ff2eb081c259b8b1d5eab0c852d49b902ed5ae26f148dab26292c6ed3e6cb10f_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_34b29e86fd8bf1caf3bd969c88d11a7ce0c324007a79d4e52d419bacbe58976c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b29e86fd8bf1caf3bd969c88d11a7ce0c324007a79d4e52d419bacbe58976c->enter($__internal_34b29e86fd8bf1caf3bd969c88d11a7ce0c324007a79d4e52d419bacbe58976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 31
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 38
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
        echo "\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                ";
        // line 68
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["reset_route"]) || array_key_exists("reset_route", $context) ? $context["reset_route"] : (function () { throw new Twig_Error_Runtime('Variable "reset_route" does not exist.', 68, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_34b29e86fd8bf1caf3bd969c88d11a7ce0c324007a79d4e52d419bacbe58976c->leave($__internal_34b29e86fd8bf1caf3bd969c88d11a7ce0c324007a79d4e52d419bacbe58976c_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_d29b2d4da496da3dd34a20535fab717a8e0d9eaad701b3eefa2e3e795073933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29b2d4da496da3dd34a20535fab717a8e0d9eaad701b3eefa2e3e795073933c->enter($__internal_d29b2d4da496da3dd34a20535fab717a8e0d9eaad701b3eefa2e3e795073933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 32
        echo "                    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 32, $this->getSourceContext()); })())) {
            // line 33
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 37
        echo "                ";
        
        $__internal_d29b2d4da496da3dd34a20535fab717a8e0d9eaad701b3eefa2e3e795073933c->leave($__internal_d29b2d4da496da3dd34a20535fab717a8e0d9eaad701b3eefa2e3e795073933c_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 37,  224 => 34,  221 => 33,  218 => 32,  212 => 31,  200 => 68,  192 => 62,  184 => 57,  172 => 48,  162 => 43,  156 => 40,  152 => 39,  147 => 38,  144 => 31,  138 => 30,  128 => 70,  126 => 30,  121 => 27,  115 => 25,  112 => 24,  104 => 21,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
                {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <div>
                        <img style=\"width:64px;\" src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                    </div>
                {% endif %}
                {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <span>{{ sonata_admin.adminPool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            {% block sonata_user_login_form %}
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>
                <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                {#<a href=\"{{ path('sonata_user_admin_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>#}
                <a href=\"{{ reset_route }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security:login.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Admin/Security/login.html.twig");
    }
}
