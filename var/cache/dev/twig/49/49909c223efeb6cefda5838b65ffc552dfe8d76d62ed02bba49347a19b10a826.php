<?php

/* AkinaImmobilierBundle:Admin:contratProprietaire.html.twig */
class __TwigTemplate_62922ce56b9748d9e379f14b47ee91d16d750702a49f8bd9aa869bc2b60074f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:contratProprietaire.html.twig", 1);
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
        $__internal_37fbc85b759915b815014455c2a140015cdb34fb2bcdef5fa5127a6bbcb908b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fbc85b759915b815014455c2a140015cdb34fb2bcdef5fa5127a6bbcb908b6->enter($__internal_37fbc85b759915b815014455c2a140015cdb34fb2bcdef5fa5127a6bbcb908b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contratProprietaire.html.twig"));

        $__internal_dcffe5af1f7b715492c52aefdd828d1fc138c1144706113836ec1a3419fc146c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcffe5af1f7b715492c52aefdd828d1fc138c1144706113836ec1a3419fc146c->enter($__internal_dcffe5af1f7b715492c52aefdd828d1fc138c1144706113836ec1a3419fc146c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contratProprietaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37fbc85b759915b815014455c2a140015cdb34fb2bcdef5fa5127a6bbcb908b6->leave($__internal_37fbc85b759915b815014455c2a140015cdb34fb2bcdef5fa5127a6bbcb908b6_prof);

        
        $__internal_dcffe5af1f7b715492c52aefdd828d1fc138c1144706113836ec1a3419fc146c->leave($__internal_dcffe5af1f7b715492c52aefdd828d1fc138c1144706113836ec1a3419fc146c_prof);

    }

    // line 2
    public function block_upload($context, array $blocks = array())
    {
        $__internal_55bc81af6cbb0a21bd6084cfdc0136d818a8bdc0c39d0bc3e2fb58bae8bc05ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bc81af6cbb0a21bd6084cfdc0136d818a8bdc0c39d0bc3e2fb58bae8bc05ea->enter($__internal_55bc81af6cbb0a21bd6084cfdc0136d818a8bdc0c39d0bc3e2fb58bae8bc05ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_e1ff60745e669a853a43c176225b74423dbf079a26e724d49e82d7887079beeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ff60745e669a853a43c176225b74423dbf079a26e724d49e82d7887079beeb->enter($__internal_e1ff60745e669a853a43c176225b74423dbf079a26e724d49e82d7887079beeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 3
        echo "  <style>
  .btn{
      float:right;
  }
  </style>
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Contrat avec le proprietaire</h1>

<h2>Infos Proprietaire</h2>
 ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservation"] ?? $this->getContext($context, "reservation")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 14
            echo "            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du Proprietaire    </strong></td><td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "bien", array()), "proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "bien", array()), "proprietaire", array()), "Nom", array()), "html", null, true);
            echo "
 </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "bien", array()), "proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Addresse         </strong></td><td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "bien", array()), "proprietaire", array()), "Addresse", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Email            </strong></td><td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "bien", array()), "proprietaire", array()), "email", array()), "html", null, true);
            echo "
 </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "bien", array()), "proprietaire", array()), "telephone", array()), "html", null, true);
            echo "
 </td></tr>
  <tr><td><strong>Code Banquaire         </strong></td><td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "bien", array()), "proprietaire", array()), "codeBanquaire", array()), "html", null, true);
            echo "
 </td></tr>

  </div>
 <tr><td> <h2>Infos du bien</h2></td><td>
 </td></tr>
 <div class=\"form-group\">
    <tr><td><strong>Nom du bien    </strong></td><td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "
 </td></tr>

    <tr><td><strong>Prix        </strong></td><td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Proprietaire           </strong></td><td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo " </td></tr
    >   <tr><td><strong>Localite         </strong></td><td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "
 </td></tr>
<tr><td><strong>Type         </strong></td><td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "
 </td></tr>
<tr><td> ";
            // line 44
            echo "<strong>
    Montant d'allocation de bien
</strong>
            </td> <td>





      ";
            // line 54
            echo "
      ";
            // line 55
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()) * 12), "html", null, true);
            echo "



 </td></tr>

<tr><td> ";
            // line 62
            echo "<strong>

Commission
</strong>
            </td> <td>


 ";
            // line 69
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()) * 3), "html", null, true);
            echo "


      ";
            // line 73
            echo "


</td></tr>
<tr><td> ";
            // line 78
            echo "<strong>
Part du proprietaire
</strong>
            </td> <td>


 ";
            // line 84
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()) * 9), "html", null, true);
            echo "


      ";
            // line 88
            echo "


</td></tr>
<tr><td> ";
            // line 93
            echo "<strong>
Durée du contrat
</strong>
            </td> <td>
1 année



      ";
            // line 102
            echo "


</td></tr>
<tr><td> ";
            // line 107
            echo "<strong>
Date de début
</strong>
            </td> <td>

     ";
            // line 112
            echo twig_escape_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "html", null, true);
            echo "
      



      ";
            // line 118
            echo "


</td></tr>
  </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "




";
        // line 129
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
           <tr><td> ";
        // line 131
        echo "<strong>

    <label>
    Les termes du contrat
    </label>
