<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_ff8bbad2fd58f2f8fb152bdcca6dec170e7d574b9d9866f9051b4387abaae0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8bbad2fd58f2f8fb152bdcca6dec170e7d574b9d9866f9051b4387abaae0e0->enter($__internal_ff8bbad2fd58f2f8fb152bdcca6dec170e7d574b9d9866f9051b4387abaae0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4e1495fde76b2c2d772fce666adb621aa2fb4852d95c02e6aa892d96e012a659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1495fde76b2c2d772fce666adb621aa2fb4852d95c02e6aa892d96e012a659->enter($__internal_4e1495fde76b2c2d772fce666adb621aa2fb4852d95c02e6aa892d96e012a659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ff8bbad2fd58f2f8fb152bdcca6dec170e7d574b9d9866f9051b4387abaae0e0->leave($__internal_ff8bbad2fd58f2f8fb152bdcca6dec170e7d574b9d9866f9051b4387abaae0e0_prof);

        
        $__internal_4e1495fde76b2c2d772fce666adb621aa2fb4852d95c02e6aa892d96e012a659->leave($__internal_4e1495fde76b2c2d772fce666adb621aa2fb4852d95c02e6aa892d96e012a659_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
