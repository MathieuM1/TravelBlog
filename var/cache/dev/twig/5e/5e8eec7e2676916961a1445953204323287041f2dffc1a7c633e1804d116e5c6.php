<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_7c22fa87a4b7cd178887e34eaa195e98ca73c87fa8a3625e742a27a145289990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c22fa87a4b7cd178887e34eaa195e98ca73c87fa8a3625e742a27a145289990->enter($__internal_7c22fa87a4b7cd178887e34eaa195e98ca73c87fa8a3625e742a27a145289990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e64b29653991196d8be7d48501f555f382f14aaf14e528bb138a93088b6e848c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64b29653991196d8be7d48501f555f382f14aaf14e528bb138a93088b6e848c->enter($__internal_e64b29653991196d8be7d48501f555f382f14aaf14e528bb138a93088b6e848c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7c22fa87a4b7cd178887e34eaa195e98ca73c87fa8a3625e742a27a145289990->leave($__internal_7c22fa87a4b7cd178887e34eaa195e98ca73c87fa8a3625e742a27a145289990_prof);

        
        $__internal_e64b29653991196d8be7d48501f555f382f14aaf14e528bb138a93088b6e848c->leave($__internal_e64b29653991196d8be7d48501f555f382f14aaf14e528bb138a93088b6e848c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/m21/atelier/Trip/Trip/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
