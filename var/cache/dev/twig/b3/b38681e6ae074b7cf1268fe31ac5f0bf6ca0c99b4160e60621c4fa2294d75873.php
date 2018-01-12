<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ab8109dd840a8106ac39da7d2d7f04f20194978a447d47f07ef2c5e49d3cb3a5 extends Twig_Template
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
        $__internal_c0d45cbcb8d35421c74999ec374ac0fd4b249d2a211aef3734d38294419af357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d45cbcb8d35421c74999ec374ac0fd4b249d2a211aef3734d38294419af357->enter($__internal_c0d45cbcb8d35421c74999ec374ac0fd4b249d2a211aef3734d38294419af357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_02ebb77c513a6522cf5274644dbf279d6e6683de0ac21afbc9d160c08a5fb545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ebb77c513a6522cf5274644dbf279d6e6683de0ac21afbc9d160c08a5fb545->enter($__internal_02ebb77c513a6522cf5274644dbf279d6e6683de0ac21afbc9d160c08a5fb545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_c0d45cbcb8d35421c74999ec374ac0fd4b249d2a211aef3734d38294419af357->leave($__internal_c0d45cbcb8d35421c74999ec374ac0fd4b249d2a211aef3734d38294419af357_prof);

        
        $__internal_02ebb77c513a6522cf5274644dbf279d6e6683de0ac21afbc9d160c08a5fb545->leave($__internal_02ebb77c513a6522cf5274644dbf279d6e6683de0ac21afbc9d160c08a5fb545_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
