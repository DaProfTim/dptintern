<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c2127f8ce709eeb89a8f301d276b0503a92b5fb700f61b588cbc0953e41699c4 extends Twig_Template
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
        $__internal_d81a3285cb6a308bfe01a098cbf94da6684bf244cf249ffeba58e0328f9151e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81a3285cb6a308bfe01a098cbf94da6684bf244cf249ffeba58e0328f9151e0->enter($__internal_d81a3285cb6a308bfe01a098cbf94da6684bf244cf249ffeba58e0328f9151e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d18724546dfabe49c95eeaa8af870d15085fbe141bac0e587e7051eba1ef772c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18724546dfabe49c95eeaa8af870d15085fbe141bac0e587e7051eba1ef772c->enter($__internal_d18724546dfabe49c95eeaa8af870d15085fbe141bac0e587e7051eba1ef772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d81a3285cb6a308bfe01a098cbf94da6684bf244cf249ffeba58e0328f9151e0->leave($__internal_d81a3285cb6a308bfe01a098cbf94da6684bf244cf249ffeba58e0328f9151e0_prof);

        
        $__internal_d18724546dfabe49c95eeaa8af870d15085fbe141bac0e587e7051eba1ef772c->leave($__internal_d18724546dfabe49c95eeaa8af870d15085fbe141bac0e587e7051eba1ef772c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
