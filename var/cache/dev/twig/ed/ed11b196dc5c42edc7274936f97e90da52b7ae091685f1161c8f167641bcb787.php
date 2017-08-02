<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_674099ca901fd8c9ca9d64eee22cba8aeb1e939a3f260cf57c0421b1596fe5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0f12b74e773005f4023eaefc952e18a10775394b60434424c5d9d2bcd474eb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f12b74e773005f4023eaefc952e18a10775394b60434424c5d9d2bcd474eb61->enter($__internal_0f12b74e773005f4023eaefc952e18a10775394b60434424c5d9d2bcd474eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5dc0c85fd4d63fed4dd75721766f08dceb03ce945668ae49011bc7dc0ed96899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc0c85fd4d63fed4dd75721766f08dceb03ce945668ae49011bc7dc0ed96899->enter($__internal_5dc0c85fd4d63fed4dd75721766f08dceb03ce945668ae49011bc7dc0ed96899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f12b74e773005f4023eaefc952e18a10775394b60434424c5d9d2bcd474eb61->leave($__internal_0f12b74e773005f4023eaefc952e18a10775394b60434424c5d9d2bcd474eb61_prof);

        
        $__internal_5dc0c85fd4d63fed4dd75721766f08dceb03ce945668ae49011bc7dc0ed96899->leave($__internal_5dc0c85fd4d63fed4dd75721766f08dceb03ce945668ae49011bc7dc0ed96899_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de9eaaa4605e5e1c5a564203d38f1f8e423a37bd6521cd8a749bf66c0615fe7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9eaaa4605e5e1c5a564203d38f1f8e423a37bd6521cd8a749bf66c0615fe7e->enter($__internal_de9eaaa4605e5e1c5a564203d38f1f8e423a37bd6521cd8a749bf66c0615fe7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4fce3f44aaef884f3de8c5040846331e20d5fb448543ea231ba51bab4a81ca63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fce3f44aaef884f3de8c5040846331e20d5fb448543ea231ba51bab4a81ca63->enter($__internal_4fce3f44aaef884f3de8c5040846331e20d5fb448543ea231ba51bab4a81ca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4fce3f44aaef884f3de8c5040846331e20d5fb448543ea231ba51bab4a81ca63->leave($__internal_4fce3f44aaef884f3de8c5040846331e20d5fb448543ea231ba51bab4a81ca63_prof);

        
        $__internal_de9eaaa4605e5e1c5a564203d38f1f8e423a37bd6521cd8a749bf66c0615fe7e->leave($__internal_de9eaaa4605e5e1c5a564203d38f1f8e423a37bd6521cd8a749bf66c0615fe7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
