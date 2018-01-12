<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_906d7f1c8b175c602e2e30a371ebebf05992a28589b93701b07a8bdc57825850 extends Twig_Template
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
        $__internal_232c6c2708cd2a7126d3ec2a447dc5fa1a8e43a22d512c65615eed6c9458b271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232c6c2708cd2a7126d3ec2a447dc5fa1a8e43a22d512c65615eed6c9458b271->enter($__internal_232c6c2708cd2a7126d3ec2a447dc5fa1a8e43a22d512c65615eed6c9458b271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c62eb8819b6743e80eb895c4304b023a1906dc1da60422eefdbeabaf936e51b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62eb8819b6743e80eb895c4304b023a1906dc1da60422eefdbeabaf936e51b3->enter($__internal_c62eb8819b6743e80eb895c4304b023a1906dc1da60422eefdbeabaf936e51b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_232c6c2708cd2a7126d3ec2a447dc5fa1a8e43a22d512c65615eed6c9458b271->leave($__internal_232c6c2708cd2a7126d3ec2a447dc5fa1a8e43a22d512c65615eed6c9458b271_prof);

        
        $__internal_c62eb8819b6743e80eb895c4304b023a1906dc1da60422eefdbeabaf936e51b3->leave($__internal_c62eb8819b6743e80eb895c4304b023a1906dc1da60422eefdbeabaf936e51b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
