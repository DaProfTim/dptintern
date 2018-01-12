<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_525b588fe22a72d5fee8d2383ce14ddfc2429c750172f59602fda46ba9fe9004 extends Twig_Template
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
        $__internal_d2656d99acdb7e481b44ab96ac1e3f160dee0972e55f14cf4b9123417d4e9554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2656d99acdb7e481b44ab96ac1e3f160dee0972e55f14cf4b9123417d4e9554->enter($__internal_d2656d99acdb7e481b44ab96ac1e3f160dee0972e55f14cf4b9123417d4e9554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a3a9f8c7473cb1571ecb0766edd2760dabf1379d7773e75c4563d4ca9b8f6af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a9f8c7473cb1571ecb0766edd2760dabf1379d7773e75c4563d4ca9b8f6af0->enter($__internal_a3a9f8c7473cb1571ecb0766edd2760dabf1379d7773e75c4563d4ca9b8f6af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d2656d99acdb7e481b44ab96ac1e3f160dee0972e55f14cf4b9123417d4e9554->leave($__internal_d2656d99acdb7e481b44ab96ac1e3f160dee0972e55f14cf4b9123417d4e9554_prof);

        
        $__internal_a3a9f8c7473cb1571ecb0766edd2760dabf1379d7773e75c4563d4ca9b8f6af0->leave($__internal_a3a9f8c7473cb1571ecb0766edd2760dabf1379d7773e75c4563d4ca9b8f6af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
