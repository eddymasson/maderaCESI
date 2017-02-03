<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_158cbb173276980691ccc79f589d177281a96f67aa992d1c028b28b8f6cc737e extends Twig_Template
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
        $__internal_b2d458caf730be344a0c7100dca178c77141c91ca22e65d955403adbd4bc0bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d458caf730be344a0c7100dca178c77141c91ca22e65d955403adbd4bc0bb8->enter($__internal_b2d458caf730be344a0c7100dca178c77141c91ca22e65d955403adbd4bc0bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d458caf730be344a0c7100dca178c77141c91ca22e65d955403adbd4bc0bb8->leave($__internal_b2d458caf730be344a0c7100dca178c77141c91ca22e65d955403adbd4bc0bb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_515af0296fd5735ee982cb2334fcb258986f95a570f72aa8f4c79d250abd0890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515af0296fd5735ee982cb2334fcb258986f95a570f72aa8f4c79d250abd0890->enter($__internal_515af0296fd5735ee982cb2334fcb258986f95a570f72aa8f4c79d250abd0890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_515af0296fd5735ee982cb2334fcb258986f95a570f72aa8f4c79d250abd0890->leave($__internal_515af0296fd5735ee982cb2334fcb258986f95a570f72aa8f4c79d250abd0890_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
