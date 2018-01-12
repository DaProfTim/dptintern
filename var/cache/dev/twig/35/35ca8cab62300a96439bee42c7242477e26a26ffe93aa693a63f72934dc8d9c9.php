<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2cca3dffdc2a251066dd7420a58b1db9fa19d34b57abd885a0eb6fd41dccc596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_58ea4a8878a146fe6f04c68d3e06b37c9d09451fa74e74f8bf6c053bcd1dc102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ea4a8878a146fe6f04c68d3e06b37c9d09451fa74e74f8bf6c053bcd1dc102->enter($__internal_58ea4a8878a146fe6f04c68d3e06b37c9d09451fa74e74f8bf6c053bcd1dc102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_39dd205003122774500c35e1bf270150ce95c2363ef84b24eb4fffc843c6e22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dd205003122774500c35e1bf270150ce95c2363ef84b24eb4fffc843c6e22d->enter($__internal_39dd205003122774500c35e1bf270150ce95c2363ef84b24eb4fffc843c6e22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ea4a8878a146fe6f04c68d3e06b37c9d09451fa74e74f8bf6c053bcd1dc102->leave($__internal_58ea4a8878a146fe6f04c68d3e06b37c9d09451fa74e74f8bf6c053bcd1dc102_prof);

        
        $__internal_39dd205003122774500c35e1bf270150ce95c2363ef84b24eb4fffc843c6e22d->leave($__internal_39dd205003122774500c35e1bf270150ce95c2363ef84b24eb4fffc843c6e22d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6105a72f5f9eff9a1b446d38811e9737f4f44dc5388bbc160cc8c6550a309566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6105a72f5f9eff9a1b446d38811e9737f4f44dc5388bbc160cc8c6550a309566->enter($__internal_6105a72f5f9eff9a1b446d38811e9737f4f44dc5388bbc160cc8c6550a309566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b47d1ffb1b34466ad47d756f0682c1290ba600aa71d9df455905dd439799260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b47d1ffb1b34466ad47d756f0682c1290ba600aa71d9df455905dd439799260->enter($__internal_9b47d1ffb1b34466ad47d756f0682c1290ba600aa71d9df455905dd439799260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9b47d1ffb1b34466ad47d756f0682c1290ba600aa71d9df455905dd439799260->leave($__internal_9b47d1ffb1b34466ad47d756f0682c1290ba600aa71d9df455905dd439799260_prof);

        
        $__internal_6105a72f5f9eff9a1b446d38811e9737f4f44dc5388bbc160cc8c6550a309566->leave($__internal_6105a72f5f9eff9a1b446d38811e9737f4f44dc5388bbc160cc8c6550a309566_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8e9d03e8359da608c089ff07625fdcbd530f883429c72ce09bb02925744faa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e9d03e8359da608c089ff07625fdcbd530f883429c72ce09bb02925744faa7->enter($__internal_f8e9d03e8359da608c089ff07625fdcbd530f883429c72ce09bb02925744faa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d9977eacd69afd5d8dfcaf925486e633149eac5bfd78827d4f68edc3005d685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9977eacd69afd5d8dfcaf925486e633149eac5bfd78827d4f68edc3005d685->enter($__internal_5d9977eacd69afd5d8dfcaf925486e633149eac5bfd78827d4f68edc3005d685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5d9977eacd69afd5d8dfcaf925486e633149eac5bfd78827d4f68edc3005d685->leave($__internal_5d9977eacd69afd5d8dfcaf925486e633149eac5bfd78827d4f68edc3005d685_prof);

        
        $__internal_f8e9d03e8359da608c089ff07625fdcbd530f883429c72ce09bb02925744faa7->leave($__internal_f8e9d03e8359da608c089ff07625fdcbd530f883429c72ce09bb02925744faa7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c5aca3e5330cc1d07a6a662373a02b022e4ed342f7038d88e1d55e141df76f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5aca3e5330cc1d07a6a662373a02b022e4ed342f7038d88e1d55e141df76f7->enter($__internal_5c5aca3e5330cc1d07a6a662373a02b022e4ed342f7038d88e1d55e141df76f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a89b081a71ffaf45b8cae31e84ec58a9bbef8df617a083ca973808234c149b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89b081a71ffaf45b8cae31e84ec58a9bbef8df617a083ca973808234c149b47->enter($__internal_a89b081a71ffaf45b8cae31e84ec58a9bbef8df617a083ca973808234c149b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a89b081a71ffaf45b8cae31e84ec58a9bbef8df617a083ca973808234c149b47->leave($__internal_a89b081a71ffaf45b8cae31e84ec58a9bbef8df617a083ca973808234c149b47_prof);

        
        $__internal_5c5aca3e5330cc1d07a6a662373a02b022e4ed342f7038d88e1d55e141df76f7->leave($__internal_5c5aca3e5330cc1d07a6a662373a02b022e4ed342f7038d88e1d55e141df76f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
