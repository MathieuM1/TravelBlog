<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_c311e35e49a70b82f0f4ab151c9fa59dfea22d77e26adde5f3f17e75b4645423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c311e35e49a70b82f0f4ab151c9fa59dfea22d77e26adde5f3f17e75b4645423->enter($__internal_c311e35e49a70b82f0f4ab151c9fa59dfea22d77e26adde5f3f17e75b4645423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1211442484e28434711e22b308e896ca057ec39b53d9c947b08b31496b2a0916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1211442484e28434711e22b308e896ca057ec39b53d9c947b08b31496b2a0916->enter($__internal_1211442484e28434711e22b308e896ca057ec39b53d9c947b08b31496b2a0916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c311e35e49a70b82f0f4ab151c9fa59dfea22d77e26adde5f3f17e75b4645423->leave($__internal_c311e35e49a70b82f0f4ab151c9fa59dfea22d77e26adde5f3f17e75b4645423_prof);

        
        $__internal_1211442484e28434711e22b308e896ca057ec39b53d9c947b08b31496b2a0916->leave($__internal_1211442484e28434711e22b308e896ca057ec39b53d9c947b08b31496b2a0916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
