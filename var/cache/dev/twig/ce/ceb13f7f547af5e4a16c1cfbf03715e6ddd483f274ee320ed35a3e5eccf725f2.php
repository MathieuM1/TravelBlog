<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_b9f12a51bb0eeaba23fac42adf22315fa56312cb33a0d3dfcc3233f26afebd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f12a51bb0eeaba23fac42adf22315fa56312cb33a0d3dfcc3233f26afebd5b->enter($__internal_b9f12a51bb0eeaba23fac42adf22315fa56312cb33a0d3dfcc3233f26afebd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d7f9eef3eec146fad10db76d5f74b44683f867a527a4bfea4e377e72baeebd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f9eef3eec146fad10db76d5f74b44683f867a527a4bfea4e377e72baeebd52->enter($__internal_d7f9eef3eec146fad10db76d5f74b44683f867a527a4bfea4e377e72baeebd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b9f12a51bb0eeaba23fac42adf22315fa56312cb33a0d3dfcc3233f26afebd5b->leave($__internal_b9f12a51bb0eeaba23fac42adf22315fa56312cb33a0d3dfcc3233f26afebd5b_prof);

        
        $__internal_d7f9eef3eec146fad10db76d5f74b44683f867a527a4bfea4e377e72baeebd52->leave($__internal_d7f9eef3eec146fad10db76d5f74b44683f867a527a4bfea4e377e72baeebd52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
