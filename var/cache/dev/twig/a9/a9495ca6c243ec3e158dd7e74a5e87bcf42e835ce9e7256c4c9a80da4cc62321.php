<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f536cc5577bfaca25aa643aae5671ec396d85c1e063d947d67b622d6346b9723 extends Twig_Template
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
        $__internal_77ee67af04107424733bae2d99bc04fd230ae8b0fbac3eb43b6a08ff5be28b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ee67af04107424733bae2d99bc04fd230ae8b0fbac3eb43b6a08ff5be28b15->enter($__internal_77ee67af04107424733bae2d99bc04fd230ae8b0fbac3eb43b6a08ff5be28b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5ae63c8cabced98f9dea8be9713d871efd5432e31e2b87238e5dec743ad53ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae63c8cabced98f9dea8be9713d871efd5432e31e2b87238e5dec743ad53ba6->enter($__internal_5ae63c8cabced98f9dea8be9713d871efd5432e31e2b87238e5dec743ad53ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_77ee67af04107424733bae2d99bc04fd230ae8b0fbac3eb43b6a08ff5be28b15->leave($__internal_77ee67af04107424733bae2d99bc04fd230ae8b0fbac3eb43b6a08ff5be28b15_prof);

        
        $__internal_5ae63c8cabced98f9dea8be9713d871efd5432e31e2b87238e5dec743ad53ba6->leave($__internal_5ae63c8cabced98f9dea8be9713d871efd5432e31e2b87238e5dec743ad53ba6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
