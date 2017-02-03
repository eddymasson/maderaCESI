<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_30e8f16493563ba03df3188e2badfc0dea7d8a8ade62b3101e7e5e345efdca53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bd5f015de89a75e16640c6699a4da261650fb959a969a3d16e419f5c1ee3e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd5f015de89a75e16640c6699a4da261650fb959a969a3d16e419f5c1ee3e7c->enter($__internal_0bd5f015de89a75e16640c6699a4da261650fb959a969a3d16e419f5c1ee3e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd5f015de89a75e16640c6699a4da261650fb959a969a3d16e419f5c1ee3e7c->leave($__internal_0bd5f015de89a75e16640c6699a4da261650fb959a969a3d16e419f5c1ee3e7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6782c649abf0ba24de37ab781c62161a4274561925f13c8742ae66cd9693c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6782c649abf0ba24de37ab781c62161a4274561925f13c8742ae66cd9693c7c9->enter($__internal_6782c649abf0ba24de37ab781c62161a4274561925f13c8742ae66cd9693c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 5, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_6782c649abf0ba24de37ab781c62161a4274561925f13c8742ae66cd9693c7c9->leave($__internal_6782c649abf0ba24de37ab781c62161a4274561925f13c8742ae66cd9693c7c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
