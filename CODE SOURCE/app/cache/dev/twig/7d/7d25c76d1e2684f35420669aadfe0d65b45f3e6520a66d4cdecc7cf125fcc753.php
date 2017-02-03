<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_17fa48266ff14b5b8276e61cde0199d5ee064612c099b5f23c6d060082007c64 extends Twig_Template
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
        $__internal_59ffcfa84040abf0e686e50c7a7f64f3aa94c7575843f53b02869be020d9b3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ffcfa84040abf0e686e50c7a7f64f3aa94c7575843f53b02869be020d9b3e4->enter($__internal_59ffcfa84040abf0e686e50c7a7f64f3aa94c7575843f53b02869be020d9b3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_59ffcfa84040abf0e686e50c7a7f64f3aa94c7575843f53b02869be020d9b3e4->leave($__internal_59ffcfa84040abf0e686e50c7a7f64f3aa94c7575843f53b02869be020d9b3e4_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c8e4bd95d485f16412ed2201e1cb406999fa3cd1bc67638f6e4b16e009ada014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e4bd95d485f16412ed2201e1cb406999fa3cd1bc67638f6e4b16e009ada014->enter($__internal_c8e4bd95d485f16412ed2201e1cb406999fa3cd1bc67638f6e4b16e009ada014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "user", array())) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 5, $this->getSourceContext()); })()), "impersonating", array()))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->getSourceContext()); })()), "impersonating", array()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->getSourceContext()); })()), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        
        $__internal_c8e4bd95d485f16412ed2201e1cb406999fa3cd1bc67638f6e4b16e009ada014->leave($__internal_c8e4bd95d485f16412ed2201e1cb406999fa3cd1bc67638f6e4b16e009ada014_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  46 => 6,  44 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}
    {% if app.user %}
        {{ app.user }}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}
            <a href=\"{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) }}\">(exit)</a>
        {% endif %}

        - <a href=\"{{ url('sonata_user_admin_security_logout') }}\">{{ 'user_block_logout'|trans({}, 'SonataUserBundle') }}</a>
    {% endif %}
{% endblock %}", "SonataAdminBundle:Core:user_block.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
