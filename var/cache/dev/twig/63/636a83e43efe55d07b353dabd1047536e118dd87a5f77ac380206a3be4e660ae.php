<?php

/* articles/index.html.twig */
class __TwigTemplate_5ce55a01a135174495d44dfc8d262fb155dd0f086b85bae4ad15e07015875ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
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
        $__internal_bb3d0535830a97e230da9feb38981b0752e52a8c0f2890ff1f718bd9a65cafd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3d0535830a97e230da9feb38981b0752e52a8c0f2890ff1f718bd9a65cafd2->enter($__internal_bb3d0535830a97e230da9feb38981b0752e52a8c0f2890ff1f718bd9a65cafd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_f7947f2dd6ffb60d6c224533604779c6aaa41717711416de9187b6aec6432c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7947f2dd6ffb60d6c224533604779c6aaa41717711416de9187b6aec6432c2b->enter($__internal_f7947f2dd6ffb60d6c224533604779c6aaa41717711416de9187b6aec6432c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb3d0535830a97e230da9feb38981b0752e52a8c0f2890ff1f718bd9a65cafd2->leave($__internal_bb3d0535830a97e230da9feb38981b0752e52a8c0f2890ff1f718bd9a65cafd2_prof);

        
        $__internal_f7947f2dd6ffb60d6c224533604779c6aaa41717711416de9187b6aec6432c2b->leave($__internal_f7947f2dd6ffb60d6c224533604779c6aaa41717711416de9187b6aec6432c2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_965e7cf37993711de5ac0b6a742dc566f6cfed58bdbcc63e6d778785c77e7503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965e7cf37993711de5ac0b6a742dc566f6cfed58bdbcc63e6d778785c77e7503->enter($__internal_965e7cf37993711de5ac0b6a742dc566f6cfed58bdbcc63e6d778785c77e7503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a3bfbe3befc05521fbc130d76dbb10fc448ad6a96dd3e6ebe29c591ef13f833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3bfbe3befc05521fbc130d76dbb10fc448ad6a96dd3e6ebe29c591ef13f833->enter($__internal_5a3bfbe3befc05521fbc130d76dbb10fc448ad6a96dd3e6ebe29c591ef13f833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Content</th>
                <th>Autor</th>
                <th>Date</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "autor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["article"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "category", array()), "title", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_new");
        echo "\">Create a new article</a>
        </li>
    </ul>
";
        
        $__internal_5a3bfbe3befc05521fbc130d76dbb10fc448ad6a96dd3e6ebe29c591ef13f833->leave($__internal_5a3bfbe3befc05521fbc130d76dbb10fc448ad6a96dd3e6ebe29c591ef13f833_prof);

        
        $__internal_965e7cf37993711de5ac0b6a742dc566f6cfed58bdbcc63e6d778785c77e7503->leave($__internal_965e7cf37993711de5ac0b6a742dc566f6cfed58bdbcc63e6d778785c77e7503_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  122 => 39,  110 => 33,  104 => 30,  97 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Content</th>
                <th>Autor</th>
                <th>Date</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><a href=\"{{ path('articles_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                <td>{{ article.name }}</td>
                <td>{{ article.content }}</td>
                <td>{{ article.autor }}</td>
                <td>{% if article.date %}{{ article.date|date('Y-m-d') }}{% endif %}</td>
                <td>{{ article.category.title }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('articles_show', { 'id': article.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('articles_edit', { 'id': article.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('articles_new') }}\">Create a new article</a>
        </li>
    </ul>
{% endblock %}
", "articles/index.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/articles/index.html.twig");
    }
}
