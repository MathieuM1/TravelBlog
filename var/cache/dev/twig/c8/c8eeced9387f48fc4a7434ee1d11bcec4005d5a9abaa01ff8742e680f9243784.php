<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_e459d4022abf866fcdc65b886340646e044e93a5901ef717d97dbc0e47245ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e459d4022abf866fcdc65b886340646e044e93a5901ef717d97dbc0e47245ea6->enter($__internal_e459d4022abf866fcdc65b886340646e044e93a5901ef717d97dbc0e47245ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ef1c74f68222957b3ad2e4e28d7486620f6287a902265b0ffab12b0ff002b3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1c74f68222957b3ad2e4e28d7486620f6287a902265b0ffab12b0ff002b3bf->enter($__internal_ef1c74f68222957b3ad2e4e28d7486620f6287a902265b0ffab12b0ff002b3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e459d4022abf866fcdc65b886340646e044e93a5901ef717d97dbc0e47245ea6->leave($__internal_e459d4022abf866fcdc65b886340646e044e93a5901ef717d97dbc0e47245ea6_prof);

        
        $__internal_ef1c74f68222957b3ad2e4e28d7486620f6287a902265b0ffab12b0ff002b3bf->leave($__internal_ef1c74f68222957b3ad2e4e28d7486620f6287a902265b0ffab12b0ff002b3bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
