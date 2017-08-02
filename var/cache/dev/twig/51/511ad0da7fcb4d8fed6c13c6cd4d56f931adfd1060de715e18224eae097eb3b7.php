<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_b439ddf3ba96099bb903172246c399099b20892e51fb68c0159e21121fe34e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b439ddf3ba96099bb903172246c399099b20892e51fb68c0159e21121fe34e09->enter($__internal_b439ddf3ba96099bb903172246c399099b20892e51fb68c0159e21121fe34e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_544bb4e26862d075e373b739711cfca93d3855db2449706670fe7df96449d0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544bb4e26862d075e373b739711cfca93d3855db2449706670fe7df96449d0b1->enter($__internal_544bb4e26862d075e373b739711cfca93d3855db2449706670fe7df96449d0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b439ddf3ba96099bb903172246c399099b20892e51fb68c0159e21121fe34e09->leave($__internal_b439ddf3ba96099bb903172246c399099b20892e51fb68c0159e21121fe34e09_prof);

        
        $__internal_544bb4e26862d075e373b739711cfca93d3855db2449706670fe7df96449d0b1->leave($__internal_544bb4e26862d075e373b739711cfca93d3855db2449706670fe7df96449d0b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
