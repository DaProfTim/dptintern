<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a10869c43aac6a32d7559003bf9443f8c82eb5d5a5988c762540f5c3447b6fed extends Twig_Template
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
        $__internal_602c7fbc389df9066f397abde5caff4bc5a3e4da3fc43ae92f456ce72dbd8550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602c7fbc389df9066f397abde5caff4bc5a3e4da3fc43ae92f456ce72dbd8550->enter($__internal_602c7fbc389df9066f397abde5caff4bc5a3e4da3fc43ae92f456ce72dbd8550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_104b506b85332c10bc4d780bf2f1372535cacd20d1e5b2269437dca7e847f8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104b506b85332c10bc4d780bf2f1372535cacd20d1e5b2269437dca7e847f8f0->enter($__internal_104b506b85332c10bc4d780bf2f1372535cacd20d1e5b2269437dca7e847f8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_602c7fbc389df9066f397abde5caff4bc5a3e4da3fc43ae92f456ce72dbd8550->leave($__internal_602c7fbc389df9066f397abde5caff4bc5a3e4da3fc43ae92f456ce72dbd8550_prof);

        
        $__internal_104b506b85332c10bc4d780bf2f1372535cacd20d1e5b2269437dca7e847f8f0->leave($__internal_104b506b85332c10bc4d780bf2f1372535cacd20d1e5b2269437dca7e847f8f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
