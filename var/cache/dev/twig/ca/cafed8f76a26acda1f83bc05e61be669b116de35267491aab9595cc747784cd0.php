<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_111f4137140d98aeab19c0a74ac9dc88881481a0fabd6bf748a7c8fb753dda9e extends Twig_Template
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
        $__internal_c1b02e9e49e1d0a8bdf29a002b9d5dbdef2c7e03f29fb1fd6250f80737a92e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b02e9e49e1d0a8bdf29a002b9d5dbdef2c7e03f29fb1fd6250f80737a92e21->enter($__internal_c1b02e9e49e1d0a8bdf29a002b9d5dbdef2c7e03f29fb1fd6250f80737a92e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c2d4027c399e2bb4f8b61703ff9b6eeb3ffc9aba747bfd7167f9d29a8d468500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d4027c399e2bb4f8b61703ff9b6eeb3ffc9aba747bfd7167f9d29a8d468500->enter($__internal_c2d4027c399e2bb4f8b61703ff9b6eeb3ffc9aba747bfd7167f9d29a8d468500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_c1b02e9e49e1d0a8bdf29a002b9d5dbdef2c7e03f29fb1fd6250f80737a92e21->leave($__internal_c1b02e9e49e1d0a8bdf29a002b9d5dbdef2c7e03f29fb1fd6250f80737a92e21_prof);

        
        $__internal_c2d4027c399e2bb4f8b61703ff9b6eeb3ffc9aba747bfd7167f9d29a8d468500->leave($__internal_c2d4027c399e2bb4f8b61703ff9b6eeb3ffc9aba747bfd7167f9d29a8d468500_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
