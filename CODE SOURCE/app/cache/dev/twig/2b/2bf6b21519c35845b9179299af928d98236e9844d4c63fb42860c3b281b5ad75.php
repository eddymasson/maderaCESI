<?php

/* SonataUserBundle:Profile:edit_authentication_content.html.twig */
class __TwigTemplate_8e592c5db8a4d111bde105a491e1999d2b22ef8dc713f2c56ad98439069a6894 extends Twig_Template
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
        $__internal_d788abbdcda78eabeac00c2afd15ef5a9a07144d06c91f4ff51f03c4394d2c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d788abbdcda78eabeac00c2afd15ef5a9a07144d06c91f4ff51f03c4394d2c0b->enter($__internal_d788abbdcda78eabeac00c2afd15ef5a9a07144d06c91f4ff51f03c4394d2c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_authentication_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'widget');
        echo "

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_d788abbdcda78eabeac00c2afd15ef5a9a07144d06c91f4ff51f03c4394d2c0b->leave($__internal_d788abbdcda78eabeac00c2afd15ef5a9a07144d06c91f4ff51f03c4394d2c0b_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('sonata_user_profile_edit_authentication') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
</form>
", "SonataUserBundle:Profile:edit_authentication_content.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Profile/edit_authentication_content.html.twig");
    }
}
