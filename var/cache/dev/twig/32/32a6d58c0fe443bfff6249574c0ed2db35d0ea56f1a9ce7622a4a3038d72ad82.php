<?php

/* AkinaImmobilierBundle:Admin:list.html.twig */
class __TwigTemplate_608a22f04ce1951ceb997c7773586ec28f24b5ba3de8c3494319f7167b52b703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:list.html.twig", 1);
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
        $__internal_633f7f5a4a8ce153460827151346ac851437e6b1585b0dae886305efdb34b737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633f7f5a4a8ce153460827151346ac851437e6b1585b0dae886305efdb34b737->enter($__internal_633f7f5a4a8ce153460827151346ac851437e6b1585b0dae886305efdb34b737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $__internal_b363ff64b5107aba1db22b6de77d1b700d757a19c945147a31d487d75bac93d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b363ff64b5107aba1db22b6de77d1b700d757a19c945147a31d487d75bac93d9->enter($__internal_b363ff64b5107aba1db22b6de77d1b700d757a19c945147a31d487d75bac93d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_633f7f5a4a8ce153460827151346ac851437e6b1585b0dae886305efdb34b737->leave($__internal_633f7f5a4a8ce153460827151346ac851437e6b1585b0dae886305efdb34b737_prof);

        
        $__internal_b363ff64b5107aba1db22b6de77d1b700d757a19c945147a31d487d75bac93d9->leave($__internal_b363ff64b5107aba1db22b6de77d1b700d757a19c945147a31d487d75bac93d9_prof);

    }

    // line 4
    public function block_upload($context, array $blocks = array())
    {
        $__internal_95a4633c9ac4d24fbc461555ca61eb18e76e11d3fbb4c3647665bf5c2e4e5122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a4633c9ac4d24fbc461555ca61eb18e76e11d3fbb4c3647665bf5c2e4e5122->enter($__internal_95a4633c9ac4d24fbc461555ca61eb18e76e11d3fbb4c3647665bf5c2e4e5122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_92407f2b22467bddd4b5ebff4f108e1eb31e0aeaba52b5646c8bc189caead2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92407f2b22467bddd4b5ebff4f108e1eb31e0aeaba52b5646c8bc189caead2b9->enter($__internal_92407f2b22467bddd4b5ebff4f108e1eb31e0aeaba52b5646c8bc189caead2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 5
        echo "<div class=\"col-lg-6\">
                    <div class=\"card\">
                      <div class=\"card-header\">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class=\"card-body card-block\">
                        
                      </div>
                      <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                          <i class=\"fa fa-dot-circle-o\"></i> Submit
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fa fa-ban\"></i> Reset
                        </button>
                      </div>
                    </div>
                    </div>

 <div class=\"container\">
<h3>
Liste des biens
</h3>

 <div class=\"table-responsive \">
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 45
            echo "<tr>
<td>

</td>

<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponibilite", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">
";
            // line 52
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 53
                echo "Occupé
";
            } else {
                // line 55
                echo "Disponible
";
            }
            // line 57
            echo "</a></td>


<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailBien", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Détails</a></td>
<td></td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "</tbody>
</table>
</div>

</div>


";
        
        $__internal_92407f2b22467bddd4b5ebff4f108e1eb31e0aeaba52b5646c8bc189caead2b9->leave($__internal_92407f2b22467bddd4b5ebff4f108e1eb31e0aeaba52b5646c8bc189caead2b9_prof);

        
        $__internal_95a4633c9ac4d24fbc461555ca61eb18e76e11d3fbb4c3647665bf5c2e4e5122->leave($__internal_95a4633c9ac4d24fbc461555ca61eb18e76e11d3fbb4c3647665bf5c2e4e5122_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 71,  148 => 69,  138 => 64,  134 => 63,  129 => 61,  125 => 60,  120 => 57,  116 => 55,  112 => 53,  110 => 52,  106 => 51,  102 => 50,  95 => 45,  90 => 44,  49 => 5,  40 => 4,  11 => 1,);
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
<div class=\"col-lg-6\">
                    <div class=\"card\">
                      <div class=\"card-header\">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class=\"card-body card-block\">
                        
                      </div>
                      <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                          <i class=\"fa fa-dot-circle-o\"></i> Submit
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fa fa-ban\"></i> Reset
                        </button>
                      </div>
                    </div>
                    </div>

 <div class=\"container\">
<h3>
Liste des biens
</h3>

 <div class=\"table-responsive \">
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
{%for bien in reservations%}
<tr>
<td>

</td>

<td>{{bien.nomBien}}</td>
<td><a href=\"{{path('disponibilite',{'id':bien.id})}}\">
{%if bien.etat == 1%}
Occupé
{% else %}
Disponible
{% endif%}
</a></td>


<td>{{bien.Localite.libelle }}</td>
<td>{{bien.Type.libelle}}</td>

<td>{{bien.Proprietaire.numeroPiece}}</td>
<td><a href=\"{{path('detailBien',{'id':bien.id})}}\">Détails</a></td>
<td></td>
</tr>

{%else%}

{%endfor%}
</tbody>
</table>
</div>

</div>


{% endblock %}", "AkinaImmobilierBundle:Admin:list.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/list.html.twig");
    }
}
