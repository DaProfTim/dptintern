<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_21c67e9a23e8f8036c36cba3b7d69c7720b826cf67d097377896c2d4ba92b5f5 extends Twig_Template
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
        $__internal_392dedd04c0bf84b056f9203657b29f34e6c4a1f80bde51d606947bcf8fda933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392dedd04c0bf84b056f9203657b29f34e6c4a1f80bde51d606947bcf8fda933->enter($__internal_392dedd04c0bf84b056f9203657b29f34e6c4a1f80bde51d606947bcf8fda933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9fb1b66c95420a1fdfc909a8c60f39312dfc81335fa7295e0c9f24f97a5cf7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb1b66c95420a1fdfc909a8c60f39312dfc81335fa7295e0c9f24f97a5cf7be->enter($__internal_9fb1b66c95420a1fdfc909a8c60f39312dfc81335fa7295e0c9f24f97a5cf7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_392dedd04c0bf84b056f9203657b29f34e6c4a1f80bde51d606947bcf8fda933->leave($__internal_392dedd04c0bf84b056f9203657b29f34e6c4a1f80bde51d606947bcf8fda933_prof);

        
        $__internal_9fb1b66c95420a1fdfc909a8c60f39312dfc81335fa7295e0c9f24f97a5cf7be->leave($__internal_9fb1b66c95420a1fdfc909a8c60f39312dfc81335fa7295e0c9f24f97a5cf7be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
