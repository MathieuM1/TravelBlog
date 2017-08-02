<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_4216a3f027314c10f6836377aaef3229d97a80aa1e94ea51532d07e266e0758f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4216a3f027314c10f6836377aaef3229d97a80aa1e94ea51532d07e266e0758f->enter($__internal_4216a3f027314c10f6836377aaef3229d97a80aa1e94ea51532d07e266e0758f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7c832a6fe3229183f1655bf0429232927b2f5ac601d8a2d35b918d52cc536f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c832a6fe3229183f1655bf0429232927b2f5ac601d8a2d35b918d52cc536f3d->enter($__internal_7c832a6fe3229183f1655bf0429232927b2f5ac601d8a2d35b918d52cc536f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4216a3f027314c10f6836377aaef3229d97a80aa1e94ea51532d07e266e0758f->leave($__internal_4216a3f027314c10f6836377aaef3229d97a80aa1e94ea51532d07e266e0758f_prof);

        
        $__internal_7c832a6fe3229183f1655bf0429232927b2f5ac601d8a2d35b918d52cc536f3d->leave($__internal_7c832a6fe3229183f1655bf0429232927b2f5ac601d8a2d35b918d52cc536f3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
