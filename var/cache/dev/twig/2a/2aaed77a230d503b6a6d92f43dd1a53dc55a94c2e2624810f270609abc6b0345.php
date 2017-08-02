<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_dd06b6a90f67b359d621b80b88eac860ab45c2f357daf3e7f1fb8fac79f578cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd06b6a90f67b359d621b80b88eac860ab45c2f357daf3e7f1fb8fac79f578cf->enter($__internal_dd06b6a90f67b359d621b80b88eac860ab45c2f357daf3e7f1fb8fac79f578cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8e6d2042de21fdc0b6e2b0850a55c88a1fb4b576c502ce44324b3ffc2ebd719d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6d2042de21fdc0b6e2b0850a55c88a1fb4b576c502ce44324b3ffc2ebd719d->enter($__internal_8e6d2042de21fdc0b6e2b0850a55c88a1fb4b576c502ce44324b3ffc2ebd719d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dd06b6a90f67b359d621b80b88eac860ab45c2f357daf3e7f1fb8fac79f578cf->leave($__internal_dd06b6a90f67b359d621b80b88eac860ab45c2f357daf3e7f1fb8fac79f578cf_prof);

        
        $__internal_8e6d2042de21fdc0b6e2b0850a55c88a1fb4b576c502ce44324b3ffc2ebd719d->leave($__internal_8e6d2042de21fdc0b6e2b0850a55c88a1fb4b576c502ce44324b3ffc2ebd719d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
