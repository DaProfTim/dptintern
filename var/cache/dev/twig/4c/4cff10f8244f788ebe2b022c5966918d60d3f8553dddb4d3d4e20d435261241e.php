<?php

/* email/email_change.txt.twig */
class __TwigTemplate_b037a0d3b05aef9138450c1edf495ac47e39a4344715a6b4846c4fb4ac481e42 extends Twig_Template
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
        $__internal_cdaaa537fe151482692c0f412796fd898afcc5894780d60cf69c1a51b2a6ba2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdaaa537fe151482692c0f412796fd898afcc5894780d60cf69c1a51b2a6ba2a->enter($__internal_cdaaa537fe151482692c0f412796fd898afcc5894780d60cf69c1a51b2a6ba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email_change.txt.twig"));

        $__internal_379cd3698f616af88fd7b77ed339e1898a97ec03873da92c4e49e94e70da6adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379cd3698f616af88fd7b77ed339e1898a97ec03873da92c4e49e94e70da6adb->enter($__internal_379cd3698f616af88fd7b77ed339e1898a97ec03873da92c4e49e94e70da6adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email_change.txt.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mails.default_greeting");
        echo ",

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.email_change_mail.intro");
        echo "
";
        // line 4
        echo (isset($context["email_change_confirm_link"]) || array_key_exists("email_change_confirm_link", $context) ? $context["email_change_confirm_link"] : (function () { throw new Twig_Error_Runtime('Variable "email_change_confirm_link" does not exist.', 4, $this->getSourceContext()); })());
        echo "

";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.email_change_mail.info");
        echo "

";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mails.signature");
        
        $__internal_cdaaa537fe151482692c0f412796fd898afcc5894780d60cf69c1a51b2a6ba2a->leave($__internal_cdaaa537fe151482692c0f412796fd898afcc5894780d60cf69c1a51b2a6ba2a_prof);

        
        $__internal_379cd3698f616af88fd7b77ed339e1898a97ec03873da92c4e49e94e70da6adb->leave($__internal_379cd3698f616af88fd7b77ed339e1898a97ec03873da92c4e49e94e70da6adb_prof);

    }

    public function getTemplateName()
    {
        return "email/email_change.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  39 => 6,  34 => 4,  30 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'mails.default_greeting'|trans }},

{{ 'user.email_change_mail.intro'|trans }}
{{ email_change_confirm_link }}

{{ 'user.email_change_mail.info'|trans }}

{{ 'mails.signature'|trans }}", "email/email_change.txt.twig", "K:\\Npointern\\app\\Resources\\views\\email\\email_change.txt.twig");
    }
}
