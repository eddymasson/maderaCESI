<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_65d4c69ea0218ab24adb96eb4d353ce889ca7d976751d02bc9d963ac20ce3f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2aadb8eb4e090aa867ee266e0b84672d8abef2267faab0b1e824e72795e8a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2aadb8eb4e090aa867ee266e0b84672d8abef2267faab0b1e824e72795e8a60->enter($__internal_e2aadb8eb4e090aa867ee266e0b84672d8abef2267faab0b1e824e72795e8a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_e2aadb8eb4e090aa867ee266e0b84672d8abef2267faab0b1e824e72795e8a60->leave($__internal_e2aadb8eb4e090aa867ee266e0b84672d8abef2267faab0b1e824e72795e8a60_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_1f9764d4fa59f59f425f1e0dd16f105ac6d0c9177cdc6d4e5f94d0adb79e6397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9764d4fa59f59f425f1e0dd16f105ac6d0c9177cdc6d4e5f94d0adb79e6397->enter($__internal_1f9764d4fa59f59f425f1e0dd16f105ac6d0c9177cdc6d4e5f94d0adb79e6397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "user", array())) {
            // line 3
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 4
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            // line 5
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 6
            echo "        ";
            $context["_profile_uri"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->getSourceContext()); })()), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array())), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->getSourceContext()); })()), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->getSourceContext()); })()), "userAdmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array())), "method"))), "method")) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->getSourceContext()); })()), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->getSourceContext()); })()), "userAdmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array())), "method"))), "method")));
            // line 7
            echo "        ";
            $context["_profile_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_profile", array(), "SonataUserBundle");
            // line 8
            echo "        ";
            $context["_user_image"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 8, $this->getSourceContext()); })()), "defaultAvatar", array()));
            // line 9
            echo "        ";
            // line 10
            echo "        ";
            // line 11
            echo "
        ";
            // line 12
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 12, $this->getSourceContext()); })()), "impersonating", array()))) {
                // line 13
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 14
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 14, $this->getSourceContext()); })()), "impersonating", array()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 14, $this->getSourceContext()); })()), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 15
                echo "            ";
                $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        <li class=\"user-header ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) || array_key_exists("_bg_class", $context) ? $context["_bg_class"] : (function () { throw new Twig_Error_Runtime('Variable "_bg_class" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
            ";
            // line 19
            if ((isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new Twig_Error_Runtime('Variable "_user_image" does not exist.', 19, $this->getSourceContext()); })())) {
                // line 20
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new Twig_Error_Runtime('Variable "_user_image" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 22
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 31
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["_profile_uri"]) || array_key_exists("_profile_uri", $context) ? $context["_profile_uri"] : (function () { throw new Twig_Error_Runtime('Variable "_profile_uri" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_profile_text"]) || array_key_exists("_profile_text", $context) ? $context["_profile_text"] : (function () { throw new Twig_Error_Runtime('Variable "_profile_text" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) || array_key_exists("_logout_uri", $context) ? $context["_logout_uri"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) || array_key_exists("_logout_text", $context) ? $context["_logout_text"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_text" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
        
        $__internal_1f9764d4fa59f59f425f1e0dd16f105ac6d0c9177cdc6d4e5f94d0adb79e6397->leave($__internal_1f9764d4fa59f59f425f1e0dd16f105ac6d0c9177cdc6d4e5f94d0adb79e6397_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  104 => 34,  99 => 31,  92 => 22,  86 => 20,  84 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  58 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}
    {% if app.user %}
        {% set _bg_class          = \"bg-light-blue\" %}
        {% set _logout_uri        = url('sonata_user_admin_security_logout') %}
        {% set _logout_text       = 'user_block_logout'|trans({}, 'SonataUserBundle') %}
        {% set _profile_uri       = sonata_user.userAdmin.isGranted('EDIT', app.user) ? sonata_user.userAdmin.generateUrl('edit', {id: sonata_user.userAdmin.id(app.user)}) : sonata_user.userAdmin.generateUrl('show', {id: sonata_user.userAdmin.id(app.user)}) %}
        {% set _profile_text      = 'user_block_profile'|trans({}, 'SonataUserBundle') %}
        {% set _user_image        = asset(sonata_user.defaultAvatar) %}
        {# Customize this with your profile picture implementation, see below for example #}
        {#{% set _user_image  = app.user.profilePicture|default(asset(sonata_user.defaultAvatar)) %}#}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}
            {% set _bg_class    = \"bg-light-green\" %}
            {% set _logout_uri  = url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) %}
            {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}
        {% endif %}

        <li class=\"user-header {{ _bg_class }}\">
            {% if _user_image %}
                <img src=\"{{ _user_image }}\" class=\"img-circle\" alt=\"Avatar\" />
            {% endif %}
            <p>{{ app.user }}</p>
        </li>

{#
    Uncomment to add some information
        <li class=\"user-body\">

        </li>
#}

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ _profile_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> {{ _profile_text }}</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"{{ _logout_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> {{ _logout_text }}</a>
            </div>
        </li>
    {% endif %}
{% endblock %}
", "SonataUserBundle:Admin/Core:user_block.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Admin/Core/user_block.html.twig");
    }
}
