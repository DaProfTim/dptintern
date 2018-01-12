<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_92bfb65e2e0e60f31b98346ef7eeeedb77874e81956abe1056d241120dcc7cfe extends Twig_Template
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
        $__internal_c383f2bf22551b20c16d85d1735af8a94bd0f1377ce818362a9569df45a3a2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c383f2bf22551b20c16d85d1735af8a94bd0f1377ce818362a9569df45a3a2af->enter($__internal_c383f2bf22551b20c16d85d1735af8a94bd0f1377ce818362a9569df45a3a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_1036a7df4a25d7ad56c4a3e93d939f9177095fe0e423b7efef914f82a7bf8ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1036a7df4a25d7ad56c4a3e93d939f9177095fe0e423b7efef914f82a7bf8ebf->enter($__internal_1036a7df4a25d7ad56c4a3e93d939f9177095fe0e423b7efef914f82a7bf8ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_c383f2bf22551b20c16d85d1735af8a94bd0f1377ce818362a9569df45a3a2af->leave($__internal_c383f2bf22551b20c16d85d1735af8a94bd0f1377ce818362a9569df45a3a2af_prof);

        
        $__internal_1036a7df4a25d7ad56c4a3e93d939f9177095fe0e423b7efef914f82a7bf8ebf->leave($__internal_1036a7df4a25d7ad56c4a3e93d939f9177095fe0e423b7efef914f82a7bf8ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
