<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_656af8ae7ce6bf7950de3feedf7d5f0746c90915c06abd81d1aa61e2c4c584ff extends Twig_Template
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
        $__internal_b0a6e5e367e6cd6d75cf128fca7ec74ff9c85013c2d20756d0d4c5c3df8f57e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a6e5e367e6cd6d75cf128fca7ec74ff9c85013c2d20756d0d4c5c3df8f57e9->enter($__internal_b0a6e5e367e6cd6d75cf128fca7ec74ff9c85013c2d20756d0d4c5c3df8f57e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f105c36e86adbdd4b2182ea3479beb3cb46edebc38543b01194bbaa043892c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f105c36e86adbdd4b2182ea3479beb3cb46edebc38543b01194bbaa043892c3c->enter($__internal_f105c36e86adbdd4b2182ea3479beb3cb46edebc38543b01194bbaa043892c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b0a6e5e367e6cd6d75cf128fca7ec74ff9c85013c2d20756d0d4c5c3df8f57e9->leave($__internal_b0a6e5e367e6cd6d75cf128fca7ec74ff9c85013c2d20756d0d4c5c3df8f57e9_prof);

        
        $__internal_f105c36e86adbdd4b2182ea3479beb3cb46edebc38543b01194bbaa043892c3c->leave($__internal_f105c36e86adbdd4b2182ea3479beb3cb46edebc38543b01194bbaa043892c3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
