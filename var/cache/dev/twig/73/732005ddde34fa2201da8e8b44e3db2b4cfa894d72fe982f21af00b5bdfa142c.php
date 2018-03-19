<?php

/* ::Layout/layout1.html.twig */
class __TwigTemplate_0d82761b3aa6fa4d076a1bb223051ab68a0f3be8868012fccd23177d2fc83280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::Layout/layout1.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'type' => array($this, 'block_type'),
            'article' => array($this, 'block_article'),
            'form' => array($this, 'block_form'),
            'carousel' => array($this, 'block_carousel'),
            'new' => array($this, 'block_new'),
            'catalogue' => array($this, 'block_catalogue'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d69fe4176540c1b8dab77c29360b987994f48d6e20e380c1d0aa692cc4bce81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69fe4176540c1b8dab77c29360b987994f48d6e20e380c1d0aa692cc4bce81c->enter($__internal_d69fe4176540c1b8dab77c29360b987994f48d6e20e380c1d0aa692cc4bce81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout/layout1.html.twig"));

        $__internal_584563b2013d65e547697fc6e3babeb83003188c64a69db169d4befa849f5787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584563b2013d65e547697fc6e3babeb83003188c64a69db169d4befa849f5787->enter($__internal_584563b2013d65e547697fc6e3babeb83003188c64a69db169d4befa849f5787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout/layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69fe4176540c1b8dab77c29360b987994f48d6e20e380c1d0aa692cc4bce81c->leave($__internal_d69fe4176540c1b8dab77c29360b987994f48d6e20e380c1d0aa692cc4bce81c_prof);

        
        $__internal_584563b2013d65e547697fc6e3babeb83003188c64a69db169d4befa849f5787->leave($__internal_584563b2013d65e547697fc6e3babeb83003188c64a69db169d4befa849f5787_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e506ae0b83c55d4fa19fd87155a4ffa28feaddef681c3df59c5ad507995499bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e506ae0b83c55d4fa19fd87155a4ffa28feaddef681c3df59c5ad507995499bc->enter($__internal_e506ae0b83c55d4fa19fd87155a4ffa28feaddef681c3df59c5ad507995499bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e2a88114d4be0a2a995e1bceb31ff2fe747ff1584393874f48c428f20504752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2a88114d4be0a2a995e1bceb31ff2fe747ff1584393874f48c428f20504752->enter($__internal_7e2a88114d4be0a2a995e1bceb31ff2fe747ff1584393874f48c428f20504752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



           <!-- Bootstrap styles -->

 ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 52
        echo "
<!--
Lower Header Section
-->
<div class=\"container\">
 ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 82
        echo "
<!--
Navigation Bar Section
-->
";
        // line 86
        $this->displayBlock('type', $context, $blocks);
        // line 109
        echo "<!--
Body Section
-->
";
        // line 112
        $this->displayBlock('article', $context, $blocks);
        // line 265
        $this->displayBlock('footer', $context, $blocks);
        // line 300
        echo "</div><!-- /container -->

<div class=\"copyright\">
<div class=\"container\">
\t<p class=\"pull-right\">
\t\t<a href=\"#\"><img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/img/maestro.png\" alt=\"payment"), "html", null, true);
        echo "\"></a>
\t\t<a href=\"#\"><img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/img/mc.png"), "html", null, true);
        echo "\" alt=\"payment\"></a>
\t\t<a href=\"#\"><img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/img/pp.png"), "html", null, true);
        echo "\" alt=\"payment\"></a>
\t\t<a href=\"#\"><img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/img/visa.png"), "html", null, true);
        echo "\" alt=\"payment\"></a>
\t\t<a href=\"#\"><img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("shop/assets/img/disc.png"), "html", null, true);
        echo "\" alt=\"payment\"></a>
