<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b68ddfaa9496432b979fb7fc7a735049eaf60beafd570163f408c53d4e6fdb26 extends Twig_Template
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
        $__internal_e460c5d141c62536aba1e52b4b252ec1981a4913dded241c3d39cb52dedfa15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e460c5d141c62536aba1e52b4b252ec1981a4913dded241c3d39cb52dedfa15d->enter($__internal_e460c5d141c62536aba1e52b4b252ec1981a4913dded241c3d39cb52dedfa15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5e5cc593fce4e6978b1505ac9c76bf75efcd120046fbda4b8ecca97f22a23a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5cc593fce4e6978b1505ac9c76bf75efcd120046fbda4b8ecca97f22a23a29->enter($__internal_5e5cc593fce4e6978b1505ac9c76bf75efcd120046fbda4b8ecca97f22a23a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e460c5d141c62536aba1e52b4b252ec1981a4913dded241c3d39cb52dedfa15d->leave($__internal_e460c5d141c62536aba1e52b4b252ec1981a4913dded241c3d39cb52dedfa15d_prof);

        
        $__internal_5e5cc593fce4e6978b1505ac9c76bf75efcd120046fbda4b8ecca97f22a23a29->leave($__internal_5e5cc593fce4e6978b1505ac9c76bf75efcd120046fbda4b8ecca97f22a23a29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
