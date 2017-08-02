<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc17abb760455353e60c9f81c8e6f5436a26ee3cd32c18e9aac35de332b4f6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc17abb760455353e60c9f81c8e6f5436a26ee3cd32c18e9aac35de332b4f6be->enter($__internal_cc17abb760455353e60c9f81c8e6f5436a26ee3cd32c18e9aac35de332b4f6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_183d26eea431eb3bccf956e1c7009840ec754dfdcd149c067c544ba3fa54606c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183d26eea431eb3bccf956e1c7009840ec754dfdcd149c067c544ba3fa54606c->enter($__internal_183d26eea431eb3bccf956e1c7009840ec754dfdcd149c067c544ba3fa54606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cc17abb760455353e60c9f81c8e6f5436a26ee3cd32c18e9aac35de332b4f6be->leave($__internal_cc17abb760455353e60c9f81c8e6f5436a26ee3cd32c18e9aac35de332b4f6be_prof);

        
        $__internal_183d26eea431eb3bccf956e1c7009840ec754dfdcd149c067c544ba3fa54606c->leave($__internal_183d26eea431eb3bccf956e1c7009840ec754dfdcd149c067c544ba3fa54606c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c973f7789ea751d179d04658447e4f92d54f7ee424e45070656d8e54157b3e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c973f7789ea751d179d04658447e4f92d54f7ee424e45070656d8e54157b3e91->enter($__internal_c973f7789ea751d179d04658447e4f92d54f7ee424e45070656d8e54157b3e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2791770a24672feee737adf644c0ed0e852597e9d2c81e0d96a7852650ebbfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2791770a24672feee737adf644c0ed0e852597e9d2c81e0d96a7852650ebbfea->enter($__internal_2791770a24672feee737adf644c0ed0e852597e9d2c81e0d96a7852650ebbfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2791770a24672feee737adf644c0ed0e852597e9d2c81e0d96a7852650ebbfea->leave($__internal_2791770a24672feee737adf644c0ed0e852597e9d2c81e0d96a7852650ebbfea_prof);

        
        $__internal_c973f7789ea751d179d04658447e4f92d54f7ee424e45070656d8e54157b3e91->leave($__internal_c973f7789ea751d179d04658447e4f92d54f7ee424e45070656d8e54157b3e91_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_836bf46ddb9e3f729eb0a0fa7d4282578e55b8c02e953133b9b14430d6a96de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836bf46ddb9e3f729eb0a0fa7d4282578e55b8c02e953133b9b14430d6a96de4->enter($__internal_836bf46ddb9e3f729eb0a0fa7d4282578e55b8c02e953133b9b14430d6a96de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3b45d9d2356f9898cb7f7ee13f72abb8fad1c68fcbb519907b5797879ed9fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b45d9d2356f9898cb7f7ee13f72abb8fad1c68fcbb519907b5797879ed9fb2->enter($__internal_d3b45d9d2356f9898cb7f7ee13f72abb8fad1c68fcbb519907b5797879ed9fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d3b45d9d2356f9898cb7f7ee13f72abb8fad1c68fcbb519907b5797879ed9fb2->leave($__internal_d3b45d9d2356f9898cb7f7ee13f72abb8fad1c68fcbb519907b5797879ed9fb2_prof);

        
        $__internal_836bf46ddb9e3f729eb0a0fa7d4282578e55b8c02e953133b9b14430d6a96de4->leave($__internal_836bf46ddb9e3f729eb0a0fa7d4282578e55b8c02e953133b9b14430d6a96de4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_57a3d72347a14b1df4cf26304e1c907ddffadf4af054d6edd367cdb033402977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a3d72347a14b1df4cf26304e1c907ddffadf4af054d6edd367cdb033402977->enter($__internal_57a3d72347a14b1df4cf26304e1c907ddffadf4af054d6edd367cdb033402977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93dc800873971702498dc18aa7d098e7f8a2a7836231f79688f3bfd472e9d5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dc800873971702498dc18aa7d098e7f8a2a7836231f79688f3bfd472e9d5fb->enter($__internal_93dc800873971702498dc18aa7d098e7f8a2a7836231f79688f3bfd472e9d5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93dc800873971702498dc18aa7d098e7f8a2a7836231f79688f3bfd472e9d5fb->leave($__internal_93dc800873971702498dc18aa7d098e7f8a2a7836231f79688f3bfd472e9d5fb_prof);

        
        $__internal_57a3d72347a14b1df4cf26304e1c907ddffadf4af054d6edd367cdb033402977->leave($__internal_57a3d72347a14b1df4cf26304e1c907ddffadf4af054d6edd367cdb033402977_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
