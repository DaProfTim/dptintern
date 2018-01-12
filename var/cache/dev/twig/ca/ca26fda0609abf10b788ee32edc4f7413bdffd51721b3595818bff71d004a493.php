<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5adc77430a1cd975c8bbec4b9a444c0ec47fcc68140ca04a3a2cf0a2235660bc extends Twig_Template
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
        $__internal_e176ba97364b891623c3f0f213539936918e012e02c54952c1b0a7112638c2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e176ba97364b891623c3f0f213539936918e012e02c54952c1b0a7112638c2c5->enter($__internal_e176ba97364b891623c3f0f213539936918e012e02c54952c1b0a7112638c2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a6e3b766336b36a310391c6365004cfa1ac0d29e38d6b9ede1f04a77f51640c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e3b766336b36a310391c6365004cfa1ac0d29e38d6b9ede1f04a77f51640c4->enter($__internal_a6e3b766336b36a310391c6365004cfa1ac0d29e38d6b9ede1f04a77f51640c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e176ba97364b891623c3f0f213539936918e012e02c54952c1b0a7112638c2c5->leave($__internal_e176ba97364b891623c3f0f213539936918e012e02c54952c1b0a7112638c2c5_prof);

        
        $__internal_a6e3b766336b36a310391c6365004cfa1ac0d29e38d6b9ede1f04a77f51640c4->leave($__internal_a6e3b766336b36a310391c6365004cfa1ac0d29e38d6b9ede1f04a77f51640c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
