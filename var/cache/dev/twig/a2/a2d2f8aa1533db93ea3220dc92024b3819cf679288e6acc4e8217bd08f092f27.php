<?php

/* :extjs:config.html.twig */
class __TwigTemplate_50907c5bd8936a182462e5386953a0f5e9fe3694e6356401aca3c3a39f399e92 extends Twig_Template
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
        $__internal_45b0c7b8f977878774cbe4f30740ee4d7ab2dc278f059a2036d2455c724100fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b0c7b8f977878774cbe4f30740ee4d7ab2dc278f059a2036d2455c724100fb->enter($__internal_45b0c7b8f977878774cbe4f30740ee4d7ab2dc278f059a2036d2455c724100fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extjs:config.html.twig"));

        $__internal_42d6b60639c97452754df8ce7ac8e287e78b8a627238e983eb6a0e68384e6e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d6b60639c97452754df8ce7ac8e287e78b8a627238e983eb6a0e68384e6e00->enter($__internal_42d6b60639c97452754df8ce7ac8e287e78b8a627238e983eb6a0e68384e6e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extjs:config.html.twig"));

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
        
        $__internal_45b0c7b8f977878774cbe4f30740ee4d7ab2dc278f059a2036d2455c724100fb->leave($__internal_45b0c7b8f977878774cbe4f30740ee4d7ab2dc278f059a2036d2455c724100fb_prof);

        
        $__internal_42d6b60639c97452754df8ce7ac8e287e78b8a627238e983eb6a0e68384e6e00->leave($__internal_42d6b60639c97452754df8ce7ac8e287e78b8a627238e983eb6a0e68384e6e00_prof);

    }

    public function getTemplateName()
    {
        return ":extjs:config.html.twig";
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
</script>", ":extjs:config.html.twig", "K:\\Npointern\\app/Resources\\views/extjs/config.html.twig");
    }
}
