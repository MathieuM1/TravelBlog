<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_06277672b2cd2790f064c9d79500bbed842f26357ee29cd129a24b7185a054f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06277672b2cd2790f064c9d79500bbed842f26357ee29cd129a24b7185a054f4->enter($__internal_06277672b2cd2790f064c9d79500bbed842f26357ee29cd129a24b7185a054f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8dea9f839ab9de17df2299635b6c911b1eb11b24d60dc6bbd04d764cdb039e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dea9f839ab9de17df2299635b6c911b1eb11b24d60dc6bbd04d764cdb039e29->enter($__internal_8dea9f839ab9de17df2299635b6c911b1eb11b24d60dc6bbd04d764cdb039e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_06277672b2cd2790f064c9d79500bbed842f26357ee29cd129a24b7185a054f4->leave($__internal_06277672b2cd2790f064c9d79500bbed842f26357ee29cd129a24b7185a054f4_prof);

        
        $__internal_8dea9f839ab9de17df2299635b6c911b1eb11b24d60dc6bbd04d764cdb039e29->leave($__internal_8dea9f839ab9de17df2299635b6c911b1eb11b24d60dc6bbd04d764cdb039e29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
