<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_fed851120a775980ce3a3fb66f71088d65cef5cec2b890587d7002e5a6c8e38c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_769640aaf2e9e91f4669ea0e20b5ac71ea3b2b989b973d237b06723b86377926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769640aaf2e9e91f4669ea0e20b5ac71ea3b2b989b973d237b06723b86377926->enter($__internal_769640aaf2e9e91f4669ea0e20b5ac71ea3b2b989b973d237b06723b86377926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 2, $this->getSourceContext()); })()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 2, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 2, $this->getSourceContext()); })()), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 3, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 3, $this->getSourceContext()); })()), 2 => (isset($context["link_parameters"]) || array_key_exists("link_parameters", $context) ? $context["link_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "link_parameters" does not exist.', 3, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_769640aaf2e9e91f4669ea0e20b5ac71ea3b2b989b973d237b06723b86377926->leave($__internal_769640aaf2e9e91f4669ea0e20b5ac71ea3b2b989b973d237b06723b86377926_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"inner-field-short-description\">
    {% if object and admin.hasRoute('edit') and admin.isGranted('EDIT') %}
        <a href=\"{{ admin.generateObjectUrl('edit', object, link_parameters) }}\" target=\"new\">{{ description }}</a>
    {% else %}
        {{ description }}
    {% endif %}
</span>
", "SonataAdminBundle:Helper:short-object-description.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
