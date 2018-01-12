<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a589a3c893053e4e0dbbda4e5d8a728aac0c816b1d3a2b20ef3ad952204583f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_bed71e4b97622a7ae7d2d0879de2395e0ba875120703a2fb8bc94ac092233e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed71e4b97622a7ae7d2d0879de2395e0ba875120703a2fb8bc94ac092233e7d->enter($__internal_bed71e4b97622a7ae7d2d0879de2395e0ba875120703a2fb8bc94ac092233e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_26e19d4d4b5e13eaa9848d501ef5c154769d38b15cc7653cca1be43b75dbfb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e19d4d4b5e13eaa9848d501ef5c154769d38b15cc7653cca1be43b75dbfb97->enter($__internal_26e19d4d4b5e13eaa9848d501ef5c154769d38b15cc7653cca1be43b75dbfb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bed71e4b97622a7ae7d2d0879de2395e0ba875120703a2fb8bc94ac092233e7d->leave($__internal_bed71e4b97622a7ae7d2d0879de2395e0ba875120703a2fb8bc94ac092233e7d_prof);

        
        $__internal_26e19d4d4b5e13eaa9848d501ef5c154769d38b15cc7653cca1be43b75dbfb97->leave($__internal_26e19d4d4b5e13eaa9848d501ef5c154769d38b15cc7653cca1be43b75dbfb97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08646ae6976932004e721f99fcd179961c8d23edc9e78812dc122daece06143c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08646ae6976932004e721f99fcd179961c8d23edc9e78812dc122daece06143c->enter($__internal_08646ae6976932004e721f99fcd179961c8d23edc9e78812dc122daece06143c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58a8d8cb84a2e7e2771812633219895d9885698c0a07d04ff4c13d4298f33c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a8d8cb84a2e7e2771812633219895d9885698c0a07d04ff4c13d4298f33c32->enter($__internal_58a8d8cb84a2e7e2771812633219895d9885698c0a07d04ff4c13d4298f33c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58a8d8cb84a2e7e2771812633219895d9885698c0a07d04ff4c13d4298f33c32->leave($__internal_58a8d8cb84a2e7e2771812633219895d9885698c0a07d04ff4c13d4298f33c32_prof);

        
        $__internal_08646ae6976932004e721f99fcd179961c8d23edc9e78812dc122daece06143c->leave($__internal_08646ae6976932004e721f99fcd179961c8d23edc9e78812dc122daece06143c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a689d6c5ca5e66e11310cc6971b82a31e94e69f0091559bdef20cb624bc3817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a689d6c5ca5e66e11310cc6971b82a31e94e69f0091559bdef20cb624bc3817->enter($__internal_4a689d6c5ca5e66e11310cc6971b82a31e94e69f0091559bdef20cb624bc3817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6050f9b72b61d9cb2d584112d546358afa48d0be1cb73a7c33f8e0c1f085170f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6050f9b72b61d9cb2d584112d546358afa48d0be1cb73a7c33f8e0c1f085170f->enter($__internal_6050f9b72b61d9cb2d584112d546358afa48d0be1cb73a7c33f8e0c1f085170f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6050f9b72b61d9cb2d584112d546358afa48d0be1cb73a7c33f8e0c1f085170f->leave($__internal_6050f9b72b61d9cb2d584112d546358afa48d0be1cb73a7c33f8e0c1f085170f_prof);

        
        $__internal_4a689d6c5ca5e66e11310cc6971b82a31e94e69f0091559bdef20cb624bc3817->leave($__internal_4a689d6c5ca5e66e11310cc6971b82a31e94e69f0091559bdef20cb624bc3817_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb4905b54bad595a3e580d3f244303dcd92878118d4fcd98482155c5a8ec40e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4905b54bad595a3e580d3f244303dcd92878118d4fcd98482155c5a8ec40e8->enter($__internal_fb4905b54bad595a3e580d3f244303dcd92878118d4fcd98482155c5a8ec40e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b3f8d52f95059ecec1efc40c188521d29a607437d8552dab3ba23d40ce6ca9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3f8d52f95059ecec1efc40c188521d29a607437d8552dab3ba23d40ce6ca9b->enter($__internal_9b3f8d52f95059ecec1efc40c188521d29a607437d8552dab3ba23d40ce6ca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9b3f8d52f95059ecec1efc40c188521d29a607437d8552dab3ba23d40ce6ca9b->leave($__internal_9b3f8d52f95059ecec1efc40c188521d29a607437d8552dab3ba23d40ce6ca9b_prof);

        
        $__internal_fb4905b54bad595a3e580d3f244303dcd92878118d4fcd98482155c5a8ec40e8->leave($__internal_fb4905b54bad595a3e580d3f244303dcd92878118d4fcd98482155c5a8ec40e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
