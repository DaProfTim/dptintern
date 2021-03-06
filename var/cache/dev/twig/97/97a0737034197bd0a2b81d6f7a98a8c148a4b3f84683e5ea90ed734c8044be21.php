<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aa766a948b7dedca62b880ee66e55658f1fdbcf3a82102ac8e87704a2fbb4eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0acf51f2395f1b47b991bcc5c7625b5ba04a66fce61397e2947ac3d7948be56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0acf51f2395f1b47b991bcc5c7625b5ba04a66fce61397e2947ac3d7948be56->enter($__internal_d0acf51f2395f1b47b991bcc5c7625b5ba04a66fce61397e2947ac3d7948be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e628424f6c9b22e3f4a2011bd510f3951344eeed75f478059fe163499dbfc144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e628424f6c9b22e3f4a2011bd510f3951344eeed75f478059fe163499dbfc144->enter($__internal_e628424f6c9b22e3f4a2011bd510f3951344eeed75f478059fe163499dbfc144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0acf51f2395f1b47b991bcc5c7625b5ba04a66fce61397e2947ac3d7948be56->leave($__internal_d0acf51f2395f1b47b991bcc5c7625b5ba04a66fce61397e2947ac3d7948be56_prof);

        
        $__internal_e628424f6c9b22e3f4a2011bd510f3951344eeed75f478059fe163499dbfc144->leave($__internal_e628424f6c9b22e3f4a2011bd510f3951344eeed75f478059fe163499dbfc144_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_beff43fec579a7e8f343d514fbc1b2dc607459cd4f2586f5189aecd593d07f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beff43fec579a7e8f343d514fbc1b2dc607459cd4f2586f5189aecd593d07f81->enter($__internal_beff43fec579a7e8f343d514fbc1b2dc607459cd4f2586f5189aecd593d07f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f33992ed02f52414ba86f8fbdbe33d9530b602be47a64ecd1b6b34f84f19009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f33992ed02f52414ba86f8fbdbe33d9530b602be47a64ecd1b6b34f84f19009->enter($__internal_1f33992ed02f52414ba86f8fbdbe33d9530b602be47a64ecd1b6b34f84f19009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1f33992ed02f52414ba86f8fbdbe33d9530b602be47a64ecd1b6b34f84f19009->leave($__internal_1f33992ed02f52414ba86f8fbdbe33d9530b602be47a64ecd1b6b34f84f19009_prof);

        
        $__internal_beff43fec579a7e8f343d514fbc1b2dc607459cd4f2586f5189aecd593d07f81->leave($__internal_beff43fec579a7e8f343d514fbc1b2dc607459cd4f2586f5189aecd593d07f81_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_be7ec1183e19036f21b04ccd8d39cc0b99d8ed413bcada30405a24ac48fc4c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7ec1183e19036f21b04ccd8d39cc0b99d8ed413bcada30405a24ac48fc4c41->enter($__internal_be7ec1183e19036f21b04ccd8d39cc0b99d8ed413bcada30405a24ac48fc4c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ada31fa0ed386afe8f04f78a0428810482ff44ad0fceadf6a643c2fc3a870176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada31fa0ed386afe8f04f78a0428810482ff44ad0fceadf6a643c2fc3a870176->enter($__internal_ada31fa0ed386afe8f04f78a0428810482ff44ad0fceadf6a643c2fc3a870176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ada31fa0ed386afe8f04f78a0428810482ff44ad0fceadf6a643c2fc3a870176->leave($__internal_ada31fa0ed386afe8f04f78a0428810482ff44ad0fceadf6a643c2fc3a870176_prof);

        
        $__internal_be7ec1183e19036f21b04ccd8d39cc0b99d8ed413bcada30405a24ac48fc4c41->leave($__internal_be7ec1183e19036f21b04ccd8d39cc0b99d8ed413bcada30405a24ac48fc4c41_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d7d3259d61acc09778158e60cd0e09fb98f7814fe882d751b1d4f7c1758ee89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7d3259d61acc09778158e60cd0e09fb98f7814fe882d751b1d4f7c1758ee89->enter($__internal_5d7d3259d61acc09778158e60cd0e09fb98f7814fe882d751b1d4f7c1758ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e286290ad17c77f8dc9b067be5b4d48ab3d79faf61ace9af5d98bc6c413b3308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e286290ad17c77f8dc9b067be5b4d48ab3d79faf61ace9af5d98bc6c413b3308->enter($__internal_e286290ad17c77f8dc9b067be5b4d48ab3d79faf61ace9af5d98bc6c413b3308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e286290ad17c77f8dc9b067be5b4d48ab3d79faf61ace9af5d98bc6c413b3308->leave($__internal_e286290ad17c77f8dc9b067be5b4d48ab3d79faf61ace9af5d98bc6c413b3308_prof);

        
        $__internal_5d7d3259d61acc09778158e60cd0e09fb98f7814fe882d751b1d4f7c1758ee89->leave($__internal_5d7d3259d61acc09778158e60cd0e09fb98f7814fe882d751b1d4f7c1758ee89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
