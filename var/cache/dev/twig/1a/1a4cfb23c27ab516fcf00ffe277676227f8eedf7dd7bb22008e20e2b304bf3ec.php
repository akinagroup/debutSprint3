<?php

/* AkinaImmobilierBundle:Admin:add.html.twig */
class __TwigTemplate_95074a09eaa5fdb1c785269f68732a59aee2a2ca3f487b77ff2e18217ba5bca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:add.html.twig", 1);
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
        $__internal_9422b2e1f486226f50d3e1d442ab0430f82377adec28a17945caf63b6cb41b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9422b2e1f486226f50d3e1d442ab0430f82377adec28a17945caf63b6cb41b75->enter($__internal_9422b2e1f486226f50d3e1d442ab0430f82377adec28a17945caf63b6cb41b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $__internal_ee636c87b51659f0de29e1553a895f0ed87a2754b61a3fd0f95e72959f6fbd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee636c87b51659f0de29e1553a895f0ed87a2754b61a3fd0f95e72959f6fbd31->enter($__internal_ee636c87b51659f0de29e1553a895f0ed87a2754b61a3fd0f95e72959f6fbd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9422b2e1f486226f50d3e1d442ab0430f82377adec28a17945caf63b6cb41b75->leave($__internal_9422b2e1f486226f50d3e1d442ab0430f82377adec28a17945caf63b6cb41b75_prof);

        
        $__internal_ee636c87b51659f0de29e1553a895f0ed87a2754b61a3fd0f95e72959f6fbd31->leave($__internal_ee636c87b51659f0de29e1553a895f0ed87a2754b61a3fd0f95e72959f6fbd31_prof);

    }

    // line 2
    public function block_upload($context, array $blocks = array())
    {
        $__internal_9665fb238ecf3944f9b926f845dd273d2a97cbf1779e8cd47caff049c37e70ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9665fb238ecf3944f9b926f845dd273d2a97cbf1779e8cd47caff049c37e70ce->enter($__internal_9665fb238ecf3944f9b926f845dd273d2a97cbf1779e8cd47caff049c37e70ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_2bd871a184a881549e7055b3a32246206fa5e495580bc07ccf3a73901f861cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd871a184a881549e7055b3a32246206fa5e495580bc07ccf3a73901f861cf8->enter($__internal_2bd871a184a881549e7055b3a32246206fa5e495580bc07ccf3a73901f861cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 3
        echo "
        <!-- Dropzone css -->
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">






  <div class=\"col-lg-11\">
                    <div class=\"card\">
                     <form action=\"\" method=\"post\" class=\"form\" id=\"form\" >
                      <div class=\"card-header\">

<h1>Ajout de bien avec ses photos</h1>
                      </div>

                      <div class=\"card-body \">

  <form method=\"POst\">
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">


            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><h4>Infos du proprietaire</h4></td><td>
 </td></tr>
    <tr><td><strong>Nom    </strong></td><td><input type=\"text\" class=\"form-control\"   aria-describedby=\"emailHelp\"
> </td></tr>
   <tr><td><strong>prenom       </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
    <tr><td><strong>CNI         </strong></td><td><input type=\"number\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
    <tr><td><strong>Addresse            </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
       <tr><td><strong>email         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
<tr><td><strong>code bancaire        </strong></td><td><input type=\"number\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
<tr><td><h4>Infos du bien</h4></td><td>
 </td></tr>
     <tr><td><strong>Nom localité         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
     <tr><td><strong>Nom Bien         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
     <tr><td><strong>Prix         </strong></td><td><input type=\"number\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
 <tr><td><strong>NomType         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
</td></tr>
     <tr><td><strong>Adresse         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
     <tr><td><strong>Description         </strong></td><td><input type=\"textarea\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>

<div class=\"form-right-group\">
</td></tr>

</td></tr>


  </div>
  </div>
  </td></tr>
<tr><td> ";
        // line 68
        echo "<strong id=\"in\">Insérer ici des images

</strong>
            </td> <td>
            ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'form');
        echo "
   <div class=\"row\" >
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\" class=\"dropzone\" id=\"dropzone\" >
                                      <div class=\"fallback\" id=\"photos\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>


      ";
        // line 88
        echo "


</td></tr>

            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" />
        </td></tr>


        </table>
        </div>
</form>


                      </div>


 </form>


                    </div>




        </div>
         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script>
\$('#dropzone').change(function() {
    console.log(\"changer\");


    /*  \$(\"#preview\").each(function(e) {
        this.remove();
    });
    var file = \$(this);
    var reader = new FileReader;
    reader.onload = function(event) {
        var img = new Image();
        img.onload = function() {
            var width = 140;
            var height = 90
            var canvas = \$('<canvas id=\"preview\"></canvas>').attr({ width: width, height: height });
            file.after(canvas);
            var context = canvas[0].getContext('2d');
            context.drawImage(img, 0, 0, width, height);
        };
        img.src = event.target.result;
    };
    reader.readAsDataURL(file[0].files[1]);
*/
});

</script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_2bd871a184a881549e7055b3a32246206fa5e495580bc07ccf3a73901f861cf8->leave($__internal_2bd871a184a881549e7055b3a32246206fa5e495580bc07ccf3a73901f861cf8_prof);

        
        $__internal_9665fb238ecf3944f9b926f845dd273d2a97cbf1779e8cd47caff049c37e70ce->leave($__internal_9665fb238ecf3944f9b926f845dd273d2a97cbf1779e8cd47caff049c37e70ce_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 161,  247 => 158,  216 => 130,  212 => 129,  208 => 128,  204 => 127,  200 => 126,  196 => 125,  192 => 124,  188 => 123,  184 => 122,  180 => 121,  176 => 120,  142 => 88,  124 => 72,  118 => 68,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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

        <!-- Dropzone css -->
        <link href=\"{{asset('java/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">






  <div class=\"col-lg-11\">
                    <div class=\"card\">
                     <form action=\"\" method=\"post\" class=\"form\" id=\"form\" >
                      <div class=\"card-header\">

<h1>Ajout de bien avec ses photos</h1>
                      </div>

                      <div class=\"card-body \">

  <form method=\"POst\">
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">


            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><h4>Infos du proprietaire</h4></td><td>
 </td></tr>
    <tr><td><strong>Nom    </strong></td><td><input type=\"text\" class=\"form-control\"   aria-describedby=\"emailHelp\"
> </td></tr>
   <tr><td><strong>prenom       </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
    <tr><td><strong>CNI         </strong></td><td><input type=\"number\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
    <tr><td><strong>Addresse            </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
       <tr><td><strong>email         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
<tr><td><strong>code bancaire        </strong></td><td><input type=\"number\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
<tr><td><h4>Infos du bien</h4></td><td>
 </td></tr>
     <tr><td><strong>Nom localité         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
     <tr><td><strong>Nom Bien         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
     <tr><td><strong>Prix         </strong></td><td><input type=\"number\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
 <tr><td><strong>NomType         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
</td></tr>
     <tr><td><strong>Adresse         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>
     <tr><td><strong>Description         </strong></td><td><input type=\"textarea\" class=\"form-control\"  aria-describedby=\"emailHelp\"
> </td></tr>

<div class=\"form-right-group\">
</td></tr>

</td></tr>


  </div>
  </div>
  </td></tr>
<tr><td> {# Génération du label. #}
<strong id=\"in\">Insérer ici des images

</strong>
            </td> <td>
            {{ form(formI)}}
   <div class=\"row\" >
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\" class=\"dropzone\" id=\"dropzone\" >
                                      <div class=\"fallback\" id=\"photos\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>


      {# Génération de l'input. #}



</td></tr>

            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" />
        </td></tr>


        </table>
        </div>
</form>


                      </div>


 </form>


                    </div>




        </div>
         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{asset('java/js/modernizr.min.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('java/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('java/js/detect.js')}}\"></script>
        <script src=\"{{asset('java/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('java/js/waves.js')}}\"></script>
        <script src=\"{{asset('java/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.scrollTo.min.js')}}\"></script>
<script>
\$('#dropzone').change(function() {
    console.log(\"changer\");


    /*  \$(\"#preview\").each(function(e) {
        this.remove();
    });
    var file = \$(this);
    var reader = new FileReader;
    reader.onload = function(event) {
        var img = new Image();
        img.onload = function() {
            var width = 140;
            var height = 90
            var canvas = \$('<canvas id=\"preview\"></canvas>').attr({ width: width, height: height });
            file.after(canvas);
            var context = canvas[0].getContext('2d');
            context.drawImage(img, 0, 0, width, height);
        };
        img.src = event.target.result;
    };
    reader.readAsDataURL(file[0].files[1]);
*/
});

</script>
        <script src=\"{{asset('java/js/jquery.app.js')}}\"></script>

        <!-- Page Specific JS Libraries -->
        <script src=\"{{asset('java/plugins/dropzone/dist/dropzone.js')}}\"></script>


{% endblock %}

", "AkinaImmobilierBundle:Admin:add.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/add.html.twig");
    }
}
