<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6865ea46959bbafc5c718e7e18e3087e19f1fed65bd1bce08ec237c46af5aedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_42faaf0ac601e47cd635183ed46a8407d75b0d2fc4942b649f827cfdd0351e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42faaf0ac601e47cd635183ed46a8407d75b0d2fc4942b649f827cfdd0351e61->enter($__internal_42faaf0ac601e47cd635183ed46a8407d75b0d2fc4942b649f827cfdd0351e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42faaf0ac601e47cd635183ed46a8407d75b0d2fc4942b649f827cfdd0351e61->leave($__internal_42faaf0ac601e47cd635183ed46a8407d75b0d2fc4942b649f827cfdd0351e61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_199516e1ba65d2c44beb16199619c4a43c91b6926d7ec03eb97f173dd56b8e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199516e1ba65d2c44beb16199619c4a43c91b6926d7ec03eb97f173dd56b8e15->enter($__internal_199516e1ba65d2c44beb16199619c4a43c91b6926d7ec03eb97f173dd56b8e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_199516e1ba65d2c44beb16199619c4a43c91b6926d7ec03eb97f173dd56b8e15->leave($__internal_199516e1ba65d2c44beb16199619c4a43c91b6926d7ec03eb97f173dd56b8e15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
