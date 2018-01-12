<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_06249b8b514b9ab5bd609ab3591c81b8744a48d9e0044ac772276137bb927dfd extends Twig_Template
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
        $__internal_2effa2040f4ba6900c0f035ce69f0c2c05eba9dc3f22a8d5ea9ff8dcaa439c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2effa2040f4ba6900c0f035ce69f0c2c05eba9dc3f22a8d5ea9ff8dcaa439c27->enter($__internal_2effa2040f4ba6900c0f035ce69f0c2c05eba9dc3f22a8d5ea9ff8dcaa439c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e01da541574818546b8dd5639f90df137f8de5d7269b0ad644619f1fcf80ed8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01da541574818546b8dd5639f90df137f8de5d7269b0ad644619f1fcf80ed8c->enter($__internal_e01da541574818546b8dd5639f90df137f8de5d7269b0ad644619f1fcf80ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2effa2040f4ba6900c0f035ce69f0c2c05eba9dc3f22a8d5ea9ff8dcaa439c27->leave($__internal_2effa2040f4ba6900c0f035ce69f0c2c05eba9dc3f22a8d5ea9ff8dcaa439c27_prof);

        
        $__internal_e01da541574818546b8dd5639f90df137f8de5d7269b0ad644619f1fcf80ed8c->leave($__internal_e01da541574818546b8dd5639f90df137f8de5d7269b0ad644619f1fcf80ed8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
