<?php

/* SonataUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_34ff8ca3393f189b1a60e930e6ec871ae9f621a886af9ae474d8001da43708b1 extends Twig_Template
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
        $__internal_b381ca534978dd5f31e1ebd10fc3d6cb6e4f9237efcfb0443979d56dc99da87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b381ca534978dd5f31e1ebd10fc3d6cb6e4f9237efcfb0443979d56dc99da87c->enter($__internal_b381ca534978dd5f31e1ebd10fc3d6cb6e4f9237efcfb0443979d56dc99da87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Resetting:reset_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 1, $this->getSourceContext()); })())))));
        echo "
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_b381ca534978dd5f31e1ebd10fc3d6cb6e4f9237efcfb0443979d56dc99da87c->leave($__internal_b381ca534978dd5f31e1ebd10fc3d6cb6e4f9237efcfb0443979d56dc99da87c_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Resetting:reset_content.html.twig";
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
        return new Twig_Source("{{ form_start(form, {'action': path('sonata_user_resetting_reset', {'token': token } ) }) }}
{{ form_widget(form) }}

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary\" />
    </div>
</div>
{{ form_end(form) }}
", "SonataUserBundle:Resetting:reset_content.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
