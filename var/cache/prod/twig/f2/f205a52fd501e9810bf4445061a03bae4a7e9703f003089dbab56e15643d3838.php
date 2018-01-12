<?php

/* @NpoaSecurity/auth/login.html.twig */
class __TwigTemplate_f0c1d0349f0914a1bf0d9a85fcffb857de79646656ac71dc0eecc480bcd83c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@NpoaSecurity/common/template.html.twig", "@NpoaSecurity/auth/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NpoaSecurity/common/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container-fluid login\">
    <div class=\"row-fluid\">
        <div class=\"panel centering\" style=\"width: 400px;\">
            <div class=\"panel-body\">
                <div class=\"text-center\" style=\"margin-bottom: 20px;\"><img src=\"/bundles/npoasecurity/img/npoa_logo.png\" alt=\"NPO Applications\" /></div>
                <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("npoa_security_auth_login");
        echo "\" method=\"post\">
                    ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "                        <br /><div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 14
        echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                    <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Benutzername\" autofocus=\"autofocus\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Passwort\" />
                    </div>
                    <br />
                    <div class=\"form-group\">
                        <button class=\"btn btn-lg btn-primary btn-block btn-raised\" type=\"submit\">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@NpoaSecurity/auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  51 => 14,  45 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NpoaSecurity/auth/login.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\auth\\login.html.twig");
    }
}
