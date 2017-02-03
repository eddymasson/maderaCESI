<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_6cc07285bdf7f067e6aa70a3b081e18838fbd790b3f5694cae4335d41785668a extends Twig_Template
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
        $__internal_66573222de4c03f937b7fd5936421e2a8c95256af710cf8ee305115202db48a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66573222de4c03f937b7fd5936421e2a8c95256af710cf8ee305115202db48a1->enter($__internal_66573222de4c03f937b7fd5936421e2a8c95256af710cf8ee305115202db48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 12, $this->getSourceContext()); })()), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_66573222de4c03f937b7fd5936421e2a8c95256af710cf8ee305115202db48a1->leave($__internal_66573222de4c03f937b7fd5936421e2a8c95256af710cf8ee305115202db48a1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
