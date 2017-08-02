<?php

/* articles/show.html.twig */
class __TwigTemplate_f7c58ec3aa9513c30ca6a516bea315c0ae3b65989e9e5dd8a8cf7a674d07f6f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/show.html.twig", 1);
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
        $__internal_8217413bc94401d8fa82713ee2a79828272baea68682669c1566962a6b4d933d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8217413bc94401d8fa82713ee2a79828272baea68682669c1566962a6b4d933d->enter($__internal_8217413bc94401d8fa82713ee2a79828272baea68682669c1566962a6b4d933d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $__internal_001b6e8db6e0a5ba717704e7d300e94c6234dfd71e34e2dc5e1b2890fbd60150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001b6e8db6e0a5ba717704e7d300e94c6234dfd71e34e2dc5e1b2890fbd60150->enter($__internal_001b6e8db6e0a5ba717704e7d300e94c6234dfd71e34e2dc5e1b2890fbd60150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8217413bc94401d8fa82713ee2a79828272baea68682669c1566962a6b4d933d->leave($__internal_8217413bc94401d8fa82713ee2a79828272baea68682669c1566962a6b4d933d_prof);

        
        $__internal_001b6e8db6e0a5ba717704e7d300e94c6234dfd71e34e2dc5e1b2890fbd60150->leave($__internal_001b6e8db6e0a5ba717704e7d300e94c6234dfd71e34e2dc5e1b2890fbd60150_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67d334e1256c1e3009f3c6c7e57f77daffc65590057f76932e981e776d6eaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67d334e1256c1e3009f3c6c7e57f77daffc65590057f76932e981e776d6eaab->enter($__internal_c67d334e1256c1e3009f3c6c7e57f77daffc65590057f76932e981e776d6eaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efcd579e0719b16ea273db84a32d9e94b90e0a1feb69687694f65854221b6be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcd579e0719b16ea273db84a32d9e94b90e0a1feb69687694f65854221b6be8->enter($__internal_efcd579e0719b16ea273db84a32d9e94b90e0a1feb69687694f65854221b6be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "autor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "category", array()), "title", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_efcd579e0719b16ea273db84a32d9e94b90e0a1feb69687694f65854221b6be8->leave($__internal_efcd579e0719b16ea273db84a32d9e94b90e0a1feb69687694f65854221b6be8_prof);

        
        $__internal_c67d334e1256c1e3009f3c6c7e57f77daffc65590057f76932e981e776d6eaab->leave($__internal_c67d334e1256c1e3009f3c6c7e57f77daffc65590057f76932e981e776d6eaab_prof);

    }

    public function getTemplateName()
    {
        return "articles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  94 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ article.name }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ article.content }}</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>{{ article.autor }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if article.date %}{{ article.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>{{ article.category.title }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('articles_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('articles_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "articles/show.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/articles/show.html.twig");
    }
}
