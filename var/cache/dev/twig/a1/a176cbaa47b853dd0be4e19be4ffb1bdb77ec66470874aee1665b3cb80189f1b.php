<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_eab578bad46e979bc0630422ec4661dc4da0b0249a15434bc3e7ebf79ab47104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_c2e18e103292d046e8ea38b24e05bc7223a3109a6eb94045d28b353161c8e416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e18e103292d046e8ea38b24e05bc7223a3109a6eb94045d28b353161c8e416->enter($__internal_c2e18e103292d046e8ea38b24e05bc7223a3109a6eb94045d28b353161c8e416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c5e9a6ec0e157676e352403a734f59f69d7fc02f1862d66a0f3c836de311b766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e9a6ec0e157676e352403a734f59f69d7fc02f1862d66a0f3c836de311b766->enter($__internal_c5e9a6ec0e157676e352403a734f59f69d7fc02f1862d66a0f3c836de311b766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2e18e103292d046e8ea38b24e05bc7223a3109a6eb94045d28b353161c8e416->leave($__internal_c2e18e103292d046e8ea38b24e05bc7223a3109a6eb94045d28b353161c8e416_prof);

        
        $__internal_c5e9a6ec0e157676e352403a734f59f69d7fc02f1862d66a0f3c836de311b766->leave($__internal_c5e9a6ec0e157676e352403a734f59f69d7fc02f1862d66a0f3c836de311b766_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8c2463a65a8e7cc2c209f0bc17a746b1164deb7d3f9625261a9f6bd694acfbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2463a65a8e7cc2c209f0bc17a746b1164deb7d3f9625261a9f6bd694acfbaa->enter($__internal_8c2463a65a8e7cc2c209f0bc17a746b1164deb7d3f9625261a9f6bd694acfbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cd90e6adef8f1948ceff44a10c89e8cc9a7f642d7e9d5a4d9aa6d72fc8aafc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd90e6adef8f1948ceff44a10c89e8cc9a7f642d7e9d5a4d9aa6d72fc8aafc1d->enter($__internal_cd90e6adef8f1948ceff44a10c89e8cc9a7f642d7e9d5a4d9aa6d72fc8aafc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cd90e6adef8f1948ceff44a10c89e8cc9a7f642d7e9d5a4d9aa6d72fc8aafc1d->leave($__internal_cd90e6adef8f1948ceff44a10c89e8cc9a7f642d7e9d5a4d9aa6d72fc8aafc1d_prof);

        
        $__internal_8c2463a65a8e7cc2c209f0bc17a746b1164deb7d3f9625261a9f6bd694acfbaa->leave($__internal_8c2463a65a8e7cc2c209f0bc17a746b1164deb7d3f9625261a9f6bd694acfbaa_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db9b71a12bf9b0039641c6a25fbb614e59ee623a0d8e7582d0669638a24115d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9b71a12bf9b0039641c6a25fbb614e59ee623a0d8e7582d0669638a24115d1->enter($__internal_db9b71a12bf9b0039641c6a25fbb614e59ee623a0d8e7582d0669638a24115d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d46db4be3a7455116f791d8b1cf6167361039d960e8b2c2fc3dedd9de3472c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46db4be3a7455116f791d8b1cf6167361039d960e8b2c2fc3dedd9de3472c10->enter($__internal_d46db4be3a7455116f791d8b1cf6167361039d960e8b2c2fc3dedd9de3472c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d46db4be3a7455116f791d8b1cf6167361039d960e8b2c2fc3dedd9de3472c10->leave($__internal_d46db4be3a7455116f791d8b1cf6167361039d960e8b2c2fc3dedd9de3472c10_prof);

        
        $__internal_db9b71a12bf9b0039641c6a25fbb614e59ee623a0d8e7582d0669638a24115d1->leave($__internal_db9b71a12bf9b0039641c6a25fbb614e59ee623a0d8e7582d0669638a24115d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
