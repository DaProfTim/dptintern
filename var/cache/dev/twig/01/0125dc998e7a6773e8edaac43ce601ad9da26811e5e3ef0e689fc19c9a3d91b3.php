<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f7d8877f6aab36e4c1a4690369f7bbd3a5b342d60a3a03cccd4516e88c1a4377 extends Twig_Template
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
        $__internal_5824e102b47a273e8a3726d28ab610d3ba3f87672848841de392e45ef8e5cbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5824e102b47a273e8a3726d28ab610d3ba3f87672848841de392e45ef8e5cbfb->enter($__internal_5824e102b47a273e8a3726d28ab610d3ba3f87672848841de392e45ef8e5cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_495bec405040aadec5d323c73adc1f5561e9933ae58845b0951cd310f1b24d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495bec405040aadec5d323c73adc1f5561e9933ae58845b0951cd310f1b24d0e->enter($__internal_495bec405040aadec5d323c73adc1f5561e9933ae58845b0951cd310f1b24d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5824e102b47a273e8a3726d28ab610d3ba3f87672848841de392e45ef8e5cbfb->leave($__internal_5824e102b47a273e8a3726d28ab610d3ba3f87672848841de392e45ef8e5cbfb_prof);

        
        $__internal_495bec405040aadec5d323c73adc1f5561e9933ae58845b0951cd310f1b24d0e->leave($__internal_495bec405040aadec5d323c73adc1f5561e9933ae58845b0951cd310f1b24d0e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
