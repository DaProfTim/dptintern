<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f9437d95368d93e7f2bb7a79cbb68127fa022d0c72fda6b8947c5807e1e6a35d extends Twig_Template
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
        $__internal_34372ecda44bedddcb0f8042fb1802447e6b88c3cc19e2886adf6e0d2d9c3adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34372ecda44bedddcb0f8042fb1802447e6b88c3cc19e2886adf6e0d2d9c3adc->enter($__internal_34372ecda44bedddcb0f8042fb1802447e6b88c3cc19e2886adf6e0d2d9c3adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_64bd5145736d2e54841f8dc3a4d3b0fc8bcfc9287e5257e42403b0afc6203fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bd5145736d2e54841f8dc3a4d3b0fc8bcfc9287e5257e42403b0afc6203fbe->enter($__internal_64bd5145736d2e54841f8dc3a4d3b0fc8bcfc9287e5257e42403b0afc6203fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_34372ecda44bedddcb0f8042fb1802447e6b88c3cc19e2886adf6e0d2d9c3adc->leave($__internal_34372ecda44bedddcb0f8042fb1802447e6b88c3cc19e2886adf6e0d2d9c3adc_prof);

        
        $__internal_64bd5145736d2e54841f8dc3a4d3b0fc8bcfc9287e5257e42403b0afc6203fbe->leave($__internal_64bd5145736d2e54841f8dc3a4d3b0fc8bcfc9287e5257e42403b0afc6203fbe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
