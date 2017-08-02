<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_92a3c5f53dd271162d72cfae2da0bb37733ba9ec1284211da91655a3c366fceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a3c5f53dd271162d72cfae2da0bb37733ba9ec1284211da91655a3c366fceb->enter($__internal_92a3c5f53dd271162d72cfae2da0bb37733ba9ec1284211da91655a3c366fceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_235d0d140933cf1d027ca653fa25d465cae6eb94deccb13c23798db7a8628cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235d0d140933cf1d027ca653fa25d465cae6eb94deccb13c23798db7a8628cd8->enter($__internal_235d0d140933cf1d027ca653fa25d465cae6eb94deccb13c23798db7a8628cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_92a3c5f53dd271162d72cfae2da0bb37733ba9ec1284211da91655a3c366fceb->leave($__internal_92a3c5f53dd271162d72cfae2da0bb37733ba9ec1284211da91655a3c366fceb_prof);

        
        $__internal_235d0d140933cf1d027ca653fa25d465cae6eb94deccb13c23798db7a8628cd8->leave($__internal_235d0d140933cf1d027ca653fa25d465cae6eb94deccb13c23798db7a8628cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
