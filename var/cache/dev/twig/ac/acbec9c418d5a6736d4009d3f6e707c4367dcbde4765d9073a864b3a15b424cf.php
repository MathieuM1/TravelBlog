<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_cb0de8c3549e32d1bf6ff2c6d9518abba407030d8cf32226bf95bc97b473dd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0de8c3549e32d1bf6ff2c6d9518abba407030d8cf32226bf95bc97b473dd10->enter($__internal_cb0de8c3549e32d1bf6ff2c6d9518abba407030d8cf32226bf95bc97b473dd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_05d4b8f34b899e4072a0284aa7d518b39a16f607fa843129d2ae96fb14bf5d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d4b8f34b899e4072a0284aa7d518b39a16f607fa843129d2ae96fb14bf5d04->enter($__internal_05d4b8f34b899e4072a0284aa7d518b39a16f607fa843129d2ae96fb14bf5d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cb0de8c3549e32d1bf6ff2c6d9518abba407030d8cf32226bf95bc97b473dd10->leave($__internal_cb0de8c3549e32d1bf6ff2c6d9518abba407030d8cf32226bf95bc97b473dd10_prof);

        
        $__internal_05d4b8f34b899e4072a0284aa7d518b39a16f607fa843129d2ae96fb14bf5d04->leave($__internal_05d4b8f34b899e4072a0284aa7d518b39a16f607fa843129d2ae96fb14bf5d04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
