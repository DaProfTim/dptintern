<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ed239ea370f1d31c1841f870476ce7ee22f26bb912aed4976d66ac7cc34ba719 extends Twig_Template
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
        $__internal_24a60d61cb6a06d7cb55e18052b5c3e1565a9d9d40d8e18475182c3c8e3a8bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a60d61cb6a06d7cb55e18052b5c3e1565a9d9d40d8e18475182c3c8e3a8bf1->enter($__internal_24a60d61cb6a06d7cb55e18052b5c3e1565a9d9d40d8e18475182c3c8e3a8bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f4f48e7891bdc014040ae353c57f92464e732ca389af2dc83a0e4974710360b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f48e7891bdc014040ae353c57f92464e732ca389af2dc83a0e4974710360b8->enter($__internal_f4f48e7891bdc014040ae353c57f92464e732ca389af2dc83a0e4974710360b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_24a60d61cb6a06d7cb55e18052b5c3e1565a9d9d40d8e18475182c3c8e3a8bf1->leave($__internal_24a60d61cb6a06d7cb55e18052b5c3e1565a9d9d40d8e18475182c3c8e3a8bf1_prof);

        
        $__internal_f4f48e7891bdc014040ae353c57f92464e732ca389af2dc83a0e4974710360b8->leave($__internal_f4f48e7891bdc014040ae353c57f92464e732ca389af2dc83a0e4974710360b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
