<?php

/* @SimpleThingsEntityAudit/Audit/compare.html.twig */
class __TwigTemplate_98e7a769848e32b261f163252d2ab034e2fda6e1575e1e6c6c04c3acb310623b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "@SimpleThingsEntityAudit/Audit/compare.html.twig", 1);
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
        $__internal_0bc092f5a4adf689f5e614717f5e513a42cbc2b7f26b29b8ae67dc270dd56bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc092f5a4adf689f5e614717f5e513a42cbc2b7f26b29b8ae67dc270dd56bee->enter($__internal_0bc092f5a4adf689f5e614717f5e513a42cbc2b7f26b29b8ae67dc270dd56bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/compare.html.twig"));

        $__internal_d5b88bbd732b54d128b66d5e842f392b2ff857e63a0dadbfe429e99b1c70b038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b88bbd732b54d128b66d5e842f392b2ff857e63a0dadbfe429e99b1c70b038->enter($__internal_d5b88bbd732b54d128b66d5e842f392b2ff857e63a0dadbfe429e99b1c70b038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleThingsEntityAudit/Audit/compare.html.twig"));

        // line 17
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc092f5a4adf689f5e614717f5e513a42cbc2b7f26b29b8ae67dc270dd56bee->leave($__internal_0bc092f5a4adf689f5e614717f5e513a42cbc2b7f26b29b8ae67dc270dd56bee_prof);

        
        $__internal_d5b88bbd732b54d128b66d5e842f392b2ff857e63a0dadbfe429e99b1c70b038->leave($__internal_d5b88bbd732b54d128b66d5e842f392b2ff857e63a0dadbfe429e99b1c70b038_prof);

    }

    // line 19
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_342f70b115f6ce9dff3e254796f6f1c39b16eb3794ffb7f4660d3c8a6c5f6946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342f70b115f6ce9dff3e254796f6f1c39b16eb3794ffb7f4660d3c8a6c5f6946->enter($__internal_342f70b115f6ce9dff3e254796f6f1c39b16eb3794ffb7f4660d3c8a6c5f6946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_eee5517d4e0fec915ca3fdffe229cb18b32b3f3a47d1c135aba7b5a7efb17d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee5517d4e0fec915ca3fdffe229cb18b32b3f3a47d1c135aba7b5a7efb17d30->enter($__internal_eee5517d4e0fec915ca3fdffe229cb18b32b3f3a47d1c135aba7b5a7efb17d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 20
        echo "<h1>Comparing ";
        echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo " between revisions ";
        echo twig_escape_filter($this->env, (isset($context["oldRev"]) || array_key_exists("oldRev", $context) ? $context["oldRev"] : (function () { throw new Twig_Error_Runtime('Variable "oldRev" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["newRev"]) || array_key_exists("newRev", $context) ? $context["newRev"] : (function () { throw new Twig_Error_Runtime('Variable "newRev" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>

<table>
    <thead><tr>
        <th>Field</th>
        <th>Deleted</th>
        <th>Same</th>
        <th>Updated</th>
    </tr></thead>
    <tbody>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new Twig_Error_Runtime('Variable "diff" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 31
            echo "    <tr>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</td>
        <td>
            ";
            // line 34
            echo $context["helper"]->macro_showValue(twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "old", array()));
            echo "
        </td>
        <td>
            ";
            // line 37
            echo $context["helper"]->macro_showValue(twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "same", array()));
            echo "
        </td>
        <td>
            ";
            // line 40
            echo $context["helper"]->macro_showValue(twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "new", array()));
            echo "
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
</table>

";
        
        $__internal_eee5517d4e0fec915ca3fdffe229cb18b32b3f3a47d1c135aba7b5a7efb17d30->leave($__internal_eee5517d4e0fec915ca3fdffe229cb18b32b3f3a47d1c135aba7b5a7efb17d30_prof);

        
        $__internal_342f70b115f6ce9dff3e254796f6f1c39b16eb3794ffb7f4660d3c8a6c5f6946->leave($__internal_342f70b115f6ce9dff3e254796f6f1c39b16eb3794ffb7f4660d3c8a6c5f6946_prof);

    }

    // line 3
    public function macro_showValue($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b625cd3604178999fc76fad2ef53cc6aed8251f44012aa0247418ebea7ce8ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b625cd3604178999fc76fad2ef53cc6aed8251f44012aa0247418ebea7ce8ef6->enter($__internal_b625cd3604178999fc76fad2ef53cc6aed8251f44012aa0247418ebea7ce8ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showValue"));

            $__internal_242ea8d79d3f117314a3774e70a2bcd0e8577296a68faa13c6cc0f9d491c9852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_242ea8d79d3f117314a3774e70a2bcd0e8577296a68faa13c6cc0f9d491c9852->enter($__internal_242ea8d79d3f117314a3774e70a2bcd0e8577296a68faa13c6cc0f9d491c9852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showValue"));

            // line 4
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "timestamp", array(), "any", true, true)) {
                // line 5
                echo "        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->getSourceContext()); })()), "m/d/Y"), "html", null, true);
                echo "
    ";
            } elseif (twig_test_iterable(            // line 6
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->getSourceContext()); })()))) {
                // line 7
                echo "        <ul>
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 9
                    echo "            <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        </ul>
    ";
            } else {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_242ea8d79d3f117314a3774e70a2bcd0e8577296a68faa13c6cc0f9d491c9852->leave($__internal_242ea8d79d3f117314a3774e70a2bcd0e8577296a68faa13c6cc0f9d491c9852_prof);

            
            $__internal_b625cd3604178999fc76fad2ef53cc6aed8251f44012aa0247418ebea7ce8ef6->leave($__internal_b625cd3604178999fc76fad2ef53cc6aed8251f44012aa0247418ebea7ce8ef6_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SimpleThingsEntityAudit/Audit/compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 13,  163 => 11,  154 => 9,  150 => 8,  147 => 7,  145 => 6,  140 => 5,  137 => 4,  119 => 3,  106 => 44,  96 => 40,  90 => 37,  84 => 34,  79 => 32,  76 => 31,  72 => 30,  52 => 20,  43 => 19,  33 => 1,  31 => 17,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SimpleThingsEntityAuditBundle::layout.html.twig\" %}

{% macro showValue(value) %}
    {% if value.timestamp is defined %}
        {{ value|date('m/d/Y') }}
    {% elseif value is iterable %}
        <ul>
        {% for element in value %}
            <li>{{ element }}</li>
        {% endfor %}
        </ul>
    {% else %}
        {{ value }}
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block simplethings_entityaudit_content %}
<h1>Comparing {{ className }} with identifiers of {{ id }} between revisions {{ oldRev }} and {{ newRev }}</h1>

<table>
    <thead><tr>
        <th>Field</th>
        <th>Deleted</th>
        <th>Same</th>
        <th>Updated</th>
    </tr></thead>
    <tbody>
    {% for field, value in diff %}
    <tr>
        <td>{{ field }}</td>
        <td>
            {{ helper.showValue(value.old) }}
        </td>
        <td>
            {{ helper.showValue(value.same) }}
        </td>
        <td>
            {{ helper.showValue(value.new) }}
        </td>
    </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock simplethings_entityaudit_content %}
", "@SimpleThingsEntityAudit/Audit/compare.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit\\Resources\\views\\Audit\\compare.html.twig");
    }
}
