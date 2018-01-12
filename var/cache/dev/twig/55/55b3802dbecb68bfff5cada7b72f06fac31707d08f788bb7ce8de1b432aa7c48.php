<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e10e1f359a58283e3f49f6188f4945963a2e02c3dec509d5c5fef829e164996f extends Twig_Template
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
        $__internal_e318aca0a7870a2ea3980347479249109be76512fed1c0785a65044bb9de550c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e318aca0a7870a2ea3980347479249109be76512fed1c0785a65044bb9de550c->enter($__internal_e318aca0a7870a2ea3980347479249109be76512fed1c0785a65044bb9de550c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c4f44db924d11febe4ea83b3c2efd9ec425d0150823991f3fad116ed0ae9490f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f44db924d11febe4ea83b3c2efd9ec425d0150823991f3fad116ed0ae9490f->enter($__internal_c4f44db924d11febe4ea83b3c2efd9ec425d0150823991f3fad116ed0ae9490f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_e318aca0a7870a2ea3980347479249109be76512fed1c0785a65044bb9de550c->leave($__internal_e318aca0a7870a2ea3980347479249109be76512fed1c0785a65044bb9de550c_prof);

        
        $__internal_c4f44db924d11febe4ea83b3c2efd9ec425d0150823991f3fad116ed0ae9490f->leave($__internal_c4f44db924d11febe4ea83b3c2efd9ec425d0150823991f3fad116ed0ae9490f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
