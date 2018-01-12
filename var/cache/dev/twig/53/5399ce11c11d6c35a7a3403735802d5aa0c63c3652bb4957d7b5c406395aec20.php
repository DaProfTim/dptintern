<?php

/* :email:email_change.txt.twig */
class __TwigTemplate_b639c7d4f2ef95495d8b634c600a3e463b71acf37753e0022693f085709efb73 extends Twig_Template
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
        $__internal_d69b51c88ffd0c5d0a4b628e135b81f6a0dcd2652f062f2b768ee741adb59758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69b51c88ffd0c5d0a4b628e135b81f6a0dcd2652f062f2b768ee741adb59758->enter($__internal_d69b51c88ffd0c5d0a4b628e135b81f6a0dcd2652f062f2b768ee741adb59758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email_change.txt.twig"));

        $__internal_126c1de387d2363fc51a915327ad5e04ca642b6ae9e5524481aaca639b10855c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126c1de387d2363fc51a915327ad5e04ca642b6ae9e5524481aaca639b10855c->enter($__internal_126c1de387d2363fc51a915327ad5e04ca642b6ae9e5524481aaca639b10855c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email_change.txt.twig"));

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
        
        $__internal_d69b51c88ffd0c5d0a4b628e135b81f6a0dcd2652f062f2b768ee741adb59758->leave($__internal_d69b51c88ffd0c5d0a4b628e135b81f6a0dcd2652f062f2b768ee741adb59758_prof);

        
        $__internal_126c1de387d2363fc51a915327ad5e04ca642b6ae9e5524481aaca639b10855c->leave($__internal_126c1de387d2363fc51a915327ad5e04ca642b6ae9e5524481aaca639b10855c_prof);

    }

    public function getTemplateName()
    {
        return ":email:email_change.txt.twig";
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

{{ 'mails.signature'|trans }}", ":email:email_change.txt.twig", "K:\\Npointern\\app/Resources\\views/email/email_change.txt.twig");
    }
}
