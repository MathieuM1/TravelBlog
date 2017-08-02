<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_26b1281339098f8346f738689af5f787e52a9541d52a9162b2f829bf41ee46f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b1281339098f8346f738689af5f787e52a9541d52a9162b2f829bf41ee46f2->enter($__internal_26b1281339098f8346f738689af5f787e52a9541d52a9162b2f829bf41ee46f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_239ac32634ac4d2eb39bec0477b0df7efe0c5bfe524498e271cc8cd1aaca11f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239ac32634ac4d2eb39bec0477b0df7efe0c5bfe524498e271cc8cd1aaca11f1->enter($__internal_239ac32634ac4d2eb39bec0477b0df7efe0c5bfe524498e271cc8cd1aaca11f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_26b1281339098f8346f738689af5f787e52a9541d52a9162b2f829bf41ee46f2->leave($__internal_26b1281339098f8346f738689af5f787e52a9541d52a9162b2f829bf41ee46f2_prof);

        
        $__internal_239ac32634ac4d2eb39bec0477b0df7efe0c5bfe524498e271cc8cd1aaca11f1->leave($__internal_239ac32634ac4d2eb39bec0477b0df7efe0c5bfe524498e271cc8cd1aaca11f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
