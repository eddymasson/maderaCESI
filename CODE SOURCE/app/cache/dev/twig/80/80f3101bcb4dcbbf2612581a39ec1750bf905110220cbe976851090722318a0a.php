<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3c7344fb24408326d7f4001748053cfbaf696c01b08ac7dadec3b95ca67bd531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ef97a13e9cca2043aefc5f44fd6aa047405f1742a67ef6cc3282a3fcab30135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef97a13e9cca2043aefc5f44fd6aa047405f1742a67ef6cc3282a3fcab30135->enter($__internal_2ef97a13e9cca2043aefc5f44fd6aa047405f1742a67ef6cc3282a3fcab30135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_2ef97a13e9cca2043aefc5f44fd6aa047405f1742a67ef6cc3282a3fcab30135->leave($__internal_2ef97a13e9cca2043aefc5f44fd6aa047405f1742a67ef6cc3282a3fcab30135_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_1ba776f98c59d6c9abfd8e443e58e8cf7201ddce918d4937ad1796f8d5b1e802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba776f98c59d6c9abfd8e443e58e8cf7201ddce918d4937ad1796f8d5b1e802->enter($__internal_1ba776f98c59d6c9abfd8e443e58e8cf7201ddce918d4937ad1796f8d5b1e802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_1ba776f98c59d6c9abfd8e443e58e8cf7201ddce918d4937ad1796f8d5b1e802->leave($__internal_1ba776f98c59d6c9abfd8e443e58e8cf7201ddce918d4937ad1796f8d5b1e802_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
