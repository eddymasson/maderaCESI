<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_c0173c18de50fd1a2d4747032f0a63b99cd8609e1524e8086b7bfaeb975b3130 extends Twig_Template
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
        $__internal_a33b209ec23403be1e16f4e18e43f81642d3d6042cce74f740707eb5c66b5986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33b209ec23403be1e16f4e18e43f81642d3d6042cce74f740707eb5c66b5986->enter($__internal_a33b209ec23403be1e16f4e18e43f81642d3d6042cce74f740707eb5c66b5986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig"));

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 21, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array());
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "
    var field_dialog_form_list_link_";
        // line 33
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 33, $this->getSourceContext()); })());
        echo " = function(event) {
        initialize_popup_";
        // line 34
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->getSourceContext()); })());
        echo "();

        var target = jQuery(this);
        
        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 45
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 45, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 47
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 47, $this->getSourceContext()); })());
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 51
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 51, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 58
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 58, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 60
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 60, $this->getSourceContext()); })());
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 61
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 61, $this->getSourceContext()); })());
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 63
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 63, $this->getSourceContext()); })());
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 70
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 70, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 72
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 72, $this->getSourceContext()); })());
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 73
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 73, $this->getSourceContext()); })());
        echo "').trigger('change');

        field_dialog_";
        // line 75
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 75, $this->getSourceContext()); })());
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 79
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 79, $this->getSourceContext()); })());
        echo "  =  function() {
        Admin.log('[";
        // line 80
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 80, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 84
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 84, $this->getSourceContext()); })());
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 84, $this->getSourceContext()); })());
        echo ");
        jQuery('form', field_dialog_";
        // line 85
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 85, $this->getSourceContext()); })());
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 90
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 90, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 99
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 99, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 101
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 101, $this->getSourceContext()); })());
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 102
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 102, $this->getSourceContext()); })());
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 104
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 104, $this->getSourceContext()); })());
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 111
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 111, $this->getSourceContext()); })());
        echo " = function(event) {

        initialize_popup_";
        // line 113
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 113, $this->getSourceContext()); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 118
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 118, $this->getSourceContext()); })());
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 122
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 122, $this->getSourceContext()); })());
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 130
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 130, $this->getSourceContext()); })());
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 133
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 133, $this->getSourceContext()); })());
        echo ".html(html);

                field_dialog_title_";
        // line 135
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 135, $this->getSourceContext()); })());
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 135, $this->getSourceContext()); })()), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 135, $this->getSourceContext()); })()), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 137
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 137, $this->getSourceContext()); })());
        echo ");

                field_dialog_form_list_handle_action_";
        // line 139
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 139, $this->getSourceContext()); })());
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 142
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 142, $this->getSourceContext()); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 144
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 144, $this->getSourceContext()); })());
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 150
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 150, $this->getSourceContext()); })());
        echo " = function(event) {
        initialize_popup_";
        // line 151
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 151, $this->getSourceContext()); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 158
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 158, $this->getSourceContext()); })());
        echo ".html('');

        Admin.log('[";
        // line 160
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 160, $this->getSourceContext()); })());
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 168
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 168, $this->getSourceContext()); })());
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 168, $this->getSourceContext()); })());
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 171
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 171, $this->getSourceContext()); })());
        echo ".html(html);
                field_dialog_title_";
        // line 172
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 172, $this->getSourceContext()); })());
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 172, $this->getSourceContext()); })()), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 172, $this->getSourceContext()); })()), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 174
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 174, $this->getSourceContext()); })());
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 178
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 178, $this->getSourceContext()); })());
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 178, $this->getSourceContext()); })());
        echo ");
                jQuery('form', field_dialog_";
        // line 179
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 179, $this->getSourceContext()); })());
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 179, $this->getSourceContext()); })());
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 182
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 182, $this->getSourceContext()); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 184
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 184, $this->getSourceContext()); })());
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 190
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 190, $this->getSourceContext()); })());
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            Admin.log('[";
        // line 196
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 196, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] element is an anchor, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 203
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 203, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 205
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 205, $this->getSourceContext()); })());
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 219
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 219, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 229
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 229, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 237
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 237, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 242
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 242, $this->getSourceContext()); })());
        echo ".modal('hide');

                    ";
        // line 244
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 244, $this->getSourceContext()); })()), "edit", array()) == "list")) {
            // line 245
            echo "                        ";
            // line 249
            echo "                        jQuery('#";
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 249, $this->getSourceContext()); })());
            echo "').val(data.objectId);
                        jQuery('#";
            // line 250
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 250, $this->getSourceContext()); })());
            echo "').change();

                    ";
        } else {
            // line 253
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 255
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 255, $this->getSourceContext()); })());
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_retrieve_form_element", array("elementId" =>             // line 257
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })()), "subclass" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 258
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 258, $this->getSourceContext()); })()), "admin", array()), "getActiveSubclassCode", array(), "method"), "objectId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 259
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 259, $this->getSourceContext()); })()), "admin", array()), "root", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 259, $this->getSourceContext()); })()), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 260
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 260, $this->getSourceContext()); })()), "admin", array()), "root", array()), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 261
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 261, $this->getSourceContext()); })()), "admin", array()), "root", array()), "code", array())));
            // line 262
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 267
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 267, $this->getSourceContext()); })());
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 268
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 268, $this->getSourceContext()); })());
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 275
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 275, $this->getSourceContext()); })());
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 280
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 285
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 285, $this->getSourceContext()); })());
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 287
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 287, $this->getSourceContext()); })());
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 290
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 290, $this->getSourceContext()); })());
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 290, $this->getSourceContext()); })());
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 297
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 297, $this->getSourceContext()); })());
        echo "         = false;
    var field_dialog_content_";
        // line 298
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 298, $this->getSourceContext()); })());
        echo " = false;
    var field_dialog_title_";
        // line 299
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 299, $this->getSourceContext()); })());
        echo "   = false;

    function initialize_popup_";
        // line 301
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 301, $this->getSourceContext()); })());
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 303
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 303, $this->getSourceContext()); })());
        echo ") {
            field_dialog_";
        // line 304
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 304, $this->getSourceContext()); })());
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 304, $this->getSourceContext()); })());
        echo "\");
            field_dialog_content_";
        // line 305
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 305, $this->getSourceContext()); })());
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 305, $this->getSourceContext()); })());
        echo "\");
            field_dialog_title_";
        // line 306
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 306, $this->getSourceContext()); })());
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 306, $this->getSourceContext()); })());
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 309
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 309, $this->getSourceContext()); })());
        echo ");

            Admin.log('[";
        // line 311
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 311, $this->getSourceContext()); })());
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 318
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 320
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 320, $this->getSourceContext()); })());
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 325
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 325, $this->getSourceContext()); })());
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 329
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 329, $this->getSourceContext()); })());
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 336
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 336, $this->getSourceContext()); })());
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 337
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 337, $this->getSourceContext()); })());
        echo ");
    }

    ";
        // line 340
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 340, $this->getSourceContext()); })()), "edit", array()) == "list")) {
            // line 341
            echo "        ";
            // line 344
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 346
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 346, $this->getSourceContext()); })());
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 350
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 350, $this->getSourceContext()); })());
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 354
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 354, $this->getSourceContext()); })());
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 361
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 361, $this->getSourceContext()); })());
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 366
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 366, $this->getSourceContext()); })());
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 373
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 373, $this->getSourceContext()); })());
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 376
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })());
            echo " option').get(0)) {
                jQuery('#";
            // line 377
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 377, $this->getSourceContext()); })());
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 380
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 380, $this->getSourceContext()); })());
            echo "').val('');
            jQuery('#";
            // line 381
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 381, $this->getSourceContext()); })());
            echo "').trigger('change');

            return false;
        }
        ";
            // line 388
            echo "
        // update the label
        jQuery('#";
            // line 390
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 390, $this->getSourceContext()); })());
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 392
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 392, $this->getSourceContext()); })());
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 394
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 394, $this->getSourceContext()); })());
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 397
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 399
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 399, $this->getSourceContext()); })()), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 400
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 400, $this->getSourceContext()); })()), "code", array()), "linkParameters" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 401
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 401, $this->getSourceContext()); })()), "field_description", array()), "options", array()), "link_parameters", array())));
            // line 402
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 405
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 405, $this->getSourceContext()); })());
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 411
        echo "

