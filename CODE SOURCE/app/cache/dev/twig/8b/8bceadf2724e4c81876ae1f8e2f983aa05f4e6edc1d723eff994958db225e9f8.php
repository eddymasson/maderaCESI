<?php

/* SonataUserBundle:Profile:edit_profile_content.html.twig */
class __TwigTemplate_e7503ef239ccb2f3e7ee8076992f33c2e0c56d65ed347e628b3c8d50d3d27790 extends Twig_Template
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
        $__internal_413c3dd48ff7cfbe2bc1337768a95da0b868bf8e55d36a4e7a84e55eca6cab52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413c3dd48ff7cfbe2bc1337768a95da0b868bf8e55d36a4e7a84e55eca6cab52->enter($__internal_413c3dd48ff7cfbe2bc1337768a95da0b868bf8e55d36a4e7a84e55eca6cab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'widget');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_413c3dd48ff7cfbe2bc1337768a95da0b868bf8e55d36a4e7a84e55eca6cab52->leave($__internal_413c3dd48ff7cfbe2bc1337768a95da0b868bf8e55d36a4e7a84e55eca6cab52_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile_content.html.twig";
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
        return new Twig_Source("<form action=\"{{ path('sonata_user_profile_edit') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
    </div>
</form>
", "SonataUserBundle:Profile:edit_profile_content.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Profile/edit_profile_content.html.twig");
    }
}
