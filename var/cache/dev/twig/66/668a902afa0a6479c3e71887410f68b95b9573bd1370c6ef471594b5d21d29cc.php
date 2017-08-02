<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6a312865dff10bc0533f3c37be125a17e91023579d9711e8d478be100cd8c786 extends Twig_Template
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
        $__internal_b8372e3cd10eb2ebf9d2834773c18100c7903e549f2d36cc386a91e9c2876168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8372e3cd10eb2ebf9d2834773c18100c7903e549f2d36cc386a91e9c2876168->enter($__internal_b8372e3cd10eb2ebf9d2834773c18100c7903e549f2d36cc386a91e9c2876168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_878c2d04ec3a89f06be1dd6eaf3c3a0a9c1e876e437d1f64ec78d0e732492bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878c2d04ec3a89f06be1dd6eaf3c3a0a9c1e876e437d1f64ec78d0e732492bae->enter($__internal_878c2d04ec3a89f06be1dd6eaf3c3a0a9c1e876e437d1f64ec78d0e732492bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b8372e3cd10eb2ebf9d2834773c18100c7903e549f2d36cc386a91e9c2876168->leave($__internal_b8372e3cd10eb2ebf9d2834773c18100c7903e549f2d36cc386a91e9c2876168_prof);

        
        $__internal_878c2d04ec3a89f06be1dd6eaf3c3a0a9c1e876e437d1f64ec78d0e732492bae->leave($__internal_878c2d04ec3a89f06be1dd6eaf3c3a0a9c1e876e437d1f64ec78d0e732492bae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
