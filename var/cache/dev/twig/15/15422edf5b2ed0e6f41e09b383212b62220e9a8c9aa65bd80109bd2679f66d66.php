<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5c550849ff4450c5a6dff8eca7ae78bfdd5c60cf9dbf68a36c31dee8d8718858 extends Twig_Template
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
        $__internal_5214403215f983fff84a6dec08a8030e2633eea57ace8ddc3817db6386984ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5214403215f983fff84a6dec08a8030e2633eea57ace8ddc3817db6386984ff1->enter($__internal_5214403215f983fff84a6dec08a8030e2633eea57ace8ddc3817db6386984ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_90b02dcd6197ec6d481f805af4c1140fd87a1f203fdb9fb5a00b84df4afc2c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b02dcd6197ec6d481f805af4c1140fd87a1f203fdb9fb5a00b84df4afc2c35->enter($__internal_90b02dcd6197ec6d481f805af4c1140fd87a1f203fdb9fb5a00b84df4afc2c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_5214403215f983fff84a6dec08a8030e2633eea57ace8ddc3817db6386984ff1->leave($__internal_5214403215f983fff84a6dec08a8030e2633eea57ace8ddc3817db6386984ff1_prof);

        
        $__internal_90b02dcd6197ec6d481f805af4c1140fd87a1f203fdb9fb5a00b84df4afc2c35->leave($__internal_90b02dcd6197ec6d481f805af4c1140fd87a1f203fdb9fb5a00b84df4afc2c35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
