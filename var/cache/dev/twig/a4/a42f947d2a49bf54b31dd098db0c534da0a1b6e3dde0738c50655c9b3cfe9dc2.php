<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_38eb2c00579c25954d52601de4c8f72d338645fc9f68cd16fd6f2a8045518ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38eb2c00579c25954d52601de4c8f72d338645fc9f68cd16fd6f2a8045518ff4->enter($__internal_38eb2c00579c25954d52601de4c8f72d338645fc9f68cd16fd6f2a8045518ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_248ec97bdc99332db372a722668e59f2dfb20917c47742f639031742a462a1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248ec97bdc99332db372a722668e59f2dfb20917c47742f639031742a462a1f5->enter($__internal_248ec97bdc99332db372a722668e59f2dfb20917c47742f639031742a462a1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_38eb2c00579c25954d52601de4c8f72d338645fc9f68cd16fd6f2a8045518ff4->leave($__internal_38eb2c00579c25954d52601de4c8f72d338645fc9f68cd16fd6f2a8045518ff4_prof);

        
        $__internal_248ec97bdc99332db372a722668e59f2dfb20917c47742f639031742a462a1f5->leave($__internal_248ec97bdc99332db372a722668e59f2dfb20917c47742f639031742a462a1f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
