<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_91ee962affd741784c1fb5024560a9f6b0c8a2da5c6c39f752e8824abfe9ddee extends Twig_Template
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
        $__internal_d21aa9b3c11aaf21be34fe6eb63991ddec96e1babb90928bbb192b8ddba080d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21aa9b3c11aaf21be34fe6eb63991ddec96e1babb90928bbb192b8ddba080d3->enter($__internal_d21aa9b3c11aaf21be34fe6eb63991ddec96e1babb90928bbb192b8ddba080d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_af29583005b93f0881e099c0b1711ddfdcad6466c4f344a0ef6b83f38a950473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af29583005b93f0881e099c0b1711ddfdcad6466c4f344a0ef6b83f38a950473->enter($__internal_af29583005b93f0881e099c0b1711ddfdcad6466c4f344a0ef6b83f38a950473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d21aa9b3c11aaf21be34fe6eb63991ddec96e1babb90928bbb192b8ddba080d3->leave($__internal_d21aa9b3c11aaf21be34fe6eb63991ddec96e1babb90928bbb192b8ddba080d3_prof);

        
        $__internal_af29583005b93f0881e099c0b1711ddfdcad6466c4f344a0ef6b83f38a950473->leave($__internal_af29583005b93f0881e099c0b1711ddfdcad6466c4f344a0ef6b83f38a950473_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
