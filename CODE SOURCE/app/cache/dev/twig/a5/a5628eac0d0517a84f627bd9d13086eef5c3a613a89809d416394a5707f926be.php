<?php

/* SonataUserBundle:Block:account.html.twig */
class __TwigTemplate_fa51a652f870be346009a661a0404a7c6da6c6ba1d44b5bf17cba6d9151ea103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataUserBundle:Block:account.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20866ecfc8170a1ce78a8409bd02116652314a6cea9edf4349341c9000d531fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20866ecfc8170a1ce78a8409bd02116652314a6cea9edf4349341c9000d531fc->enter($__internal_20866ecfc8170a1ce78a8409bd02116652314a6cea9edf4349341c9000d531fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Block:account.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20866ecfc8170a1ce78a8409bd02116652314a6cea9edf4349341c9000d531fc->leave($__internal_20866ecfc8170a1ce78a8409bd02116652314a6cea9edf4349341c9000d531fc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ced170ad607cb148c0fdde94ee868186a7a507cf6266c533186f25a9284d9a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced170ad607cb148c0fdde94ee868186a7a507cf6266c533186f25a9284d9a8b->enter($__internal_ced170ad607cb148c0fdde94ee868186a7a507cf6266c533186f25a9284d9a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div style=\"display:inline;\">
        ";
        // line 16
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->getSourceContext()); })()), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_ced170ad607cb148c0fdde94ee868186a7a507cf6266c533186f25a9284d9a8b->leave($__internal_ced170ad607cb148c0fdde94ee868186a7a507cf6266c533186f25a9284d9a8b_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Block:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  58 => 20,  51 => 18,  44 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div style=\"display:inline;\">
        {% if user %}
            <a href=\"{{ path('sonata_user_profile_show') }}\">{{ user.username }}</a> |
            <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'link_logout' | trans({}, \"SonataUserBundle\") }}</a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'link_login'|trans({}, 'SonataUserBundle') }} / {{ 'link_register'|trans({}, 'SonataUserBundle') }}</a>
        {% endif %}
    </div>
{% endblock %}
", "SonataUserBundle:Block:account.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Block/account.html.twig");
    }
}
