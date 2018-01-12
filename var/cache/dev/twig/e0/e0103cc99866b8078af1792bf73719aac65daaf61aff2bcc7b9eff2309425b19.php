<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_addc57f996f40dc02aed85c6d857409f39d47d0612bf71ac00cf057a9818de11 extends Twig_Template
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
        $__internal_cf64f746aa3255c2db82c958612d41eaa360815ebf5dd172158325510518ce20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf64f746aa3255c2db82c958612d41eaa360815ebf5dd172158325510518ce20->enter($__internal_cf64f746aa3255c2db82c958612d41eaa360815ebf5dd172158325510518ce20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0a1cdbcd73aa3709676aed47afa5e71ab11725f6c53e17ba9a8f7dd9fbfc4848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1cdbcd73aa3709676aed47afa5e71ab11725f6c53e17ba9a8f7dd9fbfc4848->enter($__internal_0a1cdbcd73aa3709676aed47afa5e71ab11725f6c53e17ba9a8f7dd9fbfc4848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cf64f746aa3255c2db82c958612d41eaa360815ebf5dd172158325510518ce20->leave($__internal_cf64f746aa3255c2db82c958612d41eaa360815ebf5dd172158325510518ce20_prof);

        
        $__internal_0a1cdbcd73aa3709676aed47afa5e71ab11725f6c53e17ba9a8f7dd9fbfc4848->leave($__internal_0a1cdbcd73aa3709676aed47afa5e71ab11725f6c53e17ba9a8f7dd9fbfc4848_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
