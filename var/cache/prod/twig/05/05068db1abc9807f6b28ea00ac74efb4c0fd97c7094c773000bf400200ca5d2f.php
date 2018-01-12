<?php

/* NpoaSecurityBundle:extjs:securityconfig.html.twig */
class __TwigTemplate_2924259c5b1fcaf8415ea3bf13d089aad3bebfc56d8edbea49df350d6adc3137 extends Twig_Template
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
        return "NpoaSecurityBundle:extjs:securityconfig.html.twig";
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
        return new Twig_Source("", "NpoaSecurityBundle:extjs:securityconfig.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle/Resources/views/extjs/securityconfig.html.twig");
    }
}
