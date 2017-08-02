<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9a3b2ba0a3d73bebc8c710751039d0f85c7ddc2a3b871f01c746ec314475ed5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3b2ba0a3d73bebc8c710751039d0f85c7ddc2a3b871f01c746ec314475ed5f->enter($__internal_9a3b2ba0a3d73bebc8c710751039d0f85c7ddc2a3b871f01c746ec314475ed5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_23d11dcb303299722d5a8b726a3b1fd7a86d59e1e82ba91379a72fe3b32fcd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d11dcb303299722d5a8b726a3b1fd7a86d59e1e82ba91379a72fe3b32fcd08->enter($__internal_23d11dcb303299722d5a8b726a3b1fd7a86d59e1e82ba91379a72fe3b32fcd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3b2ba0a3d73bebc8c710751039d0f85c7ddc2a3b871f01c746ec314475ed5f->leave($__internal_9a3b2ba0a3d73bebc8c710751039d0f85c7ddc2a3b871f01c746ec314475ed5f_prof);

        
        $__internal_23d11dcb303299722d5a8b726a3b1fd7a86d59e1e82ba91379a72fe3b32fcd08->leave($__internal_23d11dcb303299722d5a8b726a3b1fd7a86d59e1e82ba91379a72fe3b32fcd08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bdef6d37abb0bceffeb5ca858cd1dbe45284521cd6940243a287f969fafc536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bdef6d37abb0bceffeb5ca858cd1dbe45284521cd6940243a287f969fafc536->enter($__internal_1bdef6d37abb0bceffeb5ca858cd1dbe45284521cd6940243a287f969fafc536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d0d3307227c0f177db36a94bb4d6f2537136d817a22c01b553c3591ed316c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0d3307227c0f177db36a94bb4d6f2537136d817a22c01b553c3591ed316c45->enter($__internal_4d0d3307227c0f177db36a94bb4d6f2537136d817a22c01b553c3591ed316c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4d0d3307227c0f177db36a94bb4d6f2537136d817a22c01b553c3591ed316c45->leave($__internal_4d0d3307227c0f177db36a94bb4d6f2537136d817a22c01b553c3591ed316c45_prof);

        
        $__internal_1bdef6d37abb0bceffeb5ca858cd1dbe45284521cd6940243a287f969fafc536->leave($__internal_1bdef6d37abb0bceffeb5ca858cd1dbe45284521cd6940243a287f969fafc536_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
