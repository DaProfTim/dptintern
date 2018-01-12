<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a3940f15e6e5e79f146112d3ddcb04a5ae95da65e35688f68d8f2e2f3d307118 extends Twig_Template
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
        $__internal_ce50d5f8e5c1ee51b75cd2c03354a63bc8452c67e287b8554498ef5eda0b36b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce50d5f8e5c1ee51b75cd2c03354a63bc8452c67e287b8554498ef5eda0b36b8->enter($__internal_ce50d5f8e5c1ee51b75cd2c03354a63bc8452c67e287b8554498ef5eda0b36b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_fd42a14b9b3b4d7a4335b75b2cc0e210121b00bd6a70a95af570cddce8de5ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd42a14b9b3b4d7a4335b75b2cc0e210121b00bd6a70a95af570cddce8de5ae5->enter($__internal_fd42a14b9b3b4d7a4335b75b2cc0e210121b00bd6a70a95af570cddce8de5ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_ce50d5f8e5c1ee51b75cd2c03354a63bc8452c67e287b8554498ef5eda0b36b8->leave($__internal_ce50d5f8e5c1ee51b75cd2c03354a63bc8452c67e287b8554498ef5eda0b36b8_prof);

        
        $__internal_fd42a14b9b3b4d7a4335b75b2cc0e210121b00bd6a70a95af570cddce8de5ae5->leave($__internal_fd42a14b9b3b4d7a4335b75b2cc0e210121b00bd6a70a95af570cddce8de5ae5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
