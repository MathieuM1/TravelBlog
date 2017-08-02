<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d851f2e88206afd775c879a81d472d79f5f0112e7fcd98ca143285efcd3b9731 extends Twig_Template
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
        $__internal_118dd25f3436553018a64dc6d1593dd92137a9dde9f2b28b6ae46e097d81766d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118dd25f3436553018a64dc6d1593dd92137a9dde9f2b28b6ae46e097d81766d->enter($__internal_118dd25f3436553018a64dc6d1593dd92137a9dde9f2b28b6ae46e097d81766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1afe7e52a2a1d36a03e3b09aaa3f79f76fa4b5757624056cc33d6765db4bacc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afe7e52a2a1d36a03e3b09aaa3f79f76fa4b5757624056cc33d6765db4bacc4->enter($__internal_1afe7e52a2a1d36a03e3b09aaa3f79f76fa4b5757624056cc33d6765db4bacc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_118dd25f3436553018a64dc6d1593dd92137a9dde9f2b28b6ae46e097d81766d->leave($__internal_118dd25f3436553018a64dc6d1593dd92137a9dde9f2b28b6ae46e097d81766d_prof);

        
        $__internal_1afe7e52a2a1d36a03e3b09aaa3f79f76fa4b5757624056cc33d6765db4bacc4->leave($__internal_1afe7e52a2a1d36a03e3b09aaa3f79f76fa4b5757624056cc33d6765db4bacc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
