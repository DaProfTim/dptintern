<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4e33a1fcca18a4b72edd2677ec073b6d8f8f065f065703249750271a3f797c91 extends Twig_Template
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
        $__internal_c833ffcdadeb60310bc00fe6a124a0d15f8d3c8e0bbfe780c6ef4975654bae6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c833ffcdadeb60310bc00fe6a124a0d15f8d3c8e0bbfe780c6ef4975654bae6b->enter($__internal_c833ffcdadeb60310bc00fe6a124a0d15f8d3c8e0bbfe780c6ef4975654bae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_bfcbcccd149530cd32028cdfd5c5c51b2f12ada385f60676ae2b5e71aea9dfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcbcccd149530cd32028cdfd5c5c51b2f12ada385f60676ae2b5e71aea9dfcb->enter($__internal_bfcbcccd149530cd32028cdfd5c5c51b2f12ada385f60676ae2b5e71aea9dfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_c833ffcdadeb60310bc00fe6a124a0d15f8d3c8e0bbfe780c6ef4975654bae6b->leave($__internal_c833ffcdadeb60310bc00fe6a124a0d15f8d3c8e0bbfe780c6ef4975654bae6b_prof);

        
        $__internal_bfcbcccd149530cd32028cdfd5c5c51b2f12ada385f60676ae2b5e71aea9dfcb->leave($__internal_bfcbcccd149530cd32028cdfd5c5c51b2f12ada385f60676ae2b5e71aea9dfcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
