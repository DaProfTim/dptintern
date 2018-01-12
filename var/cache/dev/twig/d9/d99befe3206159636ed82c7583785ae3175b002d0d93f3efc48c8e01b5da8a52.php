<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f1f8ff7a52fa32500f25bbd5155b1739f6b8d276f83877d20f224d65a32cfd26 extends Twig_Template
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
        $__internal_115bde92263b3648ea4f0922d83387ee43543da0310c8d9bfa553561316230b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115bde92263b3648ea4f0922d83387ee43543da0310c8d9bfa553561316230b8->enter($__internal_115bde92263b3648ea4f0922d83387ee43543da0310c8d9bfa553561316230b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ee18c0604e916fb32e2ca4979d7b8b2f01b3048896449af27e39234a972e8bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee18c0604e916fb32e2ca4979d7b8b2f01b3048896449af27e39234a972e8bc5->enter($__internal_ee18c0604e916fb32e2ca4979d7b8b2f01b3048896449af27e39234a972e8bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_115bde92263b3648ea4f0922d83387ee43543da0310c8d9bfa553561316230b8->leave($__internal_115bde92263b3648ea4f0922d83387ee43543da0310c8d9bfa553561316230b8_prof);

        
        $__internal_ee18c0604e916fb32e2ca4979d7b8b2f01b3048896449af27e39234a972e8bc5->leave($__internal_ee18c0604e916fb32e2ca4979d7b8b2f01b3048896449af27e39234a972e8bc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
