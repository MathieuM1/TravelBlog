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
        $__internal_c992af5194a764d89c8fb6770db19727829ef760cabc6e5ab4c27d9a178b8d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c992af5194a764d89c8fb6770db19727829ef760cabc6e5ab4c27d9a178b8d7f->enter($__internal_c992af5194a764d89c8fb6770db19727829ef760cabc6e5ab4c27d9a178b8d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_82cf50d6617cba2c66e572a8afbef83efffb70af9396e4efc34acb379d29c771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cf50d6617cba2c66e572a8afbef83efffb70af9396e4efc34acb379d29c771->enter($__internal_82cf50d6617cba2c66e572a8afbef83efffb70af9396e4efc34acb379d29c771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_c992af5194a764d89c8fb6770db19727829ef760cabc6e5ab4c27d9a178b8d7f->leave($__internal_c992af5194a764d89c8fb6770db19727829ef760cabc6e5ab4c27d9a178b8d7f_prof);

        
        $__internal_82cf50d6617cba2c66e572a8afbef83efffb70af9396e4efc34acb379d29c771->leave($__internal_82cf50d6617cba2c66e572a8afbef83efffb70af9396e4efc34acb379d29c771_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_039320751eb99e98f2fc46849d9ce7cdaf016248d81c02f51035893c8267bfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039320751eb99e98f2fc46849d9ce7cdaf016248d81c02f51035893c8267bfd7->enter($__internal_039320751eb99e98f2fc46849d9ce7cdaf016248d81c02f51035893c8267bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d97ba3b87fb0c0d1fb80475c44ce77056efaea724587531fce72ad818692904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d97ba3b87fb0c0d1fb80475c44ce77056efaea724587531fce72ad818692904->enter($__internal_7d97ba3b87fb0c0d1fb80475c44ce77056efaea724587531fce72ad818692904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d97ba3b87fb0c0d1fb80475c44ce77056efaea724587531fce72ad818692904->leave($__internal_7d97ba3b87fb0c0d1fb80475c44ce77056efaea724587531fce72ad818692904_prof);

        
        $__internal_039320751eb99e98f2fc46849d9ce7cdaf016248d81c02f51035893c8267bfd7->leave($__internal_039320751eb99e98f2fc46849d9ce7cdaf016248d81c02f51035893c8267bfd7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00080a7bd765753680e16821abff29f64c9901ea2cba1d8cc0099780a7d2cd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00080a7bd765753680e16821abff29f64c9901ea2cba1d8cc0099780a7d2cd2d->enter($__internal_00080a7bd765753680e16821abff29f64c9901ea2cba1d8cc0099780a7d2cd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd4f2d6a410f1a9d40e3d568adef8562db58555e8046a7a177c3485a37d9cf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4f2d6a410f1a9d40e3d568adef8562db58555e8046a7a177c3485a37d9cf96->enter($__internal_fd4f2d6a410f1a9d40e3d568adef8562db58555e8046a7a177c3485a37d9cf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/header.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_fd4f2d6a410f1a9d40e3d568adef8562db58555e8046a7a177c3485a37d9cf96->leave($__internal_fd4f2d6a410f1a9d40e3d568adef8562db58555e8046a7a177c3485a37d9cf96_prof);

        
        $__internal_00080a7bd765753680e16821abff29f64c9901ea2cba1d8cc0099780a7d2cd2d->leave($__internal_00080a7bd765753680e16821abff29f64c9901ea2cba1d8cc0099780a7d2cd2d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec70d1aad6a86cf1485dec54ef8cb30c570ca922af9a7781f5432f3faf151b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec70d1aad6a86cf1485dec54ef8cb30c570ca922af9a7781f5432f3faf151b7->enter($__internal_6ec70d1aad6a86cf1485dec54ef8cb30c570ca922af9a7781f5432f3faf151b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_404030ed7dd8f25047c4001367945c68386887de0b4760f4106e55f71100df2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404030ed7dd8f25047c4001367945c68386887de0b4760f4106e55f71100df2c->enter($__internal_404030ed7dd8f25047c4001367945c68386887de0b4760f4106e55f71100df2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "        ";
        
        $__internal_404030ed7dd8f25047c4001367945c68386887de0b4760f4106e55f71100df2c->leave($__internal_404030ed7dd8f25047c4001367945c68386887de0b4760f4106e55f71100df2c_prof);

        
        $__internal_6ec70d1aad6a86cf1485dec54ef8cb30c570ca922af9a7781f5432f3faf151b7->leave($__internal_6ec70d1aad6a86cf1485dec54ef8cb30c570ca922af9a7781f5432f3faf151b7_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5132f503d14b16bc07f4772c96814982e402880ba418fbb1803a32997574e2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5132f503d14b16bc07f4772c96814982e402880ba418fbb1803a32997574e2cd->enter($__internal_5132f503d14b16bc07f4772c96814982e402880ba418fbb1803a32997574e2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6cf8a07c33c19d703dfb09266190b636ad8097825f1413f89e9babda865ac50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf8a07c33c19d703dfb09266190b636ad8097825f1413f89e9babda865ac50e->enter($__internal_6cf8a07c33c19d703dfb09266190b636ad8097825f1413f89e9babda865ac50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6cf8a07c33c19d703dfb09266190b636ad8097825f1413f89e9babda865ac50e->leave($__internal_6cf8a07c33c19d703dfb09266190b636ad8097825f1413f89e9babda865ac50e_prof);

        
        $__internal_5132f503d14b16bc07f4772c96814982e402880ba418fbb1803a32997574e2cd->leave($__internal_5132f503d14b16bc07f4772c96814982e402880ba418fbb1803a32997574e2cd_prof);

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
        return array (  149 => 22,  144 => 19,  135 => 18,  125 => 17,  116 => 16,  104 => 11,  100 => 10,  96 => 9,  92 => 7,  83 => 6,  65 => 5,  53 => 24,  50 => 18,  48 => 16,  41 => 13,  39 => 6,  35 => 5,  29 => 1,);
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
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/nav.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/header.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
        {% endblock %}
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/base.html.twig");
    }
}
