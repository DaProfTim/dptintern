<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1021ede347732c51b2f789eb648bcf5bc5473c61abea09f9302d4d57a080db18 extends Twig_Template
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
        $__internal_3ea17a3a603c0c47e321efda588f5edad93de8d76bc3cfce78fb16914bf705f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea17a3a603c0c47e321efda588f5edad93de8d76bc3cfce78fb16914bf705f1->enter($__internal_3ea17a3a603c0c47e321efda588f5edad93de8d76bc3cfce78fb16914bf705f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_96f85b90557e62e3e6c28c64f16ae854811bf2df52486827f6da9a00099561dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f85b90557e62e3e6c28c64f16ae854811bf2df52486827f6da9a00099561dc->enter($__internal_96f85b90557e62e3e6c28c64f16ae854811bf2df52486827f6da9a00099561dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3ea17a3a603c0c47e321efda588f5edad93de8d76bc3cfce78fb16914bf705f1->leave($__internal_3ea17a3a603c0c47e321efda588f5edad93de8d76bc3cfce78fb16914bf705f1_prof);

        
        $__internal_96f85b90557e62e3e6c28c64f16ae854811bf2df52486827f6da9a00099561dc->leave($__internal_96f85b90557e62e3e6c28c64f16ae854811bf2df52486827f6da9a00099561dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
