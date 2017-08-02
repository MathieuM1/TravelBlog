<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a5ad51bf1f3892471eb87d975f1a0ef906e8c7cf2ad0e7da98ca00190b851b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5ad51bf1f3892471eb87d975f1a0ef906e8c7cf2ad0e7da98ca00190b851b0->enter($__internal_9a5ad51bf1f3892471eb87d975f1a0ef906e8c7cf2ad0e7da98ca00190b851b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f1e21893a943b4b2ebdd5bc93e861ce36ae3585a1c91bf4418147c766dab1a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e21893a943b4b2ebdd5bc93e861ce36ae3585a1c91bf4418147c766dab1a68->enter($__internal_f1e21893a943b4b2ebdd5bc93e861ce36ae3585a1c91bf4418147c766dab1a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5ad51bf1f3892471eb87d975f1a0ef906e8c7cf2ad0e7da98ca00190b851b0->leave($__internal_9a5ad51bf1f3892471eb87d975f1a0ef906e8c7cf2ad0e7da98ca00190b851b0_prof);

        
        $__internal_f1e21893a943b4b2ebdd5bc93e861ce36ae3585a1c91bf4418147c766dab1a68->leave($__internal_f1e21893a943b4b2ebdd5bc93e861ce36ae3585a1c91bf4418147c766dab1a68_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2cf35062721b429994b2fbfb5d6ab98776323b3cc154b8b57930c9e2ddb19bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf35062721b429994b2fbfb5d6ab98776323b3cc154b8b57930c9e2ddb19bae->enter($__internal_2cf35062721b429994b2fbfb5d6ab98776323b3cc154b8b57930c9e2ddb19bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e5e8e78b33a1fb2c59e75c6ddef41a6306ccb0db2a5c8ca6af26a59a434cf51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e8e78b33a1fb2c59e75c6ddef41a6306ccb0db2a5c8ca6af26a59a434cf51b->enter($__internal_e5e8e78b33a1fb2c59e75c6ddef41a6306ccb0db2a5c8ca6af26a59a434cf51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e5e8e78b33a1fb2c59e75c6ddef41a6306ccb0db2a5c8ca6af26a59a434cf51b->leave($__internal_e5e8e78b33a1fb2c59e75c6ddef41a6306ccb0db2a5c8ca6af26a59a434cf51b_prof);

        
        $__internal_2cf35062721b429994b2fbfb5d6ab98776323b3cc154b8b57930c9e2ddb19bae->leave($__internal_2cf35062721b429994b2fbfb5d6ab98776323b3cc154b8b57930c9e2ddb19bae_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fce6e9640d60830c561f500b385ecb433ca2f0a4f8a9b99a240d7d53b5359e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fce6e9640d60830c561f500b385ecb433ca2f0a4f8a9b99a240d7d53b5359e5->enter($__internal_4fce6e9640d60830c561f500b385ecb433ca2f0a4f8a9b99a240d7d53b5359e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11d3c123203b19a0d1da585c003612d5424b05a7c859bd23b89312f3c7dcee05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d3c123203b19a0d1da585c003612d5424b05a7c859bd23b89312f3c7dcee05->enter($__internal_11d3c123203b19a0d1da585c003612d5424b05a7c859bd23b89312f3c7dcee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_11d3c123203b19a0d1da585c003612d5424b05a7c859bd23b89312f3c7dcee05->leave($__internal_11d3c123203b19a0d1da585c003612d5424b05a7c859bd23b89312f3c7dcee05_prof);

        
        $__internal_4fce6e9640d60830c561f500b385ecb433ca2f0a4f8a9b99a240d7d53b5359e5->leave($__internal_4fce6e9640d60830c561f500b385ecb433ca2f0a4f8a9b99a240d7d53b5359e5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
