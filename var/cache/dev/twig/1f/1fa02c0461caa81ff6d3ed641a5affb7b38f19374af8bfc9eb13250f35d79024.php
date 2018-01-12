<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fe592c281ad24800ad7bde224fa38209ba83c1ea4dc17153409fdb8f87b2564e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_eed87851f3d06f01ea2dc98ac12958218afa59635d93428ccc559ea04bcd8c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed87851f3d06f01ea2dc98ac12958218afa59635d93428ccc559ea04bcd8c86->enter($__internal_eed87851f3d06f01ea2dc98ac12958218afa59635d93428ccc559ea04bcd8c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_73e905ac70e3a2bf54ecab6c689e65f850e383cdbb1204c41d18d416b7c9c5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e905ac70e3a2bf54ecab6c689e65f850e383cdbb1204c41d18d416b7c9c5ff->enter($__internal_73e905ac70e3a2bf54ecab6c689e65f850e383cdbb1204c41d18d416b7c9c5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed87851f3d06f01ea2dc98ac12958218afa59635d93428ccc559ea04bcd8c86->leave($__internal_eed87851f3d06f01ea2dc98ac12958218afa59635d93428ccc559ea04bcd8c86_prof);

        
        $__internal_73e905ac70e3a2bf54ecab6c689e65f850e383cdbb1204c41d18d416b7c9c5ff->leave($__internal_73e905ac70e3a2bf54ecab6c689e65f850e383cdbb1204c41d18d416b7c9c5ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_222bb9976e90391e848615646ffbd849ca9f6e6ad35b4549c15ed85b8edf9418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222bb9976e90391e848615646ffbd849ca9f6e6ad35b4549c15ed85b8edf9418->enter($__internal_222bb9976e90391e848615646ffbd849ca9f6e6ad35b4549c15ed85b8edf9418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b16af8e013b9610b77947c0873148a4c67dd8987d44471fa60f30bdb3564bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b16af8e013b9610b77947c0873148a4c67dd8987d44471fa60f30bdb3564bd9->enter($__internal_0b16af8e013b9610b77947c0873148a4c67dd8987d44471fa60f30bdb3564bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0b16af8e013b9610b77947c0873148a4c67dd8987d44471fa60f30bdb3564bd9->leave($__internal_0b16af8e013b9610b77947c0873148a4c67dd8987d44471fa60f30bdb3564bd9_prof);

        
        $__internal_222bb9976e90391e848615646ffbd849ca9f6e6ad35b4549c15ed85b8edf9418->leave($__internal_222bb9976e90391e848615646ffbd849ca9f6e6ad35b4549c15ed85b8edf9418_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d206525222dd5516c1bee664f9594f42f8d8548a561518f13ade075419fe248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d206525222dd5516c1bee664f9594f42f8d8548a561518f13ade075419fe248->enter($__internal_7d206525222dd5516c1bee664f9594f42f8d8548a561518f13ade075419fe248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_038328a1246bb2d6745a3db6b3f11b415f97e8dc9c806cb480dee21fd620f6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038328a1246bb2d6745a3db6b3f11b415f97e8dc9c806cb480dee21fd620f6b3->enter($__internal_038328a1246bb2d6745a3db6b3f11b415f97e8dc9c806cb480dee21fd620f6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_038328a1246bb2d6745a3db6b3f11b415f97e8dc9c806cb480dee21fd620f6b3->leave($__internal_038328a1246bb2d6745a3db6b3f11b415f97e8dc9c806cb480dee21fd620f6b3_prof);

        
        $__internal_7d206525222dd5516c1bee664f9594f42f8d8548a561518f13ade075419fe248->leave($__internal_7d206525222dd5516c1bee664f9594f42f8d8548a561518f13ade075419fe248_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_80b6fc4219294fc0f7666724aeba8991feb41e931f32b2999447146ecadc3536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b6fc4219294fc0f7666724aeba8991feb41e931f32b2999447146ecadc3536->enter($__internal_80b6fc4219294fc0f7666724aeba8991feb41e931f32b2999447146ecadc3536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba22f2eaec53184ae9629245f82d69dbe6d089eac5cdca89af1fa734b4ce2bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba22f2eaec53184ae9629245f82d69dbe6d089eac5cdca89af1fa734b4ce2bd4->enter($__internal_ba22f2eaec53184ae9629245f82d69dbe6d089eac5cdca89af1fa734b4ce2bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ba22f2eaec53184ae9629245f82d69dbe6d089eac5cdca89af1fa734b4ce2bd4->leave($__internal_ba22f2eaec53184ae9629245f82d69dbe6d089eac5cdca89af1fa734b4ce2bd4_prof);

        
        $__internal_80b6fc4219294fc0f7666724aeba8991feb41e931f32b2999447146ecadc3536->leave($__internal_80b6fc4219294fc0f7666724aeba8991feb41e931f32b2999447146ecadc3536_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
