<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_46ea45b937bccab584856e6f5d275bcffa0496414fc4961b492e51f7307650ad extends Twig_Template
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
        $__internal_2ba3c024e0471579bd3bd0383ff60d263b52a54ef1e636855318697a7873082d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba3c024e0471579bd3bd0383ff60d263b52a54ef1e636855318697a7873082d->enter($__internal_2ba3c024e0471579bd3bd0383ff60d263b52a54ef1e636855318697a7873082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_452cf7c12b6521bad05d2c12b3a6881c45c690300c26c54a38e043a05ee46ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452cf7c12b6521bad05d2c12b3a6881c45c690300c26c54a38e043a05ee46ca8->enter($__internal_452cf7c12b6521bad05d2c12b3a6881c45c690300c26c54a38e043a05ee46ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2ba3c024e0471579bd3bd0383ff60d263b52a54ef1e636855318697a7873082d->leave($__internal_2ba3c024e0471579bd3bd0383ff60d263b52a54ef1e636855318697a7873082d_prof);

        
        $__internal_452cf7c12b6521bad05d2c12b3a6881c45c690300c26c54a38e043a05ee46ca8->leave($__internal_452cf7c12b6521bad05d2c12b3a6881c45c690300c26c54a38e043a05ee46ca8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
