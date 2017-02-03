<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_7864c1019d3a2ef43885d47f8df83952064af00ed4dbcd034dfb814f15dde7b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_581f112f605d66580da0344cbb520206b76a4206d363e1f03ff3b99a80a8d522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581f112f605d66580da0344cbb520206b76a4206d363e1f03ff3b99a80a8d522->enter($__internal_581f112f605d66580da0344cbb520206b76a4206d363e1f03ff3b99a80a8d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581f112f605d66580da0344cbb520206b76a4206d363e1f03ff3b99a80a8d522->leave($__internal_581f112f605d66580da0344cbb520206b76a4206d363e1f03ff3b99a80a8d522_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1e9c18dabb7022b51a109a3c5587d9eb0fa776e0743871e5bcccd9a3e4fb152e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9c18dabb7022b51a109a3c5587d9eb0fa776e0743871e5bcccd9a3e4fb152e->enter($__internal_1e9c18dabb7022b51a109a3c5587d9eb0fa776e0743871e5bcccd9a3e4fb152e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 15)->display($context);
        
        $__internal_1e9c18dabb7022b51a109a3c5587d9eb0fa776e0743871e5bcccd9a3e4fb152e->leave($__internal_1e9c18dabb7022b51a109a3c5587d9eb0fa776e0743871e5bcccd9a3e4fb152e_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a694bb1c72111a4759c17408e857d17d3f13bb50d8a79e704f631190b21e5000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a694bb1c72111a4759c17408e857d17d3f13bb50d8a79e704f631190b21e5000->enter($__internal_a694bb1c72111a4759c17408e857d17d3f13bb50d8a79e704f631190b21e5000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 19, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 19, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 21
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 21, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 22
        echo "
";
        
        $__internal_a694bb1c72111a4759c17408e857d17d3f13bb50d8a79e704f631190b21e5000->leave($__internal_a694bb1c72111a4759c17408e857d17d3f13bb50d8a79e704f631190b21e5000_prof);

    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        $__internal_e655c8b08898817193735e42070c852ba0f569d76712fd2e73af86e768fe501e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e655c8b08898817193735e42070c852ba0f569d76712fd2e73af86e768fe501e->enter($__internal_e655c8b08898817193735e42070c852ba0f569d76712fd2e73af86e768fe501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 26
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 28, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 30
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "showtabs", array())) == 1) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "showtabs", array())) > 1));
        // line 31
        echo "
        ";
        // line 32
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new Twig_Error_Runtime('Variable "has_tab" does not exist.', 32, $this->getSourceContext()); })())) {
            // line 33
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 35, $this->getSourceContext()); })()), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 36
                echo "                        <li";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 37, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 39, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 46, $this->getSourceContext()); })()), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 47
                echo "                        <div
                                class=\"tab-pane fade";
                // line 48
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 49, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 53
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "description", array()) != false)) {
                    // line 54
                    echo "                                        <p>";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 56
                echo "
                                    ";
                // line 57
                $context["groups"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "groups", array());
                // line 58
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable(twig_get_attribute($this->env, $this->getSourceContext(),         // line 65
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 65, $this->getSourceContext()); })()), "showtabs", array()))) {
            // line 66
            echo "            ";
            $context["groups"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 66, $this->getSourceContext()); })()), "showtabs", array()), "default", array()), "groups", array());
            // line 67
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 69
        echo "
    </div>

    ";
        // line 72
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 72, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 72, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e655c8b08898817193735e42070c852ba0f569d76712fd2e73af86e768fe501e->leave($__internal_e655c8b08898817193735e42070c852ba0f569d76712fd2e73af86e768fe501e_prof);

    }

    // line 75
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_0f9a35a37c692b22a9c90b29c57049c3a2fa6363f053d6fe161ae69a784be546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9a35a37c692b22a9c90b29c57049c3a2fa6363f053d6fe161ae69a784be546->enter($__internal_0f9a35a37c692b22a9c90b29c57049c3a2fa6363f053d6fe161ae69a784be546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 76
        echo "    <div class=\"row\">
        ";
        // line 77
        $this->displayBlock('field_row', $context, $blocks);
        // line 109
        echo "
    </div>
";
        
        $__internal_0f9a35a37c692b22a9c90b29c57049c3a2fa6363f053d6fe161ae69a784be546->leave($__internal_0f9a35a37c692b22a9c90b29c57049c3a2fa6363f053d6fe161ae69a784be546_prof);

    }

    // line 77
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_a167abbcf041610a02df0fc6bb9efd23022f4c56af61edeac9429b964b003dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a167abbcf041610a02df0fc6bb9efd23022f4c56af61edeac9429b964b003dfd->enter($__internal_a167abbcf041610a02df0fc6bb9efd23022f4c56af61edeac9429b964b003dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 78, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 79
            echo "                ";
            $context["show_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 79, $this->getSourceContext()); })()), "showgroups", array()), $context["code"], array(), "array");
            // line 80
            echo "
                <div class=\"";
            // line 81
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new Twig_Error_Runtime('Variable "no_padding" does not exist.', 81, $this->getSourceContext()); })()), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 82, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 85
            $this->displayBlock('show_title', $context, $blocks);
            // line 88
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 93, $this->getSourceContext()); })()), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 94
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 101
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                </tbody>
                            </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        
        $__internal_a167abbcf041610a02df0fc6bb9efd23022f4c56af61edeac9429b964b003dfd->leave($__internal_a167abbcf041610a02df0fc6bb9efd23022f4c56af61edeac9429b964b003dfd_prof);

    }

    // line 85
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_4a98dfc0ca424a3462721ef18be01c028622eb47b900eab8fece8060b1c22f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a98dfc0ca424a3462721ef18be01c028622eb47b900eab8fece8060b1c22f84->enter($__internal_4a98dfc0ca424a3462721ef18be01c028622eb47b900eab8fece8060b1c22f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 86
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 86, $this->getSourceContext()); })()), "name", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "translation_domain", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 86, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 86, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_4a98dfc0ca424a3462721ef18be01c028622eb47b900eab8fece8060b1c22f84->leave($__internal_4a98dfc0ca424a3462721ef18be01c028622eb47b900eab8fece8060b1c22f84_prof);

    }

    // line 94
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_fa62008b61dcbcce06aeb4bf48691a02d23a8d2a0b7860f87ade821e00d5e48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa62008b61dcbcce06aeb4bf48691a02d23a8d2a0b7860f87ade821e00d5e48f->enter($__internal_fa62008b61dcbcce06aeb4bf48691a02d23a8d2a0b7860f87ade821e00d5e48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 95
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 96
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 96, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 97
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 97, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 97, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 97, $this->getSourceContext()); })()));
            echo "
                                            ";
        }
        // line 99
        echo "                                        </tr>
                                    ";
        
        $__internal_fa62008b61dcbcce06aeb4bf48691a02d23a8d2a0b7860f87ade821e00d5e48f->leave($__internal_fa62008b61dcbcce06aeb4bf48691a02d23a8d2a0b7860f87ade821e00d5e48f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 99,  405 => 97,  403 => 96,  400 => 95,  394 => 94,  384 => 86,  378 => 85,  371 => 108,  352 => 102,  338 => 101,  335 => 94,  318 => 93,  311 => 88,  309 => 85,  303 => 82,  297 => 81,  294 => 80,  291 => 79,  273 => 78,  267 => 77,  258 => 109,  256 => 77,  253 => 76,  247 => 75,  238 => 72,  233 => 69,  227 => 67,  224 => 66,  222 => 65,  218 => 63,  198 => 58,  196 => 57,  193 => 56,  187 => 54,  185 => 53,  176 => 49,  170 => 48,  167 => 47,  150 => 46,  145 => 43,  127 => 39,  120 => 37,  113 => 36,  96 => 35,  92 => 33,  90 => 32,  87 => 31,  85 => 30,  80 => 28,  76 => 26,  70 => 25,  62 => 22,  60 => 21,  58 => 19,  52 => 18,  45 => 15,  39 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ name|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.name|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
