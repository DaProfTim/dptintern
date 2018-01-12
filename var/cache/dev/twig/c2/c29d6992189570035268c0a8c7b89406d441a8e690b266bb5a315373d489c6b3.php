<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dcb8e6c952e91058eb0807b0bb5abaca5d96f24e3ab6c129b43440cfed7692cb extends Twig_Template
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
        $__internal_68b30605a546ab0c83b1d1a16633fe4fe3a5f5cac35770d0d830ff21ff063004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b30605a546ab0c83b1d1a16633fe4fe3a5f5cac35770d0d830ff21ff063004->enter($__internal_68b30605a546ab0c83b1d1a16633fe4fe3a5f5cac35770d0d830ff21ff063004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8aacc0826dea37a840b8cc923f070a92775cc54e2e5ad3c584bd83f9700665ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aacc0826dea37a840b8cc923f070a92775cc54e2e5ad3c584bd83f9700665ff->enter($__internal_8aacc0826dea37a840b8cc923f070a92775cc54e2e5ad3c584bd83f9700665ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_68b30605a546ab0c83b1d1a16633fe4fe3a5f5cac35770d0d830ff21ff063004->leave($__internal_68b30605a546ab0c83b1d1a16633fe4fe3a5f5cac35770d0d830ff21ff063004_prof);

        
        $__internal_8aacc0826dea37a840b8cc923f070a92775cc54e2e5ad3c584bd83f9700665ff->leave($__internal_8aacc0826dea37a840b8cc923f070a92775cc54e2e5ad3c584bd83f9700665ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