</strong>
            </td> <td>




<textarea disabled=\"disabled\" style=\"width:500px ; height:300px\">
";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terme"] ?? $this->getContext($context, "terme")));
        foreach ($context['_seq'] as $context["_key"] => $context["termes"]) {
            // line 144
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["termes"], "texte", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['termes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "</textarea>




</td></tr>
  <tr><td> </td><td>
  <input  name=\"checkBox\" id=\"oui\" type=\"radio\">Accepter
  <input  name=\"checkBox\" id=\"non\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Enregistrer\" />
        </td></tr>
        ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </table>
        </div>

  ";
        
        $__internal_e1ff60745e669a853a43c176225b74423dbf079a26e724d49e82d7887079beeb->leave($__internal_e1ff60745e669a853a43c176225b74423dbf079a26e724d49e82d7887079beeb_prof);

        
        $__internal_55bc81af6cbb0a21bd6084cfdc0136d818a8bdc0c39d0bc3e2fb58bae8bc05ea->leave($__internal_55bc81af6cbb0a21bd6084cfdc0136d818a8bdc0c39d0bc3e2fb58bae8bc05ea_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:contratProprietaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 159,  277 => 146,  268 => 144,  264 => 143,  250 => 131,  246 => 129,  239 => 124,  228 => 118,  220 => 112,  213 => 107,  207 => 102,  197 => 93,  191 => 88,  185 => 84,  177 => 78,  171 => 73,  165 => 69,  156 => 62,  147 => 55,  144 => 54,  133 => 44,  128 => 41,  123 => 39,  117 => 38,  112 => 36,  106 => 33,  96 => 26,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  69 => 16,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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
  <style>
  .btn{
      float:right;
  }
  </style>
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Contrat avec le proprietaire</h1>

<h2>Infos Proprietaire</h2>
 {% for reserve in reservation %}
            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du Proprietaire    </strong></td><td>{{reserve.bien.proprietaire.Prenom}} {{reserve.bien.proprietaire.Nom}}
 </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td>{{reserve.bien.proprietaire.numeroPiece}}
 </td></tr>
    <tr><td><strong>Addresse         </strong></td><td>{{reserve.bien.proprietaire.Addresse}}
 </td></tr>
    <tr><td><strong>Email            </strong></td><td>{{reserve.bien.proprietaire.email}}
 </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td>{{reserve.bien.proprietaire.telephone}}
 </td></tr>
  <tr><td><strong>Code Banquaire         </strong></td><td>{{reserve.bien.proprietaire.codeBanquaire}}
 </td></tr>

  </div>
 <tr><td> <h2>Infos du bien</h2></td><td>
 </td></tr>
 <div class=\"form-group\">
    <tr><td><strong>Nom du bien    </strong></td><td>{{reserve.Bien.nomBien }}
 </td></tr>

    <tr><td><strong>Prix        </strong></td><td>{{reserve.Bien.prix }}
 </td></tr>
    <tr><td><strong>Proprietaire           </strong></td><td>{{reserve.Bien.Proprietaire.Prenom}} {{reserve.Bien.Proprietaire.Nom}} </td></tr
    >   <tr><td><strong>Localite         </strong></td><td>{{reserve.Bien.Localite.libelle }}
 </td></tr>
<tr><td><strong>Type         </strong></td><td>{{reserve.Bien.Type.libelle }}
 </td></tr>
<tr><td> {# Génération du label. #}
<strong>
    Montant d'allocation de bien
</strong>
            </td> <td>





      {# Génération de l'input. #}

      {{reserve.Bien.prix * 12}}



 </td></tr>

<tr><td> {# Génération du label. #}
<strong>

Commission
</strong>
            </td> <td>


 {{reserve.Bien.prix * 3}}


      {# Génération de l'input. #}



</td></tr>
<tr><td> {# Génération du label. #}
<strong>
Part du proprietaire
</strong>
            </td> <td>


 {{reserve.Bien.prix * 9}}


      {# Génération de l'input. #}



</td></tr>
<tr><td> {# Génération du label. #}
<strong>
Durée du contrat
</strong>
            </td> <td>
1 année



      {# Génération de l'input. #}



</td></tr>
<tr><td> {# Génération du label. #}
<strong>
Date de début
</strong>
            </td> <td>

     {{date}}
      



      {# Génération de l'input. #}



</td></tr>
  </div>
   {% endfor %}





{{ form_start(form)}}
           <tr><td> {# Génération du label. #}
<strong>

    <label>
    Les termes du contrat
    </label>
</strong>
            </td> <td>




<textarea disabled=\"disabled\" style=\"width:500px ; height:300px\">
{% for termes in terme %}
    {{ termes.texte}}
{% endfor %}
</textarea>




</td></tr>
  <tr><td> </td><td>
  <input  name=\"checkBox\" id=\"oui\" type=\"radio\">Accepter
  <input  name=\"checkBox\" id=\"non\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Enregistrer\" />
        </td></tr>
        {{form_end(form)}}

        </table>
        </div>

  {% endblock %}", "AkinaImmobilierBundle:Admin:contratProprietaire.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/contratProprietaire.html.twig");
    }
}
