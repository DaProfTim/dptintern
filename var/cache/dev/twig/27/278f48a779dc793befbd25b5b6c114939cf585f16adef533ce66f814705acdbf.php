<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b090329b69a5ca4c5e4b2b0f5da4136b0ba3dbf3a8e57dae9a0d69a6838901c3 extends Twig_Template
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
        $__internal_5d76fd955c49c470286d5fc2047efced0068f0250faa6fc45052813adddf02ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d76fd955c49c470286d5fc2047efced0068f0250faa6fc45052813adddf02ff->enter($__internal_5d76fd955c49c470286d5fc2047efced0068f0250faa6fc45052813adddf02ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_6538f3e625f018a3177677858d0900d881cabea4ef9e11cf3889b258330fce19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6538f3e625f018a3177677858d0900d881cabea4ef9e11cf3889b258330fce19->enter($__internal_6538f3e625f018a3177677858d0900d881cabea4ef9e11cf3889b258330fce19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_5d76fd955c49c470286d5fc2047efced0068f0250faa6fc45052813adddf02ff->leave($__internal_5d76fd955c49c470286d5fc2047efced0068f0250faa6fc45052813adddf02ff_prof);

        
        $__internal_6538f3e625f018a3177677858d0900d881cabea4ef9e11cf3889b258330fce19->leave($__internal_6538f3e625f018a3177677858d0900d881cabea4ef9e11cf3889b258330fce19_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
