<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0323fe4577ff85ee2dd5576e7094f5efc11f13254e228dec9b007a5b7876eec0 extends Twig_Template
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
        $__internal_a18fcad84e3ee28f06798c461a34c85fb0a2ef04c45d89b7ad2dbe92fe8d2ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18fcad84e3ee28f06798c461a34c85fb0a2ef04c45d89b7ad2dbe92fe8d2ae4->enter($__internal_a18fcad84e3ee28f06798c461a34c85fb0a2ef04c45d89b7ad2dbe92fe8d2ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f14d5825357c2ea03bd6153378fc3ee148b08765afffb7558018d4367fb3e8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14d5825357c2ea03bd6153378fc3ee148b08765afffb7558018d4367fb3e8ef->enter($__internal_f14d5825357c2ea03bd6153378fc3ee148b08765afffb7558018d4367fb3e8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a18fcad84e3ee28f06798c461a34c85fb0a2ef04c45d89b7ad2dbe92fe8d2ae4->leave($__internal_a18fcad84e3ee28f06798c461a34c85fb0a2ef04c45d89b7ad2dbe92fe8d2ae4_prof);

        
        $__internal_f14d5825357c2ea03bd6153378fc3ee148b08765afffb7558018d4367fb3e8ef->leave($__internal_f14d5825357c2ea03bd6153378fc3ee148b08765afffb7558018d4367fb3e8ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
