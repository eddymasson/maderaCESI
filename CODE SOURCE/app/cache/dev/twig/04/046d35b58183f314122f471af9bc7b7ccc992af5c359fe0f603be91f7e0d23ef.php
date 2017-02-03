<?php

/* SonataUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_b276f56ca9184c04f2a3fb7a5d91d7b89d3896caea4a00429e37db98752a1cad extends Twig_Template
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
        $__internal_ddfb7f5d9e9dcdb98236fd8388df7b1547b0e6800b19257974859c1206fe7a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfb7f5d9e9dcdb98236fd8388df7b1547b0e6800b19257974859c1206fe7a7a->enter($__internal_ddfb7f5d9e9dcdb98236fd8388df7b1547b0e6800b19257974859c1206fe7a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_change_password")));
        echo "
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_ddfb7f5d9e9dcdb98236fd8388df7b1547b0e6800b19257974859c1206fe7a7a->leave($__internal_ddfb7f5d9e9dcdb98236fd8388df7b1547b0e6800b19257974859c1206fe7a7a_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 6,  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'action': path('sonata_user_change_password')  }) }}
{{ form_widget(form) }}

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>
    </div>
</div>
{{ form_end(form) }}
", "SonataUserBundle:ChangePassword:changePassword_content.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/ChangePassword/changePassword_content.html.twig");
    }
}
