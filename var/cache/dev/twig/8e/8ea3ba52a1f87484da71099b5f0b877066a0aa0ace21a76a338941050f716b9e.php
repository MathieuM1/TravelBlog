<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_080b1b81a96a3acaa2397a68fb63b9c44cd5bf2d588c57477472921f0fdcdc20 extends Twig_Template
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
        $__internal_c114a1d9d153d905691779b1675d5f8c2743fcf6eb499e98f7fb51de5e7b47ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c114a1d9d153d905691779b1675d5f8c2743fcf6eb499e98f7fb51de5e7b47ba->enter($__internal_c114a1d9d153d905691779b1675d5f8c2743fcf6eb499e98f7fb51de5e7b47ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ec37453752cabf51b58b9d09370ba6416e28ae49e04f55e3b2dc29333a0a4b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec37453752cabf51b58b9d09370ba6416e28ae49e04f55e3b2dc29333a0a4b03->enter($__internal_ec37453752cabf51b58b9d09370ba6416e28ae49e04f55e3b2dc29333a0a4b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c114a1d9d153d905691779b1675d5f8c2743fcf6eb499e98f7fb51de5e7b47ba->leave($__internal_c114a1d9d153d905691779b1675d5f8c2743fcf6eb499e98f7fb51de5e7b47ba_prof);

        
        $__internal_ec37453752cabf51b58b9d09370ba6416e28ae49e04f55e3b2dc29333a0a4b03->leave($__internal_ec37453752cabf51b58b9d09370ba6416e28ae49e04f55e3b2dc29333a0a4b03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
