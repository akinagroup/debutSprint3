<?php

/* AkinaImmobilierBundle:Admin:listConfession.html.twig */
class __TwigTemplate_baa9a89346dda7cfa941bbc5e6aa576d9c19e15e6f45ce6f5cad690ac0d63138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:listConfession.html.twig", 1);
        $this->blocks = array(
            'upload' => array($this, 'block_upload'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da915c5b2a4074131b9e0e7c696ffb99e55e3c231f4ff3f54bc6ccb0b28dc572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da915c5b2a4074131b9e0e7c696ffb99e55e3c231f4ff3f54bc6ccb0b28dc572->enter($__internal_da915c5b2a4074131b9e0e7c696ffb99e55e3c231f4ff3f54bc6ccb0b28dc572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listConfession.html.twig"));

        $__internal_9e8769de9c9d3f31e7c4c5ff487dae75d3449e8d6ffb421ba200a8cbdad9d496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8769de9c9d3f31e7c4c5ff487dae75d3449e8d6ffb421ba200a8cbdad9d496->enter($__internal_9e8769de9c9d3f31e7c4c5ff487dae75d3449e8d6ffb421ba200a8cbdad9d496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listConfession.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da915c5b2a4074131b9e0e7c696ffb99e55e3c231f4ff3f54bc6ccb0b28dc572->leave($__internal_da915c5b2a4074131b9e0e7c696ffb99e55e3c231f4ff3f54bc6ccb0b28dc572_prof);

        
        $__internal_9e8769de9c9d3f31e7c4c5ff487dae75d3449e8d6ffb421ba200a8cbdad9d496->leave($__internal_9e8769de9c9d3f31e7c4c5ff487dae75d3449e8d6ffb421ba200a8cbdad9d496_prof);

    }

    // line 4
    public function block_upload($context, array $blocks = array())
    {
        $__internal_4ed4a4e1a382f6a8df70ded6ab19d271c7957e2b8e91a481113ae971f61ab74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed4a4e1a382f6a8df70ded6ab19d271c7957e2b8e91a481113ae971f61ab74e->enter($__internal_4ed4a4e1a382f6a8df70ded6ab19d271c7957e2b8e91a481113ae971f61ab74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_c93aa73b663398de69beccb75d1300ecb69612c786c93403c57dd25b47f3e2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93aa73b663398de69beccb75d1300ecb69612c786c93403c57dd25b47f3e2bb->enter($__internal_c93aa73b663398de69beccb75d1300ecb69612c786c93403c57dd25b47f3e2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 5
        echo "<div class=\"container\">
<h3>
Liste des confessions non validées </h3>

 <div class=\"table-responsive \">
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
<th>Valid</th>

</tr>
</thead>
<tbody>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 25
            echo "<tr>
<td>

</td>

<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>


<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "bien", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "bien", array()), "Proprietaire", array()), "nom", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailBien", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Détails</a></td>
<td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contratProprietaire", array("id" => $this->getAttribute($context["bien"], "id", array()), "bien" => $this->getAttribute($this->getAttribute($context["bien"], "Bien", array()), "id", array()), "proprio" => $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "bien", array()), "Proprietaire", array()), "id", array()))), "html", null, true);
            echo "\">

Valider

</a></td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</tbody>
</table>
</div>

</div>
";
        
        $__internal_c93aa73b663398de69beccb75d1300ecb69612c786c93403c57dd25b47f3e2bb->leave($__internal_c93aa73b663398de69beccb75d1300ecb69612c786c93403c57dd25b47f3e2bb_prof);

        
        $__internal_4ed4a4e1a382f6a8df70ded6ab19d271c7957e2b8e91a481113ae971f61ab74e->leave($__internal_4ed4a4e1a382f6a8df70ded6ab19d271c7957e2b8e91a481113ae971f61ab74e_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:listConfession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  120 => 46,  107 => 38,  103 => 37,  97 => 36,  92 => 34,  88 => 33,  82 => 30,  75 => 25,  70 => 24,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::LayoutAdmin/integration.html.twig\" %}


{% block upload %}
<div class=\"container\">
<h3>
Liste des confessions non validées </h3>

 <div class=\"table-responsive \">
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
<th>Valid</th>

</tr>
</thead>
<tbody>
{%for bien in reservations%}
<tr>
<td>

</td>

<td>{{bien.bien.nomBien}}</td>


<td>{{bien.bien.Localite.libelle }}</td>
<td>{{bien.bien.Type.libelle}}</td>

<td>{{bien.bien.Proprietaire.nom}}  {{bien.bien.Proprietaire.Prenom}}</td>
<td><a href=\"{{path('detailBien',{'id':bien.id})}}\">Détails</a></td>
<td><a href=\"{{path('contratProprietaire',{'id':bien.id,'bien':bien.Bien.id,'proprio':bien.bien.Proprietaire.id})}}\">

Valider

</a></td>
</tr>

{%else%}

{%endfor%}
</tbody>
</table>
</div>

</div>
{% endblock %}", "AkinaImmobilierBundle:Admin:listConfession.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/listConfession.html.twig");
    }
}
