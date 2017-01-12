<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1f5e8abb014aca7b0eecc97c046d9184f6011665964d7d9921200fa855a4ae5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_384fa9b8a3c18bca829ac9df29660ff8813c900c2648638b253f9512a159c286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384fa9b8a3c18bca829ac9df29660ff8813c900c2648638b253f9512a159c286->enter($__internal_384fa9b8a3c18bca829ac9df29660ff8813c900c2648638b253f9512a159c286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384fa9b8a3c18bca829ac9df29660ff8813c900c2648638b253f9512a159c286->leave($__internal_384fa9b8a3c18bca829ac9df29660ff8813c900c2648638b253f9512a159c286_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f310cc5f5e648dfd600b9c1e206274853033e0de8ef4302f442e8a243d6183bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f310cc5f5e648dfd600b9c1e206274853033e0de8ef4302f442e8a243d6183bc->enter($__internal_f310cc5f5e648dfd600b9c1e206274853033e0de8ef4302f442e8a243d6183bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f310cc5f5e648dfd600b9c1e206274853033e0de8ef4302f442e8a243d6183bc->leave($__internal_f310cc5f5e648dfd600b9c1e206274853033e0de8ef4302f442e8a243d6183bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
