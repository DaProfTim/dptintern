<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_50a5ad8ecf18d5183383da5f542eafade30ef7ab63a842f6cc39c56d688706ce extends Twig_Template
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
        $__internal_e23fc28243582d5cab504c3fc294a0affd5c6ac97b177665c0d59b59401bb321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23fc28243582d5cab504c3fc294a0affd5c6ac97b177665c0d59b59401bb321->enter($__internal_e23fc28243582d5cab504c3fc294a0affd5c6ac97b177665c0d59b59401bb321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_dd168ad7f8b0d69a3eb6142642eb6864b1755fdd7c68972562ae835e13c2fcfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd168ad7f8b0d69a3eb6142642eb6864b1755fdd7c68972562ae835e13c2fcfa->enter($__internal_dd168ad7f8b0d69a3eb6142642eb6864b1755fdd7c68972562ae835e13c2fcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e23fc28243582d5cab504c3fc294a0affd5c6ac97b177665c0d59b59401bb321->leave($__internal_e23fc28243582d5cab504c3fc294a0affd5c6ac97b177665c0d59b59401bb321_prof);

        
        $__internal_dd168ad7f8b0d69a3eb6142642eb6864b1755fdd7c68972562ae835e13c2fcfa->leave($__internal_dd168ad7f8b0d69a3eb6142642eb6864b1755fdd7c68972562ae835e13c2fcfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
