<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0e3b78cf51f6ae69fc29a5ffa11907eaa408440653abc2c0201b108cece97ad3 extends Twig_Template
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
        $__internal_cef9cbfd59f82d5c5697f99b2544ff2d4043442120f763497eacc9b9e67ae210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef9cbfd59f82d5c5697f99b2544ff2d4043442120f763497eacc9b9e67ae210->enter($__internal_cef9cbfd59f82d5c5697f99b2544ff2d4043442120f763497eacc9b9e67ae210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_eb6b5284691ede3f642d274f481f7526fcf5f9a2e0f70918d02c6416176d6426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b5284691ede3f642d274f481f7526fcf5f9a2e0f70918d02c6416176d6426->enter($__internal_eb6b5284691ede3f642d274f481f7526fcf5f9a2e0f70918d02c6416176d6426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cef9cbfd59f82d5c5697f99b2544ff2d4043442120f763497eacc9b9e67ae210->leave($__internal_cef9cbfd59f82d5c5697f99b2544ff2d4043442120f763497eacc9b9e67ae210_prof);

        
        $__internal_eb6b5284691ede3f642d274f481f7526fcf5f9a2e0f70918d02c6416176d6426->leave($__internal_eb6b5284691ede3f642d274f481f7526fcf5f9a2e0f70918d02c6416176d6426_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
