<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c0a2402f919f787dff7887786bd352d4ab8e7d6983f3bad63bccc6f13f8530a8 extends Twig_Template
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
        $__internal_4cca6732a2850be6c9ec473c5713c028da5384d6c595654f8c2bf5f4a893929f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cca6732a2850be6c9ec473c5713c028da5384d6c595654f8c2bf5f4a893929f->enter($__internal_4cca6732a2850be6c9ec473c5713c028da5384d6c595654f8c2bf5f4a893929f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_df9f025bbad1c8dd1e4d75bf846aca925fbcc106563937dd05921193701cac87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9f025bbad1c8dd1e4d75bf846aca925fbcc106563937dd05921193701cac87->enter($__internal_df9f025bbad1c8dd1e4d75bf846aca925fbcc106563937dd05921193701cac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4cca6732a2850be6c9ec473c5713c028da5384d6c595654f8c2bf5f4a893929f->leave($__internal_4cca6732a2850be6c9ec473c5713c028da5384d6c595654f8c2bf5f4a893929f_prof);

        
        $__internal_df9f025bbad1c8dd1e4d75bf846aca925fbcc106563937dd05921193701cac87->leave($__internal_df9f025bbad1c8dd1e4d75bf846aca925fbcc106563937dd05921193701cac87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
