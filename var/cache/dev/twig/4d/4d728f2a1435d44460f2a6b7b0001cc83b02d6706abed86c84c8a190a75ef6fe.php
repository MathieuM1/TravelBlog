<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_0bb2cb263a07638c33db638ba0ed84dbd0c02c8b384d2cdf4fe3e9e111dde62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb2cb263a07638c33db638ba0ed84dbd0c02c8b384d2cdf4fe3e9e111dde62f->enter($__internal_0bb2cb263a07638c33db638ba0ed84dbd0c02c8b384d2cdf4fe3e9e111dde62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b92544e4308c7c846d5ca7af9e39a511155a830bda1b6cf11b9f78e45c628ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92544e4308c7c846d5ca7af9e39a511155a830bda1b6cf11b9f78e45c628ea6->enter($__internal_b92544e4308c7c846d5ca7af9e39a511155a830bda1b6cf11b9f78e45c628ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0bb2cb263a07638c33db638ba0ed84dbd0c02c8b384d2cdf4fe3e9e111dde62f->leave($__internal_0bb2cb263a07638c33db638ba0ed84dbd0c02c8b384d2cdf4fe3e9e111dde62f_prof);

        
        $__internal_b92544e4308c7c846d5ca7af9e39a511155a830bda1b6cf11b9f78e45c628ea6->leave($__internal_b92544e4308c7c846d5ca7af9e39a511155a830bda1b6cf11b9f78e45c628ea6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
