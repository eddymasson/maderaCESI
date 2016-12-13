<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_f0d3ed0998b39a3ffb078b943321444ea246837d3abdb64a76fb66b9b84111d4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e84a5018ea6580a9016557e59084891e484fbb188b5fedff504d78086e4c8cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84a5018ea6580a9016557e59084891e484fbb188b5fedff504d78086e4c8cef->enter($__internal_e84a5018ea6580a9016557e59084891e484fbb188b5fedff504d78086e4c8cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84a5018ea6580a9016557e59084891e484fbb188b5fedff504d78086e4c8cef->leave($__internal_e84a5018ea6580a9016557e59084891e484fbb188b5fedff504d78086e4c8cef_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b5b2e8e3653144404df40a45825b06d7472bb9e44628284832eb97a5380f139d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b2e8e3653144404df40a45825b06d7472bb9e44628284832eb97a5380f139d->enter($__internal_b5b2e8e3653144404df40a45825b06d7472bb9e44628284832eb97a5380f139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b5b2e8e3653144404df40a45825b06d7472bb9e44628284832eb97a5380f139d->leave($__internal_b5b2e8e3653144404df40a45825b06d7472bb9e44628284832eb97a5380f139d_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a63f87d82ac16a587f3974a6ad83cb324022def99fc3e9c4d7b0141d4fe88873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63f87d82ac16a587f3974a6ad83cb324022def99fc3e9c4d7b0141d4fe88873->enter($__internal_a63f87d82ac16a587f3974a6ad83cb324022def99fc3e9c4d7b0141d4fe88873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a63f87d82ac16a587f3974a6ad83cb324022def99fc3e9c4d7b0141d4fe88873->leave($__internal_a63f87d82ac16a587f3974a6ad83cb324022def99fc3e9c4d7b0141d4fe88873_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d871a76c388a7bef927701315b6e2919e20f295e85ef86bbe9d4915db9dbe3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d871a76c388a7bef927701315b6e2919e20f295e85ef86bbe9d4915db9dbe3b7->enter($__internal_d871a76c388a7bef927701315b6e2919e20f295e85ef86bbe9d4915db9dbe3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_d871a76c388a7bef927701315b6e2919e20f295e85ef86bbe9d4915db9dbe3b7->leave($__internal_d871a76c388a7bef927701315b6e2919e20f295e85ef86bbe9d4915db9dbe3b7_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d4464a0e5b6d91065e9215136928c98844c3106a4272f644319a1a33d5eb08cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4464a0e5b6d91065e9215136928c98844c3106a4272f644319a1a33d5eb08cb->enter($__internal_d4464a0e5b6d91065e9215136928c98844c3106a4272f644319a1a33d5eb08cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_d4464a0e5b6d91065e9215136928c98844c3106a4272f644319a1a33d5eb08cb->leave($__internal_d4464a0e5b6d91065e9215136928c98844c3106a4272f644319a1a33d5eb08cb_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b9730470527f8ff11fd6a5c75451cfa41abcb1d342a5192a02c2938ea32c6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9730470527f8ff11fd6a5c75451cfa41abcb1d342a5192a02c2938ea32c6db->enter($__internal_1b9730470527f8ff11fd6a5c75451cfa41abcb1d342a5192a02c2938ea32c6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1b9730470527f8ff11fd6a5c75451cfa41abcb1d342a5192a02c2938ea32c6db->leave($__internal_1b9730470527f8ff11fd6a5c75451cfa41abcb1d342a5192a02c2938ea32c6db_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_aa2cff0b15891ae8a29b580c683fff69bf075d45aa1a528829aef64238fb2b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2cff0b15891ae8a29b580c683fff69bf075d45aa1a528829aef64238fb2b76->enter($__internal_aa2cff0b15891ae8a29b580c683fff69bf075d45aa1a528829aef64238fb2b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_aa2cff0b15891ae8a29b580c683fff69bf075d45aa1a528829aef64238fb2b76->leave($__internal_aa2cff0b15891ae8a29b580c683fff69bf075d45aa1a528829aef64238fb2b76_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_0498cdaa5e36f0508f8896b7118d9aa92761e80e7979cccb582b0d8138faa64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0498cdaa5e36f0508f8896b7118d9aa92761e80e7979cccb582b0d8138faa64a->enter($__internal_0498cdaa5e36f0508f8896b7118d9aa92761e80e7979cccb582b0d8138faa64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_0498cdaa5e36f0508f8896b7118d9aa92761e80e7979cccb582b0d8138faa64a->leave($__internal_0498cdaa5e36f0508f8896b7118d9aa92761e80e7979cccb582b0d8138faa64a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
