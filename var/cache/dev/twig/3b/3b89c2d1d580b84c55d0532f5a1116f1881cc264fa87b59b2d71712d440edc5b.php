<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_388f287bb6b9c1bb7952fec2a47e70458c26f46490be8aab5413823b64370fbb extends Twig_Template
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
        $__internal_befe847ba64e22597067925a8529bd54a8673a6b76b5f433c4242b9c3daf77a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befe847ba64e22597067925a8529bd54a8673a6b76b5f433c4242b9c3daf77a3->enter($__internal_befe847ba64e22597067925a8529bd54a8673a6b76b5f433c4242b9c3daf77a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_dd0368dad7362797d256b730c73fad37629f6f947aa1c6d0a207f91a8ed511c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0368dad7362797d256b730c73fad37629f6f947aa1c6d0a207f91a8ed511c5->enter($__internal_dd0368dad7362797d256b730c73fad37629f6f947aa1c6d0a207f91a8ed511c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_befe847ba64e22597067925a8529bd54a8673a6b76b5f433c4242b9c3daf77a3->leave($__internal_befe847ba64e22597067925a8529bd54a8673a6b76b5f433c4242b9c3daf77a3_prof);

        
        $__internal_dd0368dad7362797d256b730c73fad37629f6f947aa1c6d0a207f91a8ed511c5->leave($__internal_dd0368dad7362797d256b730c73fad37629f6f947aa1c6d0a207f91a8ed511c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
