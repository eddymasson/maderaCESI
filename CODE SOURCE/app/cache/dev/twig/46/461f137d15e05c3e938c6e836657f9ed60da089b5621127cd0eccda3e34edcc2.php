<?php

/* SonataUserBundle:Admin/Security/Resetting:reset.html.twig */
class __TwigTemplate_249b8339553708b76d5d82bcc4514a237fe06345d4927eb2d17760997f5ad1c0 extends Twig_Template
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
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 1, $this->getSourceContext()); })()), "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ecd35470f8f45d038c2e648730457bce853302db823ce2a43d9f8d6968c8217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecd35470f8f45d038c2e648730457bce853302db823ce2a43d9f8d6968c8217->enter($__internal_6ecd35470f8f45d038c2e648730457bce853302db823ce2a43d9f8d6968c8217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecd35470f8f45d038c2e648730457bce853302db823ce2a43d9f8d6968c8217->leave($__internal_6ecd35470f8f45d038c2e648730457bce853302db823ce2a43d9f8d6968c8217_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_ff93b1bba20ec9ef0dcbcdc5c3a36d873225670275df6e9b80537f4864e05089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff93b1bba20ec9ef0dcbcdc5c3a36d873225670275df6e9b80537f4864e05089->enter($__internal_ff93b1bba20ec9ef0dcbcdc5c3a36d873225670275df6e9b80537f4864e05089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_ff93b1bba20ec9ef0dcbcdc5c3a36d873225670275df6e9b80537f4864e05089->leave($__internal_ff93b1bba20ec9ef0dcbcdc5c3a36d873225670275df6e9b80537f4864e05089_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_619e17f5390bbb013f63ffd9374cf82bd660010d6706d4191590f70a6ea9889e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619e17f5390bbb013f63ffd9374cf82bd660010d6706d4191590f70a6ea9889e->enter($__internal_619e17f5390bbb013f63ffd9374cf82bd660010d6706d4191590f70a6ea9889e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_619e17f5390bbb013f63ffd9374cf82bd660010d6706d4191590f70a6ea9889e->leave($__internal_619e17f5390bbb013f63ffd9374cf82bd660010d6706d4191590f70a6ea9889e_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_22d800d5ae3aec2a35c359c43d1eec34cf74949b27a0513e4dfd516e35dc8b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d800d5ae3aec2a35c359c43d1eec34cf74949b27a0513e4dfd516e35dc8b68->enter($__internal_22d800d5ae3aec2a35c359c43d1eec34cf74949b27a0513e4dfd516e35dc8b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_22d800d5ae3aec2a35c359c43d1eec34cf74949b27a0513e4dfd516e35dc8b68->leave($__internal_22d800d5ae3aec2a35c359c43d1eec34cf74949b27a0513e4dfd516e35dc8b68_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_1916eadfc274fc4c20bd1196e038b4567bdd147ca193c9b99e9d3daf59d4ac1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1916eadfc274fc4c20bd1196e038b4567bdd147ca193c9b99e9d3daf59d4ac1a->enter($__internal_1916eadfc274fc4c20bd1196e038b4567bdd147ca193c9b99e9d3daf59d4ac1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_1916eadfc274fc4c20bd1196e038b4567bdd147ca193c9b99e9d3daf59d4ac1a->leave($__internal_1916eadfc274fc4c20bd1196e038b4567bdd147ca193c9b99e9d3daf59d4ac1a_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ed5103b6c73c615c73f35d2d6da7bdc853ec7598a336f575ecc2b444592a1c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5103b6c73c615c73f35d2d6da7bdc853ec7598a336f575ecc2b444592a1c71->enter($__internal_ed5103b6c73c615c73f35d2d6da7bdc853ec7598a336f575ecc2b444592a1c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 43
        echo "        </div>
    </div>

";
        
        $__internal_ed5103b6c73c615c73f35d2d6da7bdc853ec7598a336f575ecc2b444592a1c71->leave($__internal_ed5103b6c73c615c73f35d2d6da7bdc853ec7598a336f575ecc2b444592a1c71_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_d0db44c0dc4c32944f12d73dc9cbc0e992d7a1af0c98f18120cc84555ace1f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0db44c0dc4c32944f12d73dc9cbc0e992d7a1af0c98f18120cc84555ace1f9d->enter($__internal_d0db44c0dc4c32944f12d73dc9cbc0e992d7a1af0c98f18120cc84555ace1f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

        // line 26
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 27, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password_confirmation", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "_token", array()), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            ";
        
        $__internal_d0db44c0dc4c32944f12d73dc9cbc0e992d7a1af0c98f18120cc84555ace1f9d->leave($__internal_d0db44c0dc4c32944f12d73dc9cbc0e992d7a1af0c98f18120cc84555ace1f9d_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 34,  145 => 32,  139 => 29,  134 => 27,  129 => 26,  123 => 25,  113 => 43,  111 => 25,  106 => 22,  100 => 20,  98 => 19,  94 => 18,  89 => 15,  83 => 14,  71 => 12,  60 => 9,  49 => 6,  38 => 3,  23 => 1,);
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
            {% block sonata_user_reset_form %}
                <p class=\"login-box-msg\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_reset', {'token': token}) }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"{{ 'form.new_password'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"{{ 'form.new_password_confirmation'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    {{ form_widget(form._token) }}

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Admin/Security/Resetting/reset.html.twig");
    }
}
