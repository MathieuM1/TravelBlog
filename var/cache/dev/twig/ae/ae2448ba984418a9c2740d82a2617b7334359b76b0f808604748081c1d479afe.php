<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_2b7af9f73e6dde442b67884d6dad8653750bc18bc6746885c237550486679ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7af9f73e6dde442b67884d6dad8653750bc18bc6746885c237550486679ee3->enter($__internal_2b7af9f73e6dde442b67884d6dad8653750bc18bc6746885c237550486679ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bce01ae033d0d974d31f0e441764e0f801436f5d22f831bc4ebbb2de9b3094ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce01ae033d0d974d31f0e441764e0f801436f5d22f831bc4ebbb2de9b3094ad->enter($__internal_bce01ae033d0d974d31f0e441764e0f801436f5d22f831bc4ebbb2de9b3094ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2b7af9f73e6dde442b67884d6dad8653750bc18bc6746885c237550486679ee3->leave($__internal_2b7af9f73e6dde442b67884d6dad8653750bc18bc6746885c237550486679ee3_prof);

        
        $__internal_bce01ae033d0d974d31f0e441764e0f801436f5d22f831bc4ebbb2de9b3094ad->leave($__internal_bce01ae033d0d974d31f0e441764e0f801436f5d22f831bc4ebbb2de9b3094ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
