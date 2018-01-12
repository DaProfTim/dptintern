<?php

/* @NpoaSecurity/extjs/securityconfig.html.twig */
class __TwigTemplate_9b4f8fef66a4e15183fa17bae18a70d06f5cef24cc31b824c9c9b4e92bd7967c extends Twig_Template
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
        $__internal_fcaad3bcbbafd73259aeafec8cdac10a5c72b4afac20386e3aa75a597a739d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcaad3bcbbafd73259aeafec8cdac10a5c72b4afac20386e3aa75a597a739d84->enter($__internal_fcaad3bcbbafd73259aeafec8cdac10a5c72b4afac20386e3aa75a597a739d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/extjs/securityconfig.html.twig"));

        $__internal_8071e0fd9c9816891e9c1b8800a41e2d9acedfe9c19c28b77d9d9f68c144dd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8071e0fd9c9816891e9c1b8800a41e2d9acedfe9c19c28b77d9d9f68c144dd9a->enter($__internal_8071e0fd9c9816891e9c1b8800a41e2d9acedfe9c19c28b77d9d9f68c144dd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/extjs/securityconfig.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    ejsc = \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["extJsSecurityConfig"]) || array_key_exists("extJsSecurityConfig", $context) ? $context["extJsSecurityConfig"] : (function () { throw new Twig_Error_Runtime('Variable "extJsSecurityConfig" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
</script>";
        
        $__internal_fcaad3bcbbafd73259aeafec8cdac10a5c72b4afac20386e3aa75a597a739d84->leave($__internal_fcaad3bcbbafd73259aeafec8cdac10a5c72b4afac20386e3aa75a597a739d84_prof);

        
        $__internal_8071e0fd9c9816891e9c1b8800a41e2d9acedfe9c19c28b77d9d9f68c144dd9a->leave($__internal_8071e0fd9c9816891e9c1b8800a41e2d9acedfe9c19c28b77d9d9f68c144dd9a_prof);

    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/extjs/securityconfig.html.twig";
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
</script>", "@NpoaSecurity/extjs/securityconfig.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\extjs\\securityconfig.html.twig");
    }
}
