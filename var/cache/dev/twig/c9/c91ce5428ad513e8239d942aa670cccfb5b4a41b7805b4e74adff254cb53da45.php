<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_7d7c476291f310116b299361a1e10d5579fa6d59849e776ba1263f167fa8910d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7c476291f310116b299361a1e10d5579fa6d59849e776ba1263f167fa8910d->enter($__internal_7d7c476291f310116b299361a1e10d5579fa6d59849e776ba1263f167fa8910d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_31fed452e368bb848fbecd00b5ccdf2227d651d066882900346626c1e871435d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fed452e368bb848fbecd00b5ccdf2227d651d066882900346626c1e871435d->enter($__internal_31fed452e368bb848fbecd00b5ccdf2227d651d066882900346626c1e871435d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7d7c476291f310116b299361a1e10d5579fa6d59849e776ba1263f167fa8910d->leave($__internal_7d7c476291f310116b299361a1e10d5579fa6d59849e776ba1263f167fa8910d_prof);

        
        $__internal_31fed452e368bb848fbecd00b5ccdf2227d651d066882900346626c1e871435d->leave($__internal_31fed452e368bb848fbecd00b5ccdf2227d651d066882900346626c1e871435d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
