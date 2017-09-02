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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac875151365e9ecb4ebc7975728e9fca7ca1c563cc28b72b7c885b70654efc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac875151365e9ecb4ebc7975728e9fca7ca1c563cc28b72b7c885b70654efc80->enter($__internal_ac875151365e9ecb4ebc7975728e9fca7ca1c563cc28b72b7c885b70654efc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_dfd35d57b96e7e2b5279e671f07f966411add4b38dd8420587f0850695211eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd35d57b96e7e2b5279e671f07f966411add4b38dd8420587f0850695211eb3->enter($__internal_dfd35d57b96e7e2b5279e671f07f966411add4b38dd8420587f0850695211eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac875151365e9ecb4ebc7975728e9fca7ca1c563cc28b72b7c885b70654efc80->leave($__internal_ac875151365e9ecb4ebc7975728e9fca7ca1c563cc28b72b7c885b70654efc80_prof);

        
        $__internal_dfd35d57b96e7e2b5279e671f07f966411add4b38dd8420587f0850695211eb3->leave($__internal_dfd35d57b96e7e2b5279e671f07f966411add4b38dd8420587f0850695211eb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8d6805cbec271c4a8312a148ca6702d99bc82ef3e761a2dc3ab1fa04ca74ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8d6805cbec271c4a8312a148ca6702d99bc82ef3e761a2dc3ab1fa04ca74ce->enter($__internal_ff8d6805cbec271c4a8312a148ca6702d99bc82ef3e761a2dc3ab1fa04ca74ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0bf9db219b8d89df78b5ff45cc40a836543e2570e17cc0ec0209d477b883597c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf9db219b8d89df78b5ff45cc40a836543e2570e17cc0ec0209d477b883597c->enter($__internal_0bf9db219b8d89df78b5ff45cc40a836543e2570e17cc0ec0209d477b883597c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-outline-success\" type=\"button\">Connexion</a>
            </form>
        </div>
    </nav>
    <header>
        <h1>Raccoon traveler</h1>
        <h2>L'aventure commence ici</h2>
        <div class=\"buttonScroll\"><i class=\"fa fa-arrow-circle-down scroll\" aria-hidden=\"true\"></i></div>
    </header>
    <div class=\"presentation\">
        <p>Plop</p>
    </div>
";
        
        $__internal_0bf9db219b8d89df78b5ff45cc40a836543e2570e17cc0ec0209d477b883597c->leave($__internal_0bf9db219b8d89df78b5ff45cc40a836543e2570e17cc0ec0209d477b883597c_prof);

        
        $__internal_ff8d6805cbec271c4a8312a148ca6702d99bc82ef3e761a2dc3ab1fa04ca74ce->leave($__internal_ff8d6805cbec271c4a8312a148ca6702d99bc82ef3e761a2dc3ab1fa04ca74ce_prof);

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
        return array (  88 => 41,  49 => 4,  40 => 3,  11 => 1,);
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
    <header>
        <h1>Raccoon traveler</h1>
        <h2>L'aventure commence ici</h2>
        <div class=\"buttonScroll\"><i class=\"fa fa-arrow-circle-down scroll\" aria-hidden=\"true\"></i></div>
    </header>
    <div class=\"presentation\">
        <p>Plop</p>
    </div>
{% endblock %}


", "default/index.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/default/index.html.twig");
    }
}
