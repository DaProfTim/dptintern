<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_bf48fd2b2c0ef9eaded1e0cd9a996303348d9fa9b6001161f47671d13c130870 extends Twig_Template
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
        $__internal_afea0e779375e9c36c87a1b9127e9b407cc412370078af6f72494f41bc287264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afea0e779375e9c36c87a1b9127e9b407cc412370078af6f72494f41bc287264->enter($__internal_afea0e779375e9c36c87a1b9127e9b407cc412370078af6f72494f41bc287264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_2ebc1965ab4c7646832ad3925fadf53277b9bb4f1b82979f84a468337ba51548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebc1965ab4c7646832ad3925fadf53277b9bb4f1b82979f84a468337ba51548->enter($__internal_2ebc1965ab4c7646832ad3925fadf53277b9bb4f1b82979f84a468337ba51548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_afea0e779375e9c36c87a1b9127e9b407cc412370078af6f72494f41bc287264->leave($__internal_afea0e779375e9c36c87a1b9127e9b407cc412370078af6f72494f41bc287264_prof);

        
        $__internal_2ebc1965ab4c7646832ad3925fadf53277b9bb4f1b82979f84a468337ba51548->leave($__internal_2ebc1965ab4c7646832ad3925fadf53277b9bb4f1b82979f84a468337ba51548_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
