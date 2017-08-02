<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6407903ffc7df51236333d70b19ed6fe292abe2a89bbfb2c9d5a5b480439fd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6407903ffc7df51236333d70b19ed6fe292abe2a89bbfb2c9d5a5b480439fd20->enter($__internal_6407903ffc7df51236333d70b19ed6fe292abe2a89bbfb2c9d5a5b480439fd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1b1685ff0cf89e8e01f8088fc64c1241ab51709bacfd06f33062eecd375b7455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1685ff0cf89e8e01f8088fc64c1241ab51709bacfd06f33062eecd375b7455->enter($__internal_1b1685ff0cf89e8e01f8088fc64c1241ab51709bacfd06f33062eecd375b7455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6407903ffc7df51236333d70b19ed6fe292abe2a89bbfb2c9d5a5b480439fd20->leave($__internal_6407903ffc7df51236333d70b19ed6fe292abe2a89bbfb2c9d5a5b480439fd20_prof);

        
        $__internal_1b1685ff0cf89e8e01f8088fc64c1241ab51709bacfd06f33062eecd375b7455->leave($__internal_1b1685ff0cf89e8e01f8088fc64c1241ab51709bacfd06f33062eecd375b7455_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_75b3f5ec3360410a9e0125f05a1e81fd3a863b088edc20f388e4bea29afa9579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b3f5ec3360410a9e0125f05a1e81fd3a863b088edc20f388e4bea29afa9579->enter($__internal_75b3f5ec3360410a9e0125f05a1e81fd3a863b088edc20f388e4bea29afa9579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18055866b48655a2ef24540cf3668c85f788ddedae5e3a5a40c9dd68173f4da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18055866b48655a2ef24540cf3668c85f788ddedae5e3a5a40c9dd68173f4da3->enter($__internal_18055866b48655a2ef24540cf3668c85f788ddedae5e3a5a40c9dd68173f4da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_18055866b48655a2ef24540cf3668c85f788ddedae5e3a5a40c9dd68173f4da3->leave($__internal_18055866b48655a2ef24540cf3668c85f788ddedae5e3a5a40c9dd68173f4da3_prof);

        
        $__internal_75b3f5ec3360410a9e0125f05a1e81fd3a863b088edc20f388e4bea29afa9579->leave($__internal_75b3f5ec3360410a9e0125f05a1e81fd3a863b088edc20f388e4bea29afa9579_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
