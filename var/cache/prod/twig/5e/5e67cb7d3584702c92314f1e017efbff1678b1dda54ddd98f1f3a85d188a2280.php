<?php

/* @NpoaSecurity/extjs/securityconfig.html.twig */
class __TwigTemplate_e708b643370e385dcf0e0b2acdf992f2337f32ffa095250415be79bc99ef1cf9 extends Twig_Template
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
        // line 1
        echo "<script type=\"text/javascript\">
    ejsc = \"";
        // line 2
        echo twig_escape_filter($this->env, ($context["extJsSecurityConfig"] ?? null), "html", null, true);
        echo "\"
</script>";
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
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NpoaSecurity/extjs/securityconfig.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\extjs\\securityconfig.html.twig");
    }
}
