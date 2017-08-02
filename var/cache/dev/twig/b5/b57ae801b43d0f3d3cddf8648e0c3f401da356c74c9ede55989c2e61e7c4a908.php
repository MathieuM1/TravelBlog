<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6a70998442965774cc90829eee21db4b47643f5cea3c586197cc7950b57ea4af extends Twig_Template
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
        $__internal_60d16d7f86ad04f5f3e94ebdf76f1d8e040e19fd68ca97445cf1c71b7e639699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d16d7f86ad04f5f3e94ebdf76f1d8e040e19fd68ca97445cf1c71b7e639699->enter($__internal_60d16d7f86ad04f5f3e94ebdf76f1d8e040e19fd68ca97445cf1c71b7e639699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_92e2f94ae09221b553a995b1de7183c5b508782a9f0ac89273c19fe897b93f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e2f94ae09221b553a995b1de7183c5b508782a9f0ac89273c19fe897b93f78->enter($__internal_92e2f94ae09221b553a995b1de7183c5b508782a9f0ac89273c19fe897b93f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_60d16d7f86ad04f5f3e94ebdf76f1d8e040e19fd68ca97445cf1c71b7e639699->leave($__internal_60d16d7f86ad04f5f3e94ebdf76f1d8e040e19fd68ca97445cf1c71b7e639699_prof);

        
        $__internal_92e2f94ae09221b553a995b1de7183c5b508782a9f0ac89273c19fe897b93f78->leave($__internal_92e2f94ae09221b553a995b1de7183c5b508782a9f0ac89273c19fe897b93f78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
