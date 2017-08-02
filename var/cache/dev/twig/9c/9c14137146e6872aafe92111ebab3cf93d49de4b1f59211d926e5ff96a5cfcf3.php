<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_0a1aacc56d749905f652b7ea2525ba7e43d6fa78548f7b23247602da5a4ac5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1aacc56d749905f652b7ea2525ba7e43d6fa78548f7b23247602da5a4ac5ee->enter($__internal_0a1aacc56d749905f652b7ea2525ba7e43d6fa78548f7b23247602da5a4ac5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_88f2f10ad3d52c69698949ab009aae64ba7342422065e1910324a545433f2e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f2f10ad3d52c69698949ab009aae64ba7342422065e1910324a545433f2e0e->enter($__internal_88f2f10ad3d52c69698949ab009aae64ba7342422065e1910324a545433f2e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0a1aacc56d749905f652b7ea2525ba7e43d6fa78548f7b23247602da5a4ac5ee->leave($__internal_0a1aacc56d749905f652b7ea2525ba7e43d6fa78548f7b23247602da5a4ac5ee_prof);

        
        $__internal_88f2f10ad3d52c69698949ab009aae64ba7342422065e1910324a545433f2e0e->leave($__internal_88f2f10ad3d52c69698949ab009aae64ba7342422065e1910324a545433f2e0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