\t</p>
\t<span>Copyright &copy; 2018<br> AKINA GROUP</span>
</div>
</div>
<a href=\"#\" class=\"gotop\"><i class=\"icon-double-angle-up\"></i></a>
   ";
        
        $__internal_7e2a88114d4be0a2a995e1bceb31ff2fe747ff1584393874f48c428f20504752->leave($__internal_7e2a88114d4be0a2a995e1bceb31ff2fe747ff1584393874f48c428f20504752_prof);

        
        $__internal_e506ae0b83c55d4fa19fd87155a4ffa28feaddef681c3df59c5ad507995499bc->leave($__internal_e506ae0b83c55d4fa19fd87155a4ffa28feaddef681c3df59c5ad507995499bc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c000bd53e2a83bc7e376c9fe88e25267a8bf38f029ec1ddcc25881b5d5dda67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c000bd53e2a83bc7e376c9fe88e25267a8bf38f029ec1ddcc25881b5d5dda67->enter($__internal_2c000bd53e2a83bc7e376c9fe88e25267a8bf38f029ec1ddcc25881b5d5dda67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_300ccc77f08a0e1a662fb54c95cf00475f755247dd317256f85ad3f74dec40c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300ccc77f08a0e1a662fb54c95cf00475f755247dd317256f85ad3f74dec40c4->enter($__internal_300ccc77f08a0e1a662fb54c95cf00475f755247dd317256f85ad3f74dec40c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "

<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t<div class=\"topNav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"alignR\">
\t\t\t\t<div class=\"pull-left socialNw\">
\t\t\t\t\t<a href=\"#\"><span class=\"icon-twitter\"></span></a>
\t\t\t\t\t<a href=\"#\"><span class=\"icon-facebook\"></span></a>
\t\t\t\t\t<a href=\"#\"><span class=\"icon-youtube\"></span></a>
\t\t\t\t\t<a href=\"#\"><span class=\"icon-tumblr\"></span></a>
\t\t\t\t</div>
\t\t\t\t<a class=\"active\" href=\"index.html\"> <span class=\"icon-home\"></span> Accueil </a>

\t\t\t\t<a href=\"register.html\"><span class=\"icon-edit\"></span> Enregistrer ici vos biens </a>
\t\t\t\t<a href=\"contact.html\"><span class=\"icon-envelope\"></span> Contactez-nous</a>
<ul class=\"nav pull-right\">
\t\t\t<li class=\"dropdown\">
\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"icon-user\"></span> Mon Compte<b class=\"caret\"></b></a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t<form class=\"form-horizontal loginFrm\">
\t\t\t\t  <div class=\"control-group\">
\t\t\t\t\t<input type=\"text\" class=\"span2\" id=\"inputEmail\" placeholder=\"Email\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"control-group\">
\t\t\t\t\t<input type=\"password\" class=\"span2\" id=\"inputPassword\" placeholder=\"Password\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"control-group\">
\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t<input type=\"checkbox\"> Remember me
\t\t\t\t\t</label>
\t\t\t\t\t<button type=\"submit\" class=\"shopBtn btn-block\">Sign in</button>
\t\t\t\t  </div>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t</ul>\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_300ccc77f08a0e1a662fb54c95cf00475f755247dd317256f85ad3f74dec40c4->leave($__internal_300ccc77f08a0e1a662fb54c95cf00475f755247dd317256f85ad3f74dec40c4_prof);

        
        $__internal_2c000bd53e2a83bc7e376c9fe88e25267a8bf38f029ec1ddcc25881b5d5dda67->leave($__internal_2c000bd53e2a83bc7e376c9fe88e25267a8bf38f029ec1ddcc25881b5d5dda67_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_d4bc4a78fa844b9cfb708a3cc933ef678773a81e7bd0624ed4ef0d96c364b54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bc4a78fa844b9cfb708a3cc933ef678773a81e7bd0624ed4ef0d96c364b54c->enter($__internal_d4bc4a78fa844b9cfb708a3cc933ef678773a81e7bd0624ed4ef0d96c364b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_144175cc5dd3d8db078080a875c95cc829671f254129e703bac1d4fb08ec127d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144175cc5dd3d8db078080a875c95cc829671f254129e703bac1d4fb08ec127d->enter($__internal_144175cc5dd3d8db078080a875c95cc829671f254129e703bac1d4fb08ec127d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "<div id=\"gototop\"> </div>

<header id=\"header\">
<div class=\"row\">
\t<div class=\"span4\">
\t<h1>
\t<a class=\"logo\" href=\"index.html\"><span>Twitter Bootstrap ecommerce template</span>
\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" style=\"width:60px\" alt=\"bootstrap sexy shop\">
\t</a>
\t</h1>
\t</div>
\t<div class=\"span4\">

\t</div>
\t<div class=\"span4 alignR\">
\t<p><br> <strong> Remplissez votre pannier de souhait </strong><br><br></p>
\t<span class=\"btn btn-mini\">[ 2 ] <span class=\"icon-shopping-cart\"></span></span>
\t<span class=\"btn btn-warning btn-mini\">\$</span>
\t<span class=\"btn btn-mini\">&pound;</span>
\t<span class=\"btn btn-mini\">&euro;</span>
\t</div>
</div>
</header>
";
        
        $__internal_144175cc5dd3d8db078080a875c95cc829671f254129e703bac1d4fb08ec127d->leave($__internal_144175cc5dd3d8db078080a875c95cc829671f254129e703bac1d4fb08ec127d_prof);

        
        $__internal_d4bc4a78fa844b9cfb708a3cc933ef678773a81e7bd0624ed4ef0d96c364b54c->leave($__internal_d4bc4a78fa844b9cfb708a3cc933ef678773a81e7bd0624ed4ef0d96c364b54c_prof);

    }

    // line 86
    public function block_type($context, array $blocks = array())
    {
        $__internal_db7dcdfc790751beae0b18ddca8705f41909f8be2fc79a06140c063f383d4ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7dcdfc790751beae0b18ddca8705f41909f8be2fc79a06140c063f383d4ac2->enter($__internal_db7dcdfc790751beae0b18ddca8705f41909f8be2fc79a06140c063f383d4ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type"));

        $__internal_3430fee46f552ad6ac099b6bebafc9a09498802f2fb4abe9ad2feafa1987bb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3430fee46f552ad6ac099b6bebafc9a09498802f2fb4abe9ad2feafa1987bb7f->enter($__internal_3430fee46f552ad6ac099b6bebafc9a09498802f2fb4abe9ad2feafa1987bb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type"));

        // line 87
        echo "<div class=\"navbar\">
\t  <div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t  <a data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\">
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t  </a>
\t\t  <div class=\"nav-collapse\">
\t\t\t<ul class=\"nav\">
\t\t\t  <li class=\"active\"><a href=\"index.html\">Accueil\t</a></li>
\t\t\t  <li class=\"\"><a href=\"list-view.html\">Liste</a></li>
\t\t\t  <li class=\"\"><a href=\"grid-view.html\">Grille</a></li>
\t\t\t  <li class=\"\"><a href=\"three-col.html\">Colonne</a></li>
\t\t\t</ul>


\t\t  </div>
\t\t</div>
\t</div>
</div>
    ";
        
        $__internal_3430fee46f552ad6ac099b6bebafc9a09498802f2fb4abe9ad2feafa1987bb7f->leave($__internal_3430fee46f552ad6ac099b6bebafc9a09498802f2fb4abe9ad2feafa1987bb7f_prof);

        
        $__internal_db7dcdfc790751beae0b18ddca8705f41909f8be2fc79a06140c063f383d4ac2->leave($__internal_db7dcdfc790751beae0b18ddca8705f41909f8be2fc79a06140c063f383d4ac2_prof);

    }

    // line 112
    public function block_article($context, array $blocks = array())
    {
        $__internal_ba656283bdf990b1091a10271588d0463b9b4d3293a8c0025d6e994e67fbe815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba656283bdf990b1091a10271588d0463b9b4d3293a8c0025d6e994e67fbe815->enter($__internal_ba656283bdf990b1091a10271588d0463b9b4d3293a8c0025d6e994e67fbe815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_7baa5315be85552fbc272bd0b8d74f7db5fee4dadb5c26e97ce0f5bc612af612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baa5315be85552fbc272bd0b8d74f7db5fee4dadb5c26e97ce0f5bc612af612->enter($__internal_7baa5315be85552fbc272bd0b8d74f7db5fee4dadb5c26e97ce0f5bc612af612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 113
        echo "\t<div class=\"row\">
<div id=\"sidebar\" class=\"span4\">
<div class=\"well well-small\">
\t<ul class=\"nav nav-list\">
\t\t<li><a href=\"products.html\"><span class=\"icon-chevron-right\"></span>Recherchez ici un bien</a><hr/></li>
\t\t";
        // line 118
        $this->displayBlock('form', $context, $blocks);
        // line 119
        echo "        \t\t<li> <a class=\"totalInCart\" href=\"cart.html\"><strong>Total de  <span class=\"badge badge-warning pull-right\" style=\"line-height:18px;\"> + 2500 biens</span></strong></a></li>

        </ul>
</div>




\t</div>
\t<div class=\"span8\">
\t<div class=\"well np\">
    ";
        // line 130
        $this->displayBlock('carousel', $context, $blocks);
        // line 167
        echo "<!--
New Products
-->";
        // line 169
        $this->displayBlock('new', $context, $blocks);
        // line 243
        echo "\t<!--
\tFeatured Products
\t-->
    <div class=\"well well-small\">

\t\t   ";
        // line 248
        $this->displayBlock('catalogue', $context, $blocks);
        // line 256
        echo "
\t</div>
\t</div>
\t</div>
<!--
Clients
-->

";
        
        $__internal_7baa5315be85552fbc272bd0b8d74f7db5fee4dadb5c26e97ce0f5bc612af612->leave($__internal_7baa5315be85552fbc272bd0b8d74f7db5fee4dadb5c26e97ce0f5bc612af612_prof);

        
        $__internal_ba656283bdf990b1091a10271588d0463b9b4d3293a8c0025d6e994e67fbe815->leave($__internal_ba656283bdf990b1091a10271588d0463b9b4d3293a8c0025d6e994e67fbe815_prof);

    }

    // line 118
    public function block_form($context, array $blocks = array())
    {
        $__internal_eea98d25c7a2b5dab3224b3fe64ff4454529df5decdfa0416a393b92d0eef6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea98d25c7a2b5dab3224b3fe64ff4454529df5decdfa0416a393b92d0eef6bc->enter($__internal_eea98d25c7a2b5dab3224b3fe64ff4454529df5decdfa0416a393b92d0eef6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_b00e5d0206cd05024359779b3d3c2b89172aafef86bb5d75c51933d3fd9b6f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00e5d0206cd05024359779b3d3c2b89172aafef86bb5d75c51933d3fd9b6f59->enter($__internal_b00e5d0206cd05024359779b3d3c2b89172aafef86bb5d75c51933d3fd9b6f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_b00e5d0206cd05024359779b3d3c2b89172aafef86bb5d75c51933d3fd9b6f59->leave($__internal_b00e5d0206cd05024359779b3d3c2b89172aafef86bb5d75c51933d3fd9b6f59_prof);

        
        $__internal_eea98d25c7a2b5dab3224b3fe64ff4454529df5decdfa0416a393b92d0eef6bc->leave($__internal_eea98d25c7a2b5dab3224b3fe64ff4454529df5decdfa0416a393b92d0eef6bc_prof);

    }

    // line 130
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_42e76f2b51a9070476aa2a4bf1f79ead34d6b51870058dc5fdfaa95c8caa4099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e76f2b51a9070476aa2a4bf1f79ead34d6b51870058dc5fdfaa95c8caa4099->enter($__internal_42e76f2b51a9070476aa2a4bf1f79ead34d6b51870058dc5fdfaa95c8caa4099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_be6c18a35a22e613817d5de672eb652402f8fcc30ad1437650f9e7e3c9843c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6c18a35a22e613817d5de672eb652402f8fcc30ad1437650f9e7e3c9843c5d->enter($__internal_be6c18a35a22e613817d5de672eb652402f8fcc30ad1437650f9e7e3c9843c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        // line 131
        echo "\t\t<div id=\"myCarousel\" class=\"carousel slide homCar\">
            <div class=\"carousel-inner\">
\t\t\t  <div class=\"item\">
                <img style=\"width:100%\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/index3.jpg"), "html", null, true);
        echo "\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
\t\t\t  <div class=\"item\">
                <img style=\"width:100%\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Desain-Interior-Ekletik-VS-Modern-01.jpg"), "html", null, true);
        echo "\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap Ecommerce template</h4>
                      <p><span>Highly Google seo friendly</span></p>
                </div>
              </div>
\t\t\t  <div class=\"item active\">
                <img style=\"width:100%\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/architecte-maison-contemporaine.jpg"), "html", null, true);
        echo "\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Twitter Bootstrap cart</h4>
                      <p><span>Very easy to integrate and expand.</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/kucica-uz-more_uredjenje-doma-002.jpg"), "html", null, true);
        echo "\" alt=\"bootstrap templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap templates integration</h4>
                      <p><span>Compitable to many more opensource cart</span></p>
                </div>
              </div>
            </div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
          </div>
        </div>
        ";
        
        $__internal_be6c18a35a22e613817d5de672eb652402f8fcc30ad1437650f9e7e3c9843c5d->leave($__internal_be6c18a35a22e613817d5de672eb652402f8fcc30ad1437650f9e7e3c9843c5d_prof);

        
        $__internal_42e76f2b51a9070476aa2a4bf1f79ead34d6b51870058dc5fdfaa95c8caa4099->leave($__internal_42e76f2b51a9070476aa2a4bf1f79ead34d6b51870058dc5fdfaa95c8caa4099_prof);

    }

    // line 169
    public function block_new($context, array $blocks = array())
    {
        $__internal_2bf018bb921bdff1a18dc55c3d29e48ef0fc35bc2bdf24dcfcc0e6f90166f724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf018bb921bdff1a18dc55c3d29e48ef0fc35bc2bdf24dcfcc0e6f90166f724->enter($__internal_2bf018bb921bdff1a18dc55c3d29e48ef0fc35bc2bdf24dcfcc0e6f90166f724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new"));

        $__internal_010ed08b1106f76fbfbfef433c930d53619fcdb48fd8000a1bd986e2387bf800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010ed08b1106f76fbfbfef433c930d53619fcdb48fd8000a1bd986e2387bf800->enter($__internal_010ed08b1106f76fbfbfef433c930d53619fcdb48fd8000a1bd986e2387bf800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new"));

        // line 170
        echo "  <div class=\"well well-small\">
\t<h3> A LA UNE </h3>
\t<hr class=\"soften\"/>
\t\t<div class=\"row-fluid\">
\t\t<div id=\"newProductCar\" class=\"carousel slide\">
            <div class=\"carousel-inner\">
\t\t\t<div class=\"item active\">
\t\t\t  <ul class=\"thumbnails\">
\t\t\t\t<li class=\"span3\">
\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a href=\"#\" class=\"tag\"></a>
\t\t\t\t\t<a href=\"product_details.html\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/architecte-maison-contemporaine.jpg"), "html", null, true);
        echo "\" alt=\"bootstrap-ring\"></a>
\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span3\">
\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a href=\"#\" class=\"tag\"></a>
\t\t\t\t\t<a  href=\"product_details.html\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image1.jpeg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span3\">
\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a href=\"#\" class=\"tag\"></a>
\t\t\t\t\t<a  href=\"product_details.html\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image8.jpeg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span3\">
\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a  href=\"product_details.html\"><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Desain-Interior-Ekletik-VS-Modern-01.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t  </ul>
\t\t\t  </div>
\t\t   <div class=\"item\">
\t\t  <ul class=\"thumbnails\">
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/index3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/kucica-uz-more_uredjenje-doma-002.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/images2.jpeg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/images3.jpeg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t  </ul>
\t\t  </div>
\t\t   </div>
\t\t  <a class=\"left carousel-control\" href=\"#newProductCar\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#newProductCar\" data-slide=\"next\">&rsaquo;</a>
\t\t  </div>
\t\t  </div>

\t</div>
    ";
        
        $__internal_010ed08b1106f76fbfbfef433c930d53619fcdb48fd8000a1bd986e2387bf800->leave($__internal_010ed08b1106f76fbfbfef433c930d53619fcdb48fd8000a1bd986e2387bf800_prof);

        
        $__internal_2bf018bb921bdff1a18dc55c3d29e48ef0fc35bc2bdf24dcfcc0e6f90166f724->leave($__internal_2bf018bb921bdff1a18dc55c3d29e48ef0fc35bc2bdf24dcfcc0e6f90166f724_prof);

    }

    // line 248
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_006a39d39234cfaedb95e917a7cf9092966b06c0d47100841dcbaa97f34da864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006a39d39234cfaedb95e917a7cf9092966b06c0d47100841dcbaa97f34da864->enter($__internal_006a39d39234cfaedb95e917a7cf9092966b06c0d47100841dcbaa97f34da864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_442506755b6c82546786e61be50f29ea173841c88005884bd8db655f44a7ff8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442506755b6c82546786e61be50f29ea173841c88005884bd8db655f44a7ff8e->enter($__internal_442506755b6c82546786e61be50f29ea173841c88005884bd8db655f44a7ff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 249
        echo "





\t";
        
        $__internal_442506755b6c82546786e61be50f29ea173841c88005884bd8db655f44a7ff8e->leave($__internal_442506755b6c82546786e61be50f29ea173841c88005884bd8db655f44a7ff8e_prof);

        
        $__internal_006a39d39234cfaedb95e917a7cf9092966b06c0d47100841dcbaa97f34da864->leave($__internal_006a39d39234cfaedb95e917a7cf9092966b06c0d47100841dcbaa97f34da864_prof);

    }

    // line 265
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ea714098b0f858c3e9971ff1ad8e876114a1f8bd790148283dca7a7e05adcf5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea714098b0f858c3e9971ff1ad8e876114a1f8bd790148283dca7a7e05adcf5e->enter($__internal_ea714098b0f858c3e9971ff1ad8e876114a1f8bd790148283dca7a7e05adcf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a257ee8e95ba900cd9a5d5a7ba562abbf88333e9f9f0ee24440514044140821f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a257ee8e95ba900cd9a5d5a7ba562abbf88333e9f9f0ee24440514044140821f->enter($__internal_a257ee8e95ba900cd9a5d5a7ba562abbf88333e9f9f0ee24440514044140821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 266
        echo "<!--
Footer
-->
<footer class=\"footer\">
<div class=\"row-fluid\">
<div class=\"span2\">
<h5>Your Account</h5>
<a href=\"#\">YOUR ACCOUNT</a><br>
<a href=\"#\">PERSONAL INFORMATION</a><br>
<a href=\"#\">ADDRESSES</a><br>
<a href=\"#\">DISCOUNT</a><br>
<a href=\"#\">ORDER HISTORY</a><br>
 </div>
<div class=\"span2\">
<h5>Iinformation</h5>
<a href=\"contact.html\">CONTACT</a><br>
<a href=\"#\">SITEMAP</a><br>
<a href=\"#\">LEGAL NOTICE</a><br>
<a href=\"#\">TERMS AND CONDITIONS</a><br>
<a href=\"#\">ABOUT US</a><br>
 </div>
<div class=\"span2\">
<h5>Our Offer</h5>
<a href=\"#\">NEW PRODUCTS</a> <br>
<a href=\"#\">TOP SELLERS</a><br>
<a href=\"#\">SPECIALS</a><br>
<a href=\"#\">MANUFACTURERS</a><br>
<a href=\"#\">SUPPLIERS</a> <br/>
 </div>
 <div class=\"span6\">
 </div>
 </div>
</footer>
";
        
        $__internal_a257ee8e95ba900cd9a5d5a7ba562abbf88333e9f9f0ee24440514044140821f->leave($__internal_a257ee8e95ba900cd9a5d5a7ba562abbf88333e9f9f0ee24440514044140821f_prof);

        
        $__internal_ea714098b0f858c3e9971ff1ad8e876114a1f8bd790148283dca7a7e05adcf5e->leave($__internal_ea714098b0f858c3e9971ff1ad8e876114a1f8bd790148283dca7a7e05adcf5e_prof);

    }

    public function getTemplateName()
    {
        return "::Layout/layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 266,  567 => 265,  551 => 249,  542 => 248,  519 => 230,  510 => 224,  501 => 218,  492 => 212,  479 => 202,  470 => 196,  460 => 189,  450 => 182,  436 => 170,  427 => 169,  405 => 155,  395 => 148,  385 => 141,  375 => 134,  370 => 131,  361 => 130,  344 => 118,  326 => 256,  324 => 248,  317 => 243,  315 => 169,  311 => 167,  309 => 130,  296 => 119,  294 => 118,  287 => 113,  278 => 112,  247 => 87,  238 => 86,  211 => 65,  202 => 58,  193 => 57,  143 => 11,  134 => 10,  117 => 309,  113 => 308,  109 => 307,  105 => 306,  101 => 305,  94 => 300,  92 => 265,  90 => 112,  85 => 109,  83 => 86,  77 => 82,  75 => 57,  68 => 52,  66 => 10,  58 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}




           <!-- Bootstrap styles -->

 {% block head %}


<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t<div class=\"topNav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"alignR\">
\t\t\t\t<div class=\"pull-left socialNw\">
\t\t\t\t\t<a href=\"#\"><span class=\"icon-twitter\"></span></a>
\t\t\t\t\t<a href=\"#\"><span class=\"icon-facebook\"></span></a>
\t\t\t\t\t<a href=\"#\"><span class=\"icon-youtube\"></span></a>
\t\t\t\t\t<a href=\"#\"><span class=\"icon-tumblr\"></span></a>
\t\t\t\t</div>
\t\t\t\t<a class=\"active\" href=\"index.html\"> <span class=\"icon-home\"></span> Accueil </a>

\t\t\t\t<a href=\"register.html\"><span class=\"icon-edit\"></span> Enregistrer ici vos biens </a>
\t\t\t\t<a href=\"contact.html\"><span class=\"icon-envelope\"></span> Contactez-nous</a>
<ul class=\"nav pull-right\">
\t\t\t<li class=\"dropdown\">
\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"icon-user\"></span> Mon Compte<b class=\"caret\"></b></a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t<form class=\"form-horizontal loginFrm\">
\t\t\t\t  <div class=\"control-group\">
\t\t\t\t\t<input type=\"text\" class=\"span2\" id=\"inputEmail\" placeholder=\"Email\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"control-group\">
\t\t\t\t\t<input type=\"password\" class=\"span2\" id=\"inputPassword\" placeholder=\"Password\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"control-group\">
\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t<input type=\"checkbox\"> Remember me
\t\t\t\t\t</label>
\t\t\t\t\t<button type=\"submit\" class=\"shopBtn btn-block\">Sign in</button>
\t\t\t\t  </div>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t</ul>\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

<!--
Lower Header Section
-->
<div class=\"container\">
 {% block header %}
<div id=\"gototop\"> </div>

<header id=\"header\">
<div class=\"row\">
\t<div class=\"span4\">
\t<h1>
\t<a class=\"logo\" href=\"index.html\"><span>Twitter Bootstrap ecommerce template</span>
\t\t<img src=\"{{ asset('img/logo change.png') }}\" style=\"width:60px\" alt=\"bootstrap sexy shop\">
\t</a>
\t</h1>
\t</div>
\t<div class=\"span4\">

\t</div>
\t<div class=\"span4 alignR\">
\t<p><br> <strong> Remplissez votre pannier de souhait </strong><br><br></p>
\t<span class=\"btn btn-mini\">[ 2 ] <span class=\"icon-shopping-cart\"></span></span>
\t<span class=\"btn btn-warning btn-mini\">\$</span>
\t<span class=\"btn btn-mini\">&pound;</span>
\t<span class=\"btn btn-mini\">&euro;</span>
\t</div>
</div>
</header>
{% endblock %}

<!--
Navigation Bar Section
-->
{% block type %}
<div class=\"navbar\">
\t  <div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t  <a data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\">
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t  </a>
\t\t  <div class=\"nav-collapse\">
\t\t\t<ul class=\"nav\">
\t\t\t  <li class=\"active\"><a href=\"index.html\">Accueil\t</a></li>
\t\t\t  <li class=\"\"><a href=\"list-view.html\">Liste</a></li>
\t\t\t  <li class=\"\"><a href=\"grid-view.html\">Grille</a></li>
\t\t\t  <li class=\"\"><a href=\"three-col.html\">Colonne</a></li>
\t\t\t</ul>


\t\t  </div>
\t\t</div>
\t</div>
</div>
    {% endblock %}
<!--
Body Section
-->
{% block article %}
\t<div class=\"row\">
<div id=\"sidebar\" class=\"span4\">
<div class=\"well well-small\">
\t<ul class=\"nav nav-list\">
\t\t<li><a href=\"products.html\"><span class=\"icon-chevron-right\"></span>Recherchez ici un bien</a><hr/></li>
\t\t{% block form %}{% endblock %}
        \t\t<li> <a class=\"totalInCart\" href=\"cart.html\"><strong>Total de  <span class=\"badge badge-warning pull-right\" style=\"line-height:18px;\"> + 2500 biens</span></strong></a></li>

        </ul>
</div>




\t</div>
\t<div class=\"span8\">
\t<div class=\"well np\">
    {% block carousel %}
\t\t<div id=\"myCarousel\" class=\"carousel slide homCar\">
            <div class=\"carousel-inner\">
\t\t\t  <div class=\"item\">
                <img style=\"width:100%\" src=\"{{ asset('img/index3.jpg') }}\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
\t\t\t  <div class=\"item\">
                <img style=\"width:100%\" src=\"{{ asset('img/Desain-Interior-Ekletik-VS-Modern-01.jpg') }}\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap Ecommerce template</h4>
                      <p><span>Highly Google seo friendly</span></p>
                </div>
              </div>
\t\t\t  <div class=\"item active\">
                <img style=\"width:100%\" src=\"{{ asset('img/architecte-maison-contemporaine.jpg') }}\" alt=\"bootstrap ecommerce templates\">
                <div class=\"carousel-caption\">
                      <h4>Twitter Bootstrap cart</h4>
                      <p><span>Very easy to integrate and expand.</span></p>
                </div>
              </div>
              <div class=\"item\">
                <img style=\"width:100%\" src=\"{{ asset('img/kucica-uz-more_uredjenje-doma-002.jpg') }}\" alt=\"bootstrap templates\">
                <div class=\"carousel-caption\">
                      <h4>Bootstrap templates integration</h4>
                      <p><span>Compitable to many more opensource cart</span></p>
                </div>
              </div>
            </div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
          </div>
        </div>
        {% endblock %}
<!--
New Products
-->{% block new %}
  <div class=\"well well-small\">
\t<h3> A LA UNE </h3>
\t<hr class=\"soften\"/>
\t\t<div class=\"row-fluid\">
\t\t<div id=\"newProductCar\" class=\"carousel slide\">
            <div class=\"carousel-inner\">
\t\t\t<div class=\"item active\">
\t\t\t  <ul class=\"thumbnails\">
\t\t\t\t<li class=\"span3\">
\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a href=\"#\" class=\"tag\"></a>
\t\t\t\t\t<a href=\"product_details.html\"><img src=\"{{ asset('img/architecte-maison-contemporaine.jpg') }}\" alt=\"bootstrap-ring\"></a>
\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span3\">
\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a href=\"#\" class=\"tag\"></a>
\t\t\t\t\t<a  href=\"product_details.html\"><img src=\"{{ asset('img/image1.jpeg') }}\" alt=\"\"></a>
\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span3\">
\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a href=\"#\" class=\"tag\"></a>
\t\t\t\t\t<a  href=\"product_details.html\"><img src=\"{{ asset('img/image8.jpeg') }}\" alt=\"\"></a>
\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span3\">
\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t\t<a  href=\"product_details.html\"><img src=\"{{ asset('img/Desain-Interior-Ekletik-VS-Modern-01.jpg') }}\" alt=\"\"></a>
\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t  </ul>
\t\t\t  </div>
\t\t   <div class=\"item\">
\t\t  <ul class=\"thumbnails\">
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"{{ asset('img/index3.jpg') }}\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"{{ asset('img/kucica-uz-more_uredjenje-doma-002.jpg') }}\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"{{ asset('img/images2.jpeg') }}\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"span3\">
\t\t\t  <div class=\"thumbnail\">
\t\t\t\t<a class=\"zoomTool\" href=\"product_details.html\" title=\"add to cart\"><span class=\"icon-search\"></span> QUICK VIEW</a>
\t\t\t\t<a  href=\"product_details.html\"><img src=\"{{ asset('img/images3.jpeg') }}\" alt=\"\"></a>
\t\t\t  </div>
\t\t\t</li>
\t\t  </ul>
\t\t  </div>
\t\t   </div>
\t\t  <a class=\"left carousel-control\" href=\"#newProductCar\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#newProductCar\" data-slide=\"next\">&rsaquo;</a>
\t\t  </div>
\t\t  </div>

\t</div>
    {% endblock %}
\t<!--
\tFeatured Products
\t-->
    <div class=\"well well-small\">

\t\t   {% block catalogue %}






\t{% endblock %}

\t</div>
\t</div>
\t</div>
<!--
Clients
-->

{% endblock %}
{% block footer %}
<!--
Footer
-->
<footer class=\"footer\">
<div class=\"row-fluid\">
<div class=\"span2\">
<h5>Your Account</h5>
<a href=\"#\">YOUR ACCOUNT</a><br>
<a href=\"#\">PERSONAL INFORMATION</a><br>
<a href=\"#\">ADDRESSES</a><br>
<a href=\"#\">DISCOUNT</a><br>
<a href=\"#\">ORDER HISTORY</a><br>
 </div>
<div class=\"span2\">
<h5>Iinformation</h5>
<a href=\"contact.html\">CONTACT</a><br>
<a href=\"#\">SITEMAP</a><br>
<a href=\"#\">LEGAL NOTICE</a><br>
<a href=\"#\">TERMS AND CONDITIONS</a><br>
<a href=\"#\">ABOUT US</a><br>
 </div>
<div class=\"span2\">
<h5>Our Offer</h5>
<a href=\"#\">NEW PRODUCTS</a> <br>
<a href=\"#\">TOP SELLERS</a><br>
<a href=\"#\">SPECIALS</a><br>
<a href=\"#\">MANUFACTURERS</a><br>
<a href=\"#\">SUPPLIERS</a> <br/>
 </div>
 <div class=\"span6\">
 </div>
 </div>
</footer>
{% endblock %}
</div><!-- /container -->

<div class=\"copyright\">
<div class=\"container\">
\t<p class=\"pull-right\">
\t\t<a href=\"#\"><img src=\"{{ asset('shop/assets/img/maestro.png\" alt=\"payment') }}\"></a>
\t\t<a href=\"#\"><img src=\"{{ asset('shop/assets/img/mc.png') }}\" alt=\"payment\"></a>
\t\t<a href=\"#\"><img src=\"{{ asset('shop/assets/img/pp.png') }}\" alt=\"payment\"></a>
\t\t<a href=\"#\"><img src=\"{{ asset('shop/assets/img/visa.png') }}\" alt=\"payment\"></a>
\t\t<a href=\"#\"><img src=\"{{ asset('shop/assets/img/disc.png') }}\" alt=\"payment\"></a>
\t</p>
\t<span>Copyright &copy; 2018<br> AKINA GROUP</span>
</div>
</div>
<a href=\"#\" class=\"gotop\"><i class=\"icon-double-angle-up\"></i></a>
   {% endblock %}", "::Layout/layout1.html.twig", "/var/www/html/GroupJoob/app/Resources/views/Layout/layout1.html.twig");
    }
}
