<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_d5ddce51b7b537d6a4da8ee52dbafe34117792375a26916d41552ee89e9e03a1 extends Twig_Template
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
        $__internal_3eb0598b144b53ea75c0eaafdf78e793c425df1f01a85d185bdaba12f7484d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb0598b144b53ea75c0eaafdf78e793c425df1f01a85d185bdaba12f7484d15->enter($__internal_3eb0598b144b53ea75c0eaafdf78e793c425df1f01a85d185bdaba12f7484d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_b2833f572102abf48d9fa3dbedd8a4a4dc9a7f7fa97558a8282dee083ab54084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2833f572102abf48d9fa3dbedd8a4a4dc9a7f7fa97558a8282dee083ab54084->enter($__internal_b2833f572102abf48d9fa3dbedd8a4a4dc9a7f7fa97558a8282dee083ab54084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_3eb0598b144b53ea75c0eaafdf78e793c425df1f01a85d185bdaba12f7484d15->leave($__internal_3eb0598b144b53ea75c0eaafdf78e793c425df1f01a85d185bdaba12f7484d15_prof);

        
        $__internal_b2833f572102abf48d9fa3dbedd8a4a4dc9a7f7fa97558a8282dee083ab54084->leave($__internal_b2833f572102abf48d9fa3dbedd8a4a4dc9a7f7fa97558a8282dee083ab54084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
