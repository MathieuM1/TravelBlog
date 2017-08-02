<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_c21fdc51953535bb8cb0799c3842bb0e2a428b22388a7e91ed9441684e787ae8 extends Twig_Template
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
        $__internal_eacdfbff82717b888d856734c291e9ed8f96ec5c4c0ee1a7cb6c2b1bf534e9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eacdfbff82717b888d856734c291e9ed8f96ec5c4c0ee1a7cb6c2b1bf534e9fe->enter($__internal_eacdfbff82717b888d856734c291e9ed8f96ec5c4c0ee1a7cb6c2b1bf534e9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_730aa37ac6ea48567b1249cc7d32b5e06db83d492f042292d647bfce1c123745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730aa37ac6ea48567b1249cc7d32b5e06db83d492f042292d647bfce1c123745->enter($__internal_730aa37ac6ea48567b1249cc7d32b5e06db83d492f042292d647bfce1c123745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_eacdfbff82717b888d856734c291e9ed8f96ec5c4c0ee1a7cb6c2b1bf534e9fe->leave($__internal_eacdfbff82717b888d856734c291e9ed8f96ec5c4c0ee1a7cb6c2b1bf534e9fe_prof);

        
        $__internal_730aa37ac6ea48567b1249cc7d32b5e06db83d492f042292d647bfce1c123745->leave($__internal_730aa37ac6ea48567b1249cc7d32b5e06db83d492f042292d647bfce1c123745_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