</script>
<!-- / edit many association -->

";
        
        $__internal_a33b209ec23403be1e16f4e18e43f81642d3d6042cce74f740707eb5c66b5986->leave($__internal_a33b209ec23403be1e16f4e18e43f81642d3d6042cce74f740707eb5c66b5986_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  728 => 411,  719 => 405,  714 => 402,  712 => 401,  711 => 400,  710 => 399,  709 => 397,  699 => 394,  694 => 392,  689 => 390,  685 => 388,  678 => 381,  674 => 380,  668 => 377,  664 => 376,  658 => 373,  648 => 366,  640 => 361,  630 => 354,  623 => 350,  616 => 346,  612 => 344,  610 => 341,  608 => 340,  602 => 337,  598 => 336,  588 => 329,  581 => 325,  573 => 320,  569 => 318,  562 => 311,  557 => 309,  549 => 306,  543 => 305,  537 => 304,  533 => 303,  528 => 301,  523 => 299,  519 => 298,  515 => 297,  503 => 290,  497 => 287,  492 => 285,  485 => 280,  477 => 275,  467 => 268,  463 => 267,  456 => 262,  454 => 261,  453 => 260,  452 => 259,  451 => 258,  450 => 257,  449 => 256,  445 => 255,  441 => 253,  435 => 250,  430 => 249,  428 => 245,  426 => 244,  421 => 242,  413 => 237,  402 => 229,  389 => 219,  372 => 205,  367 => 203,  357 => 196,  348 => 190,  339 => 184,  334 => 182,  326 => 179,  320 => 178,  313 => 174,  306 => 172,  302 => 171,  294 => 168,  283 => 160,  278 => 158,  268 => 151,  264 => 150,  255 => 144,  250 => 142,  244 => 139,  239 => 137,  232 => 135,  227 => 133,  221 => 130,  210 => 122,  203 => 118,  195 => 113,  190 => 111,  180 => 104,  175 => 102,  171 => 101,  166 => 99,  154 => 90,  146 => 85,  140 => 84,  133 => 80,  129 => 79,  122 => 75,  117 => 73,  113 => 72,  108 => 70,  98 => 63,  93 => 61,  89 => 60,  84 => 58,  74 => 51,  67 => 47,  62 => 45,  48 => 34,  44 => 33,  41 => 32,  34 => 22,  32 => 21,  29 => 20,  26 => 18,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


{#

This code manage the many-to-[one|many] association field popup

#}

{% autoescape false %}

{% set associationadmin = sonata_admin.field_description.associationadmin %}

<!-- edit many association -->

<script type=\"text/javascript\">

    {#
      handle link click in a list :
        - if the parent has an objectId defined then the related input get updated
        - if the parent has NO object then an ajax request is made to refresh the popup
    #}

    var field_dialog_form_list_link_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        var target = jQuery(this);
        
        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_{{ id }} .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[{{ id }}|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[{{ id }}|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });

            return;
        }

        Admin.log('[{{ id }}|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#{{ id }}').val(element.attr('objectId'));
        jQuery('#{{ id }}').trigger('change');

        field_dialog_{{ id }}.modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_{{ id }}  =  function() {
        Admin.log('[{{ id }}|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_list_link_{{ id }});
        jQuery('form', field_dialog_{{ id }}).on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[{{ id }}|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[{{ id }}|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_{{ id }} = function(event) {

        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);

                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                field_dialog_form_list_handle_action_{{ id }}();

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        Admin.log('[{{ id }}|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_add] ajax success', field_dialog_{{ id }});

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_action_{{ id }});
                jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_{{ id }} = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            Admin.log('[{{ id }}|field_dialog_form_action] element is an anchor, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_action] action catch', this);

        initialize_popup_{{ id }}();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[{{ id }}|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[{{ id }}|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[{{ id }}|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_{{ id }}.modal('hide');

                    {% if sonata_admin.edit == 'list' %}
                        {#
                           in this case we update the hidden input, and call the change event to
                           retrieve the post information
                        #}
                        jQuery('#{{ id }}').val(data.objectId);
                        jQuery('#{{ id }}').change();

                    {% else %}

                        // reload the form element
                        jQuery('#field_widget_{{ id }}').closest('form').ajaxSubmit({
                            url: '{{ path('sonata_admin_retrieve_form_element', {
                                'elementId': id,
                                'subclass':  sonata_admin.admin.getActiveSubclassCode(),
                                'objectId':  sonata_admin.admin.root.id(sonata_admin.admin.root.subject),
                                'uniqid':    sonata_admin.admin.root.uniqid,
                                'code':      sonata_admin.admin.root.code
                            }) }}',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_{{ id }}').replaceWith(html);
                                var newElement = jQuery('#{{ id }} [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_{{ id }}').trigger('sonata-admin-append-form-element');
                            }
                        });

                    {% endif %}

                    return;
                }

                // otherwise, display form error
                field_dialog_content_{{ id }}.html(data);

                Admin.shared_setup(field_dialog_{{ id }});

                // reattach the event
                jQuery('form', field_dialog_{{ id }}).submit(field_dialog_form_action_{{ id }});
            }
        });

        return false;
    };

    var field_dialog_{{ id }}         = false;
    var field_dialog_content_{{ id }} = false;
    var field_dialog_title_{{ id }}   = false;

    function initialize_popup_{{ id }}() {
        // initialize component
        if (!field_dialog_{{ id }}) {
            field_dialog_{{ id }}         = jQuery(\"#field_dialog_{{ id }}\");
            field_dialog_content_{{ id }} = jQuery(\".modal-body\", \"#field_dialog_{{ id }}\");
            field_dialog_title_{{ id }}   = jQuery(\".modal-title\", \"#field_dialog_{{ id }}\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_{{ id }});

            Admin.log('[{{ id }}|field_dialog] move dialog container as a document child');
        }
    }

    {#
        This code is used to defined the \"add\" popup
    #}
    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_{{ id }}(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_{{ id }}();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_{{ id }})
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_{{ id }}) {
        Admin.shared_setup(field_dialog_{{ id }});
    }

    {% if sonata_admin.edit == 'list' %}
        {#
            This code is used to defined the \"list\" popup
        #}
        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_{{ id }}(link) {

            link.onclick = null;

            initialize_popup_{{ id }}();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_{{ id }})
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_{{ id }}(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_{{ id}})
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_{{ id }}(event) {
            event.preventDefault();

            if (jQuery('#{{ id }} option').get(0)) {
                jQuery('#{{ id }}').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#{{ id }}').val('');
            jQuery('#{{ id }}').trigger('change');

            return false;
        }
        {#
          attach onchange event on the input
        #}

        // update the label
        jQuery('#{{ id }}').on('change', function(event) {

            Admin.log('[{{ id }}|on:change] update the label');

            jQuery('#field_widget_{{ id }}').html(\"<span><img src=\\\"{{ asset('bundles/sonataadmin/ajax-loader.gif') }}\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>{{ 'loading_information'|trans([], 'SonataAdminBundle') }}</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '{{ path('sonata_admin_short_object_information', {
                    'objectId': 'OBJECT_ID',
                    'uniqid': associationadmin.uniqid,
                    'code': associationadmin.code,
                    'linkParameters': sonata_admin.field_description.options.link_parameters
                })}}'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_{{ id }}').html(html);
                }
            });
        });

    {% endif %}


</script>
<!-- / edit many association -->

{% endautoescape %}
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_many_association_script.html.twig");
    }
}
