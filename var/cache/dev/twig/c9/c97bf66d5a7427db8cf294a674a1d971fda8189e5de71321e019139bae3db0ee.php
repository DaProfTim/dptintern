<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1d2411c550f8fb3aa7c982d0fd4b42a98d0dcc86086393605ea4bec30f2a4cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9948cccc3479e9a548060cc5bea5f19a8c95be64531b698f709c875e3509ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9948cccc3479e9a548060cc5bea5f19a8c95be64531b698f709c875e3509ba2->enter($__internal_e9948cccc3479e9a548060cc5bea5f19a8c95be64531b698f709c875e3509ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_adf018f8643840d2cfd6395cfbeab1a671cc9c3297405526037181f73ec5d43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf018f8643840d2cfd6395cfbeab1a671cc9c3297405526037181f73ec5d43e->enter($__internal_adf018f8643840d2cfd6395cfbeab1a671cc9c3297405526037181f73ec5d43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9948cccc3479e9a548060cc5bea5f19a8c95be64531b698f709c875e3509ba2->leave($__internal_e9948cccc3479e9a548060cc5bea5f19a8c95be64531b698f709c875e3509ba2_prof);

        
        $__internal_adf018f8643840d2cfd6395cfbeab1a671cc9c3297405526037181f73ec5d43e->leave($__internal_adf018f8643840d2cfd6395cfbeab1a671cc9c3297405526037181f73ec5d43e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a38e705ec0af6a60311fb129cfc639001b238beffb33ad4605396fc1d1674f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a38e705ec0af6a60311fb129cfc639001b238beffb33ad4605396fc1d1674f9->enter($__internal_7a38e705ec0af6a60311fb129cfc639001b238beffb33ad4605396fc1d1674f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_677407448c40440c628b237f4631569d19127d316a2287d443b0d2ae722f2adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677407448c40440c628b237f4631569d19127d316a2287d443b0d2ae722f2adf->enter($__internal_677407448c40440c628b237f4631569d19127d316a2287d443b0d2ae722f2adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_677407448c40440c628b237f4631569d19127d316a2287d443b0d2ae722f2adf->leave($__internal_677407448c40440c628b237f4631569d19127d316a2287d443b0d2ae722f2adf_prof);

        
        $__internal_7a38e705ec0af6a60311fb129cfc639001b238beffb33ad4605396fc1d1674f9->leave($__internal_7a38e705ec0af6a60311fb129cfc639001b238beffb33ad4605396fc1d1674f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
