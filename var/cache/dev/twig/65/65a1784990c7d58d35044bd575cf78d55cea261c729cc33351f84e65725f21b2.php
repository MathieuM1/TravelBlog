<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5c8e5e128e6626d47f0b56deb7b86d811267c1cae6af4d2e1dec9934ffcbaf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4ff4c90f4a9a90be1d91fcba2c4d71df2031823fcb85195490e84464f9ad321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ff4c90f4a9a90be1d91fcba2c4d71df2031823fcb85195490e84464f9ad321->enter($__internal_d4ff4c90f4a9a90be1d91fcba2c4d71df2031823fcb85195490e84464f9ad321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0db75b96210a5ad04b4f8f5a8fcf4ebc0f0b8be634eb4beb668d9df0b140cbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db75b96210a5ad04b4f8f5a8fcf4ebc0f0b8be634eb4beb668d9df0b140cbd3->enter($__internal_0db75b96210a5ad04b4f8f5a8fcf4ebc0f0b8be634eb4beb668d9df0b140cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d4ff4c90f4a9a90be1d91fcba2c4d71df2031823fcb85195490e84464f9ad321->leave($__internal_d4ff4c90f4a9a90be1d91fcba2c4d71df2031823fcb85195490e84464f9ad321_prof);

        
        $__internal_0db75b96210a5ad04b4f8f5a8fcf4ebc0f0b8be634eb4beb668d9df0b140cbd3->leave($__internal_0db75b96210a5ad04b4f8f5a8fcf4ebc0f0b8be634eb4beb668d9df0b140cbd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
