<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b20d3802e568a9989dd408a071555747d4ff43a6d8599ae8fd0db4de5dfed0be extends Twig_Template
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
        $__internal_4fa0cc6ed70883a808cfa13d15d4b1eb13f747ca386c576cdaa8f616485a3e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa0cc6ed70883a808cfa13d15d4b1eb13f747ca386c576cdaa8f616485a3e59->enter($__internal_4fa0cc6ed70883a808cfa13d15d4b1eb13f747ca386c576cdaa8f616485a3e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ab774ebd22e3311d9ed508f882ab6b14053b4d4354bb5d55ab584b2185be28c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab774ebd22e3311d9ed508f882ab6b14053b4d4354bb5d55ab584b2185be28c9->enter($__internal_ab774ebd22e3311d9ed508f882ab6b14053b4d4354bb5d55ab584b2185be28c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4fa0cc6ed70883a808cfa13d15d4b1eb13f747ca386c576cdaa8f616485a3e59->leave($__internal_4fa0cc6ed70883a808cfa13d15d4b1eb13f747ca386c576cdaa8f616485a3e59_prof);

        
        $__internal_ab774ebd22e3311d9ed508f882ab6b14053b4d4354bb5d55ab584b2185be28c9->leave($__internal_ab774ebd22e3311d9ed508f882ab6b14053b4d4354bb5d55ab584b2185be28c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
