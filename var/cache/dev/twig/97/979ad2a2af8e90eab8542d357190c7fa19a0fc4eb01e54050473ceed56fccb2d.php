<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_7b4e777c7a09d262ee2baa95f5507a3b2dd82e24765a4c0dbc899d0ae3b65a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4e777c7a09d262ee2baa95f5507a3b2dd82e24765a4c0dbc899d0ae3b65a48->enter($__internal_7b4e777c7a09d262ee2baa95f5507a3b2dd82e24765a4c0dbc899d0ae3b65a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9a858374e7f14360e3bb7fcd2e46e787139df35dd3cf3a9d425ba485388c9bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a858374e7f14360e3bb7fcd2e46e787139df35dd3cf3a9d425ba485388c9bbe->enter($__internal_9a858374e7f14360e3bb7fcd2e46e787139df35dd3cf3a9d425ba485388c9bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7b4e777c7a09d262ee2baa95f5507a3b2dd82e24765a4c0dbc899d0ae3b65a48->leave($__internal_7b4e777c7a09d262ee2baa95f5507a3b2dd82e24765a4c0dbc899d0ae3b65a48_prof);

        
        $__internal_9a858374e7f14360e3bb7fcd2e46e787139df35dd3cf3a9d425ba485388c9bbe->leave($__internal_9a858374e7f14360e3bb7fcd2e46e787139df35dd3cf3a9d425ba485388c9bbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}