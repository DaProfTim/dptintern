<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ea9fec1ec912e481eb766f8935c38ad3c0eee190025e1d680f7b05242baf4dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_fa9742eb7e56a5626b356e4f55de4ea0671160821e05c1b34a192de92211e763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9742eb7e56a5626b356e4f55de4ea0671160821e05c1b34a192de92211e763->enter($__internal_fa9742eb7e56a5626b356e4f55de4ea0671160821e05c1b34a192de92211e763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_291c137a77f7b3770e20d6377bb6b581ac19340e48a176e78e67590f20eb2b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291c137a77f7b3770e20d6377bb6b581ac19340e48a176e78e67590f20eb2b97->enter($__internal_291c137a77f7b3770e20d6377bb6b581ac19340e48a176e78e67590f20eb2b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9742eb7e56a5626b356e4f55de4ea0671160821e05c1b34a192de92211e763->leave($__internal_fa9742eb7e56a5626b356e4f55de4ea0671160821e05c1b34a192de92211e763_prof);

        
        $__internal_291c137a77f7b3770e20d6377bb6b581ac19340e48a176e78e67590f20eb2b97->leave($__internal_291c137a77f7b3770e20d6377bb6b581ac19340e48a176e78e67590f20eb2b97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be02f75acd127b874f384d30b06dc944c6c0d0e65695a5ba493334dc37847c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be02f75acd127b874f384d30b06dc944c6c0d0e65695a5ba493334dc37847c88->enter($__internal_be02f75acd127b874f384d30b06dc944c6c0d0e65695a5ba493334dc37847c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69cca11a3b9bb32fd9c0d0a3a4d2d8fd822d202465412f7ad606ef839f694327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cca11a3b9bb32fd9c0d0a3a4d2d8fd822d202465412f7ad606ef839f694327->enter($__internal_69cca11a3b9bb32fd9c0d0a3a4d2d8fd822d202465412f7ad606ef839f694327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_69cca11a3b9bb32fd9c0d0a3a4d2d8fd822d202465412f7ad606ef839f694327->leave($__internal_69cca11a3b9bb32fd9c0d0a3a4d2d8fd822d202465412f7ad606ef839f694327_prof);

        
        $__internal_be02f75acd127b874f384d30b06dc944c6c0d0e65695a5ba493334dc37847c88->leave($__internal_be02f75acd127b874f384d30b06dc944c6c0d0e65695a5ba493334dc37847c88_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd0f8629f41ef71a0b0724fea8ef679d4fa67c5898613cfa8a30cc2d9a27d63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0f8629f41ef71a0b0724fea8ef679d4fa67c5898613cfa8a30cc2d9a27d63e->enter($__internal_dd0f8629f41ef71a0b0724fea8ef679d4fa67c5898613cfa8a30cc2d9a27d63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc4067988ecd0155b461ed304145d3f250d2047f4cb0e21d1bee41ea25583723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4067988ecd0155b461ed304145d3f250d2047f4cb0e21d1bee41ea25583723->enter($__internal_dc4067988ecd0155b461ed304145d3f250d2047f4cb0e21d1bee41ea25583723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dc4067988ecd0155b461ed304145d3f250d2047f4cb0e21d1bee41ea25583723->leave($__internal_dc4067988ecd0155b461ed304145d3f250d2047f4cb0e21d1bee41ea25583723_prof);

        
        $__internal_dd0f8629f41ef71a0b0724fea8ef679d4fa67c5898613cfa8a30cc2d9a27d63e->leave($__internal_dd0f8629f41ef71a0b0724fea8ef679d4fa67c5898613cfa8a30cc2d9a27d63e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
