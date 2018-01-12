<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2b2a996e35b80ad531c7d8e7ac11047eb09be4ee64a1fde0d54cd39ee0e8c35d extends Twig_Template
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
        $__internal_9a0d3dff2123010b72593cad05f77a3e4891b0ad7d1ac4252aa6736aca35b897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0d3dff2123010b72593cad05f77a3e4891b0ad7d1ac4252aa6736aca35b897->enter($__internal_9a0d3dff2123010b72593cad05f77a3e4891b0ad7d1ac4252aa6736aca35b897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9450f29f46e2b858c5c95f2041f16366de600130c531a80df808f2233d445ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9450f29f46e2b858c5c95f2041f16366de600130c531a80df808f2233d445ef8->enter($__internal_9450f29f46e2b858c5c95f2041f16366de600130c531a80df808f2233d445ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_9a0d3dff2123010b72593cad05f77a3e4891b0ad7d1ac4252aa6736aca35b897->leave($__internal_9a0d3dff2123010b72593cad05f77a3e4891b0ad7d1ac4252aa6736aca35b897_prof);

        
        $__internal_9450f29f46e2b858c5c95f2041f16366de600130c531a80df808f2233d445ef8->leave($__internal_9450f29f46e2b858c5c95f2041f16366de600130c531a80df808f2233d445ef8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
