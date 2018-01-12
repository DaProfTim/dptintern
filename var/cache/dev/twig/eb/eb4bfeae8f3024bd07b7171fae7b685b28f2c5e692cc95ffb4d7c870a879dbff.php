<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_739461e154b48ac2508bff126480a04340cd852c5fd9942db9c786a953e4d1fb extends Twig_Template
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
        $__internal_d43ecb0e5a762a74b10b25a5b919b3d248a96cb0086ec648278d9232654c4ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43ecb0e5a762a74b10b25a5b919b3d248a96cb0086ec648278d9232654c4ec1->enter($__internal_d43ecb0e5a762a74b10b25a5b919b3d248a96cb0086ec648278d9232654c4ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_eb1af53bae7deb05cf466b2a6260227cf78beeaa20b9a45293d4359c73c7e2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1af53bae7deb05cf466b2a6260227cf78beeaa20b9a45293d4359c73c7e2f7->enter($__internal_eb1af53bae7deb05cf466b2a6260227cf78beeaa20b9a45293d4359c73c7e2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d43ecb0e5a762a74b10b25a5b919b3d248a96cb0086ec648278d9232654c4ec1->leave($__internal_d43ecb0e5a762a74b10b25a5b919b3d248a96cb0086ec648278d9232654c4ec1_prof);

        
        $__internal_eb1af53bae7deb05cf466b2a6260227cf78beeaa20b9a45293d4359c73c7e2f7->leave($__internal_eb1af53bae7deb05cf466b2a6260227cf78beeaa20b9a45293d4359c73c7e2f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
