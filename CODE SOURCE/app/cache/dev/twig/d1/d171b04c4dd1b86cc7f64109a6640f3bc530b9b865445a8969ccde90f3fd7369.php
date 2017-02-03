<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_8b3a0de4877843d1ddf344950f2564ada89d76769ab0c568666d1ba5936a75c3 extends Twig_Template
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
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 1, $this->getSourceContext()); })()), "SonataUserBundle:Admin/Security/Resetting:request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9977ab87bc31905ec255fcec2b975c6a57a5df3c24b0e9bd0ae60b89c26e7a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9977ab87bc31905ec255fcec2b975c6a57a5df3c24b0e9bd0ae60b89c26e7a6b->enter($__internal_9977ab87bc31905ec255fcec2b975c6a57a5df3c24b0e9bd0ae60b89c26e7a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9977ab87bc31905ec255fcec2b975c6a57a5df3c24b0e9bd0ae60b89c26e7a6b->leave($__internal_9977ab87bc31905ec255fcec2b975c6a57a5df3c24b0e9bd0ae60b89c26e7a6b_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d7dbc9c9461c37ea29e7f3ebdd2d0720f474cf67a73ebb5060a2e013dc60972c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dbc9c9461c37ea29e7f3ebdd2d0720f474cf67a73ebb5060a2e013dc60972c->enter($__internal_d7dbc9c9461c37ea29e7f3ebdd2d0720f474cf67a73ebb5060a2e013dc60972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_d7dbc9c9461c37ea29e7f3ebdd2d0720f474cf67a73ebb5060a2e013dc60972c->leave($__internal_d7dbc9c9461c37ea29e7f3ebdd2d0720f474cf67a73ebb5060a2e013dc60972c_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3805b1244ea390e88f1ed260ff2c20af634e6b77b8efb37243561f977b421146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3805b1244ea390e88f1ed260ff2c20af634e6b77b8efb37243561f977b421146->enter($__internal_3805b1244ea390e88f1ed260ff2c20af634e6b77b8efb37243561f977b421146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_3805b1244ea390e88f1ed260ff2c20af634e6b77b8efb37243561f977b421146->leave($__internal_3805b1244ea390e88f1ed260ff2c20af634e6b77b8efb37243561f977b421146_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_2e29d33d520ae310d7edddc4461f577afb46648b154e83cd49d1c4c1d806a184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e29d33d520ae310d7edddc4461f577afb46648b154e83cd49d1c4c1d806a184->enter($__internal_2e29d33d520ae310d7edddc4461f577afb46648b154e83cd49d1c4c1d806a184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_2e29d33d520ae310d7edddc4461f577afb46648b154e83cd49d1c4c1d806a184->leave($__internal_2e29d33d520ae310d7edddc4461f577afb46648b154e83cd49d1c4c1d806a184_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_6dd4149ee47719614cfe86592209bbef7089e90ce54fdaf694c6f20a297bbd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd4149ee47719614cfe86592209bbef7089e90ce54fdaf694c6f20a297bbd8a->enter($__internal_6dd4149ee47719614cfe86592209bbef7089e90ce54fdaf694c6f20a297bbd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_6dd4149ee47719614cfe86592209bbef7089e90ce54fdaf694c6f20a297bbd8a->leave($__internal_6dd4149ee47719614cfe86592209bbef7089e90ce54fdaf694c6f20a297bbd8a_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_59518fd32783c5ed97aa7e6fbf3f8c7780a4bd435e458442af4b8bc0f5bb481f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59518fd32783c5ed97aa7e6fbf3f8c7780a4bd435e458442af4b8bc0f5bb481f->enter($__internal_59518fd32783c5ed97aa7e6fbf3f8c7780a4bd435e458442af4b8bc0f5bb481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
            ";
        // line 25
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_59518fd32783c5ed97aa7e6fbf3f8c7780a4bd435e458442af4b8bc0f5bb481f->leave($__internal_59518fd32783c5ed97aa7e6fbf3f8c7780a4bd435e458442af4b8bc0f5bb481f_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_fa5df3ed306a1f9b09ded9109ca0dad58efa7868e314275519920e4e9424498a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5df3ed306a1f9b09ded9109ca0dad58efa7868e314275519920e4e9424498a->enter($__internal_fa5df3ed306a1f9b09ded9109ca0dad58efa7868e314275519920e4e9424498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 26
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 31
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_fa5df3ed306a1f9b09ded9109ca0dad58efa7868e314275519920e4e9424498a->leave($__internal_fa5df3ed306a1f9b09ded9109ca0dad58efa7868e314275519920e4e9424498a_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_0dc053b4a5ce3423648e45e5ebb029c891993943a61cf66c97a015a53b4eee58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc053b4a5ce3423648e45e5ebb029c891993943a61cf66c97a015a53b4eee58->enter($__internal_0dc053b4a5ce3423648e45e5ebb029c891993943a61cf66c97a015a53b4eee58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 27
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 28
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) || array_key_exists("invalid_username", $context) ? $context["invalid_username"] : (function () { throw new Twig_Error_Runtime('Variable "invalid_username" does not exist.', 28, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_0dc053b4a5ce3423648e45e5ebb029c891993943a61cf66c97a015a53b4eee58->leave($__internal_0dc053b4a5ce3423648e45e5ebb029c891993943a61cf66c97a015a53b4eee58_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 30,  180 => 28,  177 => 27,  171 => 26,  160 => 45,  152 => 40,  143 => 34,  138 => 32,  133 => 31,  130 => 26,  124 => 25,  114 => 47,  112 => 25,  107 => 22,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
            {% block sonata_user_reset_request_form %}
                {% block sonata_user_reset_request_error %}
                    {% if invalid_username is defined %}
                        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_send_email') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:request.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Admin/Security/Resetting/request.html.twig");
    }
}
