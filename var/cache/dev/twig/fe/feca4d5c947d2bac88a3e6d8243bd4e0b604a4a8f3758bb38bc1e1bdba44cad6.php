<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_b9d74dd4927b8c49c6753efa9bd7edbf3952c5791e88f7c5c618b08a92f037f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d74dd4927b8c49c6753efa9bd7edbf3952c5791e88f7c5c618b08a92f037f0->enter($__internal_b9d74dd4927b8c49c6753efa9bd7edbf3952c5791e88f7c5c618b08a92f037f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cb13142d0c905958c3ee094586f89f30ff6770a08f5dbeb1962378553569c53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb13142d0c905958c3ee094586f89f30ff6770a08f5dbeb1962378553569c53b->enter($__internal_cb13142d0c905958c3ee094586f89f30ff6770a08f5dbeb1962378553569c53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b9d74dd4927b8c49c6753efa9bd7edbf3952c5791e88f7c5c618b08a92f037f0->leave($__internal_b9d74dd4927b8c49c6753efa9bd7edbf3952c5791e88f7c5c618b08a92f037f0_prof);

        
        $__internal_cb13142d0c905958c3ee094586f89f30ff6770a08f5dbeb1962378553569c53b->leave($__internal_cb13142d0c905958c3ee094586f89f30ff6770a08f5dbeb1962378553569c53b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
