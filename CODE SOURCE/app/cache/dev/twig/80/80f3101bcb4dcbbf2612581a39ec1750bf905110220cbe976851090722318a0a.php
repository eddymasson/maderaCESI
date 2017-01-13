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
        $__internal_8119462c7da65e9c68e08a58f71bac1c38edd7621ffa3fc0dbf4e9a4970727d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8119462c7da65e9c68e08a58f71bac1c38edd7621ffa3fc0dbf4e9a4970727d4->enter($__internal_8119462c7da65e9c68e08a58f71bac1c38edd7621ffa3fc0dbf4e9a4970727d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_8119462c7da65e9c68e08a58f71bac1c38edd7621ffa3fc0dbf4e9a4970727d4->leave($__internal_8119462c7da65e9c68e08a58f71bac1c38edd7621ffa3fc0dbf4e9a4970727d4_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_476e7d005d730e35b31fafa1858709df2b8b44297bb670db7c2873a297269fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476e7d005d730e35b31fafa1858709df2b8b44297bb670db7c2873a297269fba->enter($__internal_476e7d005d730e35b31fafa1858709df2b8b44297bb670db7c2873a297269fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_476e7d005d730e35b31fafa1858709df2b8b44297bb670db7c2873a297269fba->leave($__internal_476e7d005d730e35b31fafa1858709df2b8b44297bb670db7c2873a297269fba_prof);

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
