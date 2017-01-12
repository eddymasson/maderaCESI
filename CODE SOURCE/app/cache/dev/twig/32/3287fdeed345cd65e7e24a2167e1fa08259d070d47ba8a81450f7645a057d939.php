<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_7d254e48c5e0cb2558d988a863b4110733411d94d43fe028839739edba4d8f77 extends Twig_Template
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
        $__internal_59e53e5e1a9354b6675d0e28666d3fc79e13b80440a400ca59d3d5c118b90e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e53e5e1a9354b6675d0e28666d3fc79e13b80440a400ca59d3d5c118b90e7f->enter($__internal_59e53e5e1a9354b6675d0e28666d3fc79e13b80440a400ca59d3d5c118b90e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_links.html.twig"));

        // line 11
        echo "
<div class=\"text-center\">
    <ul class=\"pagination\">
        ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array()))) {
            // line 19
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "getLinks", array(0 => $this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            ";
            if (($context["page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
                // line 25
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 27
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array()))) {
            // line 32
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())))) {
            // line 36
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
        ";
        }
        // line 38
        echo "    </ul>
</div>
";
        
        $__internal_59e53e5e1a9354b6675d0e28666d3fc79e13b80440a400ca59d3d5c118b90e7f->leave($__internal_59e53e5e1a9354b6675d0e28666d3fc79e13b80440a400ca59d3d5c118b90e7f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  101 => 36,  99 => 35,  96 => 34,  88 => 32,  86 => 31,  83 => 30,  77 => 29,  69 => 27,  61 => 25,  58 => 24,  53 => 23,  50 => 21,  42 => 19,  40 => 18,  37 => 17,  29 => 15,  27 => 14,  22 => 11,);
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

<div class=\"text-center\">
    <ul class=\"pagination\">
        {% if admin.datagrid.pager.page > 2  %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, 1)) }}\" title=\"{{ 'link_first_pager'|trans({}, 'SonataAdminBundle') }}\">&laquo;</a></li>
        {% endif %}

        {% if admin.datagrid.pager.page != admin.datagrid.pager.previouspage %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.previouspage)) }}\" title=\"{{ 'link_previous_pager'|trans({}, 'SonataAdminBundle') }}\">&lsaquo;</a></li>
        {% endif %}

        {# Set the number of pages to display in the pager #}
        {% for page in admin.datagrid.pager.getLinks(admin_pool.getOption('pager_links')) %}
            {% if page == admin.datagrid.pager.page %}
                <li class=\"active\"><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, page)) }}\">{{ page }}</a></li>
            {% else %}
                <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, page)) }}\">{{ page }}</a></li>
            {% endif %}
        {% endfor %}

        {% if admin.datagrid.pager.page != admin.datagrid.pager.nextpage %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.nextpage)) }}\" title=\"{{ 'link_next_pager'|trans({}, 'SonataAdminBundle') }}\">&rsaquo;</a></li>
        {% endif %}

        {% if admin.datagrid.pager.page != admin.datagrid.pager.lastpage and admin.datagrid.pager.lastpage != admin.datagrid.pager.nextpage %}
            <li><a href=\"{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.lastpage)) }}\" title=\"{{ 'link_last_pager'|trans({}, 'SonataAdminBundle') }}\">&raquo;</a></li>
        {% endif %}
    </ul>
</div>
", "SonataAdminBundle:Pager:base_links.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_links.html.twig");
    }
}
