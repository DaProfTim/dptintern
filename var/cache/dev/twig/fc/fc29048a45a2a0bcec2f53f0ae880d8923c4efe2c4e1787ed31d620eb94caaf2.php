<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_0a9342b198beea7c9cb03f54dba00d46afb6f310a775d3481ab4d0591b49808d extends Twig_Template
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
        $__internal_4e281f1b97733b09f3ab9d36be03e92a0ddb9f7bb0c8d90aeb2a01b45f4fe4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e281f1b97733b09f3ab9d36be03e92a0ddb9f7bb0c8d90aeb2a01b45f4fe4e9->enter($__internal_4e281f1b97733b09f3ab9d36be03e92a0ddb9f7bb0c8d90aeb2a01b45f4fe4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_e917e2a057c0d52917833a0e222b3de96c98ec62240ec59b2aef3433b8572edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e917e2a057c0d52917833a0e222b3de96c98ec62240ec59b2aef3433b8572edd->enter($__internal_e917e2a057c0d52917833a0e222b3de96c98ec62240ec59b2aef3433b8572edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_4e281f1b97733b09f3ab9d36be03e92a0ddb9f7bb0c8d90aeb2a01b45f4fe4e9->leave($__internal_4e281f1b97733b09f3ab9d36be03e92a0ddb9f7bb0c8d90aeb2a01b45f4fe4e9_prof);

        
        $__internal_e917e2a057c0d52917833a0e222b3de96c98ec62240ec59b2aef3433b8572edd->leave($__internal_e917e2a057c0d52917833a0e222b3de96c98ec62240ec59b2aef3433b8572edd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
