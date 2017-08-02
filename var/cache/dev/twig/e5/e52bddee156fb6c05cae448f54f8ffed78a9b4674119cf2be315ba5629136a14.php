<?php

/* ::base.html.twig */
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
        $__internal_7e00fa855de9305b7fe420bf4a6a548e225c5b765a69c740b89e2d796404070b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e00fa855de9305b7fe420bf4a6a548e225c5b765a69c740b89e2d796404070b->enter($__internal_7e00fa855de9305b7fe420bf4a6a548e225c5b765a69c740b89e2d796404070b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f5ee09960623e666de8388e4ebbba8c1d86329e56e1c4a5e227add8f1ac24ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ee09960623e666de8388e4ebbba8c1d86329e56e1c4a5e227add8f1ac24ac6->enter($__internal_f5ee09960623e666de8388e4ebbba8c1d86329e56e1c4a5e227add8f1ac24ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7e00fa855de9305b7fe420bf4a6a548e225c5b765a69c740b89e2d796404070b->leave($__internal_7e00fa855de9305b7fe420bf4a6a548e225c5b765a69c740b89e2d796404070b_prof);

        
        $__internal_f5ee09960623e666de8388e4ebbba8c1d86329e56e1c4a5e227add8f1ac24ac6->leave($__internal_f5ee09960623e666de8388e4ebbba8c1d86329e56e1c4a5e227add8f1ac24ac6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_702b1a7c5edb81f110563588ec92512df4b01ea1c159027627561f2e743946b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702b1a7c5edb81f110563588ec92512df4b01ea1c159027627561f2e743946b7->enter($__internal_702b1a7c5edb81f110563588ec92512df4b01ea1c159027627561f2e743946b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8bc0cec77d3e2e4057195eb81d26d2691e00435947200577695ad617e2cb9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bc0cec77d3e2e4057195eb81d26d2691e00435947200577695ad617e2cb9eb->enter($__internal_b8bc0cec77d3e2e4057195eb81d26d2691e00435947200577695ad617e2cb9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b8bc0cec77d3e2e4057195eb81d26d2691e00435947200577695ad617e2cb9eb->leave($__internal_b8bc0cec77d3e2e4057195eb81d26d2691e00435947200577695ad617e2cb9eb_prof);

        
        $__internal_702b1a7c5edb81f110563588ec92512df4b01ea1c159027627561f2e743946b7->leave($__internal_702b1a7c5edb81f110563588ec92512df4b01ea1c159027627561f2e743946b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4eb14ea5bd5af307447a1f0c891ad694764dc049e562cf51bef46e262bc9eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4eb14ea5bd5af307447a1f0c891ad694764dc049e562cf51bef46e262bc9eed->enter($__internal_a4eb14ea5bd5af307447a1f0c891ad694764dc049e562cf51bef46e262bc9eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3b7dc34df72b9a5fb9bd9a17ca94a90ec78f4e714d80cdbb1cd8d5a6371e70f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7dc34df72b9a5fb9bd9a17ca94a90ec78f4e714d80cdbb1cd8d5a6371e70f1->enter($__internal_3b7dc34df72b9a5fb9bd9a17ca94a90ec78f4e714d80cdbb1cd8d5a6371e70f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3b7dc34df72b9a5fb9bd9a17ca94a90ec78f4e714d80cdbb1cd8d5a6371e70f1->leave($__internal_3b7dc34df72b9a5fb9bd9a17ca94a90ec78f4e714d80cdbb1cd8d5a6371e70f1_prof);

        
        $__internal_a4eb14ea5bd5af307447a1f0c891ad694764dc049e562cf51bef46e262bc9eed->leave($__internal_a4eb14ea5bd5af307447a1f0c891ad694764dc049e562cf51bef46e262bc9eed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f09a17401b7ec92c4668b6293355ae59076c7fd44d380b99e250f0c14bcf72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f09a17401b7ec92c4668b6293355ae59076c7fd44d380b99e250f0c14bcf72->enter($__internal_50f09a17401b7ec92c4668b6293355ae59076c7fd44d380b99e250f0c14bcf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_040c0fdaac8a9f39554c4fa5cff333022e49df254065e07399763e87923cd441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040c0fdaac8a9f39554c4fa5cff333022e49df254065e07399763e87923cd441->enter($__internal_040c0fdaac8a9f39554c4fa5cff333022e49df254065e07399763e87923cd441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_040c0fdaac8a9f39554c4fa5cff333022e49df254065e07399763e87923cd441->leave($__internal_040c0fdaac8a9f39554c4fa5cff333022e49df254065e07399763e87923cd441_prof);

        
        $__internal_50f09a17401b7ec92c4668b6293355ae59076c7fd44d380b99e250f0c14bcf72->leave($__internal_50f09a17401b7ec92c4668b6293355ae59076c7fd44d380b99e250f0c14bcf72_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6849f818d557a627068d774a977398aea8328737215bd3edb02db86ee81af61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6849f818d557a627068d774a977398aea8328737215bd3edb02db86ee81af61e->enter($__internal_6849f818d557a627068d774a977398aea8328737215bd3edb02db86ee81af61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_806717592fde04684a28a6d81114b8acdb3a8c1e316b93ec44f184eea0972c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806717592fde04684a28a6d81114b8acdb3a8c1e316b93ec44f184eea0972c5b->enter($__internal_806717592fde04684a28a6d81114b8acdb3a8c1e316b93ec44f184eea0972c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_806717592fde04684a28a6d81114b8acdb3a8c1e316b93ec44f184eea0972c5b->leave($__internal_806717592fde04684a28a6d81114b8acdb3a8c1e316b93ec44f184eea0972c5b_prof);

        
        $__internal_6849f818d557a627068d774a977398aea8328737215bd3edb02db86ee81af61e->leave($__internal_6849f818d557a627068d774a977398aea8328737215bd3edb02db86ee81af61e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/m21/atelier/Trip/Trip/app/Resources/views/base.html.twig");
    }
}
