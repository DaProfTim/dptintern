<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5e62b88dca2af51770228111267bdb24ee0ddb79c1a367dbc28fa42d17610668 extends Twig_Template
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
        $__internal_e9f34361257d4358874f03988e49a318839eb582428e6fb7608dd66bc28182c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f34361257d4358874f03988e49a318839eb582428e6fb7608dd66bc28182c1->enter($__internal_e9f34361257d4358874f03988e49a318839eb582428e6fb7608dd66bc28182c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_4ba55e84826efbd58e02c95d1890dd989f72ffac84573be9a8320948f805d858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba55e84826efbd58e02c95d1890dd989f72ffac84573be9a8320948f805d858->enter($__internal_4ba55e84826efbd58e02c95d1890dd989f72ffac84573be9a8320948f805d858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e9f34361257d4358874f03988e49a318839eb582428e6fb7608dd66bc28182c1->leave($__internal_e9f34361257d4358874f03988e49a318839eb582428e6fb7608dd66bc28182c1_prof);

        
        $__internal_4ba55e84826efbd58e02c95d1890dd989f72ffac84573be9a8320948f805d858->leave($__internal_4ba55e84826efbd58e02c95d1890dd989f72ffac84573be9a8320948f805d858_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
