<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_11a23cb7ee7d7ece1cfe0d612996558bbf8c71c2ce9387aa4273a12db9f8d53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a23cb7ee7d7ece1cfe0d612996558bbf8c71c2ce9387aa4273a12db9f8d53d->enter($__internal_11a23cb7ee7d7ece1cfe0d612996558bbf8c71c2ce9387aa4273a12db9f8d53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_9cff0bb582e7f389f019bf7826de0174beb81ddd280e5d215fb93ba0c93407b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cff0bb582e7f389f019bf7826de0174beb81ddd280e5d215fb93ba0c93407b0->enter($__internal_9cff0bb582e7f389f019bf7826de0174beb81ddd280e5d215fb93ba0c93407b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_11a23cb7ee7d7ece1cfe0d612996558bbf8c71c2ce9387aa4273a12db9f8d53d->leave($__internal_11a23cb7ee7d7ece1cfe0d612996558bbf8c71c2ce9387aa4273a12db9f8d53d_prof);

        
        $__internal_9cff0bb582e7f389f019bf7826de0174beb81ddd280e5d215fb93ba0c93407b0->leave($__internal_9cff0bb582e7f389f019bf7826de0174beb81ddd280e5d215fb93ba0c93407b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
