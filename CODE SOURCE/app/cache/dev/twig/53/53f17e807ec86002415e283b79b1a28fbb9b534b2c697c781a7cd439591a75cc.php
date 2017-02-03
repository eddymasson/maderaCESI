<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_488569076b60f82cb0d3b942527f4485bcb57c48909f8f00572b8b787352f411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68424744e81b5076bae5feba0c8573a27bd6d906c73fa7a3f24a695ca2a4b514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68424744e81b5076bae5feba0c8573a27bd6d906c73fa7a3f24a695ca2a4b514->enter($__internal_68424744e81b5076bae5feba0c8573a27bd6d906c73fa7a3f24a695ca2a4b514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68424744e81b5076bae5feba0c8573a27bd6d906c73fa7a3f24a695ca2a4b514->leave($__internal_68424744e81b5076bae5feba0c8573a27bd6d906c73fa7a3f24a695ca2a4b514_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_eb2e6b7b116333c73ff7fe188b69b40e422c2b946731a06198883c273ebeb380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2e6b7b116333c73ff7fe188b69b40e422c2b946731a06198883c273ebeb380->enter($__internal_eb2e6b7b116333c73ff7fe188b69b40e422c2b946731a06198883c273ebeb380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_eb2e6b7b116333c73ff7fe188b69b40e422c2b946731a06198883c273ebeb380->leave($__internal_eb2e6b7b116333c73ff7fe188b69b40e422c2b946731a06198883c273ebeb380_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_31cfbc1eb8709a826c241804e7f3a9e2e86f5e84f759b76f05725bea437a472b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cfbc1eb8709a826c241804e7f3a9e2e86f5e84f759b76f05725bea437a472b->enter($__internal_31cfbc1eb8709a826c241804e7f3a9e2e86f5e84f759b76f05725bea437a472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_31cfbc1eb8709a826c241804e7f3a9e2e86f5e84f759b76f05725bea437a472b->leave($__internal_31cfbc1eb8709a826c241804e7f3a9e2e86f5e84f759b76f05725bea437a472b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_be199150d42500678e3bb6db628a5bc2ee6e574e1295833691597d8244e54c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be199150d42500678e3bb6db628a5bc2ee6e574e1295833691597d8244e54c0f->enter($__internal_be199150d42500678e3bb6db628a5bc2ee6e574e1295833691597d8244e54c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_be199150d42500678e3bb6db628a5bc2ee6e574e1295833691597d8244e54c0f->leave($__internal_be199150d42500678e3bb6db628a5bc2ee6e574e1295833691597d8244e54c0f_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_64fa293a2b5a4c2698c9fedd86d15243aca0d098450642b391f89069923d9196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fa293a2b5a4c2698c9fedd86d15243aca0d098450642b391f89069923d9196->enter($__internal_64fa293a2b5a4c2698c9fedd86d15243aca0d098450642b391f89069923d9196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_64fa293a2b5a4c2698c9fedd86d15243aca0d098450642b391f89069923d9196->leave($__internal_64fa293a2b5a4c2698c9fedd86d15243aca0d098450642b391f89069923d9196_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c73c42d937bee40f2eb0e41bd20481491a3347646b91b57610b2c87b83e6134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c73c42d937bee40f2eb0e41bd20481491a3347646b91b57610b2c87b83e6134->enter($__internal_5c73c42d937bee40f2eb0e41bd20481491a3347646b91b57610b2c87b83e6134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_5c73c42d937bee40f2eb0e41bd20481491a3347646b91b57610b2c87b83e6134->leave($__internal_5c73c42d937bee40f2eb0e41bd20481491a3347646b91b57610b2c87b83e6134_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_4fea828335d89abd06b2dbeb1c72f1a132991ecde41ebe564d6a491cacb5f362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fea828335d89abd06b2dbeb1c72f1a132991ecde41ebe564d6a491cacb5f362->enter($__internal_4fea828335d89abd06b2dbeb1c72f1a132991ecde41ebe564d6a491cacb5f362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_4fea828335d89abd06b2dbeb1c72f1a132991ecde41ebe564d6a491cacb5f362->leave($__internal_4fea828335d89abd06b2dbeb1c72f1a132991ecde41ebe564d6a491cacb5f362_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_a827af62ebbd5a66577e68ac61dc9eb03e5c55e7ce83ebdbab78675d9bd08aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a827af62ebbd5a66577e68ac61dc9eb03e5c55e7ce83ebdbab78675d9bd08aca->enter($__internal_a827af62ebbd5a66577e68ac61dc9eb03e5c55e7ce83ebdbab78675d9bd08aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_a827af62ebbd5a66577e68ac61dc9eb03e5c55e7ce83ebdbab78675d9bd08aca->leave($__internal_a827af62ebbd5a66577e68ac61dc9eb03e5c55e7ce83ebdbab78675d9bd08aca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
