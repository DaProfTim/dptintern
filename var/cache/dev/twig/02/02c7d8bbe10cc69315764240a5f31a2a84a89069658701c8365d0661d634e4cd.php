<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7e203e857861effec909ac490c43105194a39ff19edf6134dfa36e366cccf1ed extends Twig_Template
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
        $__internal_8723fc6f077bbfc34749f50d4af462f05d4ca3c246985ef21b1cadab3efacca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8723fc6f077bbfc34749f50d4af462f05d4ca3c246985ef21b1cadab3efacca7->enter($__internal_8723fc6f077bbfc34749f50d4af462f05d4ca3c246985ef21b1cadab3efacca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e834985bdfb0c7108220a2521cc09554196e1e94efbcb395606f225c732f1293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e834985bdfb0c7108220a2521cc09554196e1e94efbcb395606f225c732f1293->enter($__internal_e834985bdfb0c7108220a2521cc09554196e1e94efbcb395606f225c732f1293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8723fc6f077bbfc34749f50d4af462f05d4ca3c246985ef21b1cadab3efacca7->leave($__internal_8723fc6f077bbfc34749f50d4af462f05d4ca3c246985ef21b1cadab3efacca7_prof);

        
        $__internal_e834985bdfb0c7108220a2521cc09554196e1e94efbcb395606f225c732f1293->leave($__internal_e834985bdfb0c7108220a2521cc09554196e1e94efbcb395606f225c732f1293_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
