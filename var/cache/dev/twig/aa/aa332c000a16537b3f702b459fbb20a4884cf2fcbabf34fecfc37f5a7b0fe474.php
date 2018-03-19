<?php

/* AkinaImmobilierBundle:Admin:detailBien.html.twig */
class __TwigTemplate_e635976943b10b8b82eb290db2feb05c8e2ef90489d0acd2a1d84e224db29574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:detailBien.html.twig", 1);
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
        $__internal_2845beabea30ec27a4f1bb5fd86c0fe10c9f2bd8bc68684a2e1bd759c6932485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2845beabea30ec27a4f1bb5fd86c0fe10c9f2bd8bc68684a2e1bd759c6932485->enter($__internal_2845beabea30ec27a4f1bb5fd86c0fe10c9f2bd8bc68684a2e1bd759c6932485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:detailBien.html.twig"));

        $__internal_a91c009b75964c5e232b975c4a5527efc1b70e815ebdf3a5d764dd72ebb03f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91c009b75964c5e232b975c4a5527efc1b70e815ebdf3a5d764dd72ebb03f76->enter($__internal_a91c009b75964c5e232b975c4a5527efc1b70e815ebdf3a5d764dd72ebb03f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:detailBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2845beabea30ec27a4f1bb5fd86c0fe10c9f2bd8bc68684a2e1bd759c6932485->leave($__internal_2845beabea30ec27a4f1bb5fd86c0fe10c9f2bd8bc68684a2e1bd759c6932485_prof);

        
        $__internal_a91c009b75964c5e232b975c4a5527efc1b70e815ebdf3a5d764dd72ebb03f76->leave($__internal_a91c009b75964c5e232b975c4a5527efc1b70e815ebdf3a5d764dd72ebb03f76_prof);

    }

    // line 4
    public function block_upload($context, array $blocks = array())
    {
        $__internal_a1745106f8777d79f30199f0a8bda030a4950cdbd8c515deb3526947bf4750df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1745106f8777d79f30199f0a8bda030a4950cdbd8c515deb3526947bf4750df->enter($__internal_a1745106f8777d79f30199f0a8bda030a4950cdbd8c515deb3526947bf4750df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_c1619f83f06c05aa037ce4f8af42eb5be111260ebba09cb40fe7ea3c580d76af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1619f83f06c05aa037ce4f8af42eb5be111260ebba09cb40fe7ea3c580d76af->enter($__internal_c1619f83f06c05aa037ce4f8af42eb5be111260ebba09cb40fe7ea3c580d76af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 5
        echo "

  <style>



</style>
<h3>
Voir les détails sur :
</h3>


    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 18
            echo "

<div class=\"\">
              <div class=\"card \">
                <div class=\"card-body\">
                <table class=\"table table-bordred table-striped table-inverse display\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "nomBien", array()), "html", null, true);
            echo "        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "description", array()), "html", null, true);
            echo "        </span> </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "prix", array()), "html", null, true);
            echo "              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo " </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "     </span>   </td></tr>
<tr><td> <strong>Images          </strong></td><td><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["reserve"], "image", array()))), "html", null, true);
            echo "\" height=\"100px\" width=\"250px\">
   </td></tr>

  </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>



              <div class=\"card h-100\">
               <div class=\"card-body\">
                 <table class=\"table table-bordred table-striped table-inverse display\">
  <tr><td><strong>Nom du propriétaire</strong></td><td><span>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo " </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "Addresse", array()), "html", null, true);
            echo "   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "email", array()), "html", null, true);
            echo "   </span></td></tr>
    </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>





 </div>
</div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "


  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
";
        
        $__internal_c1619f83f06c05aa037ce4f8af42eb5be111260ebba09cb40fe7ea3c580d76af->leave($__internal_c1619f83f06c05aa037ce4f8af42eb5be111260ebba09cb40fe7ea3c580d76af_prof);

        
        $__internal_a1745106f8777d79f30199f0a8bda030a4950cdbd8c515deb3526947bf4750df->leave($__internal_a1745106f8777d79f30199f0a8bda030a4950cdbd8c515deb3526947bf4750df_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:detailBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 64,  129 => 49,  125 => 48,  121 => 47,  115 => 46,  97 => 31,  93 => 30,  89 => 29,  84 => 27,  80 => 26,  76 => 25,  67 => 18,  63 => 17,  49 => 5,  40 => 4,  11 => 1,);
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



</style>
<h3>
Voir les détails sur :
</h3>


    {% for reserve in detail %}


<div class=\"\">
              <div class=\"card \">
                <div class=\"card-body\">
                <table class=\"table table-bordred table-striped table-inverse display\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>{{reserve.Biens.nomBien }}        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><span>{{reserve.Biens.description }}        </span> </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>{{reserve.Biens.prix }}              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>{{reserve.Biens.Localite.libelle }} </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> {{reserve.Biens.Type.libelle }}     </span>   </td></tr>
<tr><td> <strong>Images          </strong></td><td><img src=\"{{ asset('uploads/images/' ~ reserve.image) }}\" height=\"100px\" width=\"250px\">
   </td></tr>

  </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>



              <div class=\"card h-100\">
               <div class=\"card-body\">
                 <table class=\"table table-bordred table-striped table-inverse display\">
  <tr><td><strong>Nom du propriétaire</strong></td><td><span>{{reserve.Biens.Proprietaire.Prenom}} {{reserve.Biens.Proprietaire.Nom}}     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>{{reserve.Biens.Proprietaire.numeroPiece}} </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>{{reserve.Biens.Proprietaire.Addresse}}   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>{{reserve.Biens.Proprietaire.email}}   </span></td></tr>
    </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>





 </div>
</div>
 {% endfor %}



  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
{% endblock %}", "AkinaImmobilierBundle:Admin:detailBien.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/detailBien.html.twig");
    }
}
