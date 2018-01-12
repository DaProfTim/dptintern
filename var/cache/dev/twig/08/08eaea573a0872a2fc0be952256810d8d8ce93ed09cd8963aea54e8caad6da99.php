<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_829b05ad2f709c8f36296bcd8425073a2a5368f62b95b69dd616981503334e21 extends Twig_Template
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
        $__internal_b41ad2cb8e80cef42c7998d2ae26d7ae2372606b8de07ec4910a9bd5c008c475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41ad2cb8e80cef42c7998d2ae26d7ae2372606b8de07ec4910a9bd5c008c475->enter($__internal_b41ad2cb8e80cef42c7998d2ae26d7ae2372606b8de07ec4910a9bd5c008c475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_71d15d62c479d7d7c85612ce273f29b343c9c65973a23ff1988c4186a612295e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d15d62c479d7d7c85612ce273f29b343c9c65973a23ff1988c4186a612295e->enter($__internal_71d15d62c479d7d7c85612ce273f29b343c9c65973a23ff1988c4186a612295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_b41ad2cb8e80cef42c7998d2ae26d7ae2372606b8de07ec4910a9bd5c008c475->leave($__internal_b41ad2cb8e80cef42c7998d2ae26d7ae2372606b8de07ec4910a9bd5c008c475_prof);

        
        $__internal_71d15d62c479d7d7c85612ce273f29b343c9c65973a23ff1988c4186a612295e->leave($__internal_71d15d62c479d7d7c85612ce273f29b343c9c65973a23ff1988c4186a612295e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
