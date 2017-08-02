<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f423f2843e5d1c0d130d905c1bed80167d69872a5c423eb802e4ec14d12432ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9673e6c5df323cf2fd457ad00d055f6ec65448cb2801159d0cdc723f0adc4231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9673e6c5df323cf2fd457ad00d055f6ec65448cb2801159d0cdc723f0adc4231->enter($__internal_9673e6c5df323cf2fd457ad00d055f6ec65448cb2801159d0cdc723f0adc4231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_6963ad3b4fdd362ec09abccc81eb0d8c1383cc249f70f92723b37b8c07b57362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6963ad3b4fdd362ec09abccc81eb0d8c1383cc249f70f92723b37b8c07b57362->enter($__internal_6963ad3b4fdd362ec09abccc81eb0d8c1383cc249f70f92723b37b8c07b57362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9673e6c5df323cf2fd457ad00d055f6ec65448cb2801159d0cdc723f0adc4231->leave($__internal_9673e6c5df323cf2fd457ad00d055f6ec65448cb2801159d0cdc723f0adc4231_prof);

        
        $__internal_6963ad3b4fdd362ec09abccc81eb0d8c1383cc249f70f92723b37b8c07b57362->leave($__internal_6963ad3b4fdd362ec09abccc81eb0d8c1383cc249f70f92723b37b8c07b57362_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_749038df2910dbe0122dbf06f26ff41f3470e161bc83f4da90b665f3041fba36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749038df2910dbe0122dbf06f26ff41f3470e161bc83f4da90b665f3041fba36->enter($__internal_749038df2910dbe0122dbf06f26ff41f3470e161bc83f4da90b665f3041fba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_476c119e74033062d32d111baa4cee92fded8418623887e83a08482128e451fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476c119e74033062d32d111baa4cee92fded8418623887e83a08482128e451fe->enter($__internal_476c119e74033062d32d111baa4cee92fded8418623887e83a08482128e451fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_476c119e74033062d32d111baa4cee92fded8418623887e83a08482128e451fe->leave($__internal_476c119e74033062d32d111baa4cee92fded8418623887e83a08482128e451fe_prof);

        
        $__internal_749038df2910dbe0122dbf06f26ff41f3470e161bc83f4da90b665f3041fba36->leave($__internal_749038df2910dbe0122dbf06f26ff41f3470e161bc83f4da90b665f3041fba36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
