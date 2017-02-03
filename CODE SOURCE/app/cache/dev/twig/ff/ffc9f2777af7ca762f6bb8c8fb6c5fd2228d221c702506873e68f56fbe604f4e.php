<?php

/* SonataUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b583ee29606106db7e35edff0ae43eeffbf7bc1b8cee69c257610333d9b04f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70240193f7f5d72541945277a47937b569b6d97d38ec4a5a9eeea1db27c7e9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70240193f7f5d72541945277a47937b569b6d97d38ec4a5a9eeea1db27c7e9ca->enter($__internal_70240193f7f5d72541945277a47937b569b6d97d38ec4a5a9eeea1db27c7e9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70240193f7f5d72541945277a47937b569b6d97d38ec4a5a9eeea1db27c7e9ca->leave($__internal_70240193f7f5d72541945277a47937b569b6d97d38ec4a5a9eeea1db27c7e9ca_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_5d445487087d648a9b20a1220a666d6237e5ff2236933cdf98ca8d961260016d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d445487087d648a9b20a1220a666d6237e5ff2236933cdf98ca8d961260016d->enter($__internal_5d445487087d648a9b20a1220a666d6237e5ff2236933cdf98ca8d961260016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_5d445487087d648a9b20a1220a666d6237e5ff2236933cdf98ca8d961260016d->leave($__internal_5d445487087d648a9b20a1220a666d6237e5ff2236933cdf98ca8d961260016d_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0045b72a8d7e7e75babb38143088e870f037bfd7139242ef8dbeb3f07116073e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0045b72a8d7e7e75babb38143088e870f037bfd7139242ef8dbeb3f07116073e->enter($__internal_0045b72a8d7e7e75babb38143088e870f037bfd7139242ef8dbeb3f07116073e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "SonataUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_0045b72a8d7e7e75babb38143088e870f037bfd7139242ef8dbeb3f07116073e->leave($__internal_0045b72a8d7e7e75babb38143088e870f037bfd7139242ef8dbeb3f07116073e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_edit_password\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% block fos_user_content %}
                {% include \"SonataUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            {% endblock fos_user_content %}
        </div>
    </div>
{% endblock sonata_profile_content %}
", "SonataUserBundle:ChangePassword:changePassword.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
