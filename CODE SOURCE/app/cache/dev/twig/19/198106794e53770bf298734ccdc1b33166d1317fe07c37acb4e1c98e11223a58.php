<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3c467cd1bb6d063dee15ec1b6382eb8a8c7a61029cf6b269221d92d8b93a2811 extends Twig_Template
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
        $__internal_6f3c0119c5b9a1119443b27393c6dd15e9eb82633f9b3a36b3b187efa82c89c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3c0119c5b9a1119443b27393c6dd15e9eb82633f9b3a36b3b187efa82c89c4->enter($__internal_6f3c0119c5b9a1119443b27393c6dd15e9eb82633f9b3a36b3b187efa82c89c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6f3c0119c5b9a1119443b27393c6dd15e9eb82633f9b3a36b3b187efa82c89c4->leave($__internal_6f3c0119c5b9a1119443b27393c6dd15e9eb82633f9b3a36b3b187efa82c89c4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_865c658e4068d666a3e32b77b8f01639b1e1c656fbcf5ad94951d51eb382a013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865c658e4068d666a3e32b77b8f01639b1e1c656fbcf5ad94951d51eb382a013->enter($__internal_865c658e4068d666a3e32b77b8f01639b1e1c656fbcf5ad94951d51eb382a013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 3, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_865c658e4068d666a3e32b77b8f01639b1e1c656fbcf5ad94951d51eb382a013->leave($__internal_865c658e4068d666a3e32b77b8f01639b1e1c656fbcf5ad94951d51eb382a013_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_40b8989d8c4997e2b8b3a8d7f74f8602fc66af6f50cd0165c6b515050f972041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b8989d8c4997e2b8b3a8d7f74f8602fc66af6f50cd0165c6b515050f972041->enter($__internal_40b8989d8c4997e2b8b3a8d7f74f8602fc66af6f50cd0165c6b515050f972041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 8, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_40b8989d8c4997e2b8b3a8d7f74f8602fc66af6f50cd0165c6b515050f972041->leave($__internal_40b8989d8c4997e2b8b3a8d7f74f8602fc66af6f50cd0165c6b515050f972041_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e850a233f5110c98397fe674854c441b2233353ed3cf4c13d7ad6bd9eaf5f983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e850a233f5110c98397fe674854c441b2233353ed3cf4c13d7ad6bd9eaf5f983->enter($__internal_e850a233f5110c98397fe674854c441b2233353ed3cf4c13d7ad6bd9eaf5f983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e850a233f5110c98397fe674854c441b2233353ed3cf4c13d7ad6bd9eaf5f983->leave($__internal_e850a233f5110c98397fe674854c441b2233353ed3cf4c13d7ad6bd9eaf5f983_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
