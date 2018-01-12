<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0b2f3cac43d6d3eb2725e5dbd606239bbc31a58ba14c68a81d787292330ea558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_681d29d4eebf16dfee0897a9cd6adc216f4359faf3b6531bb1fac2b43f439805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681d29d4eebf16dfee0897a9cd6adc216f4359faf3b6531bb1fac2b43f439805->enter($__internal_681d29d4eebf16dfee0897a9cd6adc216f4359faf3b6531bb1fac2b43f439805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_eec1e87860d209afb55635464048907235024a887e41a381c32c864139a81295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec1e87860d209afb55635464048907235024a887e41a381c32c864139a81295->enter($__internal_eec1e87860d209afb55635464048907235024a887e41a381c32c864139a81295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_681d29d4eebf16dfee0897a9cd6adc216f4359faf3b6531bb1fac2b43f439805->leave($__internal_681d29d4eebf16dfee0897a9cd6adc216f4359faf3b6531bb1fac2b43f439805_prof);

        
        $__internal_eec1e87860d209afb55635464048907235024a887e41a381c32c864139a81295->leave($__internal_eec1e87860d209afb55635464048907235024a887e41a381c32c864139a81295_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63273e357017269f6dc49040f1a46803fee291e143f747ea7223e7328a242e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63273e357017269f6dc49040f1a46803fee291e143f747ea7223e7328a242e6d->enter($__internal_63273e357017269f6dc49040f1a46803fee291e143f747ea7223e7328a242e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_826e5f8b5f14d73b9639cfe98b0b71c208f09444d7d29acd3385cca49fd1bd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826e5f8b5f14d73b9639cfe98b0b71c208f09444d7d29acd3385cca49fd1bd8d->enter($__internal_826e5f8b5f14d73b9639cfe98b0b71c208f09444d7d29acd3385cca49fd1bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_826e5f8b5f14d73b9639cfe98b0b71c208f09444d7d29acd3385cca49fd1bd8d->leave($__internal_826e5f8b5f14d73b9639cfe98b0b71c208f09444d7d29acd3385cca49fd1bd8d_prof);

        
        $__internal_63273e357017269f6dc49040f1a46803fee291e143f747ea7223e7328a242e6d->leave($__internal_63273e357017269f6dc49040f1a46803fee291e143f747ea7223e7328a242e6d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ca5111cf30859b0fa3b7dff7483d5d39ef5975a271459781a97af0dca25adf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca5111cf30859b0fa3b7dff7483d5d39ef5975a271459781a97af0dca25adf0->enter($__internal_5ca5111cf30859b0fa3b7dff7483d5d39ef5975a271459781a97af0dca25adf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8821eac4263a0be81d6feac4a19afbacddf397695fea5a07584359fa6b9aaee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8821eac4263a0be81d6feac4a19afbacddf397695fea5a07584359fa6b9aaee6->enter($__internal_8821eac4263a0be81d6feac4a19afbacddf397695fea5a07584359fa6b9aaee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_8821eac4263a0be81d6feac4a19afbacddf397695fea5a07584359fa6b9aaee6->leave($__internal_8821eac4263a0be81d6feac4a19afbacddf397695fea5a07584359fa6b9aaee6_prof);

        
        $__internal_5ca5111cf30859b0fa3b7dff7483d5d39ef5975a271459781a97af0dca25adf0->leave($__internal_5ca5111cf30859b0fa3b7dff7483d5d39ef5975a271459781a97af0dca25adf0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
