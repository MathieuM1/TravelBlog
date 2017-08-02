<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d2a768e8d244a97ac1918d04e896b3a8a41bffdfe8b3a479c42fa239c0c9fbac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b62be4d8c723eaf1295e5458ed0bb849d0e4f0c7c98a8f397d05e781bca6ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b62be4d8c723eaf1295e5458ed0bb849d0e4f0c7c98a8f397d05e781bca6ec4->enter($__internal_4b62be4d8c723eaf1295e5458ed0bb849d0e4f0c7c98a8f397d05e781bca6ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_f18b679e83ad1fee503081c497b9565b42ae850b91ac6f46c2569ea2b519c705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18b679e83ad1fee503081c497b9565b42ae850b91ac6f46c2569ea2b519c705->enter($__internal_f18b679e83ad1fee503081c497b9565b42ae850b91ac6f46c2569ea2b519c705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4b62be4d8c723eaf1295e5458ed0bb849d0e4f0c7c98a8f397d05e781bca6ec4->leave($__internal_4b62be4d8c723eaf1295e5458ed0bb849d0e4f0c7c98a8f397d05e781bca6ec4_prof);

        
        $__internal_f18b679e83ad1fee503081c497b9565b42ae850b91ac6f46c2569ea2b519c705->leave($__internal_f18b679e83ad1fee503081c497b9565b42ae850b91ac6f46c2569ea2b519c705_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ffd60411634f032d4334c296dff4a69298e29a47bb042e1aceb73c06036d1d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd60411634f032d4334c296dff4a69298e29a47bb042e1aceb73c06036d1d97->enter($__internal_ffd60411634f032d4334c296dff4a69298e29a47bb042e1aceb73c06036d1d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_736eb82963316e41628bfe57751e3f0ca41234937cbee6de60834f972a486153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736eb82963316e41628bfe57751e3f0ca41234937cbee6de60834f972a486153->enter($__internal_736eb82963316e41628bfe57751e3f0ca41234937cbee6de60834f972a486153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_736eb82963316e41628bfe57751e3f0ca41234937cbee6de60834f972a486153->leave($__internal_736eb82963316e41628bfe57751e3f0ca41234937cbee6de60834f972a486153_prof);

        
        $__internal_ffd60411634f032d4334c296dff4a69298e29a47bb042e1aceb73c06036d1d97->leave($__internal_ffd60411634f032d4334c296dff4a69298e29a47bb042e1aceb73c06036d1d97_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6748277956e3c7275bc36f32ff9ec8740490e60f71ec66a0c9c5d3c3566539db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6748277956e3c7275bc36f32ff9ec8740490e60f71ec66a0c9c5d3c3566539db->enter($__internal_6748277956e3c7275bc36f32ff9ec8740490e60f71ec66a0c9c5d3c3566539db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1673dbd252b981041241c52dd88c3f1e1232ca049fdeedd2a5436558b98d40db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1673dbd252b981041241c52dd88c3f1e1232ca049fdeedd2a5436558b98d40db->enter($__internal_1673dbd252b981041241c52dd88c3f1e1232ca049fdeedd2a5436558b98d40db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1673dbd252b981041241c52dd88c3f1e1232ca049fdeedd2a5436558b98d40db->leave($__internal_1673dbd252b981041241c52dd88c3f1e1232ca049fdeedd2a5436558b98d40db_prof);

        
        $__internal_6748277956e3c7275bc36f32ff9ec8740490e60f71ec66a0c9c5d3c3566539db->leave($__internal_6748277956e3c7275bc36f32ff9ec8740490e60f71ec66a0c9c5d3c3566539db_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3f89f8704b2ef6e9e57e471459949290d0ccb126d43faedc27cf6b9ebf587000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f89f8704b2ef6e9e57e471459949290d0ccb126d43faedc27cf6b9ebf587000->enter($__internal_3f89f8704b2ef6e9e57e471459949290d0ccb126d43faedc27cf6b9ebf587000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_996531855c82001b139e35eff71e6dfe1aab4f0cb9edb114b588816b72bc2d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996531855c82001b139e35eff71e6dfe1aab4f0cb9edb114b588816b72bc2d2f->enter($__internal_996531855c82001b139e35eff71e6dfe1aab4f0cb9edb114b588816b72bc2d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_996531855c82001b139e35eff71e6dfe1aab4f0cb9edb114b588816b72bc2d2f->leave($__internal_996531855c82001b139e35eff71e6dfe1aab4f0cb9edb114b588816b72bc2d2f_prof);

        
        $__internal_3f89f8704b2ef6e9e57e471459949290d0ccb126d43faedc27cf6b9ebf587000->leave($__internal_3f89f8704b2ef6e9e57e471459949290d0ccb126d43faedc27cf6b9ebf587000_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/m21/atelier/Trip/Trip/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
