<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_143bfa4aaa22020439d7156df3bb7d9d8f66711be3fbd661a2693c76e3d571e9 extends Twig_Template
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
        $__internal_deec7cbbadc009f6399210f48d16f8afd5108097304ecec445646cae4b8eeaed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deec7cbbadc009f6399210f48d16f8afd5108097304ecec445646cae4b8eeaed->enter($__internal_deec7cbbadc009f6399210f48d16f8afd5108097304ecec445646cae4b8eeaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_a66698b20d642e43ffa9228d9afedb5e03ec30b85f851b3550ce11c5cc6c6a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66698b20d642e43ffa9228d9afedb5e03ec30b85f851b3550ce11c5cc6c6a22->enter($__internal_a66698b20d642e43ffa9228d9afedb5e03ec30b85f851b3550ce11c5cc6c6a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_deec7cbbadc009f6399210f48d16f8afd5108097304ecec445646cae4b8eeaed->leave($__internal_deec7cbbadc009f6399210f48d16f8afd5108097304ecec445646cae4b8eeaed_prof);

        
        $__internal_a66698b20d642e43ffa9228d9afedb5e03ec30b85f851b3550ce11c5cc6c6a22->leave($__internal_a66698b20d642e43ffa9228d9afedb5e03ec30b85f851b3550ce11c5cc6c6a22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
