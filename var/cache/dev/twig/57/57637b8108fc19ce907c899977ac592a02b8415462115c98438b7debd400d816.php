<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_be91c83bb1e4622f1fabfa11cd9919b3b2a36e8d517f7e797e04b9ab19b28c01 extends Twig_Template
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
        $__internal_f93eb1896d1d7b0e9caf4a982a0d92f9f33bd9c8abc49a756fd47107a73d51a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93eb1896d1d7b0e9caf4a982a0d92f9f33bd9c8abc49a756fd47107a73d51a7->enter($__internal_f93eb1896d1d7b0e9caf4a982a0d92f9f33bd9c8abc49a756fd47107a73d51a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f0dff0217de02f9d9e6eee2eb4808c1e68f22ed285ca9719118eec065360f472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dff0217de02f9d9e6eee2eb4808c1e68f22ed285ca9719118eec065360f472->enter($__internal_f0dff0217de02f9d9e6eee2eb4808c1e68f22ed285ca9719118eec065360f472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f93eb1896d1d7b0e9caf4a982a0d92f9f33bd9c8abc49a756fd47107a73d51a7->leave($__internal_f93eb1896d1d7b0e9caf4a982a0d92f9f33bd9c8abc49a756fd47107a73d51a7_prof);

        
        $__internal_f0dff0217de02f9d9e6eee2eb4808c1e68f22ed285ca9719118eec065360f472->leave($__internal_f0dff0217de02f9d9e6eee2eb4808c1e68f22ed285ca9719118eec065360f472_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
