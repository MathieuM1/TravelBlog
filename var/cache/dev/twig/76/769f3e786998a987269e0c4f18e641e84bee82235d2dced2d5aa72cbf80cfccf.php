<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_6b99468fa2b1364b9fce33760e1a3cfd6557d0648c72f9482c0b8ab3e7b87dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b99468fa2b1364b9fce33760e1a3cfd6557d0648c72f9482c0b8ab3e7b87dc7->enter($__internal_6b99468fa2b1364b9fce33760e1a3cfd6557d0648c72f9482c0b8ab3e7b87dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ae4001f933c8113baa0572246f238e544ea414290739e45f3ae63f12186b9948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4001f933c8113baa0572246f238e544ea414290739e45f3ae63f12186b9948->enter($__internal_ae4001f933c8113baa0572246f238e544ea414290739e45f3ae63f12186b9948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6b99468fa2b1364b9fce33760e1a3cfd6557d0648c72f9482c0b8ab3e7b87dc7->leave($__internal_6b99468fa2b1364b9fce33760e1a3cfd6557d0648c72f9482c0b8ab3e7b87dc7_prof);

        
        $__internal_ae4001f933c8113baa0572246f238e544ea414290739e45f3ae63f12186b9948->leave($__internal_ae4001f933c8113baa0572246f238e544ea414290739e45f3ae63f12186b9948_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
