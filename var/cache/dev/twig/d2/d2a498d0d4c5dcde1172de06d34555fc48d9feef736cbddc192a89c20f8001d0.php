<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_065354b0486f896059c1d6c522bf22887529b5d65d12d052232d29799358ac60 extends Twig_Template
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
        $__internal_47760c64b52bb91c9f4c18204f814bddd44797312beffd3e18a92f5552da3a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47760c64b52bb91c9f4c18204f814bddd44797312beffd3e18a92f5552da3a72->enter($__internal_47760c64b52bb91c9f4c18204f814bddd44797312beffd3e18a92f5552da3a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4fec176191a4c372d622eacc97f1eff915150eb77dced81c2f9ca20358cd185a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fec176191a4c372d622eacc97f1eff915150eb77dced81c2f9ca20358cd185a->enter($__internal_4fec176191a4c372d622eacc97f1eff915150eb77dced81c2f9ca20358cd185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_47760c64b52bb91c9f4c18204f814bddd44797312beffd3e18a92f5552da3a72->leave($__internal_47760c64b52bb91c9f4c18204f814bddd44797312beffd3e18a92f5552da3a72_prof);

        
        $__internal_4fec176191a4c372d622eacc97f1eff915150eb77dced81c2f9ca20358cd185a->leave($__internal_4fec176191a4c372d622eacc97f1eff915150eb77dced81c2f9ca20358cd185a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
