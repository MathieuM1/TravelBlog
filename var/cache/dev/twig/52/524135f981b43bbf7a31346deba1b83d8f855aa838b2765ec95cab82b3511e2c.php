<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df7bea6fa32731339c414fe21ad235af227cfac9c0e31e1f77bda36bdf9ba4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7bea6fa32731339c414fe21ad235af227cfac9c0e31e1f77bda36bdf9ba4aa->enter($__internal_df7bea6fa32731339c414fe21ad235af227cfac9c0e31e1f77bda36bdf9ba4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4d0f841d3be2778ae7f0880d17e8b3c48f2f89e3a72261365f4da6d164afbffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0f841d3be2778ae7f0880d17e8b3c48f2f89e3a72261365f4da6d164afbffe->enter($__internal_4d0f841d3be2778ae7f0880d17e8b3c48f2f89e3a72261365f4da6d164afbffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df7bea6fa32731339c414fe21ad235af227cfac9c0e31e1f77bda36bdf9ba4aa->leave($__internal_df7bea6fa32731339c414fe21ad235af227cfac9c0e31e1f77bda36bdf9ba4aa_prof);

        
        $__internal_4d0f841d3be2778ae7f0880d17e8b3c48f2f89e3a72261365f4da6d164afbffe->leave($__internal_4d0f841d3be2778ae7f0880d17e8b3c48f2f89e3a72261365f4da6d164afbffe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d06be1b6db8408474259099b68060d396de7cf37c900fee38b5e1ca70071c5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06be1b6db8408474259099b68060d396de7cf37c900fee38b5e1ca70071c5da->enter($__internal_d06be1b6db8408474259099b68060d396de7cf37c900fee38b5e1ca70071c5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c605e9952513a1f6093983246a92fd8d75a6e4545e18253702a3039f5d3f3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c605e9952513a1f6093983246a92fd8d75a6e4545e18253702a3039f5d3f3f6->enter($__internal_3c605e9952513a1f6093983246a92fd8d75a6e4545e18253702a3039f5d3f3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c605e9952513a1f6093983246a92fd8d75a6e4545e18253702a3039f5d3f3f6->leave($__internal_3c605e9952513a1f6093983246a92fd8d75a6e4545e18253702a3039f5d3f3f6_prof);

        
        $__internal_d06be1b6db8408474259099b68060d396de7cf37c900fee38b5e1ca70071c5da->leave($__internal_d06be1b6db8408474259099b68060d396de7cf37c900fee38b5e1ca70071c5da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e853572b183d0364dd86a042a3e0680ea983f8885859f33db95d3a0c7340da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e853572b183d0364dd86a042a3e0680ea983f8885859f33db95d3a0c7340da1->enter($__internal_8e853572b183d0364dd86a042a3e0680ea983f8885859f33db95d3a0c7340da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47fd6e4445997c1e7504dc628562dbf90fc4c6636db77714c400cc540d427601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fd6e4445997c1e7504dc628562dbf90fc4c6636db77714c400cc540d427601->enter($__internal_47fd6e4445997c1e7504dc628562dbf90fc4c6636db77714c400cc540d427601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_47fd6e4445997c1e7504dc628562dbf90fc4c6636db77714c400cc540d427601->leave($__internal_47fd6e4445997c1e7504dc628562dbf90fc4c6636db77714c400cc540d427601_prof);

        
        $__internal_8e853572b183d0364dd86a042a3e0680ea983f8885859f33db95d3a0c7340da1->leave($__internal_8e853572b183d0364dd86a042a3e0680ea983f8885859f33db95d3a0c7340da1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
