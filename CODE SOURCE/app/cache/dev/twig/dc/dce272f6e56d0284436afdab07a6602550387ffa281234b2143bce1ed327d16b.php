<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_479f70ebed95008e0dd54d3806e2395bca8323f7cd52684935e2f44db6ffe0ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_base.html.twig", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig", 11);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa24f62134c27b3ae92d5140130ec2347bce15e8790681028b1e997d33c80f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa24f62134c27b3ae92d5140130ec2347bce15e8790681028b1e997d33c80f39->enter($__internal_aa24f62134c27b3ae92d5140130ec2347bce15e8790681028b1e997d33c80f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa24f62134c27b3ae92d5140130ec2347bce15e8790681028b1e997d33c80f39->leave($__internal_aa24f62134c27b3ae92d5140130ec2347bce15e8790681028b1e997d33c80f39_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_e1c05bc8917a336910ce9e643420542ae755ec12d1a411c155a69c8febbbe85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c05bc8917a336910ce9e643420542ae755ec12d1a411c155a69c8febbbe85c->enter($__internal_e1c05bc8917a336910ce9e643420542ae755ec12d1a411c155a69c8febbbe85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) || array_key_exists("revisions", $context) ? $context["revisions"] : (function () { throw new Twig_Error_Runtime('Variable "revisions" does not exist.', 23, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 24
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "revision", array()), "rev", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "revision", array()), "username", array()), "html", null, true);
            echo "
                                    - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "revision", array()), "timestamp", array())), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) ? ("in") : (""));
            echo "\">
                            <div class=\"panel-body\">
                                <ul>
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["revision"], "entities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                        <li>
                                            ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "entity", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "revisionType", array()), "html", null, true);
                echo "
                                            / ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "className", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["changedEntity"], "id", array()), "id", array()), "html", null, true);
                echo "
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_e1c05bc8917a336910ce9e643420542ae755ec12d1a411c155a69c8febbbe85c->leave($__internal_e1c05bc8917a336910ce9e643420542ae755ec12d1a411c155a69c8febbbe85c_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  125 => 42,  114 => 39,  108 => 38,  105 => 37,  101 => 36,  93 => 33,  86 => 29,  80 => 28,  76 => 27,  71 => 24,  54 => 23,  45 => 17,  40 => 14,  34 => 13,  11 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends 'SonataBlockBundle:Block:block_base.html.twig' %}

{% block block %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> {{ 'title_audit_log'|trans({}, 'SonataAdminBundle') }}
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                {% for revision in revisions %}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ loop.index }}\">
                                    {{ revision.revision.rev }} - {{ revision.revision.username }}
                                    - {{ revision.revision.timestamp | date }}
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse{{ loop.index }}\" class=\"panel-collapse collapse {{ loop.first ? \"in\" : \"\" }}\">
                            <div class=\"panel-body\">
                                <ul>
                                    {% for changedEntity in revision.entities %}
                                        <li>
                                            {{ changedEntity.entity }} / {{ changedEntity.revisionType }}
                                            / {{ changedEntity.className }} - {{ changedEntity.id.id }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}
", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Block/block_audit.html.twig");
    }
}
