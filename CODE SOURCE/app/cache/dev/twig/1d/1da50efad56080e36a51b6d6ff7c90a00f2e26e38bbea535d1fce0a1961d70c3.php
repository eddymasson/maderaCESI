<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_beb9b7ce256be7cd404157bcf74b7700d7c2f3590748d5289a2ffa6ea71d1464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_df34b64437218b2bf72d76fde1e944819c2eb0798a60d104755676691476e952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df34b64437218b2bf72d76fde1e944819c2eb0798a60d104755676691476e952->enter($__internal_df34b64437218b2bf72d76fde1e944819c2eb0798a60d104755676691476e952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df34b64437218b2bf72d76fde1e944819c2eb0798a60d104755676691476e952->leave($__internal_df34b64437218b2bf72d76fde1e944819c2eb0798a60d104755676691476e952_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1638b014161430947cf7a0a9d2f656a0a3ab493591b2cc66acb5bf1dbe1ed233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1638b014161430947cf7a0a9d2f656a0a3ab493591b2cc66acb5bf1dbe1ed233->enter($__internal_1638b014161430947cf7a0a9d2f656a0a3ab493591b2cc66acb5bf1dbe1ed233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1638b014161430947cf7a0a9d2f656a0a3ab493591b2cc66acb5bf1dbe1ed233->leave($__internal_1638b014161430947cf7a0a9d2f656a0a3ab493591b2cc66acb5bf1dbe1ed233_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
