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
        $__internal_6d9ea711e4e22e60a524ec0c13cc8bf34581e8080f3349e99e650f527ad6a2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9ea711e4e22e60a524ec0c13cc8bf34581e8080f3349e99e650f527ad6a2d4->enter($__internal_6d9ea711e4e22e60a524ec0c13cc8bf34581e8080f3349e99e650f527ad6a2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9ea711e4e22e60a524ec0c13cc8bf34581e8080f3349e99e650f527ad6a2d4->leave($__internal_6d9ea711e4e22e60a524ec0c13cc8bf34581e8080f3349e99e650f527ad6a2d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c5b06ec7d75f0fbb6e978672d1d916837b7b62688c147ebf6f24962d733db4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5b06ec7d75f0fbb6e978672d1d916837b7b62688c147ebf6f24962d733db4e->enter($__internal_5c5b06ec7d75f0fbb6e978672d1d916837b7b62688c147ebf6f24962d733db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5c5b06ec7d75f0fbb6e978672d1d916837b7b62688c147ebf6f24962d733db4e->leave($__internal_5c5b06ec7d75f0fbb6e978672d1d916837b7b62688c147ebf6f24962d733db4e_prof);

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
