<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a5c8d6d4c9dddecdabcaebb193989c6d212e511f40565b9d9d4f7ac5db97348e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_aadd78b1f674bc5d5309a3ee5f87e0bf238d9e870b98f72d0e0f0ca6f3ce69c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aadd78b1f674bc5d5309a3ee5f87e0bf238d9e870b98f72d0e0f0ca6f3ce69c9->enter($__internal_aadd78b1f674bc5d5309a3ee5f87e0bf238d9e870b98f72d0e0f0ca6f3ce69c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_abcf4dbf9c50fb36258c7d6cfb94a45996fd4028d7e666506141899fe4a1efcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcf4dbf9c50fb36258c7d6cfb94a45996fd4028d7e666506141899fe4a1efcf->enter($__internal_abcf4dbf9c50fb36258c7d6cfb94a45996fd4028d7e666506141899fe4a1efcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aadd78b1f674bc5d5309a3ee5f87e0bf238d9e870b98f72d0e0f0ca6f3ce69c9->leave($__internal_aadd78b1f674bc5d5309a3ee5f87e0bf238d9e870b98f72d0e0f0ca6f3ce69c9_prof);

        
        $__internal_abcf4dbf9c50fb36258c7d6cfb94a45996fd4028d7e666506141899fe4a1efcf->leave($__internal_abcf4dbf9c50fb36258c7d6cfb94a45996fd4028d7e666506141899fe4a1efcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_913c4ad36ca95b869deb14dd4328859eda6712ef12942f9263a295c0f7e2c928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913c4ad36ca95b869deb14dd4328859eda6712ef12942f9263a295c0f7e2c928->enter($__internal_913c4ad36ca95b869deb14dd4328859eda6712ef12942f9263a295c0f7e2c928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_579efb74e974d4232d0a3acf8f51a3961b235b0b4b46bb86ce4e3c0c7540fab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579efb74e974d4232d0a3acf8f51a3961b235b0b4b46bb86ce4e3c0c7540fab4->enter($__internal_579efb74e974d4232d0a3acf8f51a3961b235b0b4b46bb86ce4e3c0c7540fab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_579efb74e974d4232d0a3acf8f51a3961b235b0b4b46bb86ce4e3c0c7540fab4->leave($__internal_579efb74e974d4232d0a3acf8f51a3961b235b0b4b46bb86ce4e3c0c7540fab4_prof);

        
        $__internal_913c4ad36ca95b869deb14dd4328859eda6712ef12942f9263a295c0f7e2c928->leave($__internal_913c4ad36ca95b869deb14dd4328859eda6712ef12942f9263a295c0f7e2c928_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
