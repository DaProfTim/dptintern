<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bef77f47a940f73c3a15cf1112009c8138235efca9003c0b869b35e42a12ae49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d8d4638c3108faa45d7cb8f96b1a40d5d39bfac4097d9b0b3caade91dc2fa69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8d4638c3108faa45d7cb8f96b1a40d5d39bfac4097d9b0b3caade91dc2fa69->enter($__internal_6d8d4638c3108faa45d7cb8f96b1a40d5d39bfac4097d9b0b3caade91dc2fa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_3d0390cc2fb9c3d4a632fed2e7f040a6798ddb421189c10d349732b3de86c3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0390cc2fb9c3d4a632fed2e7f040a6798ddb421189c10d349732b3de86c3b0->enter($__internal_3d0390cc2fb9c3d4a632fed2e7f040a6798ddb421189c10d349732b3de86c3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_6d8d4638c3108faa45d7cb8f96b1a40d5d39bfac4097d9b0b3caade91dc2fa69->leave($__internal_6d8d4638c3108faa45d7cb8f96b1a40d5d39bfac4097d9b0b3caade91dc2fa69_prof);

        
        $__internal_3d0390cc2fb9c3d4a632fed2e7f040a6798ddb421189c10d349732b3de86c3b0->leave($__internal_3d0390cc2fb9c3d4a632fed2e7f040a6798ddb421189c10d349732b3de86c3b0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
