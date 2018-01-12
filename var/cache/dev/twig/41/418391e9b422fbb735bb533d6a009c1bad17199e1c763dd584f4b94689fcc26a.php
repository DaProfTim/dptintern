<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_822366fe33a14c0b5ef83967287a75b5e239fa8302cf00a8cb4fdf343aea4826 extends Twig_Template
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
        $__internal_5fb632d54339571d8bfd379145d9b108eb74e798290b7199d466757cfb693c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb632d54339571d8bfd379145d9b108eb74e798290b7199d466757cfb693c46->enter($__internal_5fb632d54339571d8bfd379145d9b108eb74e798290b7199d466757cfb693c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_47fb04fc50ca32b69c851d2b60d40e2d16175ce5c9e360506787d57d7d78c5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fb04fc50ca32b69c851d2b60d40e2d16175ce5c9e360506787d57d7d78c5ce->enter($__internal_47fb04fc50ca32b69c851d2b60d40e2d16175ce5c9e360506787d57d7d78c5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_5fb632d54339571d8bfd379145d9b108eb74e798290b7199d466757cfb693c46->leave($__internal_5fb632d54339571d8bfd379145d9b108eb74e798290b7199d466757cfb693c46_prof);

        
        $__internal_47fb04fc50ca32b69c851d2b60d40e2d16175ce5c9e360506787d57d7d78c5ce->leave($__internal_47fb04fc50ca32b69c851d2b60d40e2d16175ce5c9e360506787d57d7d78c5ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
