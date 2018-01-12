<?php

/* extjs/config.html.twig */
class __TwigTemplate_bf4a3e030c61483f53f2f2842b4de6d7777b6254e1b7e4743720b340f7b95bc8 extends Twig_Template
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
        $__internal_f2dc20c6c8139865bcf0ec1686ae70b8726c75edd57189795ec459c6e0f02247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2dc20c6c8139865bcf0ec1686ae70b8726c75edd57189795ec459c6e0f02247->enter($__internal_f2dc20c6c8139865bcf0ec1686ae70b8726c75edd57189795ec459c6e0f02247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "extjs/config.html.twig"));

        $__internal_5ad5880cea4ebaa54d9460288510db67fce355b0711c9478e1267d95b956f2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad5880cea4ebaa54d9460288510db67fce355b0711c9478e1267d95b956f2d9->enter($__internal_5ad5880cea4ebaa54d9460288510db67fce355b0711c9478e1267d95b956f2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "extjs/config.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["options"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "ext"), "method");
        // line 4
        echo "<script type=\"text/javascript\">
    AppConfig = {

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 8
            echo "            ";
            if (twig_test_iterable($context["option"])) {
                // line 9
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["option"]);
                foreach ($context['_seq'] as $context["sub_key"] => $context["sub_option"]) {
                    // line 10
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["sub_key"], "html", null, true);
                    echo ": '";
                    echo $context["sub_option"];
                    echo "',
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sub_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            } else {
                // line 13
                echo "                    ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ": '";
                echo $context["option"];
                echo "',
            ";
            }
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 19
                echo "                ";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo ": '";
                echo $context["flash"];
                echo "',
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 24
        echo "        ";
        // line 25
        echo "
    }
</script>";
        
        $__internal_f2dc20c6c8139865bcf0ec1686ae70b8726c75edd57189795ec459c6e0f02247->leave($__internal_f2dc20c6c8139865bcf0ec1686ae70b8726c75edd57189795ec459c6e0f02247_prof);

        
        $__internal_5ad5880cea4ebaa54d9460288510db67fce355b0711c9478e1267d95b956f2d9->leave($__internal_5ad5880cea4ebaa54d9460288510db67fce355b0711c9478e1267d95b956f2d9_prof);

    }

    public function getTemplateName()
    {
        return "extjs/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  107 => 24,  104 => 22,  98 => 21,  87 => 19,  82 => 18,  78 => 17,  75 => 16,  69 => 15,  61 => 13,  58 => 12,  47 => 10,  42 => 9,  39 => 8,  35 => 7,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Unterstuetzt in der aktuellen Form maximal 2-dimensionalen Array #}

{% set options = app.session.get('ext') %}
<script type=\"text/javascript\">
    AppConfig = {

        {% for key, option in options %}
            {% if option is iterable %}
                {% for sub_key, sub_option in option %}
                    {{ sub_key }}: '{{ sub_option|raw }}',
                {% endfor %}
            {% else %}
                    {{ key }}: '{{ option|raw }}',
            {% endif %}
        {% endfor %}

        {% for label, flashes in app.session.flashbag.all %}
            {% for flash in flashes %}
                {{ label }}: '{{ flash|raw }}',
            {% endfor %}
        {% endfor %}

        {# Twig Variablen, die in ExtJS zur Verfuegung stehen sollen, muessen hier manuell hinzugefuegt werden #}
        {# idealerweise findet irgendwer irgendwann irgendwie einen Weg diese automatisch zu adden #}

    }
</script>", "extjs/config.html.twig", "K:\\Npointern\\app\\Resources\\views\\extjs\\config.html.twig");
    }
}
