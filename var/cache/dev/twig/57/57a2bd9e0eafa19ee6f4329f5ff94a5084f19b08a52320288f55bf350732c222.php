<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c4f59bb411bf08e47a2b47008f757a48f67e5e529f28980527914954ca778905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6f59fa9ab399cf7befd689adb41c0ab5a22a53ea0a6c0f72f7a6196efb87af72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f59fa9ab399cf7befd689adb41c0ab5a22a53ea0a6c0f72f7a6196efb87af72->enter($__internal_6f59fa9ab399cf7befd689adb41c0ab5a22a53ea0a6c0f72f7a6196efb87af72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_dad3033c7fbafee82949d56e735e5d63952d8f84484d995afbc2e55c094919a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad3033c7fbafee82949d56e735e5d63952d8f84484d995afbc2e55c094919a8->enter($__internal_dad3033c7fbafee82949d56e735e5d63952d8f84484d995afbc2e55c094919a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f59fa9ab399cf7befd689adb41c0ab5a22a53ea0a6c0f72f7a6196efb87af72->leave($__internal_6f59fa9ab399cf7befd689adb41c0ab5a22a53ea0a6c0f72f7a6196efb87af72_prof);

        
        $__internal_dad3033c7fbafee82949d56e735e5d63952d8f84484d995afbc2e55c094919a8->leave($__internal_dad3033c7fbafee82949d56e735e5d63952d8f84484d995afbc2e55c094919a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_344fe088651f14161a750b97179331c19932148526b94f2f820fa92c5d6001e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344fe088651f14161a750b97179331c19932148526b94f2f820fa92c5d6001e9->enter($__internal_344fe088651f14161a750b97179331c19932148526b94f2f820fa92c5d6001e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c68073d5fc6dc89ca7dfa452c86b68c90fa5a04a18630203ef7baa4b2e3f7942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68073d5fc6dc89ca7dfa452c86b68c90fa5a04a18630203ef7baa4b2e3f7942->enter($__internal_c68073d5fc6dc89ca7dfa452c86b68c90fa5a04a18630203ef7baa4b2e3f7942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c68073d5fc6dc89ca7dfa452c86b68c90fa5a04a18630203ef7baa4b2e3f7942->leave($__internal_c68073d5fc6dc89ca7dfa452c86b68c90fa5a04a18630203ef7baa4b2e3f7942_prof);

        
        $__internal_344fe088651f14161a750b97179331c19932148526b94f2f820fa92c5d6001e9->leave($__internal_344fe088651f14161a750b97179331c19932148526b94f2f820fa92c5d6001e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
