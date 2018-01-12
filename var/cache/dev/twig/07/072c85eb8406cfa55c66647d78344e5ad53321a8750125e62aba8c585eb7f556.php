<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7217b7fd164e0783c3ccae324f1c3c217c6480780292908e664a92e7d4a30fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29a35b0f9d96d0329db2e4d34c9dbddbdc1ccd3a066697c6a4a2050e0330a45d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a35b0f9d96d0329db2e4d34c9dbddbdc1ccd3a066697c6a4a2050e0330a45d->enter($__internal_29a35b0f9d96d0329db2e4d34c9dbddbdc1ccd3a066697c6a4a2050e0330a45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_470779a7e051c9c7d538f0653b68a8e6e93b88a046d3e604e01a1d94cb20896d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470779a7e051c9c7d538f0653b68a8e6e93b88a046d3e604e01a1d94cb20896d->enter($__internal_470779a7e051c9c7d538f0653b68a8e6e93b88a046d3e604e01a1d94cb20896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a35b0f9d96d0329db2e4d34c9dbddbdc1ccd3a066697c6a4a2050e0330a45d->leave($__internal_29a35b0f9d96d0329db2e4d34c9dbddbdc1ccd3a066697c6a4a2050e0330a45d_prof);

        
        $__internal_470779a7e051c9c7d538f0653b68a8e6e93b88a046d3e604e01a1d94cb20896d->leave($__internal_470779a7e051c9c7d538f0653b68a8e6e93b88a046d3e604e01a1d94cb20896d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93183ce364d90bad02ae2912e054ddff90330e6a23e49296c13f1e50e8ae20f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93183ce364d90bad02ae2912e054ddff90330e6a23e49296c13f1e50e8ae20f5->enter($__internal_93183ce364d90bad02ae2912e054ddff90330e6a23e49296c13f1e50e8ae20f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_674117160517c6163cf11cf78347cda713e2ac6ab4c939a9293d1fbc055d95ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674117160517c6163cf11cf78347cda713e2ac6ab4c939a9293d1fbc055d95ec->enter($__internal_674117160517c6163cf11cf78347cda713e2ac6ab4c939a9293d1fbc055d95ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_674117160517c6163cf11cf78347cda713e2ac6ab4c939a9293d1fbc055d95ec->leave($__internal_674117160517c6163cf11cf78347cda713e2ac6ab4c939a9293d1fbc055d95ec_prof);

        
        $__internal_93183ce364d90bad02ae2912e054ddff90330e6a23e49296c13f1e50e8ae20f5->leave($__internal_93183ce364d90bad02ae2912e054ddff90330e6a23e49296c13f1e50e8ae20f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b8b625dff57e2f8f4def15406ac884b4b2dc0f0256081641741bfc5f4012b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8b625dff57e2f8f4def15406ac884b4b2dc0f0256081641741bfc5f4012b4e->enter($__internal_9b8b625dff57e2f8f4def15406ac884b4b2dc0f0256081641741bfc5f4012b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0c6d7e0b42bfdf1b6bd238ae27c4e5a986a6dc9191d4bb57d15db25d0af3518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c6d7e0b42bfdf1b6bd238ae27c4e5a986a6dc9191d4bb57d15db25d0af3518->enter($__internal_e0c6d7e0b42bfdf1b6bd238ae27c4e5a986a6dc9191d4bb57d15db25d0af3518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0c6d7e0b42bfdf1b6bd238ae27c4e5a986a6dc9191d4bb57d15db25d0af3518->leave($__internal_e0c6d7e0b42bfdf1b6bd238ae27c4e5a986a6dc9191d4bb57d15db25d0af3518_prof);

        
        $__internal_9b8b625dff57e2f8f4def15406ac884b4b2dc0f0256081641741bfc5f4012b4e->leave($__internal_9b8b625dff57e2f8f4def15406ac884b4b2dc0f0256081641741bfc5f4012b4e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74f1b5ad124c2671d44be8c2b3562f15118f84e154a2747f165e7c3914b43c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f1b5ad124c2671d44be8c2b3562f15118f84e154a2747f165e7c3914b43c2b->enter($__internal_74f1b5ad124c2671d44be8c2b3562f15118f84e154a2747f165e7c3914b43c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac0d67ee6d0eb642d69a40eb30c0ad384d08216e87ab979fe86f27cee2057e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0d67ee6d0eb642d69a40eb30c0ad384d08216e87ab979fe86f27cee2057e63->enter($__internal_ac0d67ee6d0eb642d69a40eb30c0ad384d08216e87ab979fe86f27cee2057e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ac0d67ee6d0eb642d69a40eb30c0ad384d08216e87ab979fe86f27cee2057e63->leave($__internal_ac0d67ee6d0eb642d69a40eb30c0ad384d08216e87ab979fe86f27cee2057e63_prof);

        
        $__internal_74f1b5ad124c2671d44be8c2b3562f15118f84e154a2747f165e7c3914b43c2b->leave($__internal_74f1b5ad124c2671d44be8c2b3562f15118f84e154a2747f165e7c3914b43c2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
