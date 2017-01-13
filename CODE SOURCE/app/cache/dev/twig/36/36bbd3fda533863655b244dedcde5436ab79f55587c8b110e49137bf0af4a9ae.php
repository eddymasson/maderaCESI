<?php

/* ::base.html.twig */
class __TwigTemplate_9a099113a3d6d44d625cba5f2157b49f449ff9102ad48a2c4dd89236f7d6b944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff6cb0479e9ff31707fa5e597a16379adffd76ff44b88fb9fa9f707b26a8ec6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6cb0479e9ff31707fa5e597a16379adffd76ff44b88fb9fa9f707b26a8ec6e->enter($__internal_ff6cb0479e9ff31707fa5e597a16379adffd76ff44b88fb9fa9f707b26a8ec6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ff6cb0479e9ff31707fa5e597a16379adffd76ff44b88fb9fa9f707b26a8ec6e->leave($__internal_ff6cb0479e9ff31707fa5e597a16379adffd76ff44b88fb9fa9f707b26a8ec6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fa313f79d85f7db3c2a38b6d508efa7a4d8399922e9fd7914bace63ae828ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa313f79d85f7db3c2a38b6d508efa7a4d8399922e9fd7914bace63ae828ce3->enter($__internal_4fa313f79d85f7db3c2a38b6d508efa7a4d8399922e9fd7914bace63ae828ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4fa313f79d85f7db3c2a38b6d508efa7a4d8399922e9fd7914bace63ae828ce3->leave($__internal_4fa313f79d85f7db3c2a38b6d508efa7a4d8399922e9fd7914bace63ae828ce3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c645924899814c7a9ad025c93ee560d74cb6db98b2c6ca55973eaf090f955f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c645924899814c7a9ad025c93ee560d74cb6db98b2c6ca55973eaf090f955f82->enter($__internal_c645924899814c7a9ad025c93ee560d74cb6db98b2c6ca55973eaf090f955f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c645924899814c7a9ad025c93ee560d74cb6db98b2c6ca55973eaf090f955f82->leave($__internal_c645924899814c7a9ad025c93ee560d74cb6db98b2c6ca55973eaf090f955f82_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5a13819b6d5733fbf786c6c62975087293c2023f6fe96c909db8afb7ea368a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5a13819b6d5733fbf786c6c62975087293c2023f6fe96c909db8afb7ea368a->enter($__internal_ac5a13819b6d5733fbf786c6c62975087293c2023f6fe96c909db8afb7ea368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac5a13819b6d5733fbf786c6c62975087293c2023f6fe96c909db8afb7ea368a->leave($__internal_ac5a13819b6d5733fbf786c6c62975087293c2023f6fe96c909db8afb7ea368a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5d93b6bc2bc5893359e856400975f94fc7cc489e8f7def1e6cab3cf3c119ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d93b6bc2bc5893359e856400975f94fc7cc489e8f7def1e6cab3cf3c119ad3->enter($__internal_c5d93b6bc2bc5893359e856400975f94fc7cc489e8f7def1e6cab3cf3c119ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5d93b6bc2bc5893359e856400975f94fc7cc489e8f7def1e6cab3cf3c119ad3->leave($__internal_c5d93b6bc2bc5893359e856400975f94fc7cc489e8f7def1e6cab3cf3c119ad3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/app/Resources/views/base.html.twig");
    }
}
