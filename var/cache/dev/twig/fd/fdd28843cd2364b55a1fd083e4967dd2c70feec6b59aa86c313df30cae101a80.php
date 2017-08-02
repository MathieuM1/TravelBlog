<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9a2149ac2c040d3388c79b803fca7cd9813f0477c1f0d35ecd25f1f3a45af415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c25bc55fff77f8684bc0d32057dc1ce26135df40d8b9887fb895d016fb3aaabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25bc55fff77f8684bc0d32057dc1ce26135df40d8b9887fb895d016fb3aaabc->enter($__internal_c25bc55fff77f8684bc0d32057dc1ce26135df40d8b9887fb895d016fb3aaabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_35c0709002904558c607cfc680afb31042bfcc50143d4925419a7beca31c3c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c0709002904558c607cfc680afb31042bfcc50143d4925419a7beca31c3c72->enter($__internal_35c0709002904558c607cfc680afb31042bfcc50143d4925419a7beca31c3c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c25bc55fff77f8684bc0d32057dc1ce26135df40d8b9887fb895d016fb3aaabc->leave($__internal_c25bc55fff77f8684bc0d32057dc1ce26135df40d8b9887fb895d016fb3aaabc_prof);

        
        $__internal_35c0709002904558c607cfc680afb31042bfcc50143d4925419a7beca31c3c72->leave($__internal_35c0709002904558c607cfc680afb31042bfcc50143d4925419a7beca31c3c72_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37987032ce32566fada8501a0549a77ad1762f018f37a0edaed7c033dd68dee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37987032ce32566fada8501a0549a77ad1762f018f37a0edaed7c033dd68dee7->enter($__internal_37987032ce32566fada8501a0549a77ad1762f018f37a0edaed7c033dd68dee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8de4b4aca212efebdb3aaf99d2c8d105658c011a58cf11c032922b893e57a326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de4b4aca212efebdb3aaf99d2c8d105658c011a58cf11c032922b893e57a326->enter($__internal_8de4b4aca212efebdb3aaf99d2c8d105658c011a58cf11c032922b893e57a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_8de4b4aca212efebdb3aaf99d2c8d105658c011a58cf11c032922b893e57a326->leave($__internal_8de4b4aca212efebdb3aaf99d2c8d105658c011a58cf11c032922b893e57a326_prof);

        
        $__internal_37987032ce32566fada8501a0549a77ad1762f018f37a0edaed7c033dd68dee7->leave($__internal_37987032ce32566fada8501a0549a77ad1762f018f37a0edaed7c033dd68dee7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
