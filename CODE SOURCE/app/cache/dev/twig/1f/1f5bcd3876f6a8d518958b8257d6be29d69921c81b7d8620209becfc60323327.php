<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2e3d8f7fc7ee0692d71d5a4f3830e95f90eef0ad1b6b4fc407225effedbf9319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e066b7770892919b22a8e79b5678910d42725757d131c81352c5296b2da06484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e066b7770892919b22a8e79b5678910d42725757d131c81352c5296b2da06484->enter($__internal_e066b7770892919b22a8e79b5678910d42725757d131c81352c5296b2da06484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e066b7770892919b22a8e79b5678910d42725757d131c81352c5296b2da06484->leave($__internal_e066b7770892919b22a8e79b5678910d42725757d131c81352c5296b2da06484_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6b61c2775ed2082d386fcb335ace43e20078f7d44fb2ed9084ac0dfa801eb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b61c2775ed2082d386fcb335ace43e20078f7d44fb2ed9084ac0dfa801eb12->enter($__internal_e6b61c2775ed2082d386fcb335ace43e20078f7d44fb2ed9084ac0dfa801eb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e6b61c2775ed2082d386fcb335ace43e20078f7d44fb2ed9084ac0dfa801eb12->leave($__internal_e6b61c2775ed2082d386fcb335ace43e20078f7d44fb2ed9084ac0dfa801eb12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
