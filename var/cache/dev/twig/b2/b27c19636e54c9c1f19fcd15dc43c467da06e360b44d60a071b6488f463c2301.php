<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_e5645ae72732bcdde94fc55e5d63384704672d26c41727fa1056d4d0954b4ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5645ae72732bcdde94fc55e5d63384704672d26c41727fa1056d4d0954b4ccd->enter($__internal_e5645ae72732bcdde94fc55e5d63384704672d26c41727fa1056d4d0954b4ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8019daa79d6777262f8f16204e377f8507db63ae3656565ffcb01454393f9e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8019daa79d6777262f8f16204e377f8507db63ae3656565ffcb01454393f9e72->enter($__internal_8019daa79d6777262f8f16204e377f8507db63ae3656565ffcb01454393f9e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e5645ae72732bcdde94fc55e5d63384704672d26c41727fa1056d4d0954b4ccd->leave($__internal_e5645ae72732bcdde94fc55e5d63384704672d26c41727fa1056d4d0954b4ccd_prof);

        
        $__internal_8019daa79d6777262f8f16204e377f8507db63ae3656565ffcb01454393f9e72->leave($__internal_8019daa79d6777262f8f16204e377f8507db63ae3656565ffcb01454393f9e72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
