<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_850b2f9701dea04475b9fd91171343d075a44cedc14e12cf225917decb70f83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850b2f9701dea04475b9fd91171343d075a44cedc14e12cf225917decb70f83d->enter($__internal_850b2f9701dea04475b9fd91171343d075a44cedc14e12cf225917decb70f83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b3368d59ae25a1e21c003f6e5794f5e51c1b2b495bfba510860eb1c2e6fffeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3368d59ae25a1e21c003f6e5794f5e51c1b2b495bfba510860eb1c2e6fffeb6->enter($__internal_b3368d59ae25a1e21c003f6e5794f5e51c1b2b495bfba510860eb1c2e6fffeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850b2f9701dea04475b9fd91171343d075a44cedc14e12cf225917decb70f83d->leave($__internal_850b2f9701dea04475b9fd91171343d075a44cedc14e12cf225917decb70f83d_prof);

        
        $__internal_b3368d59ae25a1e21c003f6e5794f5e51c1b2b495bfba510860eb1c2e6fffeb6->leave($__internal_b3368d59ae25a1e21c003f6e5794f5e51c1b2b495bfba510860eb1c2e6fffeb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b295edf9c0cd6856853b78ac5a81f202bcc5767d0151ec3dc627bbf634c240c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b295edf9c0cd6856853b78ac5a81f202bcc5767d0151ec3dc627bbf634c240c7->enter($__internal_b295edf9c0cd6856853b78ac5a81f202bcc5767d0151ec3dc627bbf634c240c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb8611f83a0abcb948c519f5f11fe2e7a85f6b0fcbf73940e0e65fb897200e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8611f83a0abcb948c519f5f11fe2e7a85f6b0fcbf73940e0e65fb897200e4c->enter($__internal_fb8611f83a0abcb948c519f5f11fe2e7a85f6b0fcbf73940e0e65fb897200e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fb8611f83a0abcb948c519f5f11fe2e7a85f6b0fcbf73940e0e65fb897200e4c->leave($__internal_fb8611f83a0abcb948c519f5f11fe2e7a85f6b0fcbf73940e0e65fb897200e4c_prof);

        
        $__internal_b295edf9c0cd6856853b78ac5a81f202bcc5767d0151ec3dc627bbf634c240c7->leave($__internal_b295edf9c0cd6856853b78ac5a81f202bcc5767d0151ec3dc627bbf634c240c7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5a00ed773082bb54f31b4981b431781eed23b4828a5cd9f8120e99a2b21dfbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a00ed773082bb54f31b4981b431781eed23b4828a5cd9f8120e99a2b21dfbb->enter($__internal_d5a00ed773082bb54f31b4981b431781eed23b4828a5cd9f8120e99a2b21dfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_82fd63ff0b1488a95adab552910f1e813969bade8b561be15d0b536b5e958c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fd63ff0b1488a95adab552910f1e813969bade8b561be15d0b536b5e958c25->enter($__internal_82fd63ff0b1488a95adab552910f1e813969bade8b561be15d0b536b5e958c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_82fd63ff0b1488a95adab552910f1e813969bade8b561be15d0b536b5e958c25->leave($__internal_82fd63ff0b1488a95adab552910f1e813969bade8b561be15d0b536b5e958c25_prof);

        
        $__internal_d5a00ed773082bb54f31b4981b431781eed23b4828a5cd9f8120e99a2b21dfbb->leave($__internal_d5a00ed773082bb54f31b4981b431781eed23b4828a5cd9f8120e99a2b21dfbb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5803250ed18a68bfaaf7ac5fc91f6be9813e84c0b60b2ff824dc18cfc6803deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5803250ed18a68bfaaf7ac5fc91f6be9813e84c0b60b2ff824dc18cfc6803deb->enter($__internal_5803250ed18a68bfaaf7ac5fc91f6be9813e84c0b60b2ff824dc18cfc6803deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ff78d6c77791d1e932c46fef6d1d42f3412b6e4e50482c249105569882423e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff78d6c77791d1e932c46fef6d1d42f3412b6e4e50482c249105569882423e4->enter($__internal_0ff78d6c77791d1e932c46fef6d1d42f3412b6e4e50482c249105569882423e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ff78d6c77791d1e932c46fef6d1d42f3412b6e4e50482c249105569882423e4->leave($__internal_0ff78d6c77791d1e932c46fef6d1d42f3412b6e4e50482c249105569882423e4_prof);

        
        $__internal_5803250ed18a68bfaaf7ac5fc91f6be9813e84c0b60b2ff824dc18cfc6803deb->leave($__internal_5803250ed18a68bfaaf7ac5fc91f6be9813e84c0b60b2ff824dc18cfc6803deb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
