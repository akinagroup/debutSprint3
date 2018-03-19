<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ad75b634ae95f2672db6c8176915624cbaf24257330a255cdd4de33caa53194f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8790e34bc35343fa1d8cbbdcb36bb665e16dd5db1f3c82876bf8d759ed39058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8790e34bc35343fa1d8cbbdcb36bb665e16dd5db1f3c82876bf8d759ed39058->enter($__internal_f8790e34bc35343fa1d8cbbdcb36bb665e16dd5db1f3c82876bf8d759ed39058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_34e8425a1f6aa0b2f37e6af3d1a7be2d37a604c2b4181d350c909f495c4ddd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e8425a1f6aa0b2f37e6af3d1a7be2d37a604c2b4181d350c909f495c4ddd16->enter($__internal_34e8425a1f6aa0b2f37e6af3d1a7be2d37a604c2b4181d350c909f495c4ddd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8790e34bc35343fa1d8cbbdcb36bb665e16dd5db1f3c82876bf8d759ed39058->leave($__internal_f8790e34bc35343fa1d8cbbdcb36bb665e16dd5db1f3c82876bf8d759ed39058_prof);

        
        $__internal_34e8425a1f6aa0b2f37e6af3d1a7be2d37a604c2b4181d350c909f495c4ddd16->leave($__internal_34e8425a1f6aa0b2f37e6af3d1a7be2d37a604c2b4181d350c909f495c4ddd16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_453153bfd0ee90acceadb67263edfdeeca123dedf519418512e9b5ea0f91028a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453153bfd0ee90acceadb67263edfdeeca123dedf519418512e9b5ea0f91028a->enter($__internal_453153bfd0ee90acceadb67263edfdeeca123dedf519418512e9b5ea0f91028a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_663def5158305751656d175f2975cd4dc296aa9e0e078bf0e8ded4a24ffe1956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663def5158305751656d175f2975cd4dc296aa9e0e078bf0e8ded4a24ffe1956->enter($__internal_663def5158305751656d175f2975cd4dc296aa9e0e078bf0e8ded4a24ffe1956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_663def5158305751656d175f2975cd4dc296aa9e0e078bf0e8ded4a24ffe1956->leave($__internal_663def5158305751656d175f2975cd4dc296aa9e0e078bf0e8ded4a24ffe1956_prof);

        
        $__internal_453153bfd0ee90acceadb67263edfdeeca123dedf519418512e9b5ea0f91028a->leave($__internal_453153bfd0ee90acceadb67263edfdeeca123dedf519418512e9b5ea0f91028a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30774767edac2fb8ff5a79744901b2ffafa93f8015fded12bbd83dbdc991cffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30774767edac2fb8ff5a79744901b2ffafa93f8015fded12bbd83dbdc991cffd->enter($__internal_30774767edac2fb8ff5a79744901b2ffafa93f8015fded12bbd83dbdc991cffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_295674649087d70c65f55ea12d6399e51ea017bc4e8f7c65fbcb01b78be18a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295674649087d70c65f55ea12d6399e51ea017bc4e8f7c65fbcb01b78be18a2f->enter($__internal_295674649087d70c65f55ea12d6399e51ea017bc4e8f7c65fbcb01b78be18a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_295674649087d70c65f55ea12d6399e51ea017bc4e8f7c65fbcb01b78be18a2f->leave($__internal_295674649087d70c65f55ea12d6399e51ea017bc4e8f7c65fbcb01b78be18a2f_prof);

        
        $__internal_30774767edac2fb8ff5a79744901b2ffafa93f8015fded12bbd83dbdc991cffd->leave($__internal_30774767edac2fb8ff5a79744901b2ffafa93f8015fded12bbd83dbdc991cffd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ade6a9994cb192264bcec3c2e57624e39603987470b2530cd6ac6dc3e2e7e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ade6a9994cb192264bcec3c2e57624e39603987470b2530cd6ac6dc3e2e7e6e->enter($__internal_7ade6a9994cb192264bcec3c2e57624e39603987470b2530cd6ac6dc3e2e7e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23896335ecf233a013b0177d0f27caa77f807f275fb48b142e7d8e6cb845e260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23896335ecf233a013b0177d0f27caa77f807f275fb48b142e7d8e6cb845e260->enter($__internal_23896335ecf233a013b0177d0f27caa77f807f275fb48b142e7d8e6cb845e260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_23896335ecf233a013b0177d0f27caa77f807f275fb48b142e7d8e6cb845e260->leave($__internal_23896335ecf233a013b0177d0f27caa77f807f275fb48b142e7d8e6cb845e260_prof);

        
        $__internal_7ade6a9994cb192264bcec3c2e57624e39603987470b2530cd6ac6dc3e2e7e6e->leave($__internal_7ade6a9994cb192264bcec3c2e57624e39603987470b2530cd6ac6dc3e2e7e6e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
