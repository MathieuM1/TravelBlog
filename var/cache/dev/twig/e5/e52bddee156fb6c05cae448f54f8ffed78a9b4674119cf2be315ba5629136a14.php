<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46a97268e98d62c58be3e58a38471ea5b31eb08f6433953d41ad47cf41707cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a97268e98d62c58be3e58a38471ea5b31eb08f6433953d41ad47cf41707cf6->enter($__internal_46a97268e98d62c58be3e58a38471ea5b31eb08f6433953d41ad47cf41707cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4f6312ad8a45fdc5f93e37b4760cdafc0f23c343b25102f367de5f761e11236d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6312ad8a45fdc5f93e37b4760cdafc0f23c343b25102f367de5f761e11236d->enter($__internal_4f6312ad8a45fdc5f93e37b4760cdafc0f23c343b25102f367de5f761e11236d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_46a97268e98d62c58be3e58a38471ea5b31eb08f6433953d41ad47cf41707cf6->leave($__internal_46a97268e98d62c58be3e58a38471ea5b31eb08f6433953d41ad47cf41707cf6_prof);

        
        $__internal_4f6312ad8a45fdc5f93e37b4760cdafc0f23c343b25102f367de5f761e11236d->leave($__internal_4f6312ad8a45fdc5f93e37b4760cdafc0f23c343b25102f367de5f761e11236d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a8aaca2aab9af7db0f1e23d8fdf20dffba429fb2cd4bddda3f8aec20ee773c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8aaca2aab9af7db0f1e23d8fdf20dffba429fb2cd4bddda3f8aec20ee773c0->enter($__internal_5a8aaca2aab9af7db0f1e23d8fdf20dffba429fb2cd4bddda3f8aec20ee773c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da4e3c817446f35bef63fc28a87bf4b7da5f2b620370914d2d443c3b0808bec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4e3c817446f35bef63fc28a87bf4b7da5f2b620370914d2d443c3b0808bec5->enter($__internal_da4e3c817446f35bef63fc28a87bf4b7da5f2b620370914d2d443c3b0808bec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da4e3c817446f35bef63fc28a87bf4b7da5f2b620370914d2d443c3b0808bec5->leave($__internal_da4e3c817446f35bef63fc28a87bf4b7da5f2b620370914d2d443c3b0808bec5_prof);

        
        $__internal_5a8aaca2aab9af7db0f1e23d8fdf20dffba429fb2cd4bddda3f8aec20ee773c0->leave($__internal_5a8aaca2aab9af7db0f1e23d8fdf20dffba429fb2cd4bddda3f8aec20ee773c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cffb714e820ef86bf5b92baa1d6c21793ed98b81fbab8e40b02a5a8037c8a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cffb714e820ef86bf5b92baa1d6c21793ed98b81fbab8e40b02a5a8037c8a84->enter($__internal_4cffb714e820ef86bf5b92baa1d6c21793ed98b81fbab8e40b02a5a8037c8a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ef2ecaa8cab63f5ad87c1f7905a2314497a574ce06040e4b5c21d9b26a1cff4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2ecaa8cab63f5ad87c1f7905a2314497a574ce06040e4b5c21d9b26a1cff4e->enter($__internal_ef2ecaa8cab63f5ad87c1f7905a2314497a574ce06040e4b5c21d9b26a1cff4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
        ";
        
        $__internal_ef2ecaa8cab63f5ad87c1f7905a2314497a574ce06040e4b5c21d9b26a1cff4e->leave($__internal_ef2ecaa8cab63f5ad87c1f7905a2314497a574ce06040e4b5c21d9b26a1cff4e_prof);

        
        $__internal_4cffb714e820ef86bf5b92baa1d6c21793ed98b81fbab8e40b02a5a8037c8a84->leave($__internal_4cffb714e820ef86bf5b92baa1d6c21793ed98b81fbab8e40b02a5a8037c8a84_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_43ee144f03f7a1685b44217a63fe141de8119cbf1d2ef887e8342cd481887839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ee144f03f7a1685b44217a63fe141de8119cbf1d2ef887e8342cd481887839->enter($__internal_43ee144f03f7a1685b44217a63fe141de8119cbf1d2ef887e8342cd481887839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff4e729cd04d7c10abf52fc70089d178410dc4561f4147f5738d12faa857cc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4e729cd04d7c10abf52fc70089d178410dc4561f4147f5738d12faa857cc76->enter($__internal_ff4e729cd04d7c10abf52fc70089d178410dc4561f4147f5738d12faa857cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        
        $__internal_ff4e729cd04d7c10abf52fc70089d178410dc4561f4147f5738d12faa857cc76->leave($__internal_ff4e729cd04d7c10abf52fc70089d178410dc4561f4147f5738d12faa857cc76_prof);

        
        $__internal_43ee144f03f7a1685b44217a63fe141de8119cbf1d2ef887e8342cd481887839->leave($__internal_43ee144f03f7a1685b44217a63fe141de8119cbf1d2ef887e8342cd481887839_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_623b51cbcb6bb0c5156c78b9c52a1fc22831d9aa34be26a77c28aa6a2f66bb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623b51cbcb6bb0c5156c78b9c52a1fc22831d9aa34be26a77c28aa6a2f66bb6b->enter($__internal_623b51cbcb6bb0c5156c78b9c52a1fc22831d9aa34be26a77c28aa6a2f66bb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e51fed3a7054b39fbd75237e760300689b651df37c0cc696ae1b10557e53989a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51fed3a7054b39fbd75237e760300689b651df37c0cc696ae1b10557e53989a->enter($__internal_e51fed3a7054b39fbd75237e760300689b651df37c0cc696ae1b10557e53989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_e51fed3a7054b39fbd75237e760300689b651df37c0cc696ae1b10557e53989a->leave($__internal_e51fed3a7054b39fbd75237e760300689b651df37c0cc696ae1b10557e53989a_prof);

        
        $__internal_623b51cbcb6bb0c5156c78b9c52a1fc22831d9aa34be26a77c28aa6a2f66bb6b->leave($__internal_623b51cbcb6bb0c5156c78b9c52a1fc22831d9aa34be26a77c28aa6a2f66bb6b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 15,  122 => 14,  112 => 13,  103 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 19,  50 => 14,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
        {% endblock %}
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/base.html.twig");
    }
}
