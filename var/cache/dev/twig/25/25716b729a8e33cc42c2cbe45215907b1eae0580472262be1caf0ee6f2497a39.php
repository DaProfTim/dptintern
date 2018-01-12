<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_077070129eec74d803b23f86cba8e359881f7e274f83b8ace0a3d21c4d240527 extends Twig_Template
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
        $__internal_426bb0d1ffff0162d86977396060057c8575d0005fd8ed2859e50934348baa6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426bb0d1ffff0162d86977396060057c8575d0005fd8ed2859e50934348baa6f->enter($__internal_426bb0d1ffff0162d86977396060057c8575d0005fd8ed2859e50934348baa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e83d5ec2423ac91369badd380fe8a4ce8d6ecd248deddcf4415f3daa02edced2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83d5ec2423ac91369badd380fe8a4ce8d6ecd248deddcf4415f3daa02edced2->enter($__internal_e83d5ec2423ac91369badd380fe8a4ce8d6ecd248deddcf4415f3daa02edced2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_426bb0d1ffff0162d86977396060057c8575d0005fd8ed2859e50934348baa6f->leave($__internal_426bb0d1ffff0162d86977396060057c8575d0005fd8ed2859e50934348baa6f_prof);

        
        $__internal_e83d5ec2423ac91369badd380fe8a4ce8d6ecd248deddcf4415f3daa02edced2->leave($__internal_e83d5ec2423ac91369badd380fe8a4ce8d6ecd248deddcf4415f3daa02edced2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
