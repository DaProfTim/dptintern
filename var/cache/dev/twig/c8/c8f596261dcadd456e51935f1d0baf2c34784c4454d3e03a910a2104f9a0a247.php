<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1cab415b2ff7c95413b4362f672d2bb431201c79c485ce54a1b7ef506ec19a81 extends Twig_Template
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
        $__internal_7f8aa0c6ece566bb8aab1f3d0737b3cde5fbfa5ffd4ad6807d99657d182a0108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8aa0c6ece566bb8aab1f3d0737b3cde5fbfa5ffd4ad6807d99657d182a0108->enter($__internal_7f8aa0c6ece566bb8aab1f3d0737b3cde5fbfa5ffd4ad6807d99657d182a0108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_df43dbc01f0266ff1e46a983f0a0335873b03da3041e0e991fdc6a30926c75e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df43dbc01f0266ff1e46a983f0a0335873b03da3041e0e991fdc6a30926c75e5->enter($__internal_df43dbc01f0266ff1e46a983f0a0335873b03da3041e0e991fdc6a30926c75e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7f8aa0c6ece566bb8aab1f3d0737b3cde5fbfa5ffd4ad6807d99657d182a0108->leave($__internal_7f8aa0c6ece566bb8aab1f3d0737b3cde5fbfa5ffd4ad6807d99657d182a0108_prof);

        
        $__internal_df43dbc01f0266ff1e46a983f0a0335873b03da3041e0e991fdc6a30926c75e5->leave($__internal_df43dbc01f0266ff1e46a983f0a0335873b03da3041e0e991fdc6a30926c75e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
