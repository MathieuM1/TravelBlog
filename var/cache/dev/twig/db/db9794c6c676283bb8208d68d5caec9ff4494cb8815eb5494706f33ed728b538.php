<?php

/* :default:index.html.twig */
class __TwigTemplate_eb06cea6897fcd0190b5b480f9660ee60e7cc875ac6347494ee121194322dc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_a8c380adf1e0f1f4956bab14ff5ab32c20172aa5cb2d882e777c18b29896907b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c380adf1e0f1f4956bab14ff5ab32c20172aa5cb2d882e777c18b29896907b->enter($__internal_a8c380adf1e0f1f4956bab14ff5ab32c20172aa5cb2d882e777c18b29896907b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_37e854cedaa2918d61da5cc555b2f562ef9fc6f587ebfb9dd374cbdef0a96e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e854cedaa2918d61da5cc555b2f562ef9fc6f587ebfb9dd374cbdef0a96e5c->enter($__internal_37e854cedaa2918d61da5cc555b2f562ef9fc6f587ebfb9dd374cbdef0a96e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c380adf1e0f1f4956bab14ff5ab32c20172aa5cb2d882e777c18b29896907b->leave($__internal_a8c380adf1e0f1f4956bab14ff5ab32c20172aa5cb2d882e777c18b29896907b_prof);

        
        $__internal_37e854cedaa2918d61da5cc555b2f562ef9fc6f587ebfb9dd374cbdef0a96e5c->leave($__internal_37e854cedaa2918d61da5cc555b2f562ef9fc6f587ebfb9dd374cbdef0a96e5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b193cfa6129595160dc2357c4e6e433c6cf5146cb54e88ec110e037286a1847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b193cfa6129595160dc2357c4e6e433c6cf5146cb54e88ec110e037286a1847->enter($__internal_2b193cfa6129595160dc2357c4e6e433c6cf5146cb54e88ec110e037286a1847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d5eaf5779ad3f18d213fc8729601b68dbf33b1d566d412ced7c8ee5f547fb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5eaf5779ad3f18d213fc8729601b68dbf33b1d566d412ced7c8ee5f547fb07->enter($__internal_0d5eaf5779ad3f18d213fc8729601b68dbf33b1d566d412ced7c8ee5f547fb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Plop</h1>
";
        
        $__internal_0d5eaf5779ad3f18d213fc8729601b68dbf33b1d566d412ced7c8ee5f547fb07->leave($__internal_0d5eaf5779ad3f18d213fc8729601b68dbf33b1d566d412ced7c8ee5f547fb07_prof);

        
        $__internal_2b193cfa6129595160dc2357c4e6e433c6cf5146cb54e88ec110e037286a1847->leave($__internal_2b193cfa6129595160dc2357c4e6e433c6cf5146cb54e88ec110e037286a1847_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Plop</h1>
{% endblock %}


", ":default:index.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/default/index.html.twig");
    }
}
