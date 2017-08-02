<?php

/* :articles:new.html.twig */
class __TwigTemplate_bbb5fbf5eb69b0eae2783860a899928c3aa1874d49c108bf847cd34b8fe61e59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:new.html.twig", 1);
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
        $__internal_03402643b4479ee1a439bdc1159b3135a319d5917703dbecc06d01387dbd9f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03402643b4479ee1a439bdc1159b3135a319d5917703dbecc06d01387dbd9f11->enter($__internal_03402643b4479ee1a439bdc1159b3135a319d5917703dbecc06d01387dbd9f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:new.html.twig"));

        $__internal_5ea24286aa04bd91b5ba02ad2c0880c5296461341e7afce252e26068b16f9acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea24286aa04bd91b5ba02ad2c0880c5296461341e7afce252e26068b16f9acc->enter($__internal_5ea24286aa04bd91b5ba02ad2c0880c5296461341e7afce252e26068b16f9acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03402643b4479ee1a439bdc1159b3135a319d5917703dbecc06d01387dbd9f11->leave($__internal_03402643b4479ee1a439bdc1159b3135a319d5917703dbecc06d01387dbd9f11_prof);

        
        $__internal_5ea24286aa04bd91b5ba02ad2c0880c5296461341e7afce252e26068b16f9acc->leave($__internal_5ea24286aa04bd91b5ba02ad2c0880c5296461341e7afce252e26068b16f9acc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b68005be258f4274e0015720d4aa8be7524c8b119d7dc858572e76f452111bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68005be258f4274e0015720d4aa8be7524c8b119d7dc858572e76f452111bd7->enter($__internal_b68005be258f4274e0015720d4aa8be7524c8b119d7dc858572e76f452111bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd83ee12e86d22015fe21ad82f10be9d170fa7cdd1eb22a760006fb0505fd53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd83ee12e86d22015fe21ad82f10be9d170fa7cdd1eb22a760006fb0505fd53d->enter($__internal_bd83ee12e86d22015fe21ad82f10be9d170fa7cdd1eb22a760006fb0505fd53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bd83ee12e86d22015fe21ad82f10be9d170fa7cdd1eb22a760006fb0505fd53d->leave($__internal_bd83ee12e86d22015fe21ad82f10be9d170fa7cdd1eb22a760006fb0505fd53d_prof);

        
        $__internal_b68005be258f4274e0015720d4aa8be7524c8b119d7dc858572e76f452111bd7->leave($__internal_b68005be258f4274e0015720d4aa8be7524c8b119d7dc858572e76f452111bd7_prof);

    }

    public function getTemplateName()
    {
        return ":articles:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('articles_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":articles:new.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/articles/new.html.twig");
    }
}
