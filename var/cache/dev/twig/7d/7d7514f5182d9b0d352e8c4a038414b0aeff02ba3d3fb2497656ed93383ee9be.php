<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_583c51c30b266dfbcaebb0fe53c1ebda8e13f2d57a2409dc84b31581f3458914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e01a7e6fbd2cc45fe245e15a2e0ea8edf8ddc2387dab4f8daee808732275b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e01a7e6fbd2cc45fe245e15a2e0ea8edf8ddc2387dab4f8daee808732275b5->enter($__internal_88e01a7e6fbd2cc45fe245e15a2e0ea8edf8ddc2387dab4f8daee808732275b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8b3c07ce32a860ae986629148ebc5a57d44b4cbc81d0e907c97ed25555922bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3c07ce32a860ae986629148ebc5a57d44b4cbc81d0e907c97ed25555922bea->enter($__internal_8b3c07ce32a860ae986629148ebc5a57d44b4cbc81d0e907c97ed25555922bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e01a7e6fbd2cc45fe245e15a2e0ea8edf8ddc2387dab4f8daee808732275b5->leave($__internal_88e01a7e6fbd2cc45fe245e15a2e0ea8edf8ddc2387dab4f8daee808732275b5_prof);

        
        $__internal_8b3c07ce32a860ae986629148ebc5a57d44b4cbc81d0e907c97ed25555922bea->leave($__internal_8b3c07ce32a860ae986629148ebc5a57d44b4cbc81d0e907c97ed25555922bea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90763621a932644078c64a1797338472d3a9f59a0b1af90fdf69edc7b9bc538e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90763621a932644078c64a1797338472d3a9f59a0b1af90fdf69edc7b9bc538e->enter($__internal_90763621a932644078c64a1797338472d3a9f59a0b1af90fdf69edc7b9bc538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_189fd392833fbb38d518e38c0f8a4e6b38fc0cae1cfbd380acb38b17bfa9413b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189fd392833fbb38d518e38c0f8a4e6b38fc0cae1cfbd380acb38b17bfa9413b->enter($__internal_189fd392833fbb38d518e38c0f8a4e6b38fc0cae1cfbd380acb38b17bfa9413b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_189fd392833fbb38d518e38c0f8a4e6b38fc0cae1cfbd380acb38b17bfa9413b->leave($__internal_189fd392833fbb38d518e38c0f8a4e6b38fc0cae1cfbd380acb38b17bfa9413b_prof);

        
        $__internal_90763621a932644078c64a1797338472d3a9f59a0b1af90fdf69edc7b9bc538e->leave($__internal_90763621a932644078c64a1797338472d3a9f59a0b1af90fdf69edc7b9bc538e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_888221a73361bb47f938d9388f7fc8b74b38401228ad63d48dcc9a3d0f2c4674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888221a73361bb47f938d9388f7fc8b74b38401228ad63d48dcc9a3d0f2c4674->enter($__internal_888221a73361bb47f938d9388f7fc8b74b38401228ad63d48dcc9a3d0f2c4674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a30661db633aac0cb3f9fd57619273396f5f0f3052c8b8823f5332d4456be85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a30661db633aac0cb3f9fd57619273396f5f0f3052c8b8823f5332d4456be85->enter($__internal_9a30661db633aac0cb3f9fd57619273396f5f0f3052c8b8823f5332d4456be85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a30661db633aac0cb3f9fd57619273396f5f0f3052c8b8823f5332d4456be85->leave($__internal_9a30661db633aac0cb3f9fd57619273396f5f0f3052c8b8823f5332d4456be85_prof);

        
        $__internal_888221a73361bb47f938d9388f7fc8b74b38401228ad63d48dcc9a3d0f2c4674->leave($__internal_888221a73361bb47f938d9388f7fc8b74b38401228ad63d48dcc9a3d0f2c4674_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_913db805c20aca1d9d3ae92bfef3fdf98abcf4f25060867e25906e69794ec0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913db805c20aca1d9d3ae92bfef3fdf98abcf4f25060867e25906e69794ec0aa->enter($__internal_913db805c20aca1d9d3ae92bfef3fdf98abcf4f25060867e25906e69794ec0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_555461c689fc70107b8f6a7b970279da5088820cd8d6ab58f26a6a174c7a78a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555461c689fc70107b8f6a7b970279da5088820cd8d6ab58f26a6a174c7a78a2->enter($__internal_555461c689fc70107b8f6a7b970279da5088820cd8d6ab58f26a6a174c7a78a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_555461c689fc70107b8f6a7b970279da5088820cd8d6ab58f26a6a174c7a78a2->leave($__internal_555461c689fc70107b8f6a7b970279da5088820cd8d6ab58f26a6a174c7a78a2_prof);

        
        $__internal_913db805c20aca1d9d3ae92bfef3fdf98abcf4f25060867e25906e69794ec0aa->leave($__internal_913db805c20aca1d9d3ae92bfef3fdf98abcf4f25060867e25906e69794ec0aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
