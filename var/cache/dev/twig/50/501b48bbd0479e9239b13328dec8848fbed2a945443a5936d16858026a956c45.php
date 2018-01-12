<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c2bd9b651c50bce081f9b232a1faf7c06099871c47497778357ec717bc4b3a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3cd0e6a67fa545f5ce46a0e2e3f9ca782e7ad7ca8e4da32d7a25dad74aae570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3cd0e6a67fa545f5ce46a0e2e3f9ca782e7ad7ca8e4da32d7a25dad74aae570->enter($__internal_d3cd0e6a67fa545f5ce46a0e2e3f9ca782e7ad7ca8e4da32d7a25dad74aae570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bf3bd8895ae4e6b685bf310eee31b1411af205c777af012d8574340c93377030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3bd8895ae4e6b685bf310eee31b1411af205c777af012d8574340c93377030->enter($__internal_bf3bd8895ae4e6b685bf310eee31b1411af205c777af012d8574340c93377030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d3cd0e6a67fa545f5ce46a0e2e3f9ca782e7ad7ca8e4da32d7a25dad74aae570->leave($__internal_d3cd0e6a67fa545f5ce46a0e2e3f9ca782e7ad7ca8e4da32d7a25dad74aae570_prof);

        
        $__internal_bf3bd8895ae4e6b685bf310eee31b1411af205c777af012d8574340c93377030->leave($__internal_bf3bd8895ae4e6b685bf310eee31b1411af205c777af012d8574340c93377030_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_89be05659b5014238ead13c63febd42ad10e688a6c08f79a0c47498379d17ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89be05659b5014238ead13c63febd42ad10e688a6c08f79a0c47498379d17ce9->enter($__internal_89be05659b5014238ead13c63febd42ad10e688a6c08f79a0c47498379d17ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8e7417480c389786ff4b8314efede1c93496ed5fe85962dfacc9e3951e8ff87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e7417480c389786ff4b8314efede1c93496ed5fe85962dfacc9e3951e8ff87->enter($__internal_d8e7417480c389786ff4b8314efede1c93496ed5fe85962dfacc9e3951e8ff87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d8e7417480c389786ff4b8314efede1c93496ed5fe85962dfacc9e3951e8ff87->leave($__internal_d8e7417480c389786ff4b8314efede1c93496ed5fe85962dfacc9e3951e8ff87_prof);

        
        $__internal_89be05659b5014238ead13c63febd42ad10e688a6c08f79a0c47498379d17ce9->leave($__internal_89be05659b5014238ead13c63febd42ad10e688a6c08f79a0c47498379d17ce9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
