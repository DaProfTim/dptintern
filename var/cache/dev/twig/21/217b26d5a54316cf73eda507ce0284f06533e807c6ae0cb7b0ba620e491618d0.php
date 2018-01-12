<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1515fe7bfe7d8b68b519892feaf525e35e90e9a357356208ad8d7839ef29367c extends Twig_Template
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
        $__internal_f21a279845ff7f3096e8734b57214156366a5df50b4a247a547051549cf7b358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21a279845ff7f3096e8734b57214156366a5df50b4a247a547051549cf7b358->enter($__internal_f21a279845ff7f3096e8734b57214156366a5df50b4a247a547051549cf7b358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ddeecbbcb9b505535d3632e93a7c49591ed00423dea42bfc06d126e0fa0ff9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeecbbcb9b505535d3632e93a7c49591ed00423dea42bfc06d126e0fa0ff9bc->enter($__internal_ddeecbbcb9b505535d3632e93a7c49591ed00423dea42bfc06d126e0fa0ff9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_f21a279845ff7f3096e8734b57214156366a5df50b4a247a547051549cf7b358->leave($__internal_f21a279845ff7f3096e8734b57214156366a5df50b4a247a547051549cf7b358_prof);

        
        $__internal_ddeecbbcb9b505535d3632e93a7c49591ed00423dea42bfc06d126e0fa0ff9bc->leave($__internal_ddeecbbcb9b505535d3632e93a7c49591ed00423dea42bfc06d126e0fa0ff9bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
