<?php

/* SimpleThingsEntityAuditBundle:Audit:compare.html.twig */
class __TwigTemplate_5e53e5f0dee03ff902eb0ae5a2b6e3b917db8bcc8b75485e67dbda43bdf6f3ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:compare.html.twig", 1);
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
        $__internal_6b9a9dafd3682c1cc0ed7b3e13c4c17f4b48676748466b03a3275edba51a0d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9a9dafd3682c1cc0ed7b3e13c4c17f4b48676748466b03a3275edba51a0d87->enter($__internal_6b9a9dafd3682c1cc0ed7b3e13c4c17f4b48676748466b03a3275edba51a0d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:compare.html.twig"));

        $__internal_6f7aa822e2f27ae38ff35bef48c3a6af8fbdbfe3de358a6e5300a5f86966d2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7aa822e2f27ae38ff35bef48c3a6af8fbdbfe3de358a6e5300a5f86966d2a1->enter($__internal_6f7aa822e2f27ae38ff35bef48c3a6af8fbdbfe3de358a6e5300a5f86966d2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:compare.html.twig"));

        // line 17
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b9a9dafd3682c1cc0ed7b3e13c4c17f4b48676748466b03a3275edba51a0d87->leave($__internal_6b9a9dafd3682c1cc0ed7b3e13c4c17f4b48676748466b03a3275edba51a0d87_prof);

        
        $__internal_6f7aa822e2f27ae38ff35bef48c3a6af8fbdbfe3de358a6e5300a5f86966d2a1->leave($__internal_6f7aa822e2f27ae38ff35bef48c3a6af8fbdbfe3de358a6e5300a5f86966d2a1_prof);

    }

    // line 19
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_e85f401bc935b9364e4efa6f681a9f59fc50861ffaeb30d0fa25885b15da7867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85f401bc935b9364e4efa6f681a9f59fc50861ffaeb30d0fa25885b15da7867->enter($__internal_e85f401bc935b9364e4efa6f681a9f59fc50861ffaeb30d0fa25885b15da7867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        $__internal_e7d6922ed173f825be41be6768ef240cebd199b8b38a98611e13de51619fd602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d6922ed173f825be41be6768ef240cebd199b8b38a98611e13de51619fd602->enter($__internal_e7d6922ed173f825be41be6768ef240cebd199b8b38a98611e13de51619fd602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

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
        
        $__internal_e7d6922ed173f825be41be6768ef240cebd199b8b38a98611e13de51619fd602->leave($__internal_e7d6922ed173f825be41be6768ef240cebd199b8b38a98611e13de51619fd602_prof);

        
        $__internal_e85f401bc935b9364e4efa6f681a9f59fc50861ffaeb30d0fa25885b15da7867->leave($__internal_e85f401bc935b9364e4efa6f681a9f59fc50861ffaeb30d0fa25885b15da7867_prof);

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
            $__internal_20af84917a12cf6308cce5ac5167aaa16e93ad0fa20744e534efc36047b2a97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_20af84917a12cf6308cce5ac5167aaa16e93ad0fa20744e534efc36047b2a97a->enter($__internal_20af84917a12cf6308cce5ac5167aaa16e93ad0fa20744e534efc36047b2a97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showValue"));

            $__internal_300919f9484ac3c2043a108e958d311505b8542173ffe1a7485a57f1c54d1faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_300919f9484ac3c2043a108e958d311505b8542173ffe1a7485a57f1c54d1faf->enter($__internal_300919f9484ac3c2043a108e958d311505b8542173ffe1a7485a57f1c54d1faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showValue"));

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
            
            $__internal_300919f9484ac3c2043a108e958d311505b8542173ffe1a7485a57f1c54d1faf->leave($__internal_300919f9484ac3c2043a108e958d311505b8542173ffe1a7485a57f1c54d1faf_prof);

            
            $__internal_20af84917a12cf6308cce5ac5167aaa16e93ad0fa20744e534efc36047b2a97a->leave($__internal_20af84917a12cf6308cce5ac5167aaa16e93ad0fa20744e534efc36047b2a97a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:compare.html.twig";
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
", "SimpleThingsEntityAuditBundle:Audit:compare.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit/Resources/views/Audit/compare.html.twig");
    }
}
