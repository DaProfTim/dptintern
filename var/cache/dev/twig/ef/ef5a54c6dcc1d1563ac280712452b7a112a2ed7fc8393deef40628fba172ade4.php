<?php

/* @LiipFunctionalTest/Default/form.html.twig */
class __TwigTemplate_96126b0e85ecbac2d53453907285f7fd84c3d4419e57e63918849939226b279a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LiipFunctionalTestBundle::layout.html.twig", "@LiipFunctionalTest/Default/form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LiipFunctionalTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_737645a842bc3acc1c5a476eaf757c95989ca29b189450bb23ec1b184c772c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737645a842bc3acc1c5a476eaf757c95989ca29b189450bb23ec1b184c772c92->enter($__internal_737645a842bc3acc1c5a476eaf757c95989ca29b189450bb23ec1b184c772c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LiipFunctionalTest/Default/form.html.twig"));

        $__internal_dac18cc53ed7e0490eca21c153f5d803138025a768909b9ed9b6d27286f0cd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac18cc53ed7e0490eca21c153f5d803138025a768909b9ed9b6d27286f0cd1b->enter($__internal_dac18cc53ed7e0490eca21c153f5d803138025a768909b9ed9b6d27286f0cd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LiipFunctionalTest/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737645a842bc3acc1c5a476eaf757c95989ca29b189450bb23ec1b184c772c92->leave($__internal_737645a842bc3acc1c5a476eaf757c95989ca29b189450bb23ec1b184c772c92_prof);

        
        $__internal_dac18cc53ed7e0490eca21c153f5d803138025a768909b9ed9b6d27286f0cd1b->leave($__internal_dac18cc53ed7e0490eca21c153f5d803138025a768909b9ed9b6d27286f0cd1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d27abf3a83961d02ab3f73d6df01c4e33d2ab04793a483a794c1df60171ac81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d27abf3a83961d02ab3f73d6df01c4e33d2ab04793a483a794c1df60171ac81->enter($__internal_0d27abf3a83961d02ab3f73d6df01c4e33d2ab04793a483a794c1df60171ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7891717b41a78edbdb5ac5e2f2c431b058eb19f584c78ec3283b6aadbec1dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7891717b41a78edbdb5ac5e2f2c431b058eb19f584c78ec3283b6aadbec1dc6->enter($__internal_b7891717b41a78edbdb5ac5e2f2c431b058eb19f584c78ec3283b6aadbec1dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form');
        echo "
";
        
        $__internal_b7891717b41a78edbdb5ac5e2f2c431b058eb19f584c78ec3283b6aadbec1dc6->leave($__internal_b7891717b41a78edbdb5ac5e2f2c431b058eb19f584c78ec3283b6aadbec1dc6_prof);

        
        $__internal_0d27abf3a83961d02ab3f73d6df01c4e33d2ab04793a483a794c1df60171ac81->leave($__internal_0d27abf3a83961d02ab3f73d6df01c4e33d2ab04793a483a794c1df60171ac81_prof);

    }

    public function getTemplateName()
    {
        return "@LiipFunctionalTest/Default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'LiipFunctionalTestBundle::layout.html.twig' %}

{% block body %}
    {{ form(form) }}
{% endblock %}
", "@LiipFunctionalTest/Default/form.html.twig", "K:\\Npointern\\vendor\\liip\\functional-test-bundle\\Resources\\views\\Default\\form.html.twig");
    }
}
