<?php

/* AkinaImmobilierBundle:Admin:contrat.html.twig */
class __TwigTemplate_c04b0e6b7c8bf142a4bc7b2eb344f53a0e4664d2090b16dfb2c3f6eaac525e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:contrat.html.twig", 1);
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
        $__internal_7fb0a78d191e307ee3df80fbea747c2f2b5d1a04f2cbb43dbcfee67f1818afb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb0a78d191e307ee3df80fbea747c2f2b5d1a04f2cbb43dbcfee67f1818afb4->enter($__internal_7fb0a78d191e307ee3df80fbea747c2f2b5d1a04f2cbb43dbcfee67f1818afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contrat.html.twig"));

        $__internal_5da026ff83c4baea1357682a0399381b001d5f604c39fdb521374c525dc6f691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da026ff83c4baea1357682a0399381b001d5f604c39fdb521374c525dc6f691->enter($__internal_5da026ff83c4baea1357682a0399381b001d5f604c39fdb521374c525dc6f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fb0a78d191e307ee3df80fbea747c2f2b5d1a04f2cbb43dbcfee67f1818afb4->leave($__internal_7fb0a78d191e307ee3df80fbea747c2f2b5d1a04f2cbb43dbcfee67f1818afb4_prof);

        
        $__internal_5da026ff83c4baea1357682a0399381b001d5f604c39fdb521374c525dc6f691->leave($__internal_5da026ff83c4baea1357682a0399381b001d5f604c39fdb521374c525dc6f691_prof);

    }

    // line 2
    public function block_upload($context, array $blocks = array())
    {
        $__internal_833321d4ed4324f0bef08e9d16b8ec416f7e328cc3696e0ff263a51903ca61ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833321d4ed4324f0bef08e9d16b8ec416f7e328cc3696e0ff263a51903ca61ee->enter($__internal_833321d4ed4324f0bef08e9d16b8ec416f7e328cc3696e0ff263a51903ca61ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_7236c770a4bbc945d1b3d81b9edb29bd09dfa4b556fad5d6917f03e17d37eee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7236c770a4bbc945d1b3d81b9edb29bd09dfa4b556fad5d6917f03e17d37eee8->enter($__internal_7236c770a4bbc945d1b3d81b9edb29bd09dfa4b556fad5d6917f03e17d37eee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 3
        echo "  <style>
  .btn{
      float:right;
  }
  </style>
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Contrat</h1>

<h2>Infos client</h2>
 ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservation"] ?? $this->getContext($context, "reservation")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 14
            echo "            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "
 </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "numeroPiece", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Addresse         </strong></td><td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Addresse", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Email            </strong></td><td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "email", array()), "html", null, true);
            echo "
 </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "telephone", array()), "html", null, true);
            echo "
 </td></tr>

  </div>
 <tr><td> <h2>Infos du bien</h2></td></tr>
 <div class=\"form-group\">
    <tr><td><strong>Nom du bien    </strong></td><td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "
 </td></tr>

    <tr><td><strong>Prix        </strong></td><td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Proprietaire           </strong></td><td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo " </td></tr
    >   <tr><td><strong>Localite         </strong></td><td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "
 </td></tr>
<tr><td><strong>Type         </strong></td><td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "
 </td></tr>
<tr><td> ";
            // line 41
            echo "<strong>
    La mensualité
</strong>
            </td> <td>





      ";
            // line 51
            echo "
      ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "



 </td></tr>
<tr><td> ";
            // line 58
            echo "<strong>

La caution
</strong>
            </td> <td>


 ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "


      ";
            // line 69
            echo "


</td></tr>
<tr><td> ";
            // line 74
            echo "<strong>

La totale
</strong>
            </td> <td>


 ";
            // line 81
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()) + $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array())), "html", null, true);
            echo "


      ";
            // line 85
            echo "


</td></tr>
  </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "




";
        // line 96
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
           <tr><td> ";
        // line 98
        echo "<strong>

    <label>
    Les termes du contrat
    </label>
</strong>
            </td> <td>




<textarea disabled=\"disabled\" style=\"width:500px ; height:300px\" >
";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terme"] ?? $this->getContext($context, "terme")));
        foreach ($context['_seq'] as $context["_key"] => $context["termes"]) {
            // line 111
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["termes"], "texte", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['termes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</textarea>




</td></tr>
  <tr><td> </td><td>
  <input id=\"checkBox\" name=\"checkBox\" id=\"oui\" type=\"radio\">Accepter
  <input id=\"checkBox\" name=\"checkBox\" id=\"non\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Enregistrer\" />
        </td></tr>
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </table>
        </div>

  ";
        
        $__internal_7236c770a4bbc945d1b3d81b9edb29bd09dfa4b556fad5d6917f03e17d37eee8->leave($__internal_7236c770a4bbc945d1b3d81b9edb29bd09dfa4b556fad5d6917f03e17d37eee8_prof);

        
        $__internal_833321d4ed4324f0bef08e9d16b8ec416f7e328cc3696e0ff263a51903ca61ee->leave($__internal_833321d4ed4324f0bef08e9d16b8ec416f7e328cc3696e0ff263a51903ca61ee_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 126,  234 => 113,  225 => 111,  221 => 110,  207 => 98,  203 => 96,  196 => 91,  185 => 85,  179 => 81,  170 => 74,  164 => 69,  158 => 65,  149 => 58,  141 => 52,  138 => 51,  127 => 41,  122 => 38,  117 => 36,  111 => 35,  106 => 33,  100 => 30,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  69 => 16,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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

<h1>Contrat</h1>

<h2>Infos client</h2>
 {% for reserve in reservation %}
            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td>{{reserve.Client.Prenom}} {{reserve.Client.Nom}}
 </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td>{{reserve.Client.numeroPiece}}
 </td></tr>
    <tr><td><strong>Addresse         </strong></td><td>{{reserve.Client.Addresse}}
 </td></tr>
    <tr><td><strong>Email            </strong></td><td>{{reserve.Client.email}}
 </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td>{{reserve.Client.telephone}}
 </td></tr>

  </div>
 <tr><td> <h2>Infos du bien</h2></td></tr>
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
    La mensualité
</strong>
            </td> <td>





      {# Génération de l'input. #}

      {{reserve.Bien.prix }}



 </td></tr>
<tr><td> {# Génération du label. #}
<strong>

La caution
</strong>
            </td> <td>


 {{reserve.Bien.prix }}


      {# Génération de l'input. #}



</td></tr>
<tr><td> {# Génération du label. #}
<strong>

La totale
</strong>
            </td> <td>


 {{reserve.Bien.prix + reserve.Bien.prix}}


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




<textarea disabled=\"disabled\" style=\"width:500px ; height:300px\" >
{% for termes in terme %}
    {{ termes.texte}}
{% endfor %}
</textarea>




</td></tr>
  <tr><td> </td><td>
  <input id=\"checkBox\" name=\"checkBox\" id=\"oui\" type=\"radio\">Accepter
  <input id=\"checkBox\" name=\"checkBox\" id=\"non\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Enregistrer\" />
        </td></tr>
        {{form_end(form)}}

        </table>
        </div>

  {% endblock %}", "AkinaImmobilierBundle:Admin:contrat.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/contrat.html.twig");
    }
}
