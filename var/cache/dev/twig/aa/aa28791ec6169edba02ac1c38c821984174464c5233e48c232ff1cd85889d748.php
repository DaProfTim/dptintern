<?php

/* SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig */
class __TwigTemplate_5bf6aae33d5b83c42f231c67b386981a1459a4609342eef2913aa0dcabaa004a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig", 1);
        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83c24f528e8c262d27b6cb0341851252d93fdc8af0f79e9c85a15861ef0b4d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c24f528e8c262d27b6cb0341851252d93fdc8af0f79e9c85a15861ef0b4d9e->enter($__internal_83c24f528e8c262d27b6cb0341851252d93fdc8af0f79e9c85a15861ef0b4d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig"));

        $__internal_a58d7dace32009b858b45b3431f37d754d57a401c5604245906f547a310f278f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58d7dace32009b858b45b3431f37d754d57a401c5604245906f547a310f278f->enter($__internal_a58d7dace32009b858b45b3431f37d754d57a401c5604245906f547a310f278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c24f528e8c262d27b6cb0341851252d93fdc8af0f79e9c85a15861ef0b4d9e->leave($__internal_83c24f528e8c262d27b6cb0341851252d93fdc8af0f79e9c85a15861ef0b4d9e_prof);

        
        $__internal_a58d7dace32009b858b45b3431f37d754d57a401c5604245906f547a310f278f->leave($__internal_a58d7dace32009b858b45b3431f37d754d57a401c5604245906f547a310f278f_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_7ae3b6eb1762c84628b46be6e23c3f8d37622e8520e064ca9c72b8e3504be1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae3b6eb1762c84628b46be6e23c3f8d37622e8520e064ca9c72b8e3504be1c2->enter($__internal_7ae3b6eb1762c84628b46be6e23c3f8d37622e8520e064ca9c72b8e3504be1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_2c87be93c2ec0dc14a675e9528887a49043570a7a6c380edf02357025e6abd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c87be93c2ec0dc14a675e9528887a49043570a7a6c380edf02357025e6abd49->enter($__internal_2c87be93c2ec0dc14a675e9528887a49043570a7a6c380edf02357025e6abd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Detail of ";
        echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo " at revisions ";
        echo twig_escape_filter($this->env, (isset($context["rev"]) || array_key_exists("rev", $context) ? $context["rev"] : (function () { throw new Twig_Error_Runtime('Variable "rev" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("simple_things_entity_audit_viewentity", array("className" => (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 6, $this->getSourceContext()); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 6, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">Compare revisions</a></p>
<table>
    <thead><tr>
        <th>Field</th>
        <th>Value</th>
    </tr></thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 14
            echo "    <tr>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</td>
        ";
            // line 16
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "timestamp", array(), "any", true, true)) {
                // line 17
                echo "        <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["value"], "m/d/Y"), "html", null, true);
                echo "</td>
        ";
            } elseif (twig_test_iterable(            // line 18
$context["value"])) {
                // line 19
                echo "        <td>
            <ul>
                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 22
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            </ul>
        </td>
        ";
            } else {
                // line 27
                echo "        <td>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
        ";
            }
            // line 29
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
</table>

";
        
        $__internal_2c87be93c2ec0dc14a675e9528887a49043570a7a6c380edf02357025e6abd49->leave($__internal_2c87be93c2ec0dc14a675e9528887a49043570a7a6c380edf02357025e6abd49_prof);

        
        $__internal_7ae3b6eb1762c84628b46be6e23c3f8d37622e8520e064ca9c72b8e3504be1c2->leave($__internal_7ae3b6eb1762c84628b46be6e23c3f8d37622e8520e064ca9c72b8e3504be1c2_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  117 => 29,  111 => 27,  106 => 24,  97 => 22,  93 => 21,  89 => 19,  87 => 18,  82 => 17,  80 => 16,  76 => 15,  73 => 14,  69 => 13,  59 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SimpleThingsEntityAuditBundle::layout.html.twig\" %}

{% block simplethings_entityaudit_content %}
<h1>Detail of {{ className }} with identifiers of {{ id }} at revisions {{ rev }}</h1>

<p><a href=\"{{ path('simple_things_entity_audit_viewentity', { 'className': className, 'id': id }) }}\">Compare revisions</a></p>
<table>
    <thead><tr>
        <th>Field</th>
        <th>Value</th>
    </tr></thead>
    <tbody>
    {% for field, value in data %}
    <tr>
        <td>{{ field }}</td>
        {% if value.timestamp is defined %}
        <td>{{ value|date('m/d/Y') }}</td>
        {% elseif value is iterable %}
        <td>
            <ul>
                {% for element in value %}
                    <li>{{ element }}</li>
                {% endfor %}
            </ul>
        </td>
        {% else %}
        <td>{{ value }}</td>
        {% endif %}
    </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock simplethings_entityaudit_content %}

", "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit/Resources/views/Audit/view_detail.html.twig");
    }
}
