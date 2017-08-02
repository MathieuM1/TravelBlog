<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_fe9cdbad33e8bba78d0351a4c3f6f6fde2a5c25ba23c691d8105a4982280a42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9cdbad33e8bba78d0351a4c3f6f6fde2a5c25ba23c691d8105a4982280a42d->enter($__internal_fe9cdbad33e8bba78d0351a4c3f6f6fde2a5c25ba23c691d8105a4982280a42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_89e318871c08ad3ad1c583a9fe3b46cad5566e6412d7e243a65faaa106e2f297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e318871c08ad3ad1c583a9fe3b46cad5566e6412d7e243a65faaa106e2f297->enter($__internal_89e318871c08ad3ad1c583a9fe3b46cad5566e6412d7e243a65faaa106e2f297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe9cdbad33e8bba78d0351a4c3f6f6fde2a5c25ba23c691d8105a4982280a42d->leave($__internal_fe9cdbad33e8bba78d0351a4c3f6f6fde2a5c25ba23c691d8105a4982280a42d_prof);

        
        $__internal_89e318871c08ad3ad1c583a9fe3b46cad5566e6412d7e243a65faaa106e2f297->leave($__internal_89e318871c08ad3ad1c583a9fe3b46cad5566e6412d7e243a65faaa106e2f297_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
