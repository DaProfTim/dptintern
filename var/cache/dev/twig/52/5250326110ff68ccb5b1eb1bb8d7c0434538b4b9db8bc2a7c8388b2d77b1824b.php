<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0afb35db71556b1f2bbe5932cef75ba47fd9d27450131bb42c4e33b2f0ffa559 extends Twig_Template
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
        $__internal_741900540401a20531ad32c7097a76ddf8d60022140db07236ee3e75337c1e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741900540401a20531ad32c7097a76ddf8d60022140db07236ee3e75337c1e14->enter($__internal_741900540401a20531ad32c7097a76ddf8d60022140db07236ee3e75337c1e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_05944b8f7845a2bb6b11ccb5254e8f25feb9c081a72c282dc2b310fbba1c2fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05944b8f7845a2bb6b11ccb5254e8f25feb9c081a72c282dc2b310fbba1c2fee->enter($__internal_05944b8f7845a2bb6b11ccb5254e8f25feb9c081a72c282dc2b310fbba1c2fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_741900540401a20531ad32c7097a76ddf8d60022140db07236ee3e75337c1e14->leave($__internal_741900540401a20531ad32c7097a76ddf8d60022140db07236ee3e75337c1e14_prof);

        
        $__internal_05944b8f7845a2bb6b11ccb5254e8f25feb9c081a72c282dc2b310fbba1c2fee->leave($__internal_05944b8f7845a2bb6b11ccb5254e8f25feb9c081a72c282dc2b310fbba1c2fee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
