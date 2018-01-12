<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0f133201c9a3c2679fb0e66c2d0b4b76aed95b1b5c05ba362aa6eb22657af024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_9185a71683f2cb23b52d9cda6a9f22bda8b357b49a9a942ff0a13eaf2aad9616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9185a71683f2cb23b52d9cda6a9f22bda8b357b49a9a942ff0a13eaf2aad9616->enter($__internal_9185a71683f2cb23b52d9cda6a9f22bda8b357b49a9a942ff0a13eaf2aad9616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_930baac54af04c6b3bb1a82122355e25c6f31d98c352fde2a7870299767e1cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930baac54af04c6b3bb1a82122355e25c6f31d98c352fde2a7870299767e1cdb->enter($__internal_930baac54af04c6b3bb1a82122355e25c6f31d98c352fde2a7870299767e1cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9185a71683f2cb23b52d9cda6a9f22bda8b357b49a9a942ff0a13eaf2aad9616->leave($__internal_9185a71683f2cb23b52d9cda6a9f22bda8b357b49a9a942ff0a13eaf2aad9616_prof);

        
        $__internal_930baac54af04c6b3bb1a82122355e25c6f31d98c352fde2a7870299767e1cdb->leave($__internal_930baac54af04c6b3bb1a82122355e25c6f31d98c352fde2a7870299767e1cdb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4ed07182a6e1b8c233b271bda64b3d3dc193d8ad92dc94579cfa96ac4a130aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ed07182a6e1b8c233b271bda64b3d3dc193d8ad92dc94579cfa96ac4a130aa->enter($__internal_d4ed07182a6e1b8c233b271bda64b3d3dc193d8ad92dc94579cfa96ac4a130aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_710d6153acccc9f9951736fda1c5eb2ef335cc520cc87f9a1d54cc753b86e8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710d6153acccc9f9951736fda1c5eb2ef335cc520cc87f9a1d54cc753b86e8d8->enter($__internal_710d6153acccc9f9951736fda1c5eb2ef335cc520cc87f9a1d54cc753b86e8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_710d6153acccc9f9951736fda1c5eb2ef335cc520cc87f9a1d54cc753b86e8d8->leave($__internal_710d6153acccc9f9951736fda1c5eb2ef335cc520cc87f9a1d54cc753b86e8d8_prof);

        
        $__internal_d4ed07182a6e1b8c233b271bda64b3d3dc193d8ad92dc94579cfa96ac4a130aa->leave($__internal_d4ed07182a6e1b8c233b271bda64b3d3dc193d8ad92dc94579cfa96ac4a130aa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_64570e48dbd91ee1e04323c765a17062e0a2a3a9601204ea7db6f4739300e52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64570e48dbd91ee1e04323c765a17062e0a2a3a9601204ea7db6f4739300e52f->enter($__internal_64570e48dbd91ee1e04323c765a17062e0a2a3a9601204ea7db6f4739300e52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ce03bd1c02a44a54e634f9318d1c38820ba304f3d8d042dd90dbc253cfc770e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce03bd1c02a44a54e634f9318d1c38820ba304f3d8d042dd90dbc253cfc770e->enter($__internal_2ce03bd1c02a44a54e634f9318d1c38820ba304f3d8d042dd90dbc253cfc770e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ce03bd1c02a44a54e634f9318d1c38820ba304f3d8d042dd90dbc253cfc770e->leave($__internal_2ce03bd1c02a44a54e634f9318d1c38820ba304f3d8d042dd90dbc253cfc770e_prof);

        
        $__internal_64570e48dbd91ee1e04323c765a17062e0a2a3a9601204ea7db6f4739300e52f->leave($__internal_64570e48dbd91ee1e04323c765a17062e0a2a3a9601204ea7db6f4739300e52f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
