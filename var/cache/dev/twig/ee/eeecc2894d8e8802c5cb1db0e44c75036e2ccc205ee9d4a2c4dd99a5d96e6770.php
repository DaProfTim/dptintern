<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_89c58c1f155b7cd0e7fe91c28d8d58f7e828491f09b4a15ece4ff5ef7cf4f4ff extends Twig_Template
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
        $__internal_c9809b0a2b00823dac19e8bb621ba570d2c9fcb3a29c69abeceb4691b8b23cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9809b0a2b00823dac19e8bb621ba570d2c9fcb3a29c69abeceb4691b8b23cad->enter($__internal_c9809b0a2b00823dac19e8bb621ba570d2c9fcb3a29c69abeceb4691b8b23cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_ed8df5b00add5af6b9e33a0ce9069bee5c8ec357cff3e1dd61d46461bef74f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8df5b00add5af6b9e33a0ce9069bee5c8ec357cff3e1dd61d46461bef74f11->enter($__internal_ed8df5b00add5af6b9e33a0ce9069bee5c8ec357cff3e1dd61d46461bef74f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_c9809b0a2b00823dac19e8bb621ba570d2c9fcb3a29c69abeceb4691b8b23cad->leave($__internal_c9809b0a2b00823dac19e8bb621ba570d2c9fcb3a29c69abeceb4691b8b23cad_prof);

        
        $__internal_ed8df5b00add5af6b9e33a0ce9069bee5c8ec357cff3e1dd61d46461bef74f11->leave($__internal_ed8df5b00add5af6b9e33a0ce9069bee5c8ec357cff3e1dd61d46461bef74f11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
