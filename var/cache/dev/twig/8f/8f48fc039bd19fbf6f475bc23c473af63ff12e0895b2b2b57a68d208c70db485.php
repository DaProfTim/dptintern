<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_0463566fbdbf6593340da5c005dde6cd90281292f17930d9b64c0db3bc1bdb5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ab53817abc394b96f96932264e48ae6edef69e1b7248e8b8fb7ef399e013f90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab53817abc394b96f96932264e48ae6edef69e1b7248e8b8fb7ef399e013f90b->enter($__internal_ab53817abc394b96f96932264e48ae6edef69e1b7248e8b8fb7ef399e013f90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_cd0e0c5ddd9b2ba474c1a6b210a399c866b7f29e36c2b5827e64f4c341a56287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0e0c5ddd9b2ba474c1a6b210a399c866b7f29e36c2b5827e64f4c341a56287->enter($__internal_cd0e0c5ddd9b2ba474c1a6b210a399c866b7f29e36c2b5827e64f4c341a56287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab53817abc394b96f96932264e48ae6edef69e1b7248e8b8fb7ef399e013f90b->leave($__internal_ab53817abc394b96f96932264e48ae6edef69e1b7248e8b8fb7ef399e013f90b_prof);

        
        $__internal_cd0e0c5ddd9b2ba474c1a6b210a399c866b7f29e36c2b5827e64f4c341a56287->leave($__internal_cd0e0c5ddd9b2ba474c1a6b210a399c866b7f29e36c2b5827e64f4c341a56287_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c07a63e6ebaa5e18186e24a4794939be7edeba9de9ec1fc8a9b8d985e1fd1d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07a63e6ebaa5e18186e24a4794939be7edeba9de9ec1fc8a9b8d985e1fd1d6c->enter($__internal_c07a63e6ebaa5e18186e24a4794939be7edeba9de9ec1fc8a9b8d985e1fd1d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f24c48d22cdb97eed950b1706bbf53b77f2ccd4648ce5e699e323361eecb9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f24c48d22cdb97eed950b1706bbf53b77f2ccd4648ce5e699e323361eecb9de->enter($__internal_8f24c48d22cdb97eed950b1706bbf53b77f2ccd4648ce5e699e323361eecb9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8f24c48d22cdb97eed950b1706bbf53b77f2ccd4648ce5e699e323361eecb9de->leave($__internal_8f24c48d22cdb97eed950b1706bbf53b77f2ccd4648ce5e699e323361eecb9de_prof);

        
        $__internal_c07a63e6ebaa5e18186e24a4794939be7edeba9de9ec1fc8a9b8d985e1fd1d6c->leave($__internal_c07a63e6ebaa5e18186e24a4794939be7edeba9de9ec1fc8a9b8d985e1fd1d6c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b48e0e8de7ef4eb20b82fcc6ea4d7a04677e00fa73d38fc04bc0d7fba2cde79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b48e0e8de7ef4eb20b82fcc6ea4d7a04677e00fa73d38fc04bc0d7fba2cde79->enter($__internal_2b48e0e8de7ef4eb20b82fcc6ea4d7a04677e00fa73d38fc04bc0d7fba2cde79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3c8ec13db699608a9e0e38d5c9a9035722f778720f326ca584af43faf80d8394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8ec13db699608a9e0e38d5c9a9035722f778720f326ca584af43faf80d8394->enter($__internal_3c8ec13db699608a9e0e38d5c9a9035722f778720f326ca584af43faf80d8394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3c8ec13db699608a9e0e38d5c9a9035722f778720f326ca584af43faf80d8394->leave($__internal_3c8ec13db699608a9e0e38d5c9a9035722f778720f326ca584af43faf80d8394_prof);

        
        $__internal_2b48e0e8de7ef4eb20b82fcc6ea4d7a04677e00fa73d38fc04bc0d7fba2cde79->leave($__internal_2b48e0e8de7ef4eb20b82fcc6ea4d7a04677e00fa73d38fc04bc0d7fba2cde79_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d4fa391edb9cee4da4f514ec1048a1efbf56d01fb778fc4fb06257a8e3d6c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4fa391edb9cee4da4f514ec1048a1efbf56d01fb778fc4fb06257a8e3d6c87->enter($__internal_2d4fa391edb9cee4da4f514ec1048a1efbf56d01fb778fc4fb06257a8e3d6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0644a049bdc4125f3da59796244bf321760f403cbff02b652f4320bcc42926c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0644a049bdc4125f3da59796244bf321760f403cbff02b652f4320bcc42926c->enter($__internal_d0644a049bdc4125f3da59796244bf321760f403cbff02b652f4320bcc42926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0644a049bdc4125f3da59796244bf321760f403cbff02b652f4320bcc42926c->leave($__internal_d0644a049bdc4125f3da59796244bf321760f403cbff02b652f4320bcc42926c_prof);

        
        $__internal_2d4fa391edb9cee4da4f514ec1048a1efbf56d01fb778fc4fb06257a8e3d6c87->leave($__internal_2d4fa391edb9cee4da4f514ec1048a1efbf56d01fb778fc4fb06257a8e3d6c87_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
