<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0b9516c816cf38303996b73a2df6d59ba2465f59be1c4b8c0b261ce140622ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_dcc405a29b4cfad74ebd5e4cd5bb7fe666005d4c7cc08ba204abb1d6eeee97ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc405a29b4cfad74ebd5e4cd5bb7fe666005d4c7cc08ba204abb1d6eeee97ee->enter($__internal_dcc405a29b4cfad74ebd5e4cd5bb7fe666005d4c7cc08ba204abb1d6eeee97ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc405a29b4cfad74ebd5e4cd5bb7fe666005d4c7cc08ba204abb1d6eeee97ee->leave($__internal_dcc405a29b4cfad74ebd5e4cd5bb7fe666005d4c7cc08ba204abb1d6eeee97ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16be0608b8db56504ea6fcdf65c5042c8e726307aed8d303deb707bdf2ec7be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16be0608b8db56504ea6fcdf65c5042c8e726307aed8d303deb707bdf2ec7be8->enter($__internal_16be0608b8db56504ea6fcdf65c5042c8e726307aed8d303deb707bdf2ec7be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_16be0608b8db56504ea6fcdf65c5042c8e726307aed8d303deb707bdf2ec7be8->leave($__internal_16be0608b8db56504ea6fcdf65c5042c8e726307aed8d303deb707bdf2ec7be8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
