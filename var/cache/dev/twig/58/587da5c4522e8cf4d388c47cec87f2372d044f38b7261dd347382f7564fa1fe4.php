<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c8b36acf9afb4035bf6bcaf5031b8537bd0dcec51458311619583226cad3920f extends Twig_Template
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
        $__internal_b76c4d1f50a4792f0cf349ca361fce7ab9cf653c037ab86f07aa27e115f58044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76c4d1f50a4792f0cf349ca361fce7ab9cf653c037ab86f07aa27e115f58044->enter($__internal_b76c4d1f50a4792f0cf349ca361fce7ab9cf653c037ab86f07aa27e115f58044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_53c10185f57ebd49bd5b68d8477c0e4acd31318008a676d8d1939b9db1b0db2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c10185f57ebd49bd5b68d8477c0e4acd31318008a676d8d1939b9db1b0db2e->enter($__internal_53c10185f57ebd49bd5b68d8477c0e4acd31318008a676d8d1939b9db1b0db2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b76c4d1f50a4792f0cf349ca361fce7ab9cf653c037ab86f07aa27e115f58044->leave($__internal_b76c4d1f50a4792f0cf349ca361fce7ab9cf653c037ab86f07aa27e115f58044_prof);

        
        $__internal_53c10185f57ebd49bd5b68d8477c0e4acd31318008a676d8d1939b9db1b0db2e->leave($__internal_53c10185f57ebd49bd5b68d8477c0e4acd31318008a676d8d1939b9db1b0db2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
