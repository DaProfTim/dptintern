<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9af46d4ad23f9dce650141c9d7298aca1880ae16e62145fade674d2a26d7e046 extends Twig_Template
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
        $__internal_457edc6a20eae1020a28305bd5bb4979575f412c881132382626d8af09181b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457edc6a20eae1020a28305bd5bb4979575f412c881132382626d8af09181b7c->enter($__internal_457edc6a20eae1020a28305bd5bb4979575f412c881132382626d8af09181b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_fa718f9a4a47c74a5a17aacc42e29e321edd2fa2784ea84da20f370dcaed42fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa718f9a4a47c74a5a17aacc42e29e321edd2fa2784ea84da20f370dcaed42fe->enter($__internal_fa718f9a4a47c74a5a17aacc42e29e321edd2fa2784ea84da20f370dcaed42fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_457edc6a20eae1020a28305bd5bb4979575f412c881132382626d8af09181b7c->leave($__internal_457edc6a20eae1020a28305bd5bb4979575f412c881132382626d8af09181b7c_prof);

        
        $__internal_fa718f9a4a47c74a5a17aacc42e29e321edd2fa2784ea84da20f370dcaed42fe->leave($__internal_fa718f9a4a47c74a5a17aacc42e29e321edd2fa2784ea84da20f370dcaed42fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
