<?php

/* @SimpleThingsEntityAudit/Audit/view_detail.html.twig */
class __TwigTemplate_8bafe33c98215bce3b5c41c73720bc580ce30c5bc2a2f33b9ab364ef1179293a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "@SimpleThingsEntityAudit/Audit/view_detail.html.twig", 1);
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
        $__internal_5b8107ca092ca1e0533f70a4d9bbe82b8770aa52555f56003bcd9fce11fee868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8107ca092ca1e0533f70a4d9bbe82b8770aa52555f56003bcd9fce11fee868->enter($__internal_5b8107ca092ca1e0533f70a4d9bbe82b8770aa52555f56003bcd9fce11fee868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/view_detail.html.twig"));

        $__internal_2c983f9b1ec586385ceef975483191cbed3d5caf30619d2f037210e82410ade1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c983f9b1ec586385ceef975483191cbed3d5caf30619d2f037210e82410ade1->enter($__internal_2c983f9b1ec586385ceef975483191cbed3d5caf30619d2f037210e82410ade1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/view_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b8107ca092ca1e0533f70a4d9bbe82b8770aa52555f56003bcd9fce11fee868->leave($__internal_5b8107ca092ca1e0533f70a4d9bbe82b8770aa52555f56003bcd9fce11fee868_prof);

        
        $__internal_2c983f9b1ec586385ceef975483191cbed3d5caf30619d2f037210e82410ade1->leave($__internal_2c983f9b1ec586385ceef975483191cbed3d5caf30619d2f037210e82410ade1_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_9b3b168d8c01fa2225d54bee59371a7895c4e64ca89e3609c2f73463e41f81dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3b168d8c01fa2225d54bee59371a7895c4e64ca89e3609c2f73463e41f81dd->enter($__internal_9b3b168d8c01fa2225d54bee59371a7895c4e64ca89e3609c2f73463e41f81dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_95cb9329cb9db4c2353260411112d5bb7597f303b38f6ed2a9a4f3003a1c5e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cb9329cb9db4c2353260411112d5bb7597f303b38f6ed2a9a4f3003a1c5e7e->enter($__internal_95cb9329cb9db4c2353260411112d5bb7597f303b38f6ed2a9a4f3003a1c5e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

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
        
        $__internal_95cb9329cb9db4c2353260411112d5bb7597f303b38f6ed2a9a4f3003a1c5e7e->leave($__internal_95cb9329cb9db4c2353260411112d5bb7597f303b38f6ed2a9a4f3003a1c5e7e_prof);

        
        $__internal_9b3b168d8c01fa2225d54bee59371a7895c4e64ca89e3609c2f73463e41f81dd->leave($__internal_9b3b168d8c01fa2225d54bee59371a7895c4e64ca89e3609c2f73463e41f81dd_prof);

    }

    public function getTemplateName()
    {
        return "@SimpleThingsEntityAudit/Audit/view_detail.html.twig";
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

", "@SimpleThingsEntityAudit/Audit/view_detail.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit\\Resources\\views\\Audit\\view_detail.html.twig");
    }
}
