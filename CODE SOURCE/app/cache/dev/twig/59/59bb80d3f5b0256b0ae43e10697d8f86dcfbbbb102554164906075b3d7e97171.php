<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_8bfe914af251afc762c0220fcbee56aeb7ae5906a45116eaaf756ecacf933f4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de7b8bf49a7983dcb77a5f3826dc476df00157d542a078a01c5c96a3647c45b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7b8bf49a7983dcb77a5f3826dc476df00157d542a078a01c5c96a3647c45b2->enter($__internal_de7b8bf49a7983dcb77a5f3826dc476df00157d542a078a01c5c96a3647c45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_de7b8bf49a7983dcb77a5f3826dc476df00157d542a078a01c5c96a3647c45b2->leave($__internal_de7b8bf49a7983dcb77a5f3826dc476df00157d542a078a01c5c96a3647c45b2_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_20fec20a14472fb2c2a073d5f0fc53b66c5163378974c9a6a9795085755ac139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fec20a14472fb2c2a073d5f0fc53b66c5163378974c9a6a9795085755ac139->enter($__internal_20fec20a14472fb2c2a073d5f0fc53b66c5163378974c9a6a9795085755ac139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) || array_key_exists("read_only_choices", $context) ? $context["read_only_choices"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_choices" does not exist.', 7, $this->getSourceContext()); })())) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) || array_key_exists("read_only_choices", $context) ? $context["read_only_choices"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_choices" does not exist.', 11, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_20fec20a14472fb2c2a073d5f0fc53b66c5163378974c9a6a9795085755ac139->leave($__internal_20fec20a14472fb2c2a073d5f0fc53b66c5163378974c9a6a9795085755ac139_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sonata_security_roles_widget %}
{% spaceless %}
    <div class=\"editable\">
        <h4>{{ 'field.label_roles_editable'|trans({}, \"SonataUserBundle\") }}</h4>
        {{ block('choice_widget') }}
    </div>
    {% if read_only_choices|length > 0 %}
    <div class=\"readonly\">
        <h4>{{ 'field.label_roles_readonly'|trans({}, \"SonataUserBundle\") }}</h4>
        <ul>
        {% for choice in read_only_choices %}
            <li>{{ choice }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock sonata_security_roles_widget %}
", "SonataUserBundle:Form:form_admin_fields.html.twig", "/Users/Maxime/Documents/CESI/PFR/CODE/Madera/CODE SOURCE/vendor/sonata-project/user-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
