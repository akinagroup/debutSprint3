<?php

/* AkinaImmobilierBundle:Front:list.html.twig */
class __TwigTemplate_3365207ade311232b69a72beac85e7fbcfe5b042c50cb43643ca32a857adf59f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout1.html.twig", "AkinaImmobilierBundle:Front:list.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'formu' => array($this, 'block_formu'),
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58867a0192ff2607aafd6b0626662f4ce6532fce39b671cc4049649c4016209d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58867a0192ff2607aafd6b0626662f4ce6532fce39b671cc4049649c4016209d->enter($__internal_58867a0192ff2607aafd6b0626662f4ce6532fce39b671cc4049649c4016209d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $__internal_e62c173c931b886d8f02775cdc9937ed50cf255814f95a2b6ffd5a6d1c67f6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62c173c931b886d8f02775cdc9937ed50cf255814f95a2b6ffd5a6d1c67f6aa->enter($__internal_e62c173c931b886d8f02775cdc9937ed50cf255814f95a2b6ffd5a6d1c67f6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58867a0192ff2607aafd6b0626662f4ce6532fce39b671cc4049649c4016209d->leave($__internal_58867a0192ff2607aafd6b0626662f4ce6532fce39b671cc4049649c4016209d_prof);

        
        $__internal_e62c173c931b886d8f02775cdc9937ed50cf255814f95a2b6ffd5a6d1c67f6aa->leave($__internal_e62c173c931b886d8f02775cdc9937ed50cf255814f95a2b6ffd5a6d1c67f6aa_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_01c4ed1fa82c3558f61db02a702c21f1c3b457e72d765ceb4285c0aa47908773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c4ed1fa82c3558f61db02a702c21f1c3b457e72d765ceb4285c0aa47908773->enter($__internal_01c4ed1fa82c3558f61db02a702c21f1c3b457e72d765ceb4285c0aa47908773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_e4f0dabce99c150f87bff27fa7a6db68d31bc4bca521f16c5bd5bd31c264bff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f0dabce99c150f87bff27fa7a6db68d31bc4bca521f16c5bd5bd31c264bff7->enter($__internal_e4f0dabce99c150f87bff27fa7a6db68d31bc4bca521f16c5bd5bd31c264bff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "<div class=\"form-group list-group-item\">
<form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" methode=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Prix</label>
    <input type=\"number\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter un montant\" name=\"prix\">

  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect1\">Localité</label>
    <select class=\"form-control\" id=\"exampleSelect1\" name=\"Localite\">
      <option value=\"\">--Choisir une localité--</option>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Localite"] ?? $this->getContext($context, "Localite")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 15
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </select>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect2\">Type</label>
    <select class=\"form-control\" id=\"exampleSelect2\" name=\"Type\">
      <option>--Choisir un type--</option>
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Type"] ?? $this->getContext($context, "Type")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </select>
  </div>


  <button type=\"submit\" class=\"btn btn-dark\" name=\"chercher\">Rechercher</button>
</form>

</div>
 ";
        
        $__internal_e4f0dabce99c150f87bff27fa7a6db68d31bc4bca521f16c5bd5bd31c264bff7->leave($__internal_e4f0dabce99c150f87bff27fa7a6db68d31bc4bca521f16c5bd5bd31c264bff7_prof);

        
        $__internal_01c4ed1fa82c3558f61db02a702c21f1c3b457e72d765ceb4285c0aa47908773->leave($__internal_01c4ed1fa82c3558f61db02a702c21f1c3b457e72d765ceb4285c0aa47908773_prof);

    }

    // line 32
    public function block_formu($context, array $blocks = array())
    {
        $__internal_e8b7249b90e6dd8e5911a66630da011fc89734d8dd14001ff34245d31a4b9be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b7249b90e6dd8e5911a66630da011fc89734d8dd14001ff34245d31a4b9be6->enter($__internal_e8b7249b90e6dd8e5911a66630da011fc89734d8dd14001ff34245d31a4b9be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        $__internal_730d00ca53ad8f52c903441658cb1c169fab85b77a06848f451ccd3c451229ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730d00ca53ad8f52c903441658cb1c169fab85b77a06848f451ccd3c451229ee->enter($__internal_730d00ca53ad8f52c903441658cb1c169fab85b77a06848f451ccd3c451229ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        // line 33
        echo "
 ";
        
        $__internal_730d00ca53ad8f52c903441658cb1c169fab85b77a06848f451ccd3c451229ee->leave($__internal_730d00ca53ad8f52c903441658cb1c169fab85b77a06848f451ccd3c451229ee_prof);

        
        $__internal_e8b7249b90e6dd8e5911a66630da011fc89734d8dd14001ff34245d31a4b9be6->leave($__internal_e8b7249b90e6dd8e5911a66630da011fc89734d8dd14001ff34245d31a4b9be6_prof);

    }

    // line 35
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_4e3801f4ed47dff4c1731e5c4c94b9dc5151d959f1b488cb2dc7c073eccb0daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3801f4ed47dff4c1731e5c4c94b9dc5151d959f1b488cb2dc7c073eccb0daa->enter($__internal_4e3801f4ed47dff4c1731e5c4c94b9dc5151d959f1b488cb2dc7c073eccb0daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_e5b3c2bb92011487e9e9cdf999340d8c838913a5b4efe5e83bdd12366111ab81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b3c2bb92011487e9e9cdf999340d8c838913a5b4efe5e83bdd12366111ab81->enter($__internal_e5b3c2bb92011487e9e9cdf999340d8c838913a5b4efe5e83bdd12366111ab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 36
        echo "<div class=\"row-fluid\">
           <ul class=\"thumbnails\">

 ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 40
            echo " \t<li class=\"span4\">
\t\t\t  <div class=\"thumbnail\">
  
\t\t\t\t<a class=\"zoomTool\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("va", array("id" => $this->getAttribute($context["bien"], "id", array()), "bien" => $this->getAttribute($this->getAttribute($context["bien"], "biens", array()), "id", array()))), "html", null, true);
            echo "\" title=\"add to cart\"><span class=\"icon-search\"></span> Détails </a>
\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("va", array("id" => $this->getAttribute($context["bien"], "id", array()), "bien" => $this->getAttribute($this->getAttribute($context["bien"], "biens", array()), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["bien"], "image", array()))), "html", null, true);
            echo "\" style=\"width:160px;height:120px\"/></a>
\t\t\t\t<div class=\"caption cntr\">
\t\t\t\t\t<p> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "biens", array()), "NomBien", array()), "html", null, true);
            echo " </p>
\t\t\t\t\t<p><strong> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "biens", array()), "Prix", array()), "html", null, true);
            echo " Fcfa</strong></p>
