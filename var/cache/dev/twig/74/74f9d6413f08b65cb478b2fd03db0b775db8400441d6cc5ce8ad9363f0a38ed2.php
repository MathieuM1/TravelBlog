<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_bb8b217a7152f57af4bf526fa87770a8b564b11aa8ecbe1f163472d8675e6f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8b217a7152f57af4bf526fa87770a8b564b11aa8ecbe1f163472d8675e6f4e->enter($__internal_bb8b217a7152f57af4bf526fa87770a8b564b11aa8ecbe1f163472d8675e6f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_26aeffad06d0218173fb48b08858a7baba4d5d68aefeee5de1cc7423be814a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26aeffad06d0218173fb48b08858a7baba4d5d68aefeee5de1cc7423be814a8f->enter($__internal_26aeffad06d0218173fb48b08858a7baba4d5d68aefeee5de1cc7423be814a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bb8b217a7152f57af4bf526fa87770a8b564b11aa8ecbe1f163472d8675e6f4e->leave($__internal_bb8b217a7152f57af4bf526fa87770a8b564b11aa8ecbe1f163472d8675e6f4e_prof);

        
        $__internal_26aeffad06d0218173fb48b08858a7baba4d5d68aefeee5de1cc7423be814a8f->leave($__internal_26aeffad06d0218173fb48b08858a7baba4d5d68aefeee5de1cc7423be814a8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
