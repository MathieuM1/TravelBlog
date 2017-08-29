<?php

/* default/index.html.twig */
class __TwigTemplate_eb06cea6897fcd0190b5b480f9660ee60e7cc875ac6347494ee121194322dc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abb2b7d17c8cf89305fa7ce59eb50ec9b7ee0aa801000c404d42639eaa98ee56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb2b7d17c8cf89305fa7ce59eb50ec9b7ee0aa801000c404d42639eaa98ee56->enter($__internal_abb2b7d17c8cf89305fa7ce59eb50ec9b7ee0aa801000c404d42639eaa98ee56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_4f3241f1529d8f24e2969ddf4d17af213a2a0d3e2966ae16a68525c72d339ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3241f1529d8f24e2969ddf4d17af213a2a0d3e2966ae16a68525c72d339ae0->enter($__internal_4f3241f1529d8f24e2969ddf4d17af213a2a0d3e2966ae16a68525c72d339ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb2b7d17c8cf89305fa7ce59eb50ec9b7ee0aa801000c404d42639eaa98ee56->leave($__internal_abb2b7d17c8cf89305fa7ce59eb50ec9b7ee0aa801000c404d42639eaa98ee56_prof);

        
        $__internal_4f3241f1529d8f24e2969ddf4d17af213a2a0d3e2966ae16a68525c72d339ae0->leave($__internal_4f3241f1529d8f24e2969ddf4d17af213a2a0d3e2966ae16a68525c72d339ae0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5de9ce56fc953da78336adef8602d72e2355037da802ced57ff6bac53331a90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de9ce56fc953da78336adef8602d72e2355037da802ced57ff6bac53331a90f->enter($__internal_5de9ce56fc953da78336adef8602d72e2355037da802ced57ff6bac53331a90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cced8fa507fe3b6a1830d1192ed2146426f8b9ebdb52d6cf9db31f2c1a60c1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cced8fa507fe3b6a1830d1192ed2146426f8b9ebdb52d6cf9db31f2c1a60c1ed->enter($__internal_cced8fa507fe3b6a1830d1192ed2146426f8b9ebdb52d6cf9db31f2c1a60c1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
";
        
        $__internal_cced8fa507fe3b6a1830d1192ed2146426f8b9ebdb52d6cf9db31f2c1a60c1ed->leave($__internal_cced8fa507fe3b6a1830d1192ed2146426f8b9ebdb52d6cf9db31f2c1a60c1ed_prof);

        
        $__internal_5de9ce56fc953da78336adef8602d72e2355037da802ced57ff6bac53331a90f->leave($__internal_5de9ce56fc953da78336adef8602d72e2355037da802ced57ff6bac53331a90f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_af053f45cf16c0ca7720f83fc1cdf66e21927a7de4cb548bf625df8d005097c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af053f45cf16c0ca7720f83fc1cdf66e21927a7de4cb548bf625df8d005097c5->enter($__internal_af053f45cf16c0ca7720f83fc1cdf66e21927a7de4cb548bf625df8d005097c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c094a2052c9f5bd2a245aa37d94fb4c4e4b49e87e9cd5dfe1244b900c0381e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c094a2052c9f5bd2a245aa37d94fb4c4e4b49e87e9cd5dfe1244b900c0381e30->enter($__internal_c094a2052c9f5bd2a245aa37d94fb4c4e4b49e87e9cd5dfe1244b900c0381e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Logo</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Autour du monde
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink1\">
                        <a class=\"dropdown-item\" href=\"#\">USA - West Coast</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        En Europe
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink2\">
                        <a class=\"dropdown-item\" href=\"#\">Suède - Stockholm</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        En France
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink3\">
                        <a class=\"dropdown-item\" href=\"#\">Sud Ouest - Bordeaux</a>
                    </div>
                </li>
            </ul>
            <form class=\"form-inline\">
                <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-outline-success\" type=\"button\">Connexion</a>
            </form>
        </div>
    </nav>
";
        
        $__internal_c094a2052c9f5bd2a245aa37d94fb4c4e4b49e87e9cd5dfe1244b900c0381e30->leave($__internal_c094a2052c9f5bd2a245aa37d94fb4c4e4b49e87e9cd5dfe1244b900c0381e30_prof);

        
        $__internal_af053f45cf16c0ca7720f83fc1cdf66e21927a7de4cb548bf625df8d005097c5->leave($__internal_af053f45cf16c0ca7720f83fc1cdf66e21927a7de4cb548bf625df8d005097c5_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 46,  76 => 9,  67 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/nav.css') }}\">
{% endblock %}

{% block body %}
    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Logo</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Autour du monde
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink1\">
                        <a class=\"dropdown-item\" href=\"#\">USA - West Coast</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        En Europe
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink2\">
                        <a class=\"dropdown-item\" href=\"#\">Suède - Stockholm</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        En France
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink3\">
                        <a class=\"dropdown-item\" href=\"#\">Sud Ouest - Bordeaux</a>
                    </div>
                </li>
            </ul>
            <form class=\"form-inline\">
                <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-outline-success\" type=\"button\">Connexion</a>
            </form>
        </div>
    </nav>
{% endblock %}


", "default/index.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/default/index.html.twig");
    }
}
