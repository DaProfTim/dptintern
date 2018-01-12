<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ef271a3f70fd273acb35752194a7437f6c90176ac536480e7f004d70ddf1c984 extends Twig_Template
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
        $__internal_da79b5f392afae8c28180eed01ed6a1a5997a8a9a81acc61e65b8f94d06feb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da79b5f392afae8c28180eed01ed6a1a5997a8a9a81acc61e65b8f94d06feb9a->enter($__internal_da79b5f392afae8c28180eed01ed6a1a5997a8a9a81acc61e65b8f94d06feb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_043f3445ef85c73b87e6351efbb29adf3826bc6af942a2b42b0250bada819145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043f3445ef85c73b87e6351efbb29adf3826bc6af942a2b42b0250bada819145->enter($__internal_043f3445ef85c73b87e6351efbb29adf3826bc6af942a2b42b0250bada819145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_da79b5f392afae8c28180eed01ed6a1a5997a8a9a81acc61e65b8f94d06feb9a->leave($__internal_da79b5f392afae8c28180eed01ed6a1a5997a8a9a81acc61e65b8f94d06feb9a_prof);

        
        $__internal_043f3445ef85c73b87e6351efbb29adf3826bc6af942a2b42b0250bada819145->leave($__internal_043f3445ef85c73b87e6351efbb29adf3826bc6af942a2b42b0250bada819145_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
