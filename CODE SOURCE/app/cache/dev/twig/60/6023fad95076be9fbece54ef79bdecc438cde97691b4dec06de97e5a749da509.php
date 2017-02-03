<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_69a6aee2b09c8fa27352d1a2037ddbf617370590e821b21333b936772abf97ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Security:base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_registration' => array($this, 'block_sonata_user_registration'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c71a5e9af086b6461c0499894c69355f0739fafff1a141afdb997d40649d18b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71a5e9af086b6461c0499894c69355f0739fafff1a141afdb997d40649d18b0->enter($__internal_c71a5e9af086b6461c0499894c69355f0739fafff1a141afdb997d40649d18b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c71a5e9af086b6461c0499894c69355f0739fafff1a141afdb997d40649d18b0->leave($__internal_c71a5e9af086b6461c0499894c69355f0739fafff1a141afdb997d40649d18b0_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aeb3655fc8fa4167b2bd6d7f88ad5d9d19ac6e4595d0e268243dbe1b4c1f8064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb3655fc8fa4167b2bd6d7f88ad5d9d19ac6e4595d0e268243dbe1b4c1f8064->enter($__internal_aeb3655fc8fa4167b2bd6d7f88ad5d9d19ac6e4595d0e268243dbe1b4c1f8064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 17
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 76
        echo "        </div>
        <div class=\"col-sm-6\">
            ";
        // line 78
        $this->displayBlock('sonata_user_registration', $context, $blocks);
        // line 81
        echo "        </div>
    </div>
";
        
        $__internal_aeb3655fc8fa4167b2bd6d7f88ad5d9d19ac6e4595d0e268243dbe1b4c1f8064->leave($__internal_aeb3655fc8fa4167b2bd6d7f88ad5d9d19ac6e4595d0e268243dbe1b4c1f8064_prof);

    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_8b02c62303c11815f9c0222be4028eca920436d908cc549f2312c6c9adb03cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b02c62303c11815f9c0222be4028eca920436d908cc549f2312c6c9adb03cd4->enter($__internal_8b02c62303c11815f9c0222be4028eca920436d908cc549f2312c6c9adb03cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

        // line 18
        echo "                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 26
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 33
        echo "
                    ";
        // line 34
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 73
        echo "                </div>
            </div>
            ";
        
        $__internal_8b02c62303c11815f9c0222be4028eca920436d908cc549f2312c6c9adb03cd4->leave($__internal_8b02c62303c11815f9c0222be4028eca920436d908cc549f2312c6c9adb03cd4_prof);

    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_3e029e560e63a84145f5a40bc3dfe8d9fc4a3c21a38a2335d2008c8ccb475a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e029e560e63a84145f5a40bc3dfe8d9fc4a3c21a38a2335d2008c8ccb475a11->enter($__internal_3e029e560e63a84145f5a40bc3dfe8d9fc4a3c21a38a2335d2008c8ccb475a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 27
        echo "                        ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 27, $this->getSourceContext()); })())) {
            // line 28
            echo "                            <div class=\"alert alert-danger alert-error\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 29, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 29, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 32
        echo "                    ";
        
        $__internal_3e029e560e63a84145f5a40bc3dfe8d9fc4a3c21a38a2335d2008c8ccb475a11->leave($__internal_3e029e560e63a84145f5a40bc3dfe8d9fc4a3c21a38a2335d2008c8ccb475a11_prof);

    }

    // line 34
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_46dadb54b74a645c3dc872bd36cc4f8c62cb7eed5bb75334f911e28729429391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dadb54b74a645c3dc872bd36cc4f8c62cb7eed5bb75334f911e28729429391->enter($__internal_46dadb54b74a645c3dc872bd36cc4f8c62cb7eed5bb75334f911e28729429391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 35
        echo "                        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </form>
                    ";
        
        $__internal_46dadb54b74a645c3dc872bd36cc4f8c62cb7eed5bb75334f911e28729429391->leave($__internal_46dadb54b74a645c3dc872bd36cc4f8c62cb7eed5bb75334f911e28729429391_prof);

    }

    // line 78
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        $__internal_e601b515e04ae1986e541a65b9e6cd0a8effc597f3ffb474e775f42215a2cd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e601b515e04ae1986e541a65b9e6cd0a8effc597f3ffb474e775f42215a2cd28->enter($__internal_e601b515e04ae1986e541a65b9e6cd0a8effc597f3ffb474e775f42215a2cd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_registration"));

        // line 79
        echo "                ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 80
        echo "            ";
        
        $__internal_e601b515e04ae1986e541a65b9e6cd0a8effc597f3ffb474e775f42215a2cd28->leave($__internal_e601b515e04ae1986e541a65b9e6cd0a8effc597f3ffb474e775f42215a2cd28_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 80,  206 => 79,  200 => 78,  188 => 68,  177 => 62,  166 => 54,  154 => 45,  146 => 40,  142 => 39,  136 => 36,  131 => 35,  125 => 34,  118 => 32,  112 => 29,  109 => 28,  106 => 27,  100 => 26,  91 => 73,  89 => 34,  86 => 33,  84 => 26,  76 => 21,  71 => 18,  65 => 17,  56 => 81,  54 => 78,  50 => 76,  48 => 17,  44 => 15,  38 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"row\">
        <div class=\"col-sm-6\">
            {% block sonata_user_login %}
                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>
                </div>

                <div class=\"panel-body\">

                    {% block sonata_user_login_error %}
                        {% if error %}
                            <div class=\"alert alert-danger alert-error\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block sonata_user_login_form %}
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"{{ path('fos_user_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\"/>
                                </div>
                            </div>
                        </form>
                    {% endblock %}
                </div>
            </div>
            {% endblock %}
        </div>
        <div class=\"col-sm-6\">
            {% block sonata_user_registration %}
                {% render controller(\"SonataUserBundle:RegistrationFOSUser1:register\") %}
            {% endblock %}
        </div>
    </div>
{% endblock fos_user_content %}
", "SonataUserBundle:Security:base_login.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Security/base_login.html.twig");
    }
}
