<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cf8d307bca1878594adacbe3f4ffc9d62b53e7c5e6bdf5efe679daad804f5f1a extends Twig_Template
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
        $__internal_529cc4fe1728921acf81438662fe88c8c3c090d5d56d369ad02d407bd3eb98fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529cc4fe1728921acf81438662fe88c8c3c090d5d56d369ad02d407bd3eb98fe->enter($__internal_529cc4fe1728921acf81438662fe88c8c3c090d5d56d369ad02d407bd3eb98fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_889f22281459410529a8cdc079db62121fc34f3263ded7dc046e8f709dd08cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889f22281459410529a8cdc079db62121fc34f3263ded7dc046e8f709dd08cd5->enter($__internal_889f22281459410529a8cdc079db62121fc34f3263ded7dc046e8f709dd08cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_529cc4fe1728921acf81438662fe88c8c3c090d5d56d369ad02d407bd3eb98fe->leave($__internal_529cc4fe1728921acf81438662fe88c8c3c090d5d56d369ad02d407bd3eb98fe_prof);

        
        $__internal_889f22281459410529a8cdc079db62121fc34f3263ded7dc046e8f709dd08cd5->leave($__internal_889f22281459410529a8cdc079db62121fc34f3263ded7dc046e8f709dd08cd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
