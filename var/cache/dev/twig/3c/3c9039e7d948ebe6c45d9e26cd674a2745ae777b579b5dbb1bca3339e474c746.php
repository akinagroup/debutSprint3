<?php

/* AkinaImmobilierBundle:Front:valide.html.twig */
class __TwigTemplate_462d02775f3b4f5d9fbc2e7957495a395fef67e9baf264b5517def82f5d51bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout1.html.twig", "AkinaImmobilierBundle:Front:valide.html.twig", 1);
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
        $__internal_69d40495171ce313d0873c4dca61333773744a20ea82b7fad2cf88cadc2f4892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d40495171ce313d0873c4dca61333773744a20ea82b7fad2cf88cadc2f4892->enter($__internal_69d40495171ce313d0873c4dca61333773744a20ea82b7fad2cf88cadc2f4892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:valide.html.twig"));

        $__internal_6daa8a726bf2121f9ce94b94bdcdf720489a45f0a3435badf4abdf2468f5ce1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6daa8a726bf2121f9ce94b94bdcdf720489a45f0a3435badf4abdf2468f5ce1c->enter($__internal_6daa8a726bf2121f9ce94b94bdcdf720489a45f0a3435badf4abdf2468f5ce1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:valide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d40495171ce313d0873c4dca61333773744a20ea82b7fad2cf88cadc2f4892->leave($__internal_69d40495171ce313d0873c4dca61333773744a20ea82b7fad2cf88cadc2f4892_prof);

        
        $__internal_6daa8a726bf2121f9ce94b94bdcdf720489a45f0a3435badf4abdf2468f5ce1c->leave($__internal_6daa8a726bf2121f9ce94b94bdcdf720489a45f0a3435badf4abdf2468f5ce1c_prof);

    }

    // line 2
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_0d50596139c61f172ca5d118e6decb4c3c9b58c155f511707868085540417e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d50596139c61f172ca5d118e6decb4c3c9b58c155f511707868085540417e7d->enter($__internal_0d50596139c61f172ca5d118e6decb4c3c9b58c155f511707868085540417e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_63cffcf5beb4590f22e6add228aa67d13b3e21775a5b73c285708e9bcce185b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cffcf5beb4590f22e6add228aa67d13b3e21775a5b73c285708e9bcce185b3->enter($__internal_63cffcf5beb4590f22e6add228aa67d13b3e21775a5b73c285708e9bcce185b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 3
        echo "
    <h1>Bravos votre réservation a été enregistrer avec succés</h1>
    <!-- /.row -->
";
        
        $__internal_63cffcf5beb4590f22e6add228aa67d13b3e21775a5b73c285708e9bcce185b3->leave($__internal_63cffcf5beb4590f22e6add228aa67d13b3e21775a5b73c285708e9bcce185b3_prof);

        
        $__internal_0d50596139c61f172ca5d118e6decb4c3c9b58c155f511707868085540417e7d->leave($__internal_0d50596139c61f172ca5d118e6decb4c3c9b58c155f511707868085540417e7d_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:valide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
{% block catalogue %}

    <h1>Bravos votre réservation a été enregistrer avec succés</h1>
    <!-- /.row -->
{% endblock %}", "AkinaImmobilierBundle:Front:valide.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/valide.html.twig");
    }
}
