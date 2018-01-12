<?php

/* NpoaSecurityBundle:auth:login.html.twig */
class __TwigTemplate_6a931c8d2c5a6f4b917a6dbebd9c1384896ccf226982d2447e71c0135e34b431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@NpoaSecurity/common/template.html.twig", "NpoaSecurityBundle:auth:login.html.twig", 1);
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
        $__internal_92f590688442da678c6e3f183bf89f39d40d2730d703e23742a37c143855be55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f590688442da678c6e3f183bf89f39d40d2730d703e23742a37c143855be55->enter($__internal_92f590688442da678c6e3f183bf89f39d40d2730d703e23742a37c143855be55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:auth:login.html.twig"));

        $__internal_28c337fcec571c44469d5ebdca180f82ef8ee8bddb2658776457817d4a37da60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c337fcec571c44469d5ebdca180f82ef8ee8bddb2658776457817d4a37da60->enter($__internal_28c337fcec571c44469d5ebdca180f82ef8ee8bddb2658776457817d4a37da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NpoaSecurityBundle:auth:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92f590688442da678c6e3f183bf89f39d40d2730d703e23742a37c143855be55->leave($__internal_92f590688442da678c6e3f183bf89f39d40d2730d703e23742a37c143855be55_prof);

        
        $__internal_28c337fcec571c44469d5ebdca180f82ef8ee8bddb2658776457817d4a37da60->leave($__internal_28c337fcec571c44469d5ebdca180f82ef8ee8bddb2658776457817d4a37da60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d47ac41d7c0aa2ceb9f877dd1a4a7961999df738e0dd92aa3967bcd26b1ec336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47ac41d7c0aa2ceb9f877dd1a4a7961999df738e0dd92aa3967bcd26b1ec336->enter($__internal_d47ac41d7c0aa2ceb9f877dd1a4a7961999df738e0dd92aa3967bcd26b1ec336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24b4b7214850e8a1714e283cffdb859f3626850318429f6d5aedf04fe4d109e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b4b7214850e8a1714e283cffdb859f3626850318429f6d5aedf04fe4d109e0->enter($__internal_24b4b7214850e8a1714e283cffdb859f3626850318429f6d5aedf04fe4d109e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24b4b7214850e8a1714e283cffdb859f3626850318429f6d5aedf04fe4d109e0->leave($__internal_24b4b7214850e8a1714e283cffdb859f3626850318429f6d5aedf04fe4d109e0_prof);

        
        $__internal_d47ac41d7c0aa2ceb9f877dd1a4a7961999df738e0dd92aa3967bcd26b1ec336->leave($__internal_d47ac41d7c0aa2ceb9f877dd1a4a7961999df738e0dd92aa3967bcd26b1ec336_prof);

    }

    public function getTemplateName()
    {
        return "NpoaSecurityBundle:auth:login.html.twig";
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
", "NpoaSecurityBundle:auth:login.html.twig", "K:\\Npointern\\vendor\\npoa\\security-bundle/Resources/views/auth/login.html.twig");
    }
}
