<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8cf4ee99b467970b4e888fd93f7769d1f846b4d6133688821280d0a0701d7f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4d9679ab217b8a0f1e1475aca7f5f7519e94852ffd70c63612c44e065e4921d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9679ab217b8a0f1e1475aca7f5f7519e94852ffd70c63612c44e065e4921d7->enter($__internal_4d9679ab217b8a0f1e1475aca7f5f7519e94852ffd70c63612c44e065e4921d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_69d5b46b131c6ed45ad121d78d2b0625e8f20b8c00688a36a98c795c4d839316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d5b46b131c6ed45ad121d78d2b0625e8f20b8c00688a36a98c795c4d839316->enter($__internal_69d5b46b131c6ed45ad121d78d2b0625e8f20b8c00688a36a98c795c4d839316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9679ab217b8a0f1e1475aca7f5f7519e94852ffd70c63612c44e065e4921d7->leave($__internal_4d9679ab217b8a0f1e1475aca7f5f7519e94852ffd70c63612c44e065e4921d7_prof);

        
        $__internal_69d5b46b131c6ed45ad121d78d2b0625e8f20b8c00688a36a98c795c4d839316->leave($__internal_69d5b46b131c6ed45ad121d78d2b0625e8f20b8c00688a36a98c795c4d839316_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61206c55ecf931ab95e382407c47e80a45b7c1c75b6f00fce730fb735806cb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61206c55ecf931ab95e382407c47e80a45b7c1c75b6f00fce730fb735806cb1c->enter($__internal_61206c55ecf931ab95e382407c47e80a45b7c1c75b6f00fce730fb735806cb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3609f726e47f6fd6d61fc53b56dac73080ab22ccbdb6ea0deb8df88c313ea012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3609f726e47f6fd6d61fc53b56dac73080ab22ccbdb6ea0deb8df88c313ea012->enter($__internal_3609f726e47f6fd6d61fc53b56dac73080ab22ccbdb6ea0deb8df88c313ea012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3609f726e47f6fd6d61fc53b56dac73080ab22ccbdb6ea0deb8df88c313ea012->leave($__internal_3609f726e47f6fd6d61fc53b56dac73080ab22ccbdb6ea0deb8df88c313ea012_prof);

        
        $__internal_61206c55ecf931ab95e382407c47e80a45b7c1c75b6f00fce730fb735806cb1c->leave($__internal_61206c55ecf931ab95e382407c47e80a45b7c1c75b6f00fce730fb735806cb1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
