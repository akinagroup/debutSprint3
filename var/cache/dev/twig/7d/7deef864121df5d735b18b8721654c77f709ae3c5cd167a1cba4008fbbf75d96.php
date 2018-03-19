<?php

/* AkinaImmobilierBundle:Front:reserve.html.twig */
class __TwigTemplate_76ae505b139bdc57644f5bf97fc4e854ccc77c6fdff9417b9b192ce2a1d6e811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout1.html.twig", "AkinaImmobilierBundle:Front:reserve.html.twig", 1);
        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14431ac284de518517c760197ba3f43151b09ba9a832cb47d233529bf4fd97c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14431ac284de518517c760197ba3f43151b09ba9a832cb47d233529bf4fd97c3->enter($__internal_14431ac284de518517c760197ba3f43151b09ba9a832cb47d233529bf4fd97c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $__internal_0fb5eac385a5bdb83877bcb306c5f0b07747ff5d9a234315d87ddb08f373159d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb5eac385a5bdb83877bcb306c5f0b07747ff5d9a234315d87ddb08f373159d->enter($__internal_0fb5eac385a5bdb83877bcb306c5f0b07747ff5d9a234315d87ddb08f373159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14431ac284de518517c760197ba3f43151b09ba9a832cb47d233529bf4fd97c3->leave($__internal_14431ac284de518517c760197ba3f43151b09ba9a832cb47d233529bf4fd97c3_prof);

        
        $__internal_0fb5eac385a5bdb83877bcb306c5f0b07747ff5d9a234315d87ddb08f373159d->leave($__internal_0fb5eac385a5bdb83877bcb306c5f0b07747ff5d9a234315d87ddb08f373159d_prof);

    }

    // line 2
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_2d08bb2b956633dd778efe03414f1ee611171303d0856658132fd5a75b639887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d08bb2b956633dd778efe03414f1ee611171303d0856658132fd5a75b639887->enter($__internal_2d08bb2b956633dd778efe03414f1ee611171303d0856658132fd5a75b639887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_5764caf88a5e2c52a08d14f1d47e00241c5456ede63a2b1ed66429255e11df41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5764caf88a5e2c52a08d14f1d47e00241c5456ede63a2b1ed66429255e11df41->enter($__internal_5764caf88a5e2c52a08d14f1d47e00241c5456ede63a2b1ed66429255e11df41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 3
        echo " <strong>Cliquer ici pour valider</strong>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Valider\" />

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
 ";
        
        $__internal_5764caf88a5e2c52a08d14f1d47e00241c5456ede63a2b1ed66429255e11df41->leave($__internal_5764caf88a5e2c52a08d14f1d47e00241c5456ede63a2b1ed66429255e11df41_prof);

        
        $__internal_2d08bb2b956633dd778efe03414f1ee611171303d0856658132fd5a75b639887->leave($__internal_2d08bb2b956633dd778efe03414f1ee611171303d0856658132fd5a75b639887_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:reserve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout1.html.twig\" %}
 {% block catalogue  %}
 <strong>Cliquer ici pour valider</strong>
{{ form_start(form)}}
<input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Valider\" />

        {{form_end(form)}}
 {% endblock %}", "AkinaImmobilierBundle:Front:reserve.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/reserve.html.twig");
    }
}
