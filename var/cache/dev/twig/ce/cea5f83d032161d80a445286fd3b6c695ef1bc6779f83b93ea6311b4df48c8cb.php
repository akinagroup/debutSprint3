<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e68a39dd4d0773a9b6734ede17dd0f168d3adcdccc5bd71e59fc3f4b38aaf0db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72f37ae6f45fd01c665f3dc6c361a3d350eb64b5e02f62f32861cc799df2f4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f37ae6f45fd01c665f3dc6c361a3d350eb64b5e02f62f32861cc799df2f4c2->enter($__internal_72f37ae6f45fd01c665f3dc6c361a3d350eb64b5e02f62f32861cc799df2f4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ebb1a20c0c46478e2461e124fc63b9959a1a8cdbeb0dfae43035fdb3635e6703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb1a20c0c46478e2461e124fc63b9959a1a8cdbeb0dfae43035fdb3635e6703->enter($__internal_ebb1a20c0c46478e2461e124fc63b9959a1a8cdbeb0dfae43035fdb3635e6703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f37ae6f45fd01c665f3dc6c361a3d350eb64b5e02f62f32861cc799df2f4c2->leave($__internal_72f37ae6f45fd01c665f3dc6c361a3d350eb64b5e02f62f32861cc799df2f4c2_prof);

        
        $__internal_ebb1a20c0c46478e2461e124fc63b9959a1a8cdbeb0dfae43035fdb3635e6703->leave($__internal_ebb1a20c0c46478e2461e124fc63b9959a1a8cdbeb0dfae43035fdb3635e6703_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c2abacccd66cbfead3dd9ca27f2b0e0260eb109b628dc3a54291c5d3969c531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2abacccd66cbfead3dd9ca27f2b0e0260eb109b628dc3a54291c5d3969c531->enter($__internal_8c2abacccd66cbfead3dd9ca27f2b0e0260eb109b628dc3a54291c5d3969c531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c5c90a5c8c56376f8b3f05dc55c1f76f530faa293fb9be5d86051da5c55eecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5c90a5c8c56376f8b3f05dc55c1f76f530faa293fb9be5d86051da5c55eecd->enter($__internal_8c5c90a5c8c56376f8b3f05dc55c1f76f530faa293fb9be5d86051da5c55eecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8c5c90a5c8c56376f8b3f05dc55c1f76f530faa293fb9be5d86051da5c55eecd->leave($__internal_8c5c90a5c8c56376f8b3f05dc55c1f76f530faa293fb9be5d86051da5c55eecd_prof);

        
        $__internal_8c2abacccd66cbfead3dd9ca27f2b0e0260eb109b628dc3a54291c5d3969c531->leave($__internal_8c2abacccd66cbfead3dd9ca27f2b0e0260eb109b628dc3a54291c5d3969c531_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
