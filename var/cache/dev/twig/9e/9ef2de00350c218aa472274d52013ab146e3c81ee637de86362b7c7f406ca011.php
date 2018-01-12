<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_db16f5a39973cb1b132feebbac97fe67ec66a8ac5d4e1d4207445a920ba5e229 extends Twig_Template
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
        $__internal_0a2a30c17ccefd04018e8666b1e4f9ace59a814aa7a9ae8ddbb9c09edb786e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2a30c17ccefd04018e8666b1e4f9ace59a814aa7a9ae8ddbb9c09edb786e04->enter($__internal_0a2a30c17ccefd04018e8666b1e4f9ace59a814aa7a9ae8ddbb9c09edb786e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_88b58c4e7b9ecdc705d76422ac9f6132448c62905d59f4a8dba4c32e71f9741e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b58c4e7b9ecdc705d76422ac9f6132448c62905d59f4a8dba4c32e71f9741e->enter($__internal_88b58c4e7b9ecdc705d76422ac9f6132448c62905d59f4a8dba4c32e71f9741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0a2a30c17ccefd04018e8666b1e4f9ace59a814aa7a9ae8ddbb9c09edb786e04->leave($__internal_0a2a30c17ccefd04018e8666b1e4f9ace59a814aa7a9ae8ddbb9c09edb786e04_prof);

        
        $__internal_88b58c4e7b9ecdc705d76422ac9f6132448c62905d59f4a8dba4c32e71f9741e->leave($__internal_88b58c4e7b9ecdc705d76422ac9f6132448c62905d59f4a8dba4c32e71f9741e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
