<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_976222caeb81c14a782eeb908da24be1e12a62085f8e0adde710027e4e8ab6c6 extends Twig_Template
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
        $__internal_20d6af85318af8d6c38283c9397995006436618ebd009ab6735625dc5dfff7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d6af85318af8d6c38283c9397995006436618ebd009ab6735625dc5dfff7a3->enter($__internal_20d6af85318af8d6c38283c9397995006436618ebd009ab6735625dc5dfff7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_25a8a3a7c9c218e42958585a412623f43a41f0898c7eb703b76c4f2a705f199d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a8a3a7c9c218e42958585a412623f43a41f0898c7eb703b76c4f2a705f199d->enter($__internal_25a8a3a7c9c218e42958585a412623f43a41f0898c7eb703b76c4f2a705f199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_20d6af85318af8d6c38283c9397995006436618ebd009ab6735625dc5dfff7a3->leave($__internal_20d6af85318af8d6c38283c9397995006436618ebd009ab6735625dc5dfff7a3_prof);

        
        $__internal_25a8a3a7c9c218e42958585a412623f43a41f0898c7eb703b76c4f2a705f199d->leave($__internal_25a8a3a7c9c218e42958585a412623f43a41f0898c7eb703b76c4f2a705f199d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