\t\t\t\t\t<h4><a class=\"shopBtn\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reserve", array("id" => $this->getAttribute($this->getAttribute($context["bien"], "biens", array()), "id", array()))), "html", null, true);
            echo "\" title=\"add to cart\"> Réserver </a></h4>
\t\t\t\t\t<div class=\"actionList\">
\t\t\t\t\t\t<a class=\"pull-left\" href=\"#\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "biens", array()), "Type", array()), "Libelle", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t<a class=\"pull-left\" href=\"#\">  ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "biens", array()), "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<br class=\"clr\">
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</li>


   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
</ul>
\t</div>
          <!-- /.row -->
           ";
        
        $__internal_e5b3c2bb92011487e9e9cdf999340d8c838913a5b4efe5e83bdd12366111ab81->leave($__internal_e5b3c2bb92011487e9e9cdf999340d8c838913a5b4efe5e83bdd12366111ab81_prof);

        
        $__internal_4e3801f4ed47dff4c1731e5c4c94b9dc5151d959f1b488cb2dc7c073eccb0daa->leave($__internal_4e3801f4ed47dff4c1731e5c4c94b9dc5151d959f1b488cb2dc7c073eccb0daa_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 60,  191 => 51,  187 => 50,  182 => 48,  178 => 47,  174 => 46,  167 => 44,  163 => 43,  158 => 40,  154 => 39,  149 => 36,  140 => 35,  129 => 33,  120 => 32,  102 => 23,  89 => 22,  81 => 16,  71 => 15,  67 => 14,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
 {% block form %}
<div class=\"form-group list-group-item\">
<form action=\"{{path('search')}}\" methode=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Prix</label>
    <input type=\"number\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter un montant\" name=\"prix\">

  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect1\">Localité</label>
    <select class=\"form-control\" id=\"exampleSelect1\" name=\"Localite\">
      <option value=\"\">--Choisir une localité--</option>
      {%for localite in Localite%}
      <option value=\"{{localite.libelle}}\">{{localite.libelle}}</option>{%endfor%}
    </select>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect2\">Type</label>
    <select class=\"form-control\" id=\"exampleSelect2\" name=\"Type\">
      <option>--Choisir un type--</option>
      {%for type in Type%}<option value=\"{{type.libelle}}\">{{type.libelle}}</option> {%endfor%}
    </select>
  </div>


  <button type=\"submit\" class=\"btn btn-dark\" name=\"chercher\">Rechercher</button>
</form>

</div>
 {% endblock %}
 {% block formu %}

 {% endblock %}
   {% block catalogue %}
<div class=\"row-fluid\">
           <ul class=\"thumbnails\">

 {% for bien in reservations %}
 \t<li class=\"span4\">
\t\t\t  <div class=\"thumbnail\">
  
\t\t\t\t<a class=\"zoomTool\" href=\"{{path('va',{'id':bien.id,'bien':bien.biens.id})}}\" title=\"add to cart\"><span class=\"icon-search\"></span> Détails </a>
\t\t\t\t<a href=\"{{path('va',{'id':bien.id,'bien':bien.biens.id})}}\"><img src=\"{{ asset('uploads/images/' ~ bien.image) }}\" style=\"width:160px;height:120px\"/></a>
\t\t\t\t<div class=\"caption cntr\">
\t\t\t\t\t<p> {{bien.biens.NomBien}} </p>
\t\t\t\t\t<p><strong> {{bien.biens.Prix}} Fcfa</strong></p>
\t\t\t\t\t<h4><a class=\"shopBtn\" href=\"{{path('Reserve',{'id':bien.biens.id})}}\" title=\"add to cart\"> Réserver </a></h4>
\t\t\t\t\t<div class=\"actionList\">
\t\t\t\t\t\t<a class=\"pull-left\" href=\"#\">{{bien.biens.Type.Libelle}} </a>
\t\t\t\t\t\t<a class=\"pull-left\" href=\"#\">  {{bien.biens.Localite.Libelle}}</a>
\t\t\t\t\t</div>
\t\t\t\t\t<br class=\"clr\">
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</li>


   {% endfor %}

</ul>
\t</div>
          <!-- /.row -->
           {% endblock %}", "AkinaImmobilierBundle:Front:list.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/list.html.twig");
    }
}
