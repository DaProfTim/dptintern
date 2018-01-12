<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6d255d40a3d6e58854a5278aad0c309c704c7fb39c5dcbbe6baad73875c27608 extends Twig_Template
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
        $__internal_1c0b788be54619644a86970d86e796fda68dcb7dfffc41dbb5f3e14b06828220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0b788be54619644a86970d86e796fda68dcb7dfffc41dbb5f3e14b06828220->enter($__internal_1c0b788be54619644a86970d86e796fda68dcb7dfffc41dbb5f3e14b06828220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_efe9c494f55be0f46cfacddeaa209f71b08613af3bdb50ea2dcaedb8c1be0553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe9c494f55be0f46cfacddeaa209f71b08613af3bdb50ea2dcaedb8c1be0553->enter($__internal_efe9c494f55be0f46cfacddeaa209f71b08613af3bdb50ea2dcaedb8c1be0553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1c0b788be54619644a86970d86e796fda68dcb7dfffc41dbb5f3e14b06828220->leave($__internal_1c0b788be54619644a86970d86e796fda68dcb7dfffc41dbb5f3e14b06828220_prof);

        
        $__internal_efe9c494f55be0f46cfacddeaa209f71b08613af3bdb50ea2dcaedb8c1be0553->leave($__internal_efe9c494f55be0f46cfacddeaa209f71b08613af3bdb50ea2dcaedb8c1be0553_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
