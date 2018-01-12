<?php

/* @SimpleThingsEntityAudit/Audit/compare.html.twig */
class __TwigTemplate_82a537565125fca050886785556e49640bef7de5c10e54f8e554d5029639ddd7 extends Twig_Template
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
        // line 17
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        // line 20
        echo "<h1>Comparing ";
        echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " between revisions ";
        echo twig_escape_filter($this->env, ($context["oldRev"] ?? null), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, ($context["newRev"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["diff"] ?? null));
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
            // line 4
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "timestamp", array(), "any", true, true)) {
                // line 5
                echo "        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "m/d/Y"), "html", null, true);
                echo "
    ";
            } elseif (twig_test_iterable(            // line 6
($context["value"] ?? null))) {
                // line 7
                echo "        <ul>
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "
    ";
            }

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
        return array (  137 => 13,  133 => 11,  124 => 9,  120 => 8,  117 => 7,  115 => 6,  110 => 5,  107 => 4,  95 => 3,  88 => 44,  78 => 40,  72 => 37,  66 => 34,  61 => 32,  58 => 31,  54 => 30,  34 => 20,  31 => 19,  27 => 1,  25 => 17,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SimpleThingsEntityAudit/Audit/compare.html.twig", "K:\\Npointern\\vendor\\simplethings\\entity-audit-bundle\\src\\SimpleThings\\EntityAudit\\Resources\\views\\Audit\\compare.html.twig");
    }
}
