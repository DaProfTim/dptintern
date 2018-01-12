<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_634dc3786f072bb6273c2a270281235b3afb72ff10854f7909cf728d5d1c1cb5 extends Twig_Template
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
        $__internal_f42d3166b22b2bd714b99ddf4ce60bb9e0cee73289c20c4148a35ecf28c33db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42d3166b22b2bd714b99ddf4ce60bb9e0cee73289c20c4148a35ecf28c33db4->enter($__internal_f42d3166b22b2bd714b99ddf4ce60bb9e0cee73289c20c4148a35ecf28c33db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8f457434cc7e782eab3a746ac12a036c13e843e337ab38fd9d0044e6db8742db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f457434cc7e782eab3a746ac12a036c13e843e337ab38fd9d0044e6db8742db->enter($__internal_8f457434cc7e782eab3a746ac12a036c13e843e337ab38fd9d0044e6db8742db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f42d3166b22b2bd714b99ddf4ce60bb9e0cee73289c20c4148a35ecf28c33db4->leave($__internal_f42d3166b22b2bd714b99ddf4ce60bb9e0cee73289c20c4148a35ecf28c33db4_prof);

        
        $__internal_8f457434cc7e782eab3a746ac12a036c13e843e337ab38fd9d0044e6db8742db->leave($__internal_8f457434cc7e782eab3a746ac12a036c13e843e337ab38fd9d0044e6db8742db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
