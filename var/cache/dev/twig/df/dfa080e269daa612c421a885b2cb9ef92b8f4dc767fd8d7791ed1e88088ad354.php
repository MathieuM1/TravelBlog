<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_de2e4a40df659ed6a0e4bcdb94ecfdb8f941f2cbd643a06f62a68fd8353d3d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2e4a40df659ed6a0e4bcdb94ecfdb8f941f2cbd643a06f62a68fd8353d3d00->enter($__internal_de2e4a40df659ed6a0e4bcdb94ecfdb8f941f2cbd643a06f62a68fd8353d3d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f5ecd7f2bb43c329fbca760bf2a151ed78c5e778693f80cad956ddef31fa64ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ecd7f2bb43c329fbca760bf2a151ed78c5e778693f80cad956ddef31fa64ed->enter($__internal_f5ecd7f2bb43c329fbca760bf2a151ed78c5e778693f80cad956ddef31fa64ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_de2e4a40df659ed6a0e4bcdb94ecfdb8f941f2cbd643a06f62a68fd8353d3d00->leave($__internal_de2e4a40df659ed6a0e4bcdb94ecfdb8f941f2cbd643a06f62a68fd8353d3d00_prof);

        
        $__internal_f5ecd7f2bb43c329fbca760bf2a151ed78c5e778693f80cad956ddef31fa64ed->leave($__internal_f5ecd7f2bb43c329fbca760bf2a151ed78c5e778693f80cad956ddef31fa64ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
