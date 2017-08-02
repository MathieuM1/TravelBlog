<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_5db5b7d9d2ee7c168f868f4ec2d61f5ed176a456e1b3988dc7f91c3fe35a2df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db5b7d9d2ee7c168f868f4ec2d61f5ed176a456e1b3988dc7f91c3fe35a2df0->enter($__internal_5db5b7d9d2ee7c168f868f4ec2d61f5ed176a456e1b3988dc7f91c3fe35a2df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9faadf0056bd46da576f6ec1913a2cc83502ed5c668257cf7bc08bab8e89831b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faadf0056bd46da576f6ec1913a2cc83502ed5c668257cf7bc08bab8e89831b->enter($__internal_9faadf0056bd46da576f6ec1913a2cc83502ed5c668257cf7bc08bab8e89831b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5db5b7d9d2ee7c168f868f4ec2d61f5ed176a456e1b3988dc7f91c3fe35a2df0->leave($__internal_5db5b7d9d2ee7c168f868f4ec2d61f5ed176a456e1b3988dc7f91c3fe35a2df0_prof);

        
        $__internal_9faadf0056bd46da576f6ec1913a2cc83502ed5c668257cf7bc08bab8e89831b->leave($__internal_9faadf0056bd46da576f6ec1913a2cc83502ed5c668257cf7bc08bab8e89831b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
