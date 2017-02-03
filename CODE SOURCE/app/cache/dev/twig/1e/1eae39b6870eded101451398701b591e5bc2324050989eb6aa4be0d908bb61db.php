<?php

/* SonataUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c456e6fd26179bc51a43b19125c3a12c9ac78c9baa341dd254c9803d7a9ffff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ecaa780c9f14edee5c4d2de619deceb89367f024e2522ea8a21d2fc9e0c8ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecaa780c9f14edee5c4d2de619deceb89367f024e2522ea8a21d2fc9e0c8ac0->enter($__internal_4ecaa780c9f14edee5c4d2de619deceb89367f024e2522ea8a21d2fc9e0c8ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>";
        
        $__internal_4ecaa780c9f14edee5c4d2de619deceb89367f024e2522ea8a21d2fc9e0c8ac0->leave($__internal_4ecaa780c9f14edee5c4d2de619deceb89367f024e2522ea8a21d2fc9e0c8ac0_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 8,  32 => 6,  26 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">{{ 'title_user_registration'|trans({}, 'SonataUserBundle') }}</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            {{ form_widget(form) }}

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>", "SonataUserBundle:Registration:register_content.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
