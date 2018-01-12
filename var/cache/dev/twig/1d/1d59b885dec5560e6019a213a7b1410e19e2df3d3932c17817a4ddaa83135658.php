<?php

/* @NpoaSecurity/auth/login.html.twig */
class __TwigTemplate_f95acacf07c693027caf4bf5e84f688b9001024b96ff1de58f52feef6788afde extends Twig_Template
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
        $__internal_b97465cae489eeb759ada7eaf9b0a92286f2ce2b3560d0feaf4c7ba7fdb881fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97465cae489eeb759ada7eaf9b0a92286f2ce2b3560d0feaf4c7ba7fdb881fc->enter($__internal_b97465cae489eeb759ada7eaf9b0a92286f2ce2b3560d0feaf4c7ba7fdb881fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/auth/login.html.twig"));

        $__internal_c677de0d78c1232550d1a0fba08c08bd4d442c4b759831c9cc879a33afef61bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c677de0d78c1232550d1a0fba08c08bd4d442c4b759831c9cc879a33afef61bc->enter($__internal_c677de0d78c1232550d1a0fba08c08bd4d442c4b759831c9cc879a33afef61bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NpoaSecurity/auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b97465cae489eeb759ada7eaf9b0a92286f2ce2b3560d0feaf4c7ba7fdb881fc->leave($__internal_b97465cae489eeb759ada7eaf9b0a92286f2ce2b3560d0feaf4c7ba7fdb881fc_prof);

        
        $__internal_c677de0d78c1232550d1a0fba08c08bd4d442c4b759831c9cc879a33afef61bc->leave($__internal_c677de0d78c1232550d1a0fba08c08bd4d442c4b759831c9cc879a33afef61bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d706efae1ab48ba1bb589c169b5d05fb82b48df4b4c24697e2f806672fbbf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d706efae1ab48ba1bb589c169b5d05fb82b48df4b4c24697e2f806672fbbf66->enter($__internal_1d706efae1ab48ba1bb589c169b5d05fb82b48df4b4c24697e2f806672fbbf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96cb5d441e00f5eafa12fe3b71f32d22662f15dd6b265d35f4dd3f93944e86ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cb5d441e00f5eafa12fe3b71f32d22662f15dd6b265d35f4dd3f93944e86ed->enter($__internal_96cb5d441e00f5eafa12fe3b71f32d22662f15dd6b265d35f4dd3f93944e86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })())) {
            // line 12
            echo "                        <br /><div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_96cb5d441e00f5eafa12fe3b71f32d22662f15dd6b265d35f4dd3f93944e86ed->leave($__internal_96cb5d441e00f5eafa12fe3b71f32d22662f15dd6b265d35f4dd3f93944e86ed_prof);

        
        $__internal_1d706efae1ab48ba1bb589c169b5d05fb82b48df4b4c24697e2f806672fbbf66->leave($__internal_1d706efae1ab48ba1bb589c169b5d05fb82b48df4b4c24697e2f806672fbbf66_prof);

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
        return array (  76 => 17,  69 => 14,  63 => 12,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NpoaSecurity/common/template.html.twig\" %}

{% block body %}

<div class=\"container-fluid login\">
    <div class=\"row-fluid\">
        <div class=\"panel centering\" style=\"width: 400px;\">
            <div class=\"panel-body\">
                <div class=\"text-center\" style=\"margin-bottom: 20px;\"><img src=\"/bundles/npoasecurity/img/npoa_logo.png\" alt=\"NPO Applications\" /></div>
                <form action=\"{{ path('npoa_security_auth_login') }}\" method=\"post\">
                    {% if error %}
                        <br /><div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />
                    <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Benutzername\" autofocus=\"autofocus\" />
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

{% endblock %}
", "@NpoaSecurity/auth/login.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle\\Resources\\views\\auth\\login.html.twig");
    }
}
