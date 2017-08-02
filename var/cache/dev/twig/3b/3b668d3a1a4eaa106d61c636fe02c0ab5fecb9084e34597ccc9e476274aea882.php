<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_ef0d656cd7c8f7e3b6c74046770219fcb23670c7d8de96a0dbc76196c40e8724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0d656cd7c8f7e3b6c74046770219fcb23670c7d8de96a0dbc76196c40e8724->enter($__internal_ef0d656cd7c8f7e3b6c74046770219fcb23670c7d8de96a0dbc76196c40e8724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_623986e38bcbe28ece7b9f37f27abf1fe0436449c7e4ee9a62fdc25dbf9cbd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623986e38bcbe28ece7b9f37f27abf1fe0436449c7e4ee9a62fdc25dbf9cbd6d->enter($__internal_623986e38bcbe28ece7b9f37f27abf1fe0436449c7e4ee9a62fdc25dbf9cbd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ef0d656cd7c8f7e3b6c74046770219fcb23670c7d8de96a0dbc76196c40e8724->leave($__internal_ef0d656cd7c8f7e3b6c74046770219fcb23670c7d8de96a0dbc76196c40e8724_prof);

        
        $__internal_623986e38bcbe28ece7b9f37f27abf1fe0436449c7e4ee9a62fdc25dbf9cbd6d->leave($__internal_623986e38bcbe28ece7b9f37f27abf1fe0436449c7e4ee9a62fdc25dbf9cbd6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
