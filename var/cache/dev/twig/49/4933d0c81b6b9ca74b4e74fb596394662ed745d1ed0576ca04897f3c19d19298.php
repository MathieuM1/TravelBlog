<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28ab80c1e583b1c773e8806d489198989ab052e59bf05c700fc3d8125af683b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ab80c1e583b1c773e8806d489198989ab052e59bf05c700fc3d8125af683b3->enter($__internal_28ab80c1e583b1c773e8806d489198989ab052e59bf05c700fc3d8125af683b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ca578a6022f973c1d40ae1d1a2635fc12de31e626a55d7a318e57c616f99aacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca578a6022f973c1d40ae1d1a2635fc12de31e626a55d7a318e57c616f99aacc->enter($__internal_ca578a6022f973c1d40ae1d1a2635fc12de31e626a55d7a318e57c616f99aacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ab80c1e583b1c773e8806d489198989ab052e59bf05c700fc3d8125af683b3->leave($__internal_28ab80c1e583b1c773e8806d489198989ab052e59bf05c700fc3d8125af683b3_prof);

        
        $__internal_ca578a6022f973c1d40ae1d1a2635fc12de31e626a55d7a318e57c616f99aacc->leave($__internal_ca578a6022f973c1d40ae1d1a2635fc12de31e626a55d7a318e57c616f99aacc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9331d30ca0f48863f4b32f63c2b3ccfdba06d86b124850fad5921b0fee05384d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9331d30ca0f48863f4b32f63c2b3ccfdba06d86b124850fad5921b0fee05384d->enter($__internal_9331d30ca0f48863f4b32f63c2b3ccfdba06d86b124850fad5921b0fee05384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a39a630856df9d522cc6287551b2846fafad37fc583b6d1b3718e7aee2e2b62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39a630856df9d522cc6287551b2846fafad37fc583b6d1b3718e7aee2e2b62d->enter($__internal_a39a630856df9d522cc6287551b2846fafad37fc583b6d1b3718e7aee2e2b62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a39a630856df9d522cc6287551b2846fafad37fc583b6d1b3718e7aee2e2b62d->leave($__internal_a39a630856df9d522cc6287551b2846fafad37fc583b6d1b3718e7aee2e2b62d_prof);

        
        $__internal_9331d30ca0f48863f4b32f63c2b3ccfdba06d86b124850fad5921b0fee05384d->leave($__internal_9331d30ca0f48863f4b32f63c2b3ccfdba06d86b124850fad5921b0fee05384d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f460c40fed371b98fd9cef0fd17be3861c94e0998f976e179122d8dd91604226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f460c40fed371b98fd9cef0fd17be3861c94e0998f976e179122d8dd91604226->enter($__internal_f460c40fed371b98fd9cef0fd17be3861c94e0998f976e179122d8dd91604226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3db0db498179b6b0a5a36f9c72e261ec9fd890bc32377a6256963e5647e1f562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db0db498179b6b0a5a36f9c72e261ec9fd890bc32377a6256963e5647e1f562->enter($__internal_3db0db498179b6b0a5a36f9c72e261ec9fd890bc32377a6256963e5647e1f562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3db0db498179b6b0a5a36f9c72e261ec9fd890bc32377a6256963e5647e1f562->leave($__internal_3db0db498179b6b0a5a36f9c72e261ec9fd890bc32377a6256963e5647e1f562_prof);

        
        $__internal_f460c40fed371b98fd9cef0fd17be3861c94e0998f976e179122d8dd91604226->leave($__internal_f460c40fed371b98fd9cef0fd17be3861c94e0998f976e179122d8dd91604226_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
