<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6b3967bffb08e8a11a484bafd75589e37fbc5c034fafb170096daebc593aa3c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5085cc5d71a4b674eca557efbc3be6bd467ff71865ae0baddb20162a44e9339f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5085cc5d71a4b674eca557efbc3be6bd467ff71865ae0baddb20162a44e9339f->enter($__internal_5085cc5d71a4b674eca557efbc3be6bd467ff71865ae0baddb20162a44e9339f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5085cc5d71a4b674eca557efbc3be6bd467ff71865ae0baddb20162a44e9339f->leave($__internal_5085cc5d71a4b674eca557efbc3be6bd467ff71865ae0baddb20162a44e9339f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9fc364f942bc8145dbee58df07ccec84f525d78102b76cd006ea33f3e6cc82d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc364f942bc8145dbee58df07ccec84f525d78102b76cd006ea33f3e6cc82d3->enter($__internal_9fc364f942bc8145dbee58df07ccec84f525d78102b76cd006ea33f3e6cc82d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 3, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9fc364f942bc8145dbee58df07ccec84f525d78102b76cd006ea33f3e6cc82d3->leave($__internal_9fc364f942bc8145dbee58df07ccec84f525d78102b76cd006ea33f3e6cc82d3_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de115e5cca2e60a6cd2e4b281dd2a12e7b0a0d58c0af8cde369bfb4a4494b82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de115e5cca2e60a6cd2e4b281dd2a12e7b0a0d58c0af8cde369bfb4a4494b82a->enter($__internal_de115e5cca2e60a6cd2e4b281dd2a12e7b0a0d58c0af8cde369bfb4a4494b82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 8, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_de115e5cca2e60a6cd2e4b281dd2a12e7b0a0d58c0af8cde369bfb4a4494b82a->leave($__internal_de115e5cca2e60a6cd2e4b281dd2a12e7b0a0d58c0af8cde369bfb4a4494b82a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2d515f783c0497c336e41dc1b8257ab7726df428ed3bd129a23b5738cac4965d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d515f783c0497c336e41dc1b8257ab7726df428ed3bd129a23b5738cac4965d->enter($__internal_2d515f783c0497c336e41dc1b8257ab7726df428ed3bd129a23b5738cac4965d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2d515f783c0497c336e41dc1b8257ab7726df428ed3bd129a23b5738cac4965d->leave($__internal_2d515f783c0497c336e41dc1b8257ab7726df428ed3bd129a23b5738cac4965d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
