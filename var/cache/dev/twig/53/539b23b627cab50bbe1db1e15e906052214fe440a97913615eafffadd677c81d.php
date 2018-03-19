<?php

/* AkinaImmobilierBundle:Admin:listRes.html.twig */
class __TwigTemplate_ea315178ad9a6262e5d4ba3bd4ac320b9bfccb93b31f3539021ea519d092a9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:listRes.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'upload' => array($this, 'block_upload'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd42801526adf602d24f3ade21cdcce898b7c604131c601fdcd466f756174e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd42801526adf602d24f3ade21cdcce898b7c604131c601fdcd466f756174e7->enter($__internal_ecd42801526adf602d24f3ade21cdcce898b7c604131c601fdcd466f756174e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listRes.html.twig"));

        $__internal_198e34b1db44fb120695a8565682650828ef18396913cb83c8a0893356b2a434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198e34b1db44fb120695a8565682650828ef18396913cb83c8a0893356b2a434->enter($__internal_198e34b1db44fb120695a8565682650828ef18396913cb83c8a0893356b2a434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listRes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd42801526adf602d24f3ade21cdcce898b7c604131c601fdcd466f756174e7->leave($__internal_ecd42801526adf602d24f3ade21cdcce898b7c604131c601fdcd466f756174e7_prof);

        
        $__internal_198e34b1db44fb120695a8565682650828ef18396913cb83c8a0893356b2a434->leave($__internal_198e34b1db44fb120695a8565682650828ef18396913cb83c8a0893356b2a434_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_8ea8f1ae0cd3e4cb6d9cce07617493ee1e14838ed7ff0c36f307dfaab4c544c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea8f1ae0cd3e4cb6d9cce07617493ee1e14838ed7ff0c36f307dfaab4c544c8->enter($__internal_8ea8f1ae0cd3e4cb6d9cce07617493ee1e14838ed7ff0c36f307dfaab4c544c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_32b4991fc6a19fb9f1b83ebe9a823cc5f7e3713898fff9eecf530771cc059718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b4991fc6a19fb9f1b83ebe9a823cc5f7e3713898fff9eecf530771cc059718->enter($__internal_32b4991fc6a19fb9f1b83ebe9a823cc5f7e3713898fff9eecf530771cc059718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "
 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  ";
        
        $__internal_32b4991fc6a19fb9f1b83ebe9a823cc5f7e3713898fff9eecf530771cc059718->leave($__internal_32b4991fc6a19fb9f1b83ebe9a823cc5f7e3713898fff9eecf530771cc059718_prof);

        
        $__internal_8ea8f1ae0cd3e4cb6d9cce07617493ee1e14838ed7ff0c36f307dfaab4c544c8->leave($__internal_8ea8f1ae0cd3e4cb6d9cce07617493ee1e14838ed7ff0c36f307dfaab4c544c8_prof);

    }

    // line 10
    public function block_upload($context, array $blocks = array())
    {
        $__internal_d827370b7f3fdbb2a9b26c2acb441eb17c4e73e4c34e12d9e6d225cfbec424ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d827370b7f3fdbb2a9b26c2acb441eb17c4e73e4c34e12d9e6d225cfbec424ef->enter($__internal_d827370b7f3fdbb2a9b26c2acb441eb17c4e73e4c34e12d9e6d225cfbec424ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_2e18529e09693ee73b4f46dad7237be45ec169c09a770bb992a36b744789e622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e18529e09693ee73b4f46dad7237be45ec169c09a770bb992a36b744789e622->enter($__internal_2e18529e09693ee73b4f46dad7237be45ec169c09a770bb992a36b744789e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 11
        echo "
 <div id=\"bien\">
<h3>
Liste des reservations
</h3>
 <div class=\"container\">


 <div class=\"table-responsive \">
<table class=\"table datatable table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom client</th>


<th>Date de reservation</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
<th>Valider</th>
</tr>
</thead>
<tbody>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 37
            echo "<tr>
<td>


</td>

<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "</td>

<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "dateDeReservation", array()), "html", null, true);
            echo "</td>


<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "Bien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "Bien", array()), "html", null, true);
            echo "</td>

<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "Bien", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "Bien", array()), "html", null, true);
            echo "</td>
<td><a  href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["reserve"], "id", array()))), "html", null, true);
            echo "\">Détails</a></td>

<td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute($context["reserve"], "id", array()), "bien" => $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "id", array()))), "html", null, true);
            echo "\">

Valider

</a></td>
</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</tbody>
</table>
</div>

</div>
 </div>

";
        
        $__internal_2e18529e09693ee73b4f46dad7237be45ec169c09a770bb992a36b744789e622->leave($__internal_2e18529e09693ee73b4f46dad7237be45ec169c09a770bb992a36b744789e622_prof);

        
        $__internal_d827370b7f3fdbb2a9b26c2acb441eb17c4e73e4c34e12d9e6d225cfbec424ef->leave($__internal_d827370b7f3fdbb2a9b26c2acb441eb17c4e73e4c34e12d9e6d225cfbec424ef_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:listRes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 62,  147 => 54,  142 => 52,  136 => 51,  131 => 49,  127 => 48,  121 => 45,  114 => 43,  106 => 37,  102 => 36,  75 => 11,  66 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
 {% block form %}

 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  {% endblock %}
{% block upload %}

 <div id=\"bien\">
<h3>
Liste des reservations
</h3>
 <div class=\"container\">


 <div class=\"table-responsive \">
<table class=\"table datatable table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom client</th>


<th>Date de reservation</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
<th>Valider</th>
</tr>
</thead>
<tbody>
{% for reserve in reservations %}
<tr>
<td>


</td>

<td>{{reserve.Client.Prenom}} {{reserve.Client.Nom}}</td>

<td>{{reserve.dateDeReservation}}</td>


<td>{{reserve.Bien}}</td>
<td>{{reserve.Bien}}</td>

<td>{{reserve.Bien}} {{reserve.Bien}}</td>
<td><a  href=\"{{path('detail',{'id':reserve.id})}}\">Détails</a></td>

<td><a href=\"{{path('contrat',{'id':reserve.id,'bien':reserve.Bien.id})}}\">

Valider

</a></td>
</tr>

{% endfor %}
</tbody>
</table>
</div>

</div>
 </div>

{% endblock %}", "AkinaImmobilierBundle:Admin:listRes.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/listRes.html.twig");
    }
}
