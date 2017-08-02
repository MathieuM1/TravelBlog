<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_7c9ec8769fea7a37e408e75140f476a4e09bc3abeff52dfbfb757b4654922fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9ec8769fea7a37e408e75140f476a4e09bc3abeff52dfbfb757b4654922fc5->enter($__internal_7c9ec8769fea7a37e408e75140f476a4e09bc3abeff52dfbfb757b4654922fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4fa9eb4378c9a4c1533d5aa5c530b1234c06c478618e9612473f1d919fc87c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa9eb4378c9a4c1533d5aa5c530b1234c06c478618e9612473f1d919fc87c48->enter($__internal_4fa9eb4378c9a4c1533d5aa5c530b1234c06c478618e9612473f1d919fc87c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7c9ec8769fea7a37e408e75140f476a4e09bc3abeff52dfbfb757b4654922fc5->leave($__internal_7c9ec8769fea7a37e408e75140f476a4e09bc3abeff52dfbfb757b4654922fc5_prof);

        
        $__internal_4fa9eb4378c9a4c1533d5aa5c530b1234c06c478618e9612473f1d919fc87c48->leave($__internal_4fa9eb4378c9a4c1533d5aa5c530b1234c06c478618e9612473f1d919fc87c48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
