<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8f5b3facd6ce6925109f338d79192fa7203c0ed05bd406f49ce91094001c24ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2c164ec2fba3f41e647e2dacd4c604624b077a28f8d6d177acd140aa59bc7a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c164ec2fba3f41e647e2dacd4c604624b077a28f8d6d177acd140aa59bc7a1a->enter($__internal_2c164ec2fba3f41e647e2dacd4c604624b077a28f8d6d177acd140aa59bc7a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c9161567aa21106475052acad37bbb1f98b1cfece75c5f5944218f8d8eecf17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9161567aa21106475052acad37bbb1f98b1cfece75c5f5944218f8d8eecf17f->enter($__internal_c9161567aa21106475052acad37bbb1f98b1cfece75c5f5944218f8d8eecf17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c164ec2fba3f41e647e2dacd4c604624b077a28f8d6d177acd140aa59bc7a1a->leave($__internal_2c164ec2fba3f41e647e2dacd4c604624b077a28f8d6d177acd140aa59bc7a1a_prof);

        
        $__internal_c9161567aa21106475052acad37bbb1f98b1cfece75c5f5944218f8d8eecf17f->leave($__internal_c9161567aa21106475052acad37bbb1f98b1cfece75c5f5944218f8d8eecf17f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7669c933301c4821cabc4aab47d704f3f78cbec37cf87cae5b3d19e0b36a01a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7669c933301c4821cabc4aab47d704f3f78cbec37cf87cae5b3d19e0b36a01a0->enter($__internal_7669c933301c4821cabc4aab47d704f3f78cbec37cf87cae5b3d19e0b36a01a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75e02d915fb83754f42af08a1c670d0565675471988b3708fb774fd0de4c480e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e02d915fb83754f42af08a1c670d0565675471988b3708fb774fd0de4c480e->enter($__internal_75e02d915fb83754f42af08a1c670d0565675471988b3708fb774fd0de4c480e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_75e02d915fb83754f42af08a1c670d0565675471988b3708fb774fd0de4c480e->leave($__internal_75e02d915fb83754f42af08a1c670d0565675471988b3708fb774fd0de4c480e_prof);

        
        $__internal_7669c933301c4821cabc4aab47d704f3f78cbec37cf87cae5b3d19e0b36a01a0->leave($__internal_7669c933301c4821cabc4aab47d704f3f78cbec37cf87cae5b3d19e0b36a01a0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9464b607e6c9420ac76c21fde65c860e0788e738cacef2461bf9446b0a868e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9464b607e6c9420ac76c21fde65c860e0788e738cacef2461bf9446b0a868e3->enter($__internal_c9464b607e6c9420ac76c21fde65c860e0788e738cacef2461bf9446b0a868e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8293a7df55b7cd1cf04b75862001def1cedfa7c255e2769568c7987485714156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8293a7df55b7cd1cf04b75862001def1cedfa7c255e2769568c7987485714156->enter($__internal_8293a7df55b7cd1cf04b75862001def1cedfa7c255e2769568c7987485714156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8293a7df55b7cd1cf04b75862001def1cedfa7c255e2769568c7987485714156->leave($__internal_8293a7df55b7cd1cf04b75862001def1cedfa7c255e2769568c7987485714156_prof);

        
        $__internal_c9464b607e6c9420ac76c21fde65c860e0788e738cacef2461bf9446b0a868e3->leave($__internal_c9464b607e6c9420ac76c21fde65c860e0788e738cacef2461bf9446b0a868e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a09ffff45dfdaead4f855dc01bb7a506f6c23e4d9102e881d357400aa198a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a09ffff45dfdaead4f855dc01bb7a506f6c23e4d9102e881d357400aa198a15->enter($__internal_0a09ffff45dfdaead4f855dc01bb7a506f6c23e4d9102e881d357400aa198a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0bb132d32dbf07586dbe10675701a526bf620cc8da06321e91a34d345d624c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb132d32dbf07586dbe10675701a526bf620cc8da06321e91a34d345d624c4a->enter($__internal_0bb132d32dbf07586dbe10675701a526bf620cc8da06321e91a34d345d624c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0bb132d32dbf07586dbe10675701a526bf620cc8da06321e91a34d345d624c4a->leave($__internal_0bb132d32dbf07586dbe10675701a526bf620cc8da06321e91a34d345d624c4a_prof);

        
        $__internal_0a09ffff45dfdaead4f855dc01bb7a506f6c23e4d9102e881d357400aa198a15->leave($__internal_0a09ffff45dfdaead4f855dc01bb7a506f6c23e4d9102e881d357400aa198a15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
