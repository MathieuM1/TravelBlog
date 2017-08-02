<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_34c3a0643dfc7d72a581e0e6090842eda852bb909c6261b5861c9eda5e28b623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ac61995ba93f0b0076fc943521104d3b9b25145e69306156b582a739429c340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac61995ba93f0b0076fc943521104d3b9b25145e69306156b582a739429c340->enter($__internal_4ac61995ba93f0b0076fc943521104d3b9b25145e69306156b582a739429c340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_0b7af6d4aa1fd088936a392b0a4f641a0482228cea8395bc309c284ffeed3d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7af6d4aa1fd088936a392b0a4f641a0482228cea8395bc309c284ffeed3d29->enter($__internal_0b7af6d4aa1fd088936a392b0a4f641a0482228cea8395bc309c284ffeed3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4ac61995ba93f0b0076fc943521104d3b9b25145e69306156b582a739429c340->leave($__internal_4ac61995ba93f0b0076fc943521104d3b9b25145e69306156b582a739429c340_prof);

        
        $__internal_0b7af6d4aa1fd088936a392b0a4f641a0482228cea8395bc309c284ffeed3d29->leave($__internal_0b7af6d4aa1fd088936a392b0a4f641a0482228cea8395bc309c284ffeed3d29_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d79ba0dd2fd0e72d6ba0fd71abbc652a707606aaf16dd3f414972e6035ed24e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79ba0dd2fd0e72d6ba0fd71abbc652a707606aaf16dd3f414972e6035ed24e6->enter($__internal_d79ba0dd2fd0e72d6ba0fd71abbc652a707606aaf16dd3f414972e6035ed24e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f2ffab790b8eb022803c9d669f32d321fc62f09522bab142282f7dd65a5e3d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ffab790b8eb022803c9d669f32d321fc62f09522bab142282f7dd65a5e3d22->enter($__internal_f2ffab790b8eb022803c9d669f32d321fc62f09522bab142282f7dd65a5e3d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_f2ffab790b8eb022803c9d669f32d321fc62f09522bab142282f7dd65a5e3d22->leave($__internal_f2ffab790b8eb022803c9d669f32d321fc62f09522bab142282f7dd65a5e3d22_prof);

        
        $__internal_d79ba0dd2fd0e72d6ba0fd71abbc652a707606aaf16dd3f414972e6035ed24e6->leave($__internal_d79ba0dd2fd0e72d6ba0fd71abbc652a707606aaf16dd3f414972e6035ed24e6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9a628cc657bae4d2f84d2c46c65d507e4ca0b6cc030392ed9904304c9bd3e860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a628cc657bae4d2f84d2c46c65d507e4ca0b6cc030392ed9904304c9bd3e860->enter($__internal_9a628cc657bae4d2f84d2c46c65d507e4ca0b6cc030392ed9904304c9bd3e860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_76e219abd06a456701bc6b8740c05b968e98f7a5839e291e6e287bec05684546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e219abd06a456701bc6b8740c05b968e98f7a5839e291e6e287bec05684546->enter($__internal_76e219abd06a456701bc6b8740c05b968e98f7a5839e291e6e287bec05684546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_76e219abd06a456701bc6b8740c05b968e98f7a5839e291e6e287bec05684546->leave($__internal_76e219abd06a456701bc6b8740c05b968e98f7a5839e291e6e287bec05684546_prof);

        
        $__internal_9a628cc657bae4d2f84d2c46c65d507e4ca0b6cc030392ed9904304c9bd3e860->leave($__internal_9a628cc657bae4d2f84d2c46c65d507e4ca0b6cc030392ed9904304c9bd3e860_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b1b94cd29e85b9c6aceccdf7ad9b2b3197b996fa03460be9ef31249e3b400cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1b94cd29e85b9c6aceccdf7ad9b2b3197b996fa03460be9ef31249e3b400cc->enter($__internal_7b1b94cd29e85b9c6aceccdf7ad9b2b3197b996fa03460be9ef31249e3b400cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6d87d1232833ed7bc5c9746ad7d12accfba11905464ad47d8a5fb17ffaba0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d87d1232833ed7bc5c9746ad7d12accfba11905464ad47d8a5fb17ffaba0782->enter($__internal_6d87d1232833ed7bc5c9746ad7d12accfba11905464ad47d8a5fb17ffaba0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6d87d1232833ed7bc5c9746ad7d12accfba11905464ad47d8a5fb17ffaba0782->leave($__internal_6d87d1232833ed7bc5c9746ad7d12accfba11905464ad47d8a5fb17ffaba0782_prof);

        
        $__internal_7b1b94cd29e85b9c6aceccdf7ad9b2b3197b996fa03460be9ef31249e3b400cc->leave($__internal_7b1b94cd29e85b9c6aceccdf7ad9b2b3197b996fa03460be9ef31249e3b400cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
