<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_d68b87d3569a8e23be683923d0dc59b87946f3a936f0e19db7fb8a91b0edec07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68b87d3569a8e23be683923d0dc59b87946f3a936f0e19db7fb8a91b0edec07->enter($__internal_d68b87d3569a8e23be683923d0dc59b87946f3a936f0e19db7fb8a91b0edec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a09c6d8388f5b0b7eef89135f359725e1b70b08197809e99ab661cadb39530c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09c6d8388f5b0b7eef89135f359725e1b70b08197809e99ab661cadb39530c1->enter($__internal_a09c6d8388f5b0b7eef89135f359725e1b70b08197809e99ab661cadb39530c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d68b87d3569a8e23be683923d0dc59b87946f3a936f0e19db7fb8a91b0edec07->leave($__internal_d68b87d3569a8e23be683923d0dc59b87946f3a936f0e19db7fb8a91b0edec07_prof);

        
        $__internal_a09c6d8388f5b0b7eef89135f359725e1b70b08197809e99ab661cadb39530c1->leave($__internal_a09c6d8388f5b0b7eef89135f359725e1b70b08197809e99ab661cadb39530c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
