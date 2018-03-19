<?php

/* ::base.html.twig */
class __TwigTemplate_e287f19d80059437675c67184ca36c2fd582ca5c7ef9ca5fe5be5ff8a5f3a9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eccd9b15381672816b6d1a66499d85190f4454f4600dfa29b8ad8f1e4f32d4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccd9b15381672816b6d1a66499d85190f4454f4600dfa29b8ad8f1e4f32d4dc->enter($__internal_eccd9b15381672816b6d1a66499d85190f4454f4600dfa29b8ad8f1e4f32d4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_93b5d2124fc07a83ae3463a613b23624e178d63dc2480077f3ec3b454c9fd322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b5d2124fc07a83ae3463a613b23624e178d63dc2480077f3ec3b454c9fd322->enter($__internal_93b5d2124fc07a83ae3463a613b23624e178d63dc2480077f3ec3b454c9fd322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    </head>
    <body>
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "



        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>

";
        
        $__internal_eccd9b15381672816b6d1a66499d85190f4454f4600dfa29b8ad8f1e4f32d4dc->leave($__internal_eccd9b15381672816b6d1a66499d85190f4454f4600dfa29b8ad8f1e4f32d4dc_prof);

        
        $__internal_93b5d2124fc07a83ae3463a613b23624e178d63dc2480077f3ec3b454c9fd322->leave($__internal_93b5d2124fc07a83ae3463a613b23624e178d63dc2480077f3ec3b454c9fd322_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_65f4ebb52e6199c1b90456fb64a6f3fbefd4e1997bc0625082edf00f270c892c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f4ebb52e6199c1b90456fb64a6f3fbefd4e1997bc0625082edf00f270c892c->enter($__internal_65f4ebb52e6199c1b90456fb64a6f3fbefd4e1997bc0625082edf00f270c892c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b91935fe0e44c37751585c75e23665a53da2848d44f18c51430ea2bd3f00a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b91935fe0e44c37751585c75e23665a53da2848d44f18c51430ea2bd3f00a87->enter($__internal_4b91935fe0e44c37751585c75e23665a53da2848d44f18c51430ea2bd3f00a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome! ";
        
        $__internal_4b91935fe0e44c37751585c75e23665a53da2848d44f18c51430ea2bd3f00a87->leave($__internal_4b91935fe0e44c37751585c75e23665a53da2848d44f18c51430ea2bd3f00a87_prof);

        
        $__internal_65f4ebb52e6199c1b90456fb64a6f3fbefd4e1997bc0625082edf00f270c892c->leave($__internal_65f4ebb52e6199c1b90456fb64a6f3fbefd4e1997bc0625082edf00f270c892c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdcbe47c0ab34834eb2636b69446f433736d1f5092b7075ace02a1b66e86e8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcbe47c0ab34834eb2636b69446f433736d1f5092b7075ace02a1b66e86e8d4->enter($__internal_fdcbe47c0ab34834eb2636b69446f433736d1f5092b7075ace02a1b66e86e8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fcc79f14f824fb035ba6d99dbed608b80c18e4ab92d51faa8342c95cdfa7879e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc79f14f824fb035ba6d99dbed608b80c18e4ab92d51faa8342c95cdfa7879e->enter($__internal_fcc79f14f824fb035ba6d99dbed608b80c18e4ab92d51faa8342c95cdfa7879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <style>

.fa-angle-right{

    float:right;

}
</style>
   <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Customize styles -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- font awesome styles -->
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!--[if IE 7]>
\t\t\t<link href=\"css/font-awesome-ie7.min.css\" rel=\"stylesheet\">
\t\t<![endif]-->

\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->

\t<!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/ico/favicon.ico"), "html", null, true);
        echo "\">
 
<!-- 
\tUpper Header Section 
-->      ";
        
        $__internal_fcc79f14f824fb035ba6d99dbed608b80c18e4ab92d51faa8342c95cdfa7879e->leave($__internal_fcc79f14f824fb035ba6d99dbed608b80c18e4ab92d51faa8342c95cdfa7879e_prof);

        
        $__internal_fdcbe47c0ab34834eb2636b69446f433736d1f5092b7075ace02a1b66e86e8d4->leave($__internal_fdcbe47c0ab34834eb2636b69446f433736d1f5092b7075ace02a1b66e86e8d4_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_d73a64d50ae09e0b5b28a36ccdab39ee6b862ee1e59e7b889940976c6a072371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73a64d50ae09e0b5b28a36ccdab39ee6b862ee1e59e7b889940976c6a072371->enter($__internal_d73a64d50ae09e0b5b28a36ccdab39ee6b862ee1e59e7b889940976c6a072371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4f7789fdfa742348cddc67ad113bb57d292a4a3fc5abcbdfb72a423bbe954a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f7789fdfa742348cddc67ad113bb57d292a4a3fc5abcbdfb72a423bbe954a8->enter($__internal_e4f7789fdfa742348cddc67ad113bb57d292a4a3fc5abcbdfb72a423bbe954a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4f7789fdfa742348cddc67ad113bb57d292a4a3fc5abcbdfb72a423bbe954a8->leave($__internal_e4f7789fdfa742348cddc67ad113bb57d292a4a3fc5abcbdfb72a423bbe954a8_prof);

        
        $__internal_d73a64d50ae09e0b5b28a36ccdab39ee6b862ee1e59e7b889940976c6a072371->leave($__internal_d73a64d50ae09e0b5b28a36ccdab39ee6b862ee1e59e7b889940976c6a072371_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9919424dedf4bc2a3e97fd63c66d59857a8e03d6f3ffb88effba2158a3ede175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9919424dedf4bc2a3e97fd63c66d59857a8e03d6f3ffb88effba2158a3ede175->enter($__internal_9919424dedf4bc2a3e97fd63c66d59857a8e03d6f3ffb88effba2158a3ede175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_531c16bbf93ab7824ea1676b6b5ef3429e5fabc3cef42b81186955889210a90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531c16bbf93ab7824ea1676b6b5ef3429e5fabc3cef42b81186955889210a90f->enter($__internal_531c16bbf93ab7824ea1676b6b5ef3429e5fabc3cef42b81186955889210a90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>

  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/FrontJs.js"), "html", null, true);
        echo "\"></script>


  <script>
  \$( function() {
    var tabs = \$( \"#tabs\" ).tabs();
    tabs.find( \".ui-tabs-nav\" ).sortable({
      axis: \"x\",
      stop: function() {
        tabs.tabs( \"refresh\" );
      }
    });
  } );


  // Ici, le DOM est entièrement défini



 </script>
  <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/js/jquery.easing-1.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/js/jquery.scrollTo-1.4.3.1-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/js/shop.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_531c16bbf93ab7824ea1676b6b5ef3429e5fabc3cef42b81186955889210a90f->leave($__internal_531c16bbf93ab7824ea1676b6b5ef3429e5fabc3cef42b81186955889210a90f_prof);

        
        $__internal_9919424dedf4bc2a3e97fd63c66d59857a8e03d6f3ffb88effba2158a3ede175->leave($__internal_9919424dedf4bc2a3e97fd63c66d59857a8e03d6f3ffb88effba2158a3ede175_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 75,  218 => 74,  214 => 73,  210 => 72,  206 => 71,  182 => 50,  178 => 49,  170 => 43,  161 => 42,  144 => 37,  129 => 30,  116 => 20,  111 => 18,  106 => 16,  96 => 8,  87 => 7,  69 => 6,  56 => 78,  54 => 42,  48 => 38,  46 => 37,  42 => 35,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\" />
        <title>{% block title %} Welcome! {% endblock %}</title>
        {% block stylesheets %}
        <style>

.fa-angle-right{

    float:right;

}
</style>
   <link href=\"{{ asset('shop/assets/css/bootstrap.css') }}\" rel=\"stylesheet\"/>
    <!-- Customize styles -->
    <link href=\"{{ asset('shop/style.css') }}\" rel=\"stylesheet\"/>
    <!-- font awesome styles -->
\t<link href=\"{{ asset('shop/assets/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\">
\t\t<!--[if IE 7]>
\t\t\t<link href=\"css/font-awesome-ie7.min.css\" rel=\"stylesheet\">
\t\t<![endif]-->

\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->

\t<!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"{{ asset('shop/assets/ico/favicon.ico') }}\">
 
<!-- 
\tUpper Header Section 
-->      {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}




        {% block javascripts %}

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>

  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/FrontJs.js') }}\"></script>


  <script>
  \$( function() {
    var tabs = \$( \"#tabs\" ).tabs();
    tabs.find( \".ui-tabs-nav\" ).sortable({
      axis: \"x\",
      stop: function() {
        tabs.tabs( \"refresh\" );
      }
    });
  } );


  // Ici, le DOM est entièrement défini



 </script>
  <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"{{ asset('shop/assets/js/jquery.js') }}\"></script>
\t<script src=\"{{ asset('shop/assets/js/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('shop/assets/js/jquery.easing-1.3.min.js') }}\"></script>
    <script src=\"{{ asset('shop/assets/js/jquery.scrollTo-1.4.3.1-min.js') }}\"></script>
    <script src=\"{{ asset('shop/assets/js/shop.js') }}\"></script>

        {% endblock %}
    </body>
</html>

", "::base.html.twig", "/var/www/html/GroupJoob/app/Resources/views/base.html.twig");
    }
}
