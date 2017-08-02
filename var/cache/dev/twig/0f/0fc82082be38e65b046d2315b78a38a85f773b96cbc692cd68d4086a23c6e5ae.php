<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8cd5dabb7cddbd7f59e9a5b25cf09cec64bc1b5497841330beb92929706f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_01c9ddc0e757d6eb611ba17200647c75a87b5bfa39882b9ddf68bee57f288dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c9ddc0e757d6eb611ba17200647c75a87b5bfa39882b9ddf68bee57f288dc6->enter($__internal_01c9ddc0e757d6eb611ba17200647c75a87b5bfa39882b9ddf68bee57f288dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a9e74d943496acbe69b99e4e35ac5202da353c4d1c73e11427f1454c170252c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e74d943496acbe69b99e4e35ac5202da353c4d1c73e11427f1454c170252c2->enter($__internal_a9e74d943496acbe69b99e4e35ac5202da353c4d1c73e11427f1454c170252c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c9ddc0e757d6eb611ba17200647c75a87b5bfa39882b9ddf68bee57f288dc6->leave($__internal_01c9ddc0e757d6eb611ba17200647c75a87b5bfa39882b9ddf68bee57f288dc6_prof);

        
        $__internal_a9e74d943496acbe69b99e4e35ac5202da353c4d1c73e11427f1454c170252c2->leave($__internal_a9e74d943496acbe69b99e4e35ac5202da353c4d1c73e11427f1454c170252c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adbdf282c5bc2d17418fcfc9b4d2468dfb6283fab81cddb60b4c3c4920254635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbdf282c5bc2d17418fcfc9b4d2468dfb6283fab81cddb60b4c3c4920254635->enter($__internal_adbdf282c5bc2d17418fcfc9b4d2468dfb6283fab81cddb60b4c3c4920254635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_04a7e36704c853f911063b4967613ff3e2e5fca7ed9febfe700244dfcedeab0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a7e36704c853f911063b4967613ff3e2e5fca7ed9febfe700244dfcedeab0c->enter($__internal_04a7e36704c853f911063b4967613ff3e2e5fca7ed9febfe700244dfcedeab0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_04a7e36704c853f911063b4967613ff3e2e5fca7ed9febfe700244dfcedeab0c->leave($__internal_04a7e36704c853f911063b4967613ff3e2e5fca7ed9febfe700244dfcedeab0c_prof);

        
        $__internal_adbdf282c5bc2d17418fcfc9b4d2468dfb6283fab81cddb60b4c3c4920254635->leave($__internal_adbdf282c5bc2d17418fcfc9b4d2468dfb6283fab81cddb60b4c3c4920254635_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
