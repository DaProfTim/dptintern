<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c93c98184fab56c0c554831d7fe4ae24c2ed46d697b1f69cd0b1d05f96a3b8f0 extends Twig_Template
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
        $__internal_049c8f45b58953e32012136873017cb3a8aaf6a12936da43760a3d3cd4363764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049c8f45b58953e32012136873017cb3a8aaf6a12936da43760a3d3cd4363764->enter($__internal_049c8f45b58953e32012136873017cb3a8aaf6a12936da43760a3d3cd4363764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_eda9ef37068b35a98e5346836d30aae4a4c7dbf4f5410746a4ad219eff0415a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda9ef37068b35a98e5346836d30aae4a4c7dbf4f5410746a4ad219eff0415a1->enter($__internal_eda9ef37068b35a98e5346836d30aae4a4c7dbf4f5410746a4ad219eff0415a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_049c8f45b58953e32012136873017cb3a8aaf6a12936da43760a3d3cd4363764->leave($__internal_049c8f45b58953e32012136873017cb3a8aaf6a12936da43760a3d3cd4363764_prof);

        
        $__internal_eda9ef37068b35a98e5346836d30aae4a4c7dbf4f5410746a4ad219eff0415a1->leave($__internal_eda9ef37068b35a98e5346836d30aae4a4c7dbf4f5410746a4ad219eff0415a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
