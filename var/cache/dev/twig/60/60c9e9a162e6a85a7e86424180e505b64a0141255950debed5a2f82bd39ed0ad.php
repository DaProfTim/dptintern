<?php

/* email/password_reset.txt.twig */
class __TwigTemplate_ec41236e68e5436616959c98f428eb16015971fa6fb835780d69a97709a8b117 extends Twig_Template
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
        $__internal_bc4e47f17c45d0702acf1a65ddbca5fdb9991a7abd66cd1996970160d1dc5b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4e47f17c45d0702acf1a65ddbca5fdb9991a7abd66cd1996970160d1dc5b4e->enter($__internal_bc4e47f17c45d0702acf1a65ddbca5fdb9991a7abd66cd1996970160d1dc5b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/password_reset.txt.twig"));

        $__internal_221e5af281fc48d313668d9a2898947baab8e7c3b91f7864ce128179693d5b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221e5af281fc48d313668d9a2898947baab8e7c3b91f7864ce128179693d5b17->enter($__internal_221e5af281fc48d313668d9a2898947baab8e7c3b91f7864ce128179693d5b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/password_reset.txt.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mails.default_greeting");
        echo ",

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.password_reset_mail.intro");
        echo "
";
        // line 4
        echo (isset($context["password_reset_confirm_link"]) || array_key_exists("password_reset_confirm_link", $context) ? $context["password_reset_confirm_link"] : (function () { throw new Twig_Error_Runtime('Variable "password_reset_confirm_link" does not exist.', 4, $this->getSourceContext()); })());
        echo "

";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.password_reset_mail.info");
        echo "
";
        // line 7
        echo (isset($context["password_reset_link"]) || array_key_exists("password_reset_link", $context) ? $context["password_reset_link"] : (function () { throw new Twig_Error_Runtime('Variable "password_reset_link" does not exist.', 7, $this->getSourceContext()); })());
        echo "

";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mails.signature");
        
        $__internal_bc4e47f17c45d0702acf1a65ddbca5fdb9991a7abd66cd1996970160d1dc5b4e->leave($__internal_bc4e47f17c45d0702acf1a65ddbca5fdb9991a7abd66cd1996970160d1dc5b4e_prof);

        
        $__internal_221e5af281fc48d313668d9a2898947baab8e7c3b91f7864ce128179693d5b17->leave($__internal_221e5af281fc48d313668d9a2898947baab8e7c3b91f7864ce128179693d5b17_prof);

    }

    public function getTemplateName()
    {
        return "email/password_reset.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  43 => 7,  39 => 6,  34 => 4,  30 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'mails.default_greeting'|trans }},

{{ 'login.password_reset_mail.intro'|trans }}
{{ password_reset_confirm_link }}

{{ 'login.password_reset_mail.info'|trans }}
{{ password_reset_link }}

{{ 'mails.signature'|trans }}", "email/password_reset.txt.twig", "K:\\Npointern\\app\\Resources\\views\\email\\password_reset.txt.twig");
    }
}
