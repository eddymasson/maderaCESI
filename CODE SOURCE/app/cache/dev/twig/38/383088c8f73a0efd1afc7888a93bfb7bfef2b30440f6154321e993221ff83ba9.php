<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5408b00dc95a4d6a23e32cee4b2982ae46aa02d5c22b379ece2533d7881abac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_d6f6b41917b275675571722e4c12a312c4a557abdad603dc8b9ecf99a3172959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f6b41917b275675571722e4c12a312c4a557abdad603dc8b9ecf99a3172959->enter($__internal_d6f6b41917b275675571722e4c12a312c4a557abdad603dc8b9ecf99a3172959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f6b41917b275675571722e4c12a312c4a557abdad603dc8b9ecf99a3172959->leave($__internal_d6f6b41917b275675571722e4c12a312c4a557abdad603dc8b9ecf99a3172959_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6a9cc185a6bac8c0b4623d4c9d05f9e632ba55f76147a8d275ffb400764dc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a9cc185a6bac8c0b4623d4c9d05f9e632ba55f76147a8d275ffb400764dc73->enter($__internal_f6a9cc185a6bac8c0b4623d4c9d05f9e632ba55f76147a8d275ffb400764dc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f6a9cc185a6bac8c0b4623d4c9d05f9e632ba55f76147a8d275ffb400764dc73->leave($__internal_f6a9cc185a6bac8c0b4623d4c9d05f9e632ba55f76147a8d275ffb400764dc73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
