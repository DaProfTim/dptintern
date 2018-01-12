<?php

/* :extjs:config.html.twig */
class __TwigTemplate_2756ca7834ad74caf7a6d6fffab997b40e3f8aa924dc2626d75c8833860df8c7 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["options"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "get", array(0 => "ext"), "method");
        // line 4
        echo "<script type=\"text/javascript\">
    AppConfig = {

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
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
        return array (  103 => 25,  101 => 24,  98 => 22,  92 => 21,  81 => 19,  76 => 18,  72 => 17,  69 => 16,  63 => 15,  55 => 13,  52 => 12,  41 => 10,  36 => 9,  33 => 8,  29 => 7,  24 => 4,  22 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":extjs:config.html.twig", "K:\\Npointern\\app/Resources\\views/extjs/config.html.twig");
    }
}
