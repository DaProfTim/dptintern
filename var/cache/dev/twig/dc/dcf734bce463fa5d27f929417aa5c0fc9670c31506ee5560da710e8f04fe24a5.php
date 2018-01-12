<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2efb7148ddd81406219078abf37904caea8e78ec49b27def5fc041f6746ac131 extends Twig_Template
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
        $__internal_1aff0a05fb363f59de4cbf3da695f9b7cbcd4d8175e4dc964e2bb74ee6515773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aff0a05fb363f59de4cbf3da695f9b7cbcd4d8175e4dc964e2bb74ee6515773->enter($__internal_1aff0a05fb363f59de4cbf3da695f9b7cbcd4d8175e4dc964e2bb74ee6515773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_59de99c29a056091551fd59a84185ded2297f52971338dbbbb60d1fe7092a2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59de99c29a056091551fd59a84185ded2297f52971338dbbbb60d1fe7092a2b6->enter($__internal_59de99c29a056091551fd59a84185ded2297f52971338dbbbb60d1fe7092a2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1aff0a05fb363f59de4cbf3da695f9b7cbcd4d8175e4dc964e2bb74ee6515773->leave($__internal_1aff0a05fb363f59de4cbf3da695f9b7cbcd4d8175e4dc964e2bb74ee6515773_prof);

        
        $__internal_59de99c29a056091551fd59a84185ded2297f52971338dbbbb60d1fe7092a2b6->leave($__internal_59de99c29a056091551fd59a84185ded2297f52971338dbbbb60d1fe7092a2b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
