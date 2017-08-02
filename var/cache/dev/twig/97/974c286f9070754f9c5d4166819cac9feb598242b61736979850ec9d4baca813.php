<?php

/* :articles:edit.html.twig */
class __TwigTemplate_1e66deb6b029dd58aca3bec60392f7651fa54ae1856ea996cb438de9e76faabb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:edit.html.twig", 1);
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
        $__internal_b16dd652f986699ccbd78ea0ab48e227cb89a15cfd36ac1d9a718ab5ca02b068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16dd652f986699ccbd78ea0ab48e227cb89a15cfd36ac1d9a718ab5ca02b068->enter($__internal_b16dd652f986699ccbd78ea0ab48e227cb89a15cfd36ac1d9a718ab5ca02b068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:edit.html.twig"));

        $__internal_edc05abb9b0188d07c202f5750006029c16e9f18d342371b5e125a9779fbaa47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc05abb9b0188d07c202f5750006029c16e9f18d342371b5e125a9779fbaa47->enter($__internal_edc05abb9b0188d07c202f5750006029c16e9f18d342371b5e125a9779fbaa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16dd652f986699ccbd78ea0ab48e227cb89a15cfd36ac1d9a718ab5ca02b068->leave($__internal_b16dd652f986699ccbd78ea0ab48e227cb89a15cfd36ac1d9a718ab5ca02b068_prof);

        
        $__internal_edc05abb9b0188d07c202f5750006029c16e9f18d342371b5e125a9779fbaa47->leave($__internal_edc05abb9b0188d07c202f5750006029c16e9f18d342371b5e125a9779fbaa47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_051bc45776321b824b0752c7d80ceb901387366400cba8756e0d8e4ba823aedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051bc45776321b824b0752c7d80ceb901387366400cba8756e0d8e4ba823aedd->enter($__internal_051bc45776321b824b0752c7d80ceb901387366400cba8756e0d8e4ba823aedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e17d9d9e667445a7a55d993ed78a4aa9839b24229f63f8660541062513c2b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e17d9d9e667445a7a55d993ed78a4aa9839b24229f63f8660541062513c2b21->enter($__internal_2e17d9d9e667445a7a55d993ed78a4aa9839b24229f63f8660541062513c2b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2e17d9d9e667445a7a55d993ed78a4aa9839b24229f63f8660541062513c2b21->leave($__internal_2e17d9d9e667445a7a55d993ed78a4aa9839b24229f63f8660541062513c2b21_prof);

        
        $__internal_051bc45776321b824b0752c7d80ceb901387366400cba8756e0d8e4ba823aedd->leave($__internal_051bc45776321b824b0752c7d80ceb901387366400cba8756e0d8e4ba823aedd_prof);

    }

    public function getTemplateName()
    {
        return ":articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('articles_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":articles:edit.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/articles/edit.html.twig");
    }
}
