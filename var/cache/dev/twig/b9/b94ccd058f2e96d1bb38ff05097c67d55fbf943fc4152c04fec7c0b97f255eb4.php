<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9c73dd7088a3784e6baed922fef0174c312499d7da8fd69eb3463049c30a2a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_c75c97c0eb0e92b26a9cbf2932ec51d2527c9149dd55924c32de5b1a0d5a1b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75c97c0eb0e92b26a9cbf2932ec51d2527c9149dd55924c32de5b1a0d5a1b42->enter($__internal_c75c97c0eb0e92b26a9cbf2932ec51d2527c9149dd55924c32de5b1a0d5a1b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e941845640389424aad66cc9b78ddf6a79802f4cd549b66ee01e3073bff449e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e941845640389424aad66cc9b78ddf6a79802f4cd549b66ee01e3073bff449e4->enter($__internal_e941845640389424aad66cc9b78ddf6a79802f4cd549b66ee01e3073bff449e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75c97c0eb0e92b26a9cbf2932ec51d2527c9149dd55924c32de5b1a0d5a1b42->leave($__internal_c75c97c0eb0e92b26a9cbf2932ec51d2527c9149dd55924c32de5b1a0d5a1b42_prof);

        
        $__internal_e941845640389424aad66cc9b78ddf6a79802f4cd549b66ee01e3073bff449e4->leave($__internal_e941845640389424aad66cc9b78ddf6a79802f4cd549b66ee01e3073bff449e4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c34c609e91cf9a7896601ccf47869daa36e27060c53d8891fcfecf5aae4df04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c34c609e91cf9a7896601ccf47869daa36e27060c53d8891fcfecf5aae4df04->enter($__internal_1c34c609e91cf9a7896601ccf47869daa36e27060c53d8891fcfecf5aae4df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_955a6107ebf57f96de7ca13f90eab741ae22fe514d8af1d3e8d2fd0d7055593c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955a6107ebf57f96de7ca13f90eab741ae22fe514d8af1d3e8d2fd0d7055593c->enter($__internal_955a6107ebf57f96de7ca13f90eab741ae22fe514d8af1d3e8d2fd0d7055593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_955a6107ebf57f96de7ca13f90eab741ae22fe514d8af1d3e8d2fd0d7055593c->leave($__internal_955a6107ebf57f96de7ca13f90eab741ae22fe514d8af1d3e8d2fd0d7055593c_prof);

        
        $__internal_1c34c609e91cf9a7896601ccf47869daa36e27060c53d8891fcfecf5aae4df04->leave($__internal_1c34c609e91cf9a7896601ccf47869daa36e27060c53d8891fcfecf5aae4df04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
