<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_5a4e8363e3c45acef0368a58014416567a3742d7c62bcbf5102e4c32d8ac9fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6586c4fa396714fdf493c71165f0f5ac6a5f54bedc14bed0fba017c90940b77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6586c4fa396714fdf493c71165f0f5ac6a5f54bedc14bed0fba017c90940b77e->enter($__internal_6586c4fa396714fdf493c71165f0f5ac6a5f54bedc14bed0fba017c90940b77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_27fef789acc4f1b2c52cd8fc81671fd0f14bfe7a93622c5bc9f0f44edc0aa8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fef789acc4f1b2c52cd8fc81671fd0f14bfe7a93622c5bc9f0f44edc0aa8a1->enter($__internal_27fef789acc4f1b2c52cd8fc81671fd0f14bfe7a93622c5bc9f0f44edc0aa8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6586c4fa396714fdf493c71165f0f5ac6a5f54bedc14bed0fba017c90940b77e->leave($__internal_6586c4fa396714fdf493c71165f0f5ac6a5f54bedc14bed0fba017c90940b77e_prof);

        
        $__internal_27fef789acc4f1b2c52cd8fc81671fd0f14bfe7a93622c5bc9f0f44edc0aa8a1->leave($__internal_27fef789acc4f1b2c52cd8fc81671fd0f14bfe7a93622c5bc9f0f44edc0aa8a1_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_73216f1b09fd5ed266ada22f24a756ce41e7fe1e5794363e5f6d1fb2cc219131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73216f1b09fd5ed266ada22f24a756ce41e7fe1e5794363e5f6d1fb2cc219131->enter($__internal_73216f1b09fd5ed266ada22f24a756ce41e7fe1e5794363e5f6d1fb2cc219131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ad8bdbe63090285d571faca2d42ea1ae84037c22aeac343f3b0788b3ed9b6661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8bdbe63090285d571faca2d42ea1ae84037c22aeac343f3b0788b3ed9b6661->enter($__internal_ad8bdbe63090285d571faca2d42ea1ae84037c22aeac343f3b0788b3ed9b6661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ad8bdbe63090285d571faca2d42ea1ae84037c22aeac343f3b0788b3ed9b6661->leave($__internal_ad8bdbe63090285d571faca2d42ea1ae84037c22aeac343f3b0788b3ed9b6661_prof);

        
        $__internal_73216f1b09fd5ed266ada22f24a756ce41e7fe1e5794363e5f6d1fb2cc219131->leave($__internal_73216f1b09fd5ed266ada22f24a756ce41e7fe1e5794363e5f6d1fb2cc219131_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37dbed13116ba62d951bf4a2792a2ddab7219db5a9134522b321d61f72f97b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37dbed13116ba62d951bf4a2792a2ddab7219db5a9134522b321d61f72f97b16->enter($__internal_37dbed13116ba62d951bf4a2792a2ddab7219db5a9134522b321d61f72f97b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1312cc5b9291ee067d1d85104aa3a08118b0f5e398a47832b9d871d9f0e314ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1312cc5b9291ee067d1d85104aa3a08118b0f5e398a47832b9d871d9f0e314ba->enter($__internal_1312cc5b9291ee067d1d85104aa3a08118b0f5e398a47832b9d871d9f0e314ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1312cc5b9291ee067d1d85104aa3a08118b0f5e398a47832b9d871d9f0e314ba->leave($__internal_1312cc5b9291ee067d1d85104aa3a08118b0f5e398a47832b9d871d9f0e314ba_prof);

        
        $__internal_37dbed13116ba62d951bf4a2792a2ddab7219db5a9134522b321d61f72f97b16->leave($__internal_37dbed13116ba62d951bf4a2792a2ddab7219db5a9134522b321d61f72f97b16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
