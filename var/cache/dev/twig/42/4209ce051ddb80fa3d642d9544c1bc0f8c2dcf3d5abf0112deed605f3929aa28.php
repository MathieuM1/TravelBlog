<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_91e05de163eea898e46123bb542537222f5893e9819a3ad897f2ffa5b64d031c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e05de163eea898e46123bb542537222f5893e9819a3ad897f2ffa5b64d031c->enter($__internal_91e05de163eea898e46123bb542537222f5893e9819a3ad897f2ffa5b64d031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_15ea01684a71aaadac98f2003f147cd3057db39d2d6896c0b0a747cebf158cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ea01684a71aaadac98f2003f147cd3057db39d2d6896c0b0a747cebf158cfa->enter($__internal_15ea01684a71aaadac98f2003f147cd3057db39d2d6896c0b0a747cebf158cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e05de163eea898e46123bb542537222f5893e9819a3ad897f2ffa5b64d031c->leave($__internal_91e05de163eea898e46123bb542537222f5893e9819a3ad897f2ffa5b64d031c_prof);

        
        $__internal_15ea01684a71aaadac98f2003f147cd3057db39d2d6896c0b0a747cebf158cfa->leave($__internal_15ea01684a71aaadac98f2003f147cd3057db39d2d6896c0b0a747cebf158cfa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_493e192b7bc73e593b173bcc4b299400b369899209a77d2b04bcd9862cf3153b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493e192b7bc73e593b173bcc4b299400b369899209a77d2b04bcd9862cf3153b->enter($__internal_493e192b7bc73e593b173bcc4b299400b369899209a77d2b04bcd9862cf3153b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_398464e14da20cb2c9a33205d985392ab7885c06f4328fde726395858d1e9692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398464e14da20cb2c9a33205d985392ab7885c06f4328fde726395858d1e9692->enter($__internal_398464e14da20cb2c9a33205d985392ab7885c06f4328fde726395858d1e9692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_398464e14da20cb2c9a33205d985392ab7885c06f4328fde726395858d1e9692->leave($__internal_398464e14da20cb2c9a33205d985392ab7885c06f4328fde726395858d1e9692_prof);

        
        $__internal_493e192b7bc73e593b173bcc4b299400b369899209a77d2b04bcd9862cf3153b->leave($__internal_493e192b7bc73e593b173bcc4b299400b369899209a77d2b04bcd9862cf3153b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
