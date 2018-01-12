<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_d9c984877fe605d66404f14b85ba27c67c40fe1b379136ea0d44748f22231f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_5dab75e64592c83a1ca03d69d777ebecfeeba4d9a9c1c4efdacac59aa96d677a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dab75e64592c83a1ca03d69d777ebecfeeba4d9a9c1c4efdacac59aa96d677a->enter($__internal_5dab75e64592c83a1ca03d69d777ebecfeeba4d9a9c1c4efdacac59aa96d677a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_2c8eb8a56a977d0f7d7a56795994ac3c5d260a61be8b14864852de199560d5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8eb8a56a977d0f7d7a56795994ac3c5d260a61be8b14864852de199560d5cc->enter($__internal_2c8eb8a56a977d0f7d7a56795994ac3c5d260a61be8b14864852de199560d5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dab75e64592c83a1ca03d69d777ebecfeeba4d9a9c1c4efdacac59aa96d677a->leave($__internal_5dab75e64592c83a1ca03d69d777ebecfeeba4d9a9c1c4efdacac59aa96d677a_prof);

        
        $__internal_2c8eb8a56a977d0f7d7a56795994ac3c5d260a61be8b14864852de199560d5cc->leave($__internal_2c8eb8a56a977d0f7d7a56795994ac3c5d260a61be8b14864852de199560d5cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c5654517a8a03bf1816f4c37e81dbd62595dd029462e66a4968b0830ac94880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5654517a8a03bf1816f4c37e81dbd62595dd029462e66a4968b0830ac94880->enter($__internal_2c5654517a8a03bf1816f4c37e81dbd62595dd029462e66a4968b0830ac94880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4b4917537699c3f06a74320fdd6b05413ae92d2ca65ff5a79c1022dae58a321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4917537699c3f06a74320fdd6b05413ae92d2ca65ff5a79c1022dae58a321->enter($__internal_a4b4917537699c3f06a74320fdd6b05413ae92d2ca65ff5a79c1022dae58a321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a4b4917537699c3f06a74320fdd6b05413ae92d2ca65ff5a79c1022dae58a321->leave($__internal_a4b4917537699c3f06a74320fdd6b05413ae92d2ca65ff5a79c1022dae58a321_prof);

        
        $__internal_2c5654517a8a03bf1816f4c37e81dbd62595dd029462e66a4968b0830ac94880->leave($__internal_2c5654517a8a03bf1816f4c37e81dbd62595dd029462e66a4968b0830ac94880_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
