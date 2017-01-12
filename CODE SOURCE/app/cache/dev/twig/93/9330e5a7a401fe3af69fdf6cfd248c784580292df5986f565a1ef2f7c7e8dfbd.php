<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_305e452a2984a3d36ce52ef5768aec74fe188e08f0b59bb6686cab242651ea7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5367d174aed3f0f102cec8eebe3f604a545260562d05693a11191f6dc32377b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5367d174aed3f0f102cec8eebe3f604a545260562d05693a11191f6dc32377b->enter($__internal_a5367d174aed3f0f102cec8eebe3f604a545260562d05693a11191f6dc32377b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5367d174aed3f0f102cec8eebe3f604a545260562d05693a11191f6dc32377b->leave($__internal_a5367d174aed3f0f102cec8eebe3f604a545260562d05693a11191f6dc32377b_prof);

    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_4e3a92dc28279d9cb512b9e17deb9dfcfe3cbe416b77fd6a0b62b5d662cc8598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3a92dc28279d9cb512b9e17deb9dfcfe3cbe416b77fd6a0b62b5d662cc8598->enter($__internal_4e3a92dc28279d9cb512b9e17deb9dfcfe3cbe416b77fd6a0b62b5d662cc8598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
        
        $__internal_4e3a92dc28279d9cb512b9e17deb9dfcfe3cbe416b77fd6a0b62b5d662cc8598->leave($__internal_4e3a92dc28279d9cb512b9e17deb9dfcfe3cbe416b77fd6a0b62b5d662cc8598_prof);

    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_34e9b0e9e423573cf67bdd30ef6d76336761ac029f8e65af663dec6b2b560de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e9b0e9e423573cf67bdd30ef6d76336761ac029f8e65af663dec6b2b560de0->enter($__internal_34e9b0e9e423573cf67bdd30ef6d76336761ac029f8e65af663dec6b2b560de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        // line 21
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
        
        $__internal_34e9b0e9e423573cf67bdd30ef6d76336761ac029f8e65af663dec6b2b560de0->leave($__internal_34e9b0e9e423573cf67bdd30ef6d76336761ac029f8e65af663dec6b2b560de0_prof);

    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_c9a10c114eba3b4e0ba33bfe77d27162bdd481efd4713ef3857fa3ed5e7c5763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a10c114eba3b4e0ba33bfe77d27162bdd481efd4713ef3857fa3ed5e7c5763->enter($__internal_c9a10c114eba3b4e0ba33bfe77d27162bdd481efd4713ef3857fa3ed5e7c5763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        // line 25
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
        
        $__internal_c9a10c114eba3b4e0ba33bfe77d27162bdd481efd4713ef3857fa3ed5e7c5763->leave($__internal_c9a10c114eba3b4e0ba33bfe77d27162bdd481efd4713ef3857fa3ed5e7c5763_prof);

    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_bae282fe8eb484d84a3d8780f08dae16953f27725157762d3a95297f8f579b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae282fe8eb484d84a3d8780f08dae16953f27725157762d3a95297f8f579b8d->enter($__internal_bae282fe8eb484d84a3d8780f08dae16953f27725157762d3a95297f8f579b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        // line 29
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
        
        $__internal_bae282fe8eb484d84a3d8780f08dae16953f27725157762d3a95297f8f579b8d->leave($__internal_bae282fe8eb484d84a3d8780f08dae16953f27725157762d3a95297f8f579b8d_prof);

    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_2997f167cf89b586c6d26615b0c192f98e30de08a6beea142684ce4d5d43df6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2997f167cf89b586c6d26615b0c192f98e30de08a6beea142684ce4d5d43df6a->enter($__internal_2997f167cf89b586c6d26615b0c192f98e30de08a6beea142684ce4d5d43df6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_2997f167cf89b586c6d26615b0c192f98e30de08a6beea142684ce4d5d43df6a->leave($__internal_2997f167cf89b586c6d26615b0c192f98e30de08a6beea142684ce4d5d43df6a_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_dea9bb323eaea331f90370e61a399016ac4e934ce3fb75422eec79a62d55c7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea9bb323eaea331f90370e61a399016ac4e934ce3fb75422eec79a62d55c7df->enter($__internal_dea9bb323eaea331f90370e61a399016ac4e934ce3fb75422eec79a62d55c7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "link_parameters", array()))));
            // line 65
            echo "
            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 66
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 67
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 71
        echo "        </span>
        <span id=\"field_actions_";
        // line 72
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 74
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && ($context["btn_list"] ?? $this->getContext($context, "btn_list")))) {
            // line 75
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? $this->getContext($context, "btn_list")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? $this->getContext($context, "btn_list")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 84
        echo "
                ";
        // line 85
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && ($context["btn_add"] ?? $this->getContext($context, "btn_add")))) {
            // line 86
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 87
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 95
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 98
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && ($context["btn_delete"] ?? $this->getContext($context, "btn_delete")))) {
            // line 99
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? $this->getContext($context, "btn_delete")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? $this->getContext($context, "btn_delete")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 108
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 113
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("required" => false));
        echo "
        </span>

        ";
        // line 116
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 118
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 132
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 132)->display($context);
        
        $__internal_dea9bb323eaea331f90370e61a399016ac4e934ce3fb75422eec79a62d55c7df->leave($__internal_dea9bb323eaea331f90370e61a399016ac4e934ce3fb75422eec79a62d55c7df_prof);

    }

    // line 135
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_b11df9bc8b7c8aec024cd686ac84662c806f3b0fcf4c3aea2c5f196991ef3de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11df9bc8b7c8aec024cd686ac84662c806f3b0fcf4c3aea2c5f196991ef3de2->enter($__internal_b11df9bc8b7c8aec024cd686ac84662c806f3b0fcf4c3aea2c5f196991ef3de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 136
        echo "    ";
        // line 137
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 138
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 139
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 140
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 141
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 142
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 143
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 144
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 146
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b11df9bc8b7c8aec024cd686ac84662c806f3b0fcf4c3aea2c5f196991ef3de2->leave($__internal_b11df9bc8b7c8aec024cd686ac84662c806f3b0fcf4c3aea2c5f196991ef3de2_prof);

    }

    // line 150
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_65ca7e682cb6f8f5f2382cb2fbe66794050a7d546f767617a40e8fddc2a6c6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ca7e682cb6f8f5f2382cb2fbe66794050a7d546f767617a40e8fddc2a6c6fb->enter($__internal_65ca7e682cb6f8f5f2382cb2fbe66794050a7d546f767617a40e8fddc2a6c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 151
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 152
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 153
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 154
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 156
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_65ca7e682cb6f8f5f2382cb2fbe66794050a7d546f767617a40e8fddc2a6c6fb->leave($__internal_65ca7e682cb6f8f5f2382cb2fbe66794050a7d546f767617a40e8fddc2a6c6fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 156,  391 => 154,  389 => 153,  384 => 152,  381 => 151,  375 => 150,  364 => 146,  358 => 144,  356 => 143,  351 => 142,  349 => 141,  344 => 140,  342 => 139,  337 => 138,  334 => 137,  332 => 136,  326 => 135,  319 => 132,  302 => 118,  297 => 116,  290 => 113,  284 => 108,  278 => 105,  272 => 102,  267 => 100,  264 => 99,  262 => 98,  257 => 95,  251 => 92,  245 => 89,  240 => 87,  235 => 86,  233 => 85,  230 => 84,  224 => 81,  218 => 78,  213 => 76,  208 => 75,  206 => 74,  201 => 72,  198 => 71,  192 => 68,  189 => 67,  187 => 66,  184 => 65,  182 => 64,  181 => 63,  180 => 62,  179 => 61,  177 => 60,  175 => 59,  171 => 58,  166 => 57,  160 => 56,  149 => 52,  147 => 51,  141 => 49,  139 => 48,  134 => 47,  132 => 46,  127 => 45,  125 => 44,  120 => 43,  118 => 42,  113 => 41,  111 => 40,  108 => 39,  105 => 37,  103 => 33,  97 => 32,  89 => 29,  83 => 28,  75 => 25,  69 => 24,  61 => 21,  55 => 20,  47 => 17,  41 => 16,  11 => 12,);
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

{% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}


{# Custom Sonata Admin Extension #}
{% block sonata_admin_orm_one_to_one_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_many_to_many_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_many_to_one_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_one_to_many_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig' %}
{% endblock %}

{% block sonata_type_model_widget %}
    {#
        This is not the best way to do if
        TODO : improve this part
    #}

    {#model {{ sonata_admin.field_description.mappingtype }}#}

    {% if sonata_admin.field_description is empty %}
        {{ block('choice_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_ONE') %}
        {{ block('sonata_admin_orm_one_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_ONE') %}
        {{ block('sonata_admin_orm_many_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% else %}
        {#INVALID MODE : {{ id }}#}
        {{ block('choice_widget') }}
    {% endif %}
{% endblock %}

{% block sonata_type_model_list_widget %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
            {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}
                {{ render(path('sonata_admin_short_object_information', {
                    'code':     sonata_admin.field_description.associationadmin.code,
                    'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
                    'uniqid':   sonata_admin.field_description.associationadmin.uniqid,
                    'linkParameters': sonata_admin.field_description.options.link_parameters
                })) }}
            {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}
                <span class=\"inner-field-short-description\">
                    {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}
                </span>
            {% endif %}
        </span>
        <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}\"
                        onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}
                    <a  href=\"\"
                        onclick=\"return remove_selected_element_{{ id }}(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        {{ btn_delete|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>
        </span>

        <span style=\"display: none\" >
            {# Hidden text input cannot be required, because browser will throw error \"An invalid form control with name='' is not focusable\"  #}
            {{ form_widget(form, {'required':false}) }}
        </span>

        {{ block('sonata_help') }}

        <div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}
{% endblock %}

{% block sonata_type_admin_widget %}
    {#admin {{ sonata_admin.field_description.mappingtype }}#}
    {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_ONE') %}
        {{ block('sonata_admin_orm_one_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_ONE') %}
        {{ block('sonata_admin_orm_many_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }}
    {% endif %}
{% endblock %}

{% block sonata_type_collection_widget %}
    {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
