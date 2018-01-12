<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ff9e589c781468db1fea172dc62a65c205702fba1e772f95d93122ec810b65b8 extends Twig_Template
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
        $__internal_c2449737f3cc9ad17fa875e9e8d601b5d2bb2e5617e9cfb7beb68e73df0c85f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2449737f3cc9ad17fa875e9e8d601b5d2bb2e5617e9cfb7beb68e73df0c85f8->enter($__internal_c2449737f3cc9ad17fa875e9e8d601b5d2bb2e5617e9cfb7beb68e73df0c85f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bbdd3aa906c92fe8499b4d1850a3d4302485f0e71f0c847d1dff24a3904cafb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdd3aa906c92fe8499b4d1850a3d4302485f0e71f0c847d1dff24a3904cafb4->enter($__internal_bbdd3aa906c92fe8499b4d1850a3d4302485f0e71f0c847d1dff24a3904cafb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_c2449737f3cc9ad17fa875e9e8d601b5d2bb2e5617e9cfb7beb68e73df0c85f8->leave($__internal_c2449737f3cc9ad17fa875e9e8d601b5d2bb2e5617e9cfb7beb68e73df0c85f8_prof);

        
        $__internal_bbdd3aa906c92fe8499b4d1850a3d4302485f0e71f0c847d1dff24a3904cafb4->leave($__internal_bbdd3aa906c92fe8499b4d1850a3d4302485f0e71f0c847d1dff24a3904cafb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "K:\\Npointern\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
