<?php

/* base.html.twig */
class __TwigTemplate_14801b1797b439c7286bdcb845b9340667655dd6403823936fe50d05ed964e6e extends Twig_Template
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
        $__internal_b7b57f4ea72de4b9f929d9c0d2c6ce591ce4884ddc5c7f30f0660726304fe6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b57f4ea72de4b9f929d9c0d2c6ce591ce4884ddc5c7f30f0660726304fe6bd->enter($__internal_b7b57f4ea72de4b9f929d9c0d2c6ce591ce4884ddc5c7f30f0660726304fe6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b7b57f4ea72de4b9f929d9c0d2c6ce591ce4884ddc5c7f30f0660726304fe6bd->leave($__internal_b7b57f4ea72de4b9f929d9c0d2c6ce591ce4884ddc5c7f30f0660726304fe6bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63cd3581f5b00306ce75d0144c96718d8d763a8c073824f086f21b897a8872a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cd3581f5b00306ce75d0144c96718d8d763a8c073824f086f21b897a8872a4->enter($__internal_63cd3581f5b00306ce75d0144c96718d8d763a8c073824f086f21b897a8872a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63cd3581f5b00306ce75d0144c96718d8d763a8c073824f086f21b897a8872a4->leave($__internal_63cd3581f5b00306ce75d0144c96718d8d763a8c073824f086f21b897a8872a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b7a940c8d602602f561c93718afa7b0264ee8843bcaf5c0b9a947d59e5cb938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7a940c8d602602f561c93718afa7b0264ee8843bcaf5c0b9a947d59e5cb938->enter($__internal_4b7a940c8d602602f561c93718afa7b0264ee8843bcaf5c0b9a947d59e5cb938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4b7a940c8d602602f561c93718afa7b0264ee8843bcaf5c0b9a947d59e5cb938->leave($__internal_4b7a940c8d602602f561c93718afa7b0264ee8843bcaf5c0b9a947d59e5cb938_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_32d338d54171987afcf7e918e98120186ee24b3e4c72862b3ba3263d647b9087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d338d54171987afcf7e918e98120186ee24b3e4c72862b3ba3263d647b9087->enter($__internal_32d338d54171987afcf7e918e98120186ee24b3e4c72862b3ba3263d647b9087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32d338d54171987afcf7e918e98120186ee24b3e4c72862b3ba3263d647b9087->leave($__internal_32d338d54171987afcf7e918e98120186ee24b3e4c72862b3ba3263d647b9087_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad816653db71e26da6ed7dbf3b1f9ada6fb0b9c08c960cc60801fb799ff3c76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad816653db71e26da6ed7dbf3b1f9ada6fb0b9c08c960cc60801fb799ff3c76c->enter($__internal_ad816653db71e26da6ed7dbf3b1f9ada6fb0b9c08c960cc60801fb799ff3c76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad816653db71e26da6ed7dbf3b1f9ada6fb0b9c08c960cc60801fb799ff3c76c->leave($__internal_ad816653db71e26da6ed7dbf3b1f9ada6fb0b9c08c960cc60801fb799ff3c76c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Users/Maxime/Desktop/CODE SOURCE/app/Resources/views/base.html.twig");
    }
}
