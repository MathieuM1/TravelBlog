<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_99d2b7c5b1e0c7d9c04fc7f603e30f82478f237677203e2d1483f4590dcfd08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d2b7c5b1e0c7d9c04fc7f603e30f82478f237677203e2d1483f4590dcfd08f->enter($__internal_99d2b7c5b1e0c7d9c04fc7f603e30f82478f237677203e2d1483f4590dcfd08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_79776bffbb8e515d1c33f3b879f3c1fe7459efa9c188f047ef0b02080f989667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79776bffbb8e515d1c33f3b879f3c1fe7459efa9c188f047ef0b02080f989667->enter($__internal_79776bffbb8e515d1c33f3b879f3c1fe7459efa9c188f047ef0b02080f989667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_99d2b7c5b1e0c7d9c04fc7f603e30f82478f237677203e2d1483f4590dcfd08f->leave($__internal_99d2b7c5b1e0c7d9c04fc7f603e30f82478f237677203e2d1483f4590dcfd08f_prof);

        
        $__internal_79776bffbb8e515d1c33f3b879f3c1fe7459efa9c188f047ef0b02080f989667->leave($__internal_79776bffbb8e515d1c33f3b879f3c1fe7459efa9c188f047ef0b02080f989667_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
