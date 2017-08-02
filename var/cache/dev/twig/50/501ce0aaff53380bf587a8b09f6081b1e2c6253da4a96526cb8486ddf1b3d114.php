<?php

/* default/worldTravel.html.twig */
class __TwigTemplate_67766f7f7b39983e68b7df3b761bd3ed791098f60ce8ddc06bb5d11d207fc618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/worldTravel.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcde114350b01796e0ded168792028e9befec33763e1cf37b2644965cf4e78c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcde114350b01796e0ded168792028e9befec33763e1cf37b2644965cf4e78c2->enter($__internal_bcde114350b01796e0ded168792028e9befec33763e1cf37b2644965cf4e78c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/worldTravel.html.twig"));

        $__internal_17237fa56e2733e6ff009c09cba3cd84736c5461cc3b317fd7c06e332426fea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17237fa56e2733e6ff009c09cba3cd84736c5461cc3b317fd7c06e332426fea7->enter($__internal_17237fa56e2733e6ff009c09cba3cd84736c5461cc3b317fd7c06e332426fea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/worldTravel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcde114350b01796e0ded168792028e9befec33763e1cf37b2644965cf4e78c2->leave($__internal_bcde114350b01796e0ded168792028e9befec33763e1cf37b2644965cf4e78c2_prof);

        
        $__internal_17237fa56e2733e6ff009c09cba3cd84736c5461cc3b317fd7c06e332426fea7->leave($__internal_17237fa56e2733e6ff009c09cba3cd84736c5461cc3b317fd7c06e332426fea7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_724d142ec54847c1c68cbfc51d584a79540afada5efde5c457652c4d7f1bd840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724d142ec54847c1c68cbfc51d584a79540afada5efde5c457652c4d7f1bd840->enter($__internal_724d142ec54847c1c68cbfc51d584a79540afada5efde5c457652c4d7f1bd840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8011417649a334b879b8c2b8c01062682009bdd1e22a666df307d62f55855f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8011417649a334b879b8c2b8c01062682009bdd1e22a666df307d62f55855f77->enter($__internal_8011417649a334b879b8c2b8c01062682009bdd1e22a666df307d62f55855f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>WorldTravel</h1>
";
        
        $__internal_8011417649a334b879b8c2b8c01062682009bdd1e22a666df307d62f55855f77->leave($__internal_8011417649a334b879b8c2b8c01062682009bdd1e22a666df307d62f55855f77_prof);

        
        $__internal_724d142ec54847c1c68cbfc51d584a79540afada5efde5c457652c4d7f1bd840->leave($__internal_724d142ec54847c1c68cbfc51d584a79540afada5efde5c457652c4d7f1bd840_prof);

    }

    public function getTemplateName()
    {
        return "default/worldTravel.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>WorldTravel</h1>
{% endblock %}


", "default/worldTravel.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/default/worldTravel.html.twig");
    }
}
