<?php

/* NpoaSecurityBundle:extjs:securityconfig.html.twig */
class __TwigTemplate_8062fcb42a08a129a2275aee707b7a24ea7ccfaabed04180f3a82ff45fb09185 extends Twig_Template
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
        $__internal_afa5872315e1412f159ab31d02e9a0d77a7bf3f73c4d358e91042358e9e51c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa5872315e1412f159ab31d02e9a0d77a7bf3f73c4d358e91042358e9e51c87->enter($__internal_afa5872315e1412f159ab31d02e9a0d77a7bf3f73c4d358e91042358e9e51c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:extjs:securityconfig.html.twig"));

        $__internal_70285f04909ef52e9966499ac63f4e522c4143f0d8f7e4b984d9dc757511233e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70285f04909ef52e9966499ac63f4e522c4143f0d8f7e4b984d9dc757511233e->enter($__internal_70285f04909ef52e9966499ac63f4e522c4143f0d8f7e4b984d9dc757511233e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:extjs:securityconfig.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    ejsc = \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["extJsSecurityConfig"]) || array_key_exists("extJsSecurityConfig", $context) ? $context["extJsSecurityConfig"] : (function () { throw new Twig_Error_Runtime('Variable "extJsSecurityConfig" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
</script>";
        
        $__internal_afa5872315e1412f159ab31d02e9a0d77a7bf3f73c4d358e91042358e9e51c87->leave($__internal_afa5872315e1412f159ab31d02e9a0d77a7bf3f73c4d358e91042358e9e51c87_prof);

        
        $__internal_70285f04909ef52e9966499ac63f4e522c4143f0d8f7e4b984d9dc757511233e->leave($__internal_70285f04909ef52e9966499ac63f4e522c4143f0d8f7e4b984d9dc757511233e_prof);

    }

    public function getTemplateName()
    {
        return "NpoaSecurityBundle:extjs:securityconfig.html.twig";
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
        return new Twig_Source("<script type=\"text/javascript\">
    ejsc = \"{{ extJsSecurityConfig }}\"
</script>", "NpoaSecurityBundle:extjs:securityconfig.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle/Resources/views/extjs/securityconfig.html.twig");
    }
}
