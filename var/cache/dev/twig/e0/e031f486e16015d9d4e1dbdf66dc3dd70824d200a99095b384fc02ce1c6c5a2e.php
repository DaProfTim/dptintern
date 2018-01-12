<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e55ab576e707711626549063f73a0d0296b87ec9491f2aee5fe4b2126ff6c0d8 extends Twig_Template
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
        $__internal_d1190976893926827942ed75f7dd748987c0249418c3f1aa6d4398d0c5e55ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1190976893926827942ed75f7dd748987c0249418c3f1aa6d4398d0c5e55ef9->enter($__internal_d1190976893926827942ed75f7dd748987c0249418c3f1aa6d4398d0c5e55ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_af7e048547f6b14d53f068a4af6ba5ca3407c873ed88612778d78ed10b15b067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7e048547f6b14d53f068a4af6ba5ca3407c873ed88612778d78ed10b15b067->enter($__internal_af7e048547f6b14d53f068a4af6ba5ca3407c873ed88612778d78ed10b15b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d1190976893926827942ed75f7dd748987c0249418c3f1aa6d4398d0c5e55ef9->leave($__internal_d1190976893926827942ed75f7dd748987c0249418c3f1aa6d4398d0c5e55ef9_prof);

        
        $__internal_af7e048547f6b14d53f068a4af6ba5ca3407c873ed88612778d78ed10b15b067->leave($__internal_af7e048547f6b14d53f068a4af6ba5ca3407c873ed88612778d78ed10b15b067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
