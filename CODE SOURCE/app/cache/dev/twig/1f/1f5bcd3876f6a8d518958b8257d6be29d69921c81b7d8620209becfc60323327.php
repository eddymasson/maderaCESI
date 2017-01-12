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
        $__internal_8fdbbd9995b3e1c61affa083fc346f87b46fe281502e54bdd4869735884af309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdbbd9995b3e1c61affa083fc346f87b46fe281502e54bdd4869735884af309->enter($__internal_8fdbbd9995b3e1c61affa083fc346f87b46fe281502e54bdd4869735884af309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fdbbd9995b3e1c61affa083fc346f87b46fe281502e54bdd4869735884af309->leave($__internal_8fdbbd9995b3e1c61affa083fc346f87b46fe281502e54bdd4869735884af309_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_373ff5e0f34647d50b8a8426c4f8e1e816c0130030a83ed42e8232cb5c79316f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373ff5e0f34647d50b8a8426c4f8e1e816c0130030a83ed42e8232cb5c79316f->enter($__internal_373ff5e0f34647d50b8a8426c4f8e1e816c0130030a83ed42e8232cb5c79316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_373ff5e0f34647d50b8a8426c4f8e1e816c0130030a83ed42e8232cb5c79316f->leave($__internal_373ff5e0f34647d50b8a8426c4f8e1e816c0130030a83ed42e8232cb5c79316f_prof);

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
