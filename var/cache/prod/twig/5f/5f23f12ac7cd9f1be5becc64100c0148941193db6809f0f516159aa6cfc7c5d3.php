<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_8243e33138a701e48607408ceb996eff4611567c019048f12e66a9d4ad9fd771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"de\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=10, user-scalable=yes\">
        <title>Da ist etwas schief gegangen!</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "    </body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/errorpage.css"), "html", null, true);
        echo "\" />
         ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
            <div id=\"wrapper\">
                <div id=\"wrapper_inner\">
                    <div id=\"content\">
                        <h1>Serverfehler</h1>

                        <p class=\"error\">
                            Auf dem Server ist ein Fehler aufgetreten. Bitte versuchen Sie es in einigen Minuten eventuell noch einmal.
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Klicken Sie hier, um zurück zur Startseite zu gelangen</a>.
                        </p>
                    </div>
                </div>
            </div>

        ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  58 => 16,  55 => 15,  48 => 11,  45 => 10,  40 => 31,  38 => 15,  34 => 13,  32 => 10,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error500.html.twig", "K:\\Npointern\\app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
