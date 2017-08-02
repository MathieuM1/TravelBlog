<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d599e78673aafc722f9d52a3cf6838097ef8d784a9466cf99558947bb9d65088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_259b53c5e03ebaf051525707706494509fa3bae0b2e61ed27c4b94e8456bd3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259b53c5e03ebaf051525707706494509fa3bae0b2e61ed27c4b94e8456bd3cb->enter($__internal_259b53c5e03ebaf051525707706494509fa3bae0b2e61ed27c4b94e8456bd3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a8b2ac552c99dd0d6bb5b6aa27a1d5763bd7382f039a0f8d762913b2ddf1673a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b2ac552c99dd0d6bb5b6aa27a1d5763bd7382f039a0f8d762913b2ddf1673a->enter($__internal_a8b2ac552c99dd0d6bb5b6aa27a1d5763bd7382f039a0f8d762913b2ddf1673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259b53c5e03ebaf051525707706494509fa3bae0b2e61ed27c4b94e8456bd3cb->leave($__internal_259b53c5e03ebaf051525707706494509fa3bae0b2e61ed27c4b94e8456bd3cb_prof);

        
        $__internal_a8b2ac552c99dd0d6bb5b6aa27a1d5763bd7382f039a0f8d762913b2ddf1673a->leave($__internal_a8b2ac552c99dd0d6bb5b6aa27a1d5763bd7382f039a0f8d762913b2ddf1673a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e8a26d41a7c0e61b33a5f52ad9762e87205a3ee62c60cacd8c3e19647305033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8a26d41a7c0e61b33a5f52ad9762e87205a3ee62c60cacd8c3e19647305033->enter($__internal_0e8a26d41a7c0e61b33a5f52ad9762e87205a3ee62c60cacd8c3e19647305033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40544d54a490556799413dd443a9d5ea122496ac97b1f8ebdcf377e0323dd78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40544d54a490556799413dd443a9d5ea122496ac97b1f8ebdcf377e0323dd78c->enter($__internal_40544d54a490556799413dd443a9d5ea122496ac97b1f8ebdcf377e0323dd78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_40544d54a490556799413dd443a9d5ea122496ac97b1f8ebdcf377e0323dd78c->leave($__internal_40544d54a490556799413dd443a9d5ea122496ac97b1f8ebdcf377e0323dd78c_prof);

        
        $__internal_0e8a26d41a7c0e61b33a5f52ad9762e87205a3ee62c60cacd8c3e19647305033->leave($__internal_0e8a26d41a7c0e61b33a5f52ad9762e87205a3ee62c60cacd8c3e19647305033_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
