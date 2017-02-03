<?php

/* SonataUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_0b8c1f0b0f9d960c1ccd4efe548a04eebc50a6feef2f71b965af751e7d3c9f72 extends Twig_Template
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
        $__internal_5dd7bffa54c0f5f4ac23e8b5666b35a23a5675b023c4cca7e3f8cebbdcaafa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd7bffa54c0f5f4ac23e8b5666b35a23a5675b023c4cca7e3f8cebbdcaafa4e->enter($__internal_5dd7bffa54c0f5f4ac23e8b5666b35a23a5675b023c4cca7e3f8cebbdcaafa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    ";
        // line 2
        if (array_key_exists("invalid_username", $context)) {
            // line 3
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) || array_key_exists("invalid_username", $context) ? $context["invalid_username"] : (function () { throw new Twig_Error_Runtime('Variable "invalid_username" does not exist.', 3, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 5
        echo "
    <div class=\"form-group\">
        <label for=\"username\" class=\"control-label required\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo " * </label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>

    <div class=\"form-actions form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>
";
        
        $__internal_5dd7bffa54c0f5f4ac23e8b5666b35a23a5675b023c4cca7e3f8cebbdcaafa4e->leave($__internal_5dd7bffa54c0f5f4ac23e8b5666b35a23a5675b023c4cca7e3f8cebbdcaafa4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  39 => 7,  35 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('sonata_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    {% if invalid_username is defined %}
        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\" class=\"control-label required\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }} * </label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>

    <div class=\"form-actions form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>
", "SonataUserBundle:Resetting:request_content.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
