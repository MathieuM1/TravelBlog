<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_23258d24abe9c8bbbb0610c03898c8c281600ce981b68160704042a1027f84ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8bd097e1f0694190ee4e3e4c2dd67b14ced05c7775690ddcbe3c219ea5cc9e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd097e1f0694190ee4e3e4c2dd67b14ced05c7775690ddcbe3c219ea5cc9e5f->enter($__internal_8bd097e1f0694190ee4e3e4c2dd67b14ced05c7775690ddcbe3c219ea5cc9e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_013a44dd8c13acb96fec3acda15798b96570e933ed8d37d479f157144a7797f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013a44dd8c13acb96fec3acda15798b96570e933ed8d37d479f157144a7797f4->enter($__internal_013a44dd8c13acb96fec3acda15798b96570e933ed8d37d479f157144a7797f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd097e1f0694190ee4e3e4c2dd67b14ced05c7775690ddcbe3c219ea5cc9e5f->leave($__internal_8bd097e1f0694190ee4e3e4c2dd67b14ced05c7775690ddcbe3c219ea5cc9e5f_prof);

        
        $__internal_013a44dd8c13acb96fec3acda15798b96570e933ed8d37d479f157144a7797f4->leave($__internal_013a44dd8c13acb96fec3acda15798b96570e933ed8d37d479f157144a7797f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb78c9266c8ea3098cba017cdd79c93884a76265e3b31219a99e0baf488ddfc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb78c9266c8ea3098cba017cdd79c93884a76265e3b31219a99e0baf488ddfc3->enter($__internal_bb78c9266c8ea3098cba017cdd79c93884a76265e3b31219a99e0baf488ddfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d14560d6f3e95be135fea48848407584a09a35ec48125777588f7bfb88e0f330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14560d6f3e95be135fea48848407584a09a35ec48125777588f7bfb88e0f330->enter($__internal_d14560d6f3e95be135fea48848407584a09a35ec48125777588f7bfb88e0f330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d14560d6f3e95be135fea48848407584a09a35ec48125777588f7bfb88e0f330->leave($__internal_d14560d6f3e95be135fea48848407584a09a35ec48125777588f7bfb88e0f330_prof);

        
        $__internal_bb78c9266c8ea3098cba017cdd79c93884a76265e3b31219a99e0baf488ddfc3->leave($__internal_bb78c9266c8ea3098cba017cdd79c93884a76265e3b31219a99e0baf488ddfc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
