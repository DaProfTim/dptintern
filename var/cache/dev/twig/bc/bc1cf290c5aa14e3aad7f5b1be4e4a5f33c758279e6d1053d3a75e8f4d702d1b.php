<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_aa4a64f693207fd9fe07ed8c7194423dad6ef8eba92ce11f2b45863c6a79ef4d extends Twig_Template
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
        $__internal_13172a6b4ea02f49075307797fc1d821ce1a7b8807e365cdc137e40fa864f6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13172a6b4ea02f49075307797fc1d821ce1a7b8807e365cdc137e40fa864f6c0->enter($__internal_13172a6b4ea02f49075307797fc1d821ce1a7b8807e365cdc137e40fa864f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a251fdf5766be1d8f2a08af2fba5ce05ec99beadce6352d1a2f70f1f9d757367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a251fdf5766be1d8f2a08af2fba5ce05ec99beadce6352d1a2f70f1f9d757367->enter($__internal_a251fdf5766be1d8f2a08af2fba5ce05ec99beadce6352d1a2f70f1f9d757367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_13172a6b4ea02f49075307797fc1d821ce1a7b8807e365cdc137e40fa864f6c0->leave($__internal_13172a6b4ea02f49075307797fc1d821ce1a7b8807e365cdc137e40fa864f6c0_prof);

        
        $__internal_a251fdf5766be1d8f2a08af2fba5ce05ec99beadce6352d1a2f70f1f9d757367->leave($__internal_a251fdf5766be1d8f2a08af2fba5ce05ec99beadce6352d1a2f70f1f9d757367_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
