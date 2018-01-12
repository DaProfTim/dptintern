<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_703da238e5d5ce3fcc57e2212ad1525a7b3af8b5f6c04edd7a654bb623f44f32 extends Twig_Template
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
        $__internal_23676c3f07bdb3b671d42aab168d3eddc4f105796028e2780fac7824637188e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23676c3f07bdb3b671d42aab168d3eddc4f105796028e2780fac7824637188e6->enter($__internal_23676c3f07bdb3b671d42aab168d3eddc4f105796028e2780fac7824637188e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_71cb7482d95337d1d3311ed63a5aecc4a5fc1f9eca160dfdbfb128211f51d385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cb7482d95337d1d3311ed63a5aecc4a5fc1f9eca160dfdbfb128211f51d385->enter($__internal_71cb7482d95337d1d3311ed63a5aecc4a5fc1f9eca160dfdbfb128211f51d385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_23676c3f07bdb3b671d42aab168d3eddc4f105796028e2780fac7824637188e6->leave($__internal_23676c3f07bdb3b671d42aab168d3eddc4f105796028e2780fac7824637188e6_prof);

        
        $__internal_71cb7482d95337d1d3311ed63a5aecc4a5fc1f9eca160dfdbfb128211f51d385->leave($__internal_71cb7482d95337d1d3311ed63a5aecc4a5fc1f9eca160dfdbfb128211f51d385_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
