<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_fca404fe2fe3ce83bf5bf158f52b956659e76d9815f648a7017c37a7a6d98573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca404fe2fe3ce83bf5bf158f52b956659e76d9815f648a7017c37a7a6d98573->enter($__internal_fca404fe2fe3ce83bf5bf158f52b956659e76d9815f648a7017c37a7a6d98573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f63df611ae5db963d59b9936dc56b019281bd6a136812196edcc4c2d956ce219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63df611ae5db963d59b9936dc56b019281bd6a136812196edcc4c2d956ce219->enter($__internal_f63df611ae5db963d59b9936dc56b019281bd6a136812196edcc4c2d956ce219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca404fe2fe3ce83bf5bf158f52b956659e76d9815f648a7017c37a7a6d98573->leave($__internal_fca404fe2fe3ce83bf5bf158f52b956659e76d9815f648a7017c37a7a6d98573_prof);

        
        $__internal_f63df611ae5db963d59b9936dc56b019281bd6a136812196edcc4c2d956ce219->leave($__internal_f63df611ae5db963d59b9936dc56b019281bd6a136812196edcc4c2d956ce219_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb1374301c5b0145d4bb79c4209a15ba04b98ffc5cf7709a239f77119dc67ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1374301c5b0145d4bb79c4209a15ba04b98ffc5cf7709a239f77119dc67ed5->enter($__internal_cb1374301c5b0145d4bb79c4209a15ba04b98ffc5cf7709a239f77119dc67ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7a984c106b21482f1440e538a1310206ce45239fb3990b2a7689ecdb9635b3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a984c106b21482f1440e538a1310206ce45239fb3990b2a7689ecdb9635b3fc->enter($__internal_7a984c106b21482f1440e538a1310206ce45239fb3990b2a7689ecdb9635b3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7a984c106b21482f1440e538a1310206ce45239fb3990b2a7689ecdb9635b3fc->leave($__internal_7a984c106b21482f1440e538a1310206ce45239fb3990b2a7689ecdb9635b3fc_prof);

        
        $__internal_cb1374301c5b0145d4bb79c4209a15ba04b98ffc5cf7709a239f77119dc67ed5->leave($__internal_cb1374301c5b0145d4bb79c4209a15ba04b98ffc5cf7709a239f77119dc67ed5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
