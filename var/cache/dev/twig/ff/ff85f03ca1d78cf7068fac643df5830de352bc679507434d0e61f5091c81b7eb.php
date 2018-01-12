<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0cefd89b763155fcf8da422f80930b0e7dc87c989b6e9065c5c6242c94a9e532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_26160a18e234646f4d574a7a5fe712ad99a326d9d2311fc0f8591d03ec29c859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26160a18e234646f4d574a7a5fe712ad99a326d9d2311fc0f8591d03ec29c859->enter($__internal_26160a18e234646f4d574a7a5fe712ad99a326d9d2311fc0f8591d03ec29c859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_573b077620d3a805225d12e3eb53c584bc2f37d11b663f2e6ced66cc71155d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573b077620d3a805225d12e3eb53c584bc2f37d11b663f2e6ced66cc71155d3a->enter($__internal_573b077620d3a805225d12e3eb53c584bc2f37d11b663f2e6ced66cc71155d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26160a18e234646f4d574a7a5fe712ad99a326d9d2311fc0f8591d03ec29c859->leave($__internal_26160a18e234646f4d574a7a5fe712ad99a326d9d2311fc0f8591d03ec29c859_prof);

        
        $__internal_573b077620d3a805225d12e3eb53c584bc2f37d11b663f2e6ced66cc71155d3a->leave($__internal_573b077620d3a805225d12e3eb53c584bc2f37d11b663f2e6ced66cc71155d3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4633bc393e355ec3178bdea4469f3f57b6529fd7c94d824a260207d3a95ce23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4633bc393e355ec3178bdea4469f3f57b6529fd7c94d824a260207d3a95ce23->enter($__internal_a4633bc393e355ec3178bdea4469f3f57b6529fd7c94d824a260207d3a95ce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54f1a5a8b5c3b4e53878534c3c33ff8fc2ac97ee8bd5422bb732c9964477dd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f1a5a8b5c3b4e53878534c3c33ff8fc2ac97ee8bd5422bb732c9964477dd17->enter($__internal_54f1a5a8b5c3b4e53878534c3c33ff8fc2ac97ee8bd5422bb732c9964477dd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_54f1a5a8b5c3b4e53878534c3c33ff8fc2ac97ee8bd5422bb732c9964477dd17->leave($__internal_54f1a5a8b5c3b4e53878534c3c33ff8fc2ac97ee8bd5422bb732c9964477dd17_prof);

        
        $__internal_a4633bc393e355ec3178bdea4469f3f57b6529fd7c94d824a260207d3a95ce23->leave($__internal_a4633bc393e355ec3178bdea4469f3f57b6529fd7c94d824a260207d3a95ce23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de21e8d04ceedf3c9c676ba897b355be8f3dbc795ac699bfe4424db368793766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de21e8d04ceedf3c9c676ba897b355be8f3dbc795ac699bfe4424db368793766->enter($__internal_de21e8d04ceedf3c9c676ba897b355be8f3dbc795ac699bfe4424db368793766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81875708afd03734bd217aaf85d57c38a4248807e7bb422df09d1ed0f6c02513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81875708afd03734bd217aaf85d57c38a4248807e7bb422df09d1ed0f6c02513->enter($__internal_81875708afd03734bd217aaf85d57c38a4248807e7bb422df09d1ed0f6c02513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_81875708afd03734bd217aaf85d57c38a4248807e7bb422df09d1ed0f6c02513->leave($__internal_81875708afd03734bd217aaf85d57c38a4248807e7bb422df09d1ed0f6c02513_prof);

        
        $__internal_de21e8d04ceedf3c9c676ba897b355be8f3dbc795ac699bfe4424db368793766->leave($__internal_de21e8d04ceedf3c9c676ba897b355be8f3dbc795ac699bfe4424db368793766_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
