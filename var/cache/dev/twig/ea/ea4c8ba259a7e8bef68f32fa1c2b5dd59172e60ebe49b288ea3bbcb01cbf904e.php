<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_2759f3d1ec8331c483049d82f2ad6736a455e907eb0e5903311ba8dc98005ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2759f3d1ec8331c483049d82f2ad6736a455e907eb0e5903311ba8dc98005ca8->enter($__internal_2759f3d1ec8331c483049d82f2ad6736a455e907eb0e5903311ba8dc98005ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_430e33bbd0c27f2308ce81cc408a861ed91a9f5f8cefb2b688664b6b4956fe92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430e33bbd0c27f2308ce81cc408a861ed91a9f5f8cefb2b688664b6b4956fe92->enter($__internal_430e33bbd0c27f2308ce81cc408a861ed91a9f5f8cefb2b688664b6b4956fe92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2759f3d1ec8331c483049d82f2ad6736a455e907eb0e5903311ba8dc98005ca8->leave($__internal_2759f3d1ec8331c483049d82f2ad6736a455e907eb0e5903311ba8dc98005ca8_prof);

        
        $__internal_430e33bbd0c27f2308ce81cc408a861ed91a9f5f8cefb2b688664b6b4956fe92->leave($__internal_430e33bbd0c27f2308ce81cc408a861ed91a9f5f8cefb2b688664b6b4956fe92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
