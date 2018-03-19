<?php

/* AkinaImmobilierBundle:Front:detail.html.twig */
class __TwigTemplate_c866c6d25710812355e9233be0a1098c1fe106c7d1861d26957e903e99f95c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout1.html.twig", "AkinaImmobilierBundle:Front:detail.html.twig", 1);
        $this->blocks = array(
            'article' => array($this, 'block_article'),
            'carousel' => array($this, 'block_carousel'),
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb2e8abae768a43522e6648c8e4e6e80098414a58198403436a1590397ff4da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2e8abae768a43522e6648c8e4e6e80098414a58198403436a1590397ff4da0->enter($__internal_eb2e8abae768a43522e6648c8e4e6e80098414a58198403436a1590397ff4da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:detail.html.twig"));

        $__internal_c5b34bfd8dd3ac68a5546a3ee4371cfd950c55171ef9fcfa629b1feefad1b8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b34bfd8dd3ac68a5546a3ee4371cfd950c55171ef9fcfa629b1feefad1b8a1->enter($__internal_c5b34bfd8dd3ac68a5546a3ee4371cfd950c55171ef9fcfa629b1feefad1b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2e8abae768a43522e6648c8e4e6e80098414a58198403436a1590397ff4da0->leave($__internal_eb2e8abae768a43522e6648c8e4e6e80098414a58198403436a1590397ff4da0_prof);

        
        $__internal_c5b34bfd8dd3ac68a5546a3ee4371cfd950c55171ef9fcfa629b1feefad1b8a1->leave($__internal_c5b34bfd8dd3ac68a5546a3ee4371cfd950c55171ef9fcfa629b1feefad1b8a1_prof);

    }

    // line 2
    public function block_article($context, array $blocks = array())
    {
        $__internal_5fcd0bbe4532ccae65b55161f6decbfe4808676b339ba40c49bd8f10d472ff3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcd0bbe4532ccae65b55161f6decbfe4808676b339ba40c49bd8f10d472ff3e->enter($__internal_5fcd0bbe4532ccae65b55161f6decbfe4808676b339ba40c49bd8f10d472ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_a7f7510c96405e405a214ae3120cdb6fadf606ba9db8945d25d1b591674ee127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f7510c96405e405a214ae3120cdb6fadf606ba9db8945d25d1b591674ee127->enter($__internal_a7f7510c96405e405a214ae3120cdb6fadf606ba9db8945d25d1b591674ee127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 3
        echo "  ";
        $this->displayBlock('carousel', $context, $blocks);
        // line 6
        echo " <div class=\"well well-small\">

\t\t  <div class=\"row-fluid\">

    ";
        // line 10
        $this->displayBlock('catalogue', $context, $blocks);
        // line 85
        echo "
\t</div>
\t</div>
           ";
        
        $__internal_a7f7510c96405e405a214ae3120cdb6fadf606ba9db8945d25d1b591674ee127->leave($__internal_a7f7510c96405e405a214ae3120cdb6fadf606ba9db8945d25d1b591674ee127_prof);

        
        $__internal_5fcd0bbe4532ccae65b55161f6decbfe4808676b339ba40c49bd8f10d472ff3e->leave($__internal_5fcd0bbe4532ccae65b55161f6decbfe4808676b339ba40c49bd8f10d472ff3e_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_c6492657cee368bdbb7e96cce1e84facf28a9d3712d5fcb504cdbd08e46cfe9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6492657cee368bdbb7e96cce1e84facf28a9d3712d5fcb504cdbd08e46cfe9c->enter($__internal_c6492657cee368bdbb7e96cce1e84facf28a9d3712d5fcb504cdbd08e46cfe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_18eabb5ea88aa1d83bd46a8ae4848f435c229bd4737b6e2a6fe1a756f63987ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18eabb5ea88aa1d83bd46a8ae4848f435c229bd4737b6e2a6fe1a756f63987ef->enter($__internal_18eabb5ea88aa1d83bd46a8ae4848f435c229bd4737b6e2a6fe1a756f63987ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        // line 4
        echo "
        ";
        
        $__internal_18eabb5ea88aa1d83bd46a8ae4848f435c229bd4737b6e2a6fe1a756f63987ef->leave($__internal_18eabb5ea88aa1d83bd46a8ae4848f435c229bd4737b6e2a6fe1a756f63987ef_prof);

        
        $__internal_c6492657cee368bdbb7e96cce1e84facf28a9d3712d5fcb504cdbd08e46cfe9c->leave($__internal_c6492657cee368bdbb7e96cce1e84facf28a9d3712d5fcb504cdbd08e46cfe9c_prof);

    }

    // line 10
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_d1ba8510d71c4215db72a098b6b628c5ab90bbbf891e5f630a6f912c5fd125ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ba8510d71c4215db72a098b6b628c5ab90bbbf891e5f630a6f912c5fd125ef->enter($__internal_d1ba8510d71c4215db72a098b6b628c5ab90bbbf891e5f630a6f912c5fd125ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_b5f3a41028825fdf4e291cd90479b64d50b9f2c6ce1f8d3b9e9f6e69419522f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f3a41028825fdf4e291cd90479b64d50b9f2c6ce1f8d3b9e9f6e69419522f2->enter($__internal_b5f3a41028825fdf4e291cd90479b64d50b9f2c6ce1f8d3b9e9f6e69419522f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 11
        echo "
  <div class=\"row\" >
    <div class=\"span6\">
\t\t<div id=\"myCarousel\" class=\"carousel slide homCar\">
            <div class=\"carousel-inner\">
\t\t\t ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 17
            echo "\t\t\t  <div class=\"item\">
                <img style=\"width:100%\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["reserve"], "image", array()))), "html", null, true);
            echo "\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["reserve"], "image", array()))), "html", null, true);
            echo "\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["reserve"], "image", array()))), "html", null, true);
            echo "\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["reserve"], "image", array()))), "html", null, true);
            echo "\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
            </div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
          </div>
\t\t  </div>
\t\t   ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 54
            echo "<div class=\"span6\">

                <table class=\"table\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "biens", array()), "nomBien", array()), "html", null, true);
            echo "        </span>     </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "biens", array()), "prix", array()), "html", null, true);
            echo "              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "biens", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo " </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "biens", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "     </span>   </td></tr>
 <tr><td><strong>Description    </strong></td><td><span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "biens", array()), "description", array()), "html", null, true);
            echo "        </span> </td></tr>


  </table>










</div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</div>



\t";
        
        $__internal_b5f3a41028825fdf4e291cd90479b64d50b9f2c6ce1f8d3b9e9f6e69419522f2->leave($__internal_b5f3a41028825fdf4e291cd90479b64d50b9f2c6ce1f8d3b9e9f6e69419522f2_prof);

        
        $__internal_d1ba8510d71c4215db72a098b6b628c5ab90bbbf891e5f630a6f912c5fd125ef->leave($__internal_d1ba8510d71c4215db72a098b6b628c5ab90bbbf891e5f630a6f912c5fd125ef_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 80,  197 => 63,  193 => 62,  189 => 61,  184 => 59,  180 => 58,  174 => 54,  170 => 53,  162 => 47,  148 => 39,  138 => 32,  128 => 25,  118 => 18,  115 => 17,  111 => 16,  104 => 11,  95 => 10,  84 => 4,  75 => 3,  62 => 85,  60 => 10,  54 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
 {% block article %}
  {% block carousel %}

        {% endblock %}
 <div class=\"well well-small\">

\t\t  <div class=\"row-fluid\">

    {% block catalogue %}

  <div class=\"row\" >
    <div class=\"span6\">
\t\t<div id=\"myCarousel\" class=\"carousel slide homCar\">
            <div class=\"carousel-inner\">
\t\t\t {% for reserve in detail %}
\t\t\t  <div class=\"item\">
                <img style=\"width:100%\" src=\"{{ asset('uploads/images/' ~ reserve.image) }}\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"{{ asset('uploads/images/' ~ reserve.image) }}\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"{{ asset('uploads/images/' ~ reserve.image) }}\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"{{ asset('uploads/images/' ~ reserve.image) }}\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>

 {% endfor %}

            </div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
          </div>
\t\t  </div>
\t\t   {% for reserve in detail %}
<div class=\"span6\">

                <table class=\"table\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>{{reserve.biens.nomBien }}        </span>     </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>{{reserve.biens.prix }}              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>{{reserve.biens.Localite.libelle }} </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> {{reserve.biens.Type.libelle }}     </span>   </td></tr>
 <tr><td><strong>Description    </strong></td><td><span>{{reserve.biens.description }}        </span> </td></tr>


  </table>










</div>

 {% endfor %}
</div>



\t{% endblock %}

\t</div>
\t</div>
           {% endblock %}
", "AkinaImmobilierBundle:Front:detail.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/detail.html.twig");
    }
}
