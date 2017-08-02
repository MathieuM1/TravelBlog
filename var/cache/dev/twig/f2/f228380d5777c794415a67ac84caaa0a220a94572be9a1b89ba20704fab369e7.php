<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cbb37672bb67857025bcf02f6ceb9e633baabd3edbc16f44f4e1dd61d0b4c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbb37672bb67857025bcf02f6ceb9e633baabd3edbc16f44f4e1dd61d0b4c2a->enter($__internal_4cbb37672bb67857025bcf02f6ceb9e633baabd3edbc16f44f4e1dd61d0b4c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_03b0baf5abc92dcff683ca717b82df3b65578648a1b8df10cbca266921156f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b0baf5abc92dcff683ca717b82df3b65578648a1b8df10cbca266921156f5d->enter($__internal_03b0baf5abc92dcff683ca717b82df3b65578648a1b8df10cbca266921156f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cbb37672bb67857025bcf02f6ceb9e633baabd3edbc16f44f4e1dd61d0b4c2a->leave($__internal_4cbb37672bb67857025bcf02f6ceb9e633baabd3edbc16f44f4e1dd61d0b4c2a_prof);

        
        $__internal_03b0baf5abc92dcff683ca717b82df3b65578648a1b8df10cbca266921156f5d->leave($__internal_03b0baf5abc92dcff683ca717b82df3b65578648a1b8df10cbca266921156f5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3025a1d6f846efc3a03d6dc97e1c95ea4b0135a7ef1da253fe18ee8504ce73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3025a1d6f846efc3a03d6dc97e1c95ea4b0135a7ef1da253fe18ee8504ce73d->enter($__internal_b3025a1d6f846efc3a03d6dc97e1c95ea4b0135a7ef1da253fe18ee8504ce73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c16094da6ceb9ce2d2ee6e9633fee8cf730fd74374cd9221c6831aa80fd5e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c16094da6ceb9ce2d2ee6e9633fee8cf730fd74374cd9221c6831aa80fd5e71->enter($__internal_3c16094da6ceb9ce2d2ee6e9633fee8cf730fd74374cd9221c6831aa80fd5e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3c16094da6ceb9ce2d2ee6e9633fee8cf730fd74374cd9221c6831aa80fd5e71->leave($__internal_3c16094da6ceb9ce2d2ee6e9633fee8cf730fd74374cd9221c6831aa80fd5e71_prof);

        
        $__internal_b3025a1d6f846efc3a03d6dc97e1c95ea4b0135a7ef1da253fe18ee8504ce73d->leave($__internal_b3025a1d6f846efc3a03d6dc97e1c95ea4b0135a7ef1da253fe18ee8504ce73d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f34956d64b1ab934d51664ef1419dfba864e0995544875f74e31e4ae513c4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f34956d64b1ab934d51664ef1419dfba864e0995544875f74e31e4ae513c4c8->enter($__internal_6f34956d64b1ab934d51664ef1419dfba864e0995544875f74e31e4ae513c4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_204e62395d651514ee544d158a91fe186c57147b9cebcb604e5b9d7723a56481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204e62395d651514ee544d158a91fe186c57147b9cebcb604e5b9d7723a56481->enter($__internal_204e62395d651514ee544d158a91fe186c57147b9cebcb604e5b9d7723a56481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_204e62395d651514ee544d158a91fe186c57147b9cebcb604e5b9d7723a56481->leave($__internal_204e62395d651514ee544d158a91fe186c57147b9cebcb604e5b9d7723a56481_prof);

        
        $__internal_6f34956d64b1ab934d51664ef1419dfba864e0995544875f74e31e4ae513c4c8->leave($__internal_6f34956d64b1ab934d51664ef1419dfba864e0995544875f74e31e4ae513c4c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b14b1d59f7cd82df5f66739404cb83501d5969803e5869363eedac8f8f390e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14b1d59f7cd82df5f66739404cb83501d5969803e5869363eedac8f8f390e23->enter($__internal_b14b1d59f7cd82df5f66739404cb83501d5969803e5869363eedac8f8f390e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3097fdb4a4319f03f3146d5e833f337cc3019b0382f0614c8266a15d667fbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3097fdb4a4319f03f3146d5e833f337cc3019b0382f0614c8266a15d667fbbc->enter($__internal_a3097fdb4a4319f03f3146d5e833f337cc3019b0382f0614c8266a15d667fbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3097fdb4a4319f03f3146d5e833f337cc3019b0382f0614c8266a15d667fbbc->leave($__internal_a3097fdb4a4319f03f3146d5e833f337cc3019b0382f0614c8266a15d667fbbc_prof);

        
        $__internal_b14b1d59f7cd82df5f66739404cb83501d5969803e5869363eedac8f8f390e23->leave($__internal_b14b1d59f7cd82df5f66739404cb83501d5969803e5869363eedac8f8f390e23_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
