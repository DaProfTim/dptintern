<?php

/* :email:password_reset.txt.twig */
class __TwigTemplate_4c377bc6ebccd14badaaaa62ca1a90e8a526358d0439b1c57bbf9bbfb3018b62 extends Twig_Template
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
        $__internal_7931b84e3465ae99aa1c99302f36d3e9f46168add6691c61068c3ed583c49f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7931b84e3465ae99aa1c99302f36d3e9f46168add6691c61068c3ed583c49f8d->enter($__internal_7931b84e3465ae99aa1c99302f36d3e9f46168add6691c61068c3ed583c49f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:password_reset.txt.twig"));

        $__internal_a9ce7458f31f01be7d2dd4a936610db43f35feb05bab10c30564dce52a20e389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ce7458f31f01be7d2dd4a936610db43f35feb05bab10c30564dce52a20e389->enter($__internal_a9ce7458f31f01be7d2dd4a936610db43f35feb05bab10c30564dce52a20e389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:password_reset.txt.twig"));

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
        
        $__internal_7931b84e3465ae99aa1c99302f36d3e9f46168add6691c61068c3ed583c49f8d->leave($__internal_7931b84e3465ae99aa1c99302f36d3e9f46168add6691c61068c3ed583c49f8d_prof);

        
        $__internal_a9ce7458f31f01be7d2dd4a936610db43f35feb05bab10c30564dce52a20e389->leave($__internal_a9ce7458f31f01be7d2dd4a936610db43f35feb05bab10c30564dce52a20e389_prof);

    }

    public function getTemplateName()
    {
        return ":email:password_reset.txt.twig";
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

{{ 'mails.signature'|trans }}", ":email:password_reset.txt.twig", "K:\\Npointern\\app/Resources\\views/email/password_reset.txt.twig");
    }
}
