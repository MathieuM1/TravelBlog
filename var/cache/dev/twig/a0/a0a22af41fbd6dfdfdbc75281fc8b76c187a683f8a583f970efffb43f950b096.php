<?php

/* :admin:adminIndex.html.twig */
class __TwigTemplate_45f9d33c0ba34582db1793de873d2ff70b2e2aff526aabab14c3ede00cfc5a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:adminIndex.html.twig", 1);
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
        $__internal_8c9babe96ba19b3d1614989b5ce504678dd6848f7488e2ab78af9f17918a221f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9babe96ba19b3d1614989b5ce504678dd6848f7488e2ab78af9f17918a221f->enter($__internal_8c9babe96ba19b3d1614989b5ce504678dd6848f7488e2ab78af9f17918a221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:adminIndex.html.twig"));

        $__internal_490808eb185680b424423f8a53acaf58c1fccec17c48ed7c39998478d30c311a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490808eb185680b424423f8a53acaf58c1fccec17c48ed7c39998478d30c311a->enter($__internal_490808eb185680b424423f8a53acaf58c1fccec17c48ed7c39998478d30c311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:adminIndex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9babe96ba19b3d1614989b5ce504678dd6848f7488e2ab78af9f17918a221f->leave($__internal_8c9babe96ba19b3d1614989b5ce504678dd6848f7488e2ab78af9f17918a221f_prof);

        
        $__internal_490808eb185680b424423f8a53acaf58c1fccec17c48ed7c39998478d30c311a->leave($__internal_490808eb185680b424423f8a53acaf58c1fccec17c48ed7c39998478d30c311a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_231b704ae9c7ce51cbaa67cf0824f5d4d4f66f8516926b38dfb9d95f902ebdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231b704ae9c7ce51cbaa67cf0824f5d4d4f66f8516926b38dfb9d95f902ebdd0->enter($__internal_231b704ae9c7ce51cbaa67cf0824f5d4d4f66f8516926b38dfb9d95f902ebdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_081bf69ffffc0c3f19a685032786dd8d4f8594c46658e049417dd95ee913aa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081bf69ffffc0c3f19a685032786dd8d4f8594c46658e049417dd95ee913aa3c->enter($__internal_081bf69ffffc0c3f19a685032786dd8d4f8594c46658e049417dd95ee913aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Admin</h1>
";
        
        $__internal_081bf69ffffc0c3f19a685032786dd8d4f8594c46658e049417dd95ee913aa3c->leave($__internal_081bf69ffffc0c3f19a685032786dd8d4f8594c46658e049417dd95ee913aa3c_prof);

        
        $__internal_231b704ae9c7ce51cbaa67cf0824f5d4d4f66f8516926b38dfb9d95f902ebdd0->leave($__internal_231b704ae9c7ce51cbaa67cf0824f5d4d4f66f8516926b38dfb9d95f902ebdd0_prof);

    }

    public function getTemplateName()
    {
        return ":admin:adminIndex.html.twig";
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
    <h1>Admin</h1>
{% endblock %}", ":admin:adminIndex.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/admin/adminIndex.html.twig");
    }
}
