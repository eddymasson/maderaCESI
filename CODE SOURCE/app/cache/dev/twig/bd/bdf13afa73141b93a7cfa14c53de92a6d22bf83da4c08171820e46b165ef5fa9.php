<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_1bb821d7f8754b05426cd32a178f4f9b484b037ac1c0ff1a2b342d2825774aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12a601baa685d592f2c4ebbda017823523fac2606a5b518f0690674b41a6b905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a601baa685d592f2c4ebbda017823523fac2606a5b518f0690674b41a6b905->enter($__internal_12a601baa685d592f2c4ebbda017823523fac2606a5b518f0690674b41a6b905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_12a601baa685d592f2c4ebbda017823523fac2606a5b518f0690674b41a6b905->leave($__internal_12a601baa685d592f2c4ebbda017823523fac2606a5b518f0690674b41a6b905_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_de32367bf374bcfe155f00108d0dbd9d7b225f78dc0c9efb7c53e8f6fc233d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de32367bf374bcfe155f00108d0dbd9d7b225f78dc0c9efb7c53e8f6fc233d2f->enter($__internal_de32367bf374bcfe155f00108d0dbd9d7b225f78dc0c9efb7c53e8f6fc233d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) || array_key_exists("breadcrumb_context", $context) ? $context["breadcrumb_context"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumb_context" does not exist.', 17, $this->getSourceContext()); })()), "current_uri" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_de32367bf374bcfe155f00108d0dbd9d7b225f78dc0c9efb7c53e8f6fc233d2f->leave($__internal_de32367bf374bcfe155f00108d0dbd9d7b225f78dc0c9efb7c53e8f6fc233d2f_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_90869cb9894da0c8569a0741d0ba48d2fe7215a707d802cc892526bee6989ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90869cb9894da0c8569a0741d0ba48d2fe7215a707d802cc892526bee6989ac1->enter($__internal_90869cb9894da0c8569a0741d0ba48d2fe7215a707d802cc892526bee6989ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_90869cb9894da0c8569a0741d0ba48d2fe7215a707d802cc892526bee6989ac1->leave($__internal_90869cb9894da0c8569a0741d0ba48d2fe7215a707d802cc892526bee6989ac1_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_fe5dc07eb46b92e71e1a55c2fece6616049af52d67f57ef9c93630231f034ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5dc07eb46b92e71e1a55c2fece6616049af52d67f57ef9c93630231f034ff8->enter($__internal_fe5dc07eb46b92e71e1a55c2fece6616049af52d67f57ef9c93630231f034ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_fe5dc07eb46b92e71e1a55c2fece6616049af52d67f57ef9c93630231f034ff8->leave($__internal_fe5dc07eb46b92e71e1a55c2fece6616049af52d67f57ef9c93630231f034ff8_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_b125f62856da54838b98193a93cd0d4ba6124c99d77d4d5ced4d1b901ec378a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b125f62856da54838b98193a93cd0d4ba6124c99d77d4d5ced4d1b901ec378a0->enter($__internal_b125f62856da54838b98193a93cd0d4ba6124c99d77d4d5ced4d1b901ec378a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_b125f62856da54838b98193a93cd0d4ba6124c99d77d4d5ced4d1b901ec378a0->leave($__internal_b125f62856da54838b98193a93cd0d4ba6124c99d77d4d5ced4d1b901ec378a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block sonata_page_breadcrumb %}
    {% if breadcrumb_context is not defined %}
        {% set breadcrumb_context = 'user_index' %}
    {% endif %}
    <div class=\"row-fluid clearfix\">
        {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}
    </div>
{% endblock %}

<h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        {% block sonata_profile_menu %}
            {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}
        {% endblock %}
    </div>

    <div class=\"span10 col-lg-10\">
        {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}

        {% block sonata_profile_content '' %}
    </div>

</div>
", "SonataUserBundle:Profile:action.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Profile/action.html.twig");
    }
}
