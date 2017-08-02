<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f140b2346f01ea7702f0d42d6fa01314b51e7a373692d8caf9a763e08b1e58ac extends Twig_Template
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
        $__internal_4208441e8212880af95a01f756ea991da799d01de1d47798846ffdbb4fd13f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4208441e8212880af95a01f756ea991da799d01de1d47798846ffdbb4fd13f2d->enter($__internal_4208441e8212880af95a01f756ea991da799d01de1d47798846ffdbb4fd13f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_e8752e70df619db3626bc74fe04d5422d689d7ae0de588059a91f72152284fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8752e70df619db3626bc74fe04d5422d689d7ae0de588059a91f72152284fee->enter($__internal_e8752e70df619db3626bc74fe04d5422d689d7ae0de588059a91f72152284fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4208441e8212880af95a01f756ea991da799d01de1d47798846ffdbb4fd13f2d->leave($__internal_4208441e8212880af95a01f756ea991da799d01de1d47798846ffdbb4fd13f2d_prof);

        
        $__internal_e8752e70df619db3626bc74fe04d5422d689d7ae0de588059a91f72152284fee->leave($__internal_e8752e70df619db3626bc74fe04d5422d689d7ae0de588059a91f72152284fee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
