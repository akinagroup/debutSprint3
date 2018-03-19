<?php

/* ::LayoutAdmin/integration.html.twig */
class __TwigTemplate_b63e7df4466540a845556a9670153e408ecc7f22f4535c7c9ad4878ba3caa200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'PanelLeft' => array($this, 'block_PanelLeft'),
            'logo' => array($this, 'block_logo'),
            'contenuMenu' => array($this, 'block_contenuMenu'),
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
            'entete' => array($this, 'block_entete'),
            'upload' => array($this, 'block_upload'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94862c571575df92256bc6f8c356659731757344d009c3d5d82b5d72a482ebee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94862c571575df92256bc6f8c356659731757344d009c3d5d82b5d72a482ebee->enter($__internal_94862c571575df92256bc6f8c356659731757344d009c3d5d82b5d72a482ebee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/integration.html.twig"));

        $__internal_c1a914af4cadc912ba263219883ce8a37531eaa1feef1dd3e4adeb402511937d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a914af4cadc912ba263219883ce8a37531eaa1feef1dd3e4adeb402511937d->enter($__internal_c1a914af4cadc912ba263219883ce8a37531eaa1feef1dd3e4adeb402511937d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/integration.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body>
";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 352
        echo "
</body>
</html>
";
        
        $__internal_94862c571575df92256bc6f8c356659731757344d009c3d5d82b5d72a482ebee->leave($__internal_94862c571575df92256bc6f8c356659731757344d009c3d5d82b5d72a482ebee_prof);

        
        $__internal_c1a914af4cadc912ba263219883ce8a37531eaa1feef1dd3e4adeb402511937d->leave($__internal_c1a914af4cadc912ba263219883ce8a37531eaa1feef1dd3e4adeb402511937d_prof);

    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc82b3b9b9205f01266fc2c34f3b32b9555ecc12f3a7b1b4ea0162b146613cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc82b3b9b9205f01266fc2c34f3b32b9555ecc12f3a7b1b4ea0162b146613cf2->enter($__internal_dc82b3b9b9205f01266fc2c34f3b32b9555ecc12f3a7b1b4ea0162b146613cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8557bfbe227b4c9a69d6ee6f4267ff08345fd3339920485a7f3cd25a0017d3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8557bfbe227b4c9a69d6ee6f4267ff08345fd3339920485a7f3cd25a0017d3f5->enter($__internal_8557bfbe227b4c9a69d6ee6f4267ff08345fd3339920485a7f3cd25a0017d3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 31
        echo "    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->
";
        
        $__internal_8557bfbe227b4c9a69d6ee6f4267ff08345fd3339920485a7f3cd25a0017d3f5->leave($__internal_8557bfbe227b4c9a69d6ee6f4267ff08345fd3339920485a7f3cd25a0017d3f5_prof);

        
        $__internal_dc82b3b9b9205f01266fc2c34f3b32b9555ecc12f3a7b1b4ea0162b146613cf2->leave($__internal_dc82b3b9b9205f01266fc2c34f3b32b9555ecc12f3a7b1b4ea0162b146613cf2_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4503a213caf3c031beed3609516c9e0eec661757c109c56290fd1dcc46b4bf94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4503a213caf3c031beed3609516c9e0eec661757c109c56290fd1dcc46b4bf94->enter($__internal_4503a213caf3c031beed3609516c9e0eec661757c109c56290fd1dcc46b4bf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6814f5011113565b769e6cb03dadec1a403f88822fd6ecfcd08242aeb6382bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6814f5011113565b769e6cb03dadec1a403f88822fd6ecfcd08242aeb6382bed->enter($__internal_6814f5011113565b769e6cb03dadec1a403f88822fd6ecfcd08242aeb6382bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/cs-skin-elastic.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scss/style.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/lib/vector-map/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
";
        
        $__internal_6814f5011113565b769e6cb03dadec1a403f88822fd6ecfcd08242aeb6382bed->leave($__internal_6814f5011113565b769e6cb03dadec1a403f88822fd6ecfcd08242aeb6382bed_prof);

        
        $__internal_4503a213caf3c031beed3609516c9e0eec661757c109c56290fd1dcc46b4bf94->leave($__internal_4503a213caf3c031beed3609516c9e0eec661757c109c56290fd1dcc46b4bf94_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f2b2c05e3c43fdd5204162e97d60a1680cf76f8c1f3668f55d84a1448c7306b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2b2c05e3c43fdd5204162e97d60a1680cf76f8c1f3668f55d84a1448c7306b->enter($__internal_1f2b2c05e3c43fdd5204162e97d60a1680cf76f8c1f3668f55d84a1448c7306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4ecedc164fbeff458ce00c402b36e852c5e1d162f85d8bfe58f9847252e2365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ecedc164fbeff458ce00c402b36e852c5e1d162f85d8bfe58f9847252e2365->enter($__internal_c4ecedc164fbeff458ce00c402b36e852c5e1d162f85d8bfe58f9847252e2365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <!-- Left Panel -->
";
        // line 38
        $this->displayBlock('PanelLeft', $context, $blocks);
        // line 128
        echo "    <!-- Left Panel -->

    <!-- Right Panel -->
";
        // line 131
        $this->displayBlock('content', $context, $blocks);
        // line 303
        echo "

    <!-- Right Panel -->
";
        // line 306
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_c4ecedc164fbeff458ce00c402b36e852c5e1d162f85d8bfe58f9847252e2365->leave($__internal_c4ecedc164fbeff458ce00c402b36e852c5e1d162f85d8bfe58f9847252e2365_prof);

        
        $__internal_1f2b2c05e3c43fdd5204162e97d60a1680cf76f8c1f3668f55d84a1448c7306b->leave($__internal_1f2b2c05e3c43fdd5204162e97d60a1680cf76f8c1f3668f55d84a1448c7306b_prof);

    }

    // line 38
    public function block_PanelLeft($context, array $blocks = array())
    {
        $__internal_2b31584e4abd5dc187638c03ab3e144e7af4142a9d440a69eba249607cf138ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b31584e4abd5dc187638c03ab3e144e7af4142a9d440a69eba249607cf138ca->enter($__internal_2b31584e4abd5dc187638c03ab3e144e7af4142a9d440a69eba249607cf138ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PanelLeft"));

        $__internal_f57fc5bd2e57ef2d4cad41c7eb54b3bcb10c2d0145e17bb59e84d043578464b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57fc5bd2e57ef2d4cad41c7eb54b3bcb10c2d0145e17bb59e84d043578464b0->enter($__internal_f57fc5bd2e57ef2d4cad41c7eb54b3bcb10c2d0145e17bb59e84d043578464b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PanelLeft"));

        // line 39
        echo "    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">
";
        // line 41
        $this->displayBlock('logo', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('contenuMenu', $context, $blocks);
        // line 125
        echo "        </nav>
    </aside><!-- /#left-panel -->
";
        
        $__internal_f57fc5bd2e57ef2d4cad41c7eb54b3bcb10c2d0145e17bb59e84d043578464b0->leave($__internal_f57fc5bd2e57ef2d4cad41c7eb54b3bcb10c2d0145e17bb59e84d043578464b0_prof);

        
        $__internal_2b31584e4abd5dc187638c03ab3e144e7af4142a9d440a69eba249607cf138ca->leave($__internal_2b31584e4abd5dc187638c03ab3e144e7af4142a9d440a69eba249607cf138ca_prof);

    }

    // line 41
    public function block_logo($context, array $blocks = array())
    {
        $__internal_d9c7623d65ef99088cc1ebefa5b30163361254c7f82bcb25623e282338068e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c7623d65ef99088cc1ebefa5b30163361254c7f82bcb25623e282338068e34->enter($__internal_d9c7623d65ef99088cc1ebefa5b30163361254c7f82bcb25623e282338068e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_910f79da2b69d8709c4866b2f8579064205023e37ce992c90972fefb76a49be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910f79da2b69d8709c4866b2f8579064205023e37ce992c90972fefb76a49be8->enter($__internal_910f79da2b69d8709c4866b2f8579064205023e37ce992c90972fefb76a49be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 42
        echo "            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"./\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" style=\"width:90px\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
            </div>
";
        
        $__internal_910f79da2b69d8709c4866b2f8579064205023e37ce992c90972fefb76a49be8->leave($__internal_910f79da2b69d8709c4866b2f8579064205023e37ce992c90972fefb76a49be8_prof);

        
        $__internal_d9c7623d65ef99088cc1ebefa5b30163361254c7f82bcb25623e282338068e34->leave($__internal_d9c7623d65ef99088cc1ebefa5b30163361254c7f82bcb25623e282338068e34_prof);

    }

    // line 51
    public function block_contenuMenu($context, array $blocks = array())
    {
        $__internal_f3f8f039f138b1e34ce4f26dc8e0d09e58a24c5876451025c367bfacf9bd0455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f8f039f138b1e34ce4f26dc8e0d09e58a24c5876451025c367bfacf9bd0455->enter($__internal_f3f8f039f138b1e34ce4f26dc8e0d09e58a24c5876451025c367bfacf9bd0455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuMenu"));

        $__internal_75936c4259b80591035cd0207d04d039f08f5e1f099c531277348d367fc2960d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75936c4259b80591035cd0207d04d039f08f5e1f099c531277348d367fc2960d->enter($__internal_75936c4259b80591035cd0207d04d039f08f5e1f099c531277348d367fc2960d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuMenu"));

        // line 52
        echo "            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                    </li>
                    <h3 class=\"menu-title\">Biens</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Opérations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Res");
        echo "\">Liste des biens</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Nouveaux</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Les localités</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Les types</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Les clients</a></li>
                              </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Les reservations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("poni");
        echo "\">Liste des reservations</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Nouveaux</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Les contrats</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Liste des contrats</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title\">Proprietaires</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Opérations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-fort-awesome\"></i><a href=\"font-fontawesome.html\">Liste des Proprietaires</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ponid");
        echo "\">Confessions non validées</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Contrats de confessions </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href=\"widgets.html\"> <i class=\"menu-icon ti-email\"></i>Widgets </a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Charts</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            ";
        
        $__internal_75936c4259b80591035cd0207d04d039f08f5e1f099c531277348d367fc2960d->leave($__internal_75936c4259b80591035cd0207d04d039f08f5e1f099c531277348d367fc2960d_prof);

        
        $__internal_f3f8f039f138b1e34ce4f26dc8e0d09e58a24c5876451025c367bfacf9bd0455->leave($__internal_f3f8f039f138b1e34ce4f26dc8e0d09e58a24c5876451025c367bfacf9bd0455_prof);

    }

    // line 131
    public function block_content($context, array $blocks = array())
    {
        $__internal_540e7ad79a60b111ea73a1abfab08dc6b3187e4d718ece2d26e45f647ee66495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540e7ad79a60b111ea73a1abfab08dc6b3187e4d718ece2d26e45f647ee66495->enter($__internal_540e7ad79a60b111ea73a1abfab08dc6b3187e4d718ece2d26e45f647ee66495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93a5cffc1d80faad885fa9b2fa9db26946318e8cfda1c5b2c1e00318283e54cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a5cffc1d80faad885fa9b2fa9db26946318e8cfda1c5b2c1e00318283e54cd->enter($__internal_93a5cffc1d80faad885fa9b2fa9db26946318e8cfda1c5b2c1e00318283e54cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 132
        echo "    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        ";
        // line 135
        $this->displayBlock('header', $context, $blocks);
        // line 262
        $this->displayBlock('entete', $context, $blocks);
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('upload', $context, $blocks);
        // line 300
        echo "          </div> <!-- .content -->
    </div><!-- /#right-panel -->
 ";
        
        $__internal_93a5cffc1d80faad885fa9b2fa9db26946318e8cfda1c5b2c1e00318283e54cd->leave($__internal_93a5cffc1d80faad885fa9b2fa9db26946318e8cfda1c5b2c1e00318283e54cd_prof);

        
        $__internal_540e7ad79a60b111ea73a1abfab08dc6b3187e4d718ece2d26e45f647ee66495->leave($__internal_540e7ad79a60b111ea73a1abfab08dc6b3187e4d718ece2d26e45f647ee66495_prof);

    }

    // line 135
    public function block_header($context, array $blocks = array())
    {
        $__internal_e93b482f7c6a95e318b0d0425ed39faff19e6059516249710aab8da793a1a8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93b482f7c6a95e318b0d0425ed39faff19e6059516249710aab8da793a1a8f3->enter($__internal_e93b482f7c6a95e318b0d0425ed39faff19e6059516249710aab8da793a1a8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a2a82856ef704633919df4c1a7d4fdf9bc4f768d71d7bb341d849c6dad7e8b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a82856ef704633919df4c1a7d4fdf9bc4f768d71d7bb341d849c6dad7e8b5e->enter($__internal_a2a82856ef704633919df4c1a7d4fdf9bc4f768d71d7bb341d849c6dad7e8b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 136
        echo "        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"count bg-danger\">5</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                            <p class=\"red\">You have 3 Notification</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class=\"dropdown for-message\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ti-email\"></i>
                            <span class=\"count bg-primary\">9</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">You have 4 Mails</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/1.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/2.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/3.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/4.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/admin.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
";
        
        $__internal_a2a82856ef704633919df4c1a7d4fdf9bc4f768d71d7bb341d849c6dad7e8b5e->leave($__internal_a2a82856ef704633919df4c1a7d4fdf9bc4f768d71d7bb341d849c6dad7e8b5e_prof);

        
        $__internal_e93b482f7c6a95e318b0d0425ed39faff19e6059516249710aab8da793a1a8f3->leave($__internal_e93b482f7c6a95e318b0d0425ed39faff19e6059516249710aab8da793a1a8f3_prof);

    }

    // line 262
    public function block_entete($context, array $blocks = array())
    {
        $__internal_c0616e83e3e66b5d134927f7c0ea309489998a45371a2a9e964d56eab406e5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0616e83e3e66b5d134927f7c0ea309489998a45371a2a9e964d56eab406e5ae->enter($__internal_c0616e83e3e66b5d134927f7c0ea309489998a45371a2a9e964d56eab406e5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        $__internal_bc44421f8a9f48f32820d6b9b6e6904d76a6812a5b6a9730c3747dbb71a01406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc44421f8a9f48f32820d6b9b6e6904d76a6812a5b6a9730c3747dbb71a01406->enter($__internal_bc44421f8a9f48f32820d6b9b6e6904d76a6812a5b6a9730c3747dbb71a01406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 263
        echo "        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li class=\"active\">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">

            <div class=\"col-sm-12\">
                <div class=\"alert  alert-success alert-dismissible fade show\" role=\"alert\">
                  <span class=\"badge badge-pill badge-success\">Success</span> You successfully read this important alert message.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>

";
        
        $__internal_bc44421f8a9f48f32820d6b9b6e6904d76a6812a5b6a9730c3747dbb71a01406->leave($__internal_bc44421f8a9f48f32820d6b9b6e6904d76a6812a5b6a9730c3747dbb71a01406_prof);

        
        $__internal_c0616e83e3e66b5d134927f7c0ea309489998a45371a2a9e964d56eab406e5ae->leave($__internal_c0616e83e3e66b5d134927f7c0ea309489998a45371a2a9e964d56eab406e5ae_prof);

    }

    // line 295
    public function block_upload($context, array $blocks = array())
    {
        $__internal_36f4ee5b40d340e6c0f2dc84e1d5b29e7358296ae7946c88e50d2ad7b8baa04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f4ee5b40d340e6c0f2dc84e1d5b29e7358296ae7946c88e50d2ad7b8baa04f->enter($__internal_36f4ee5b40d340e6c0f2dc84e1d5b29e7358296ae7946c88e50d2ad7b8baa04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_75ba890c61b80435d095df0250377317ba128c56f44cb87f733fae590abade9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ba890c61b80435d095df0250377317ba128c56f44cb87f733fae590abade9d->enter($__internal_75ba890c61b80435d095df0250377317ba128c56f44cb87f733fae590abade9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 296
        echo "


";
        
        $__internal_75ba890c61b80435d095df0250377317ba128c56f44cb87f733fae590abade9d->leave($__internal_75ba890c61b80435d095df0250377317ba128c56f44cb87f733fae590abade9d_prof);

        
        $__internal_36f4ee5b40d340e6c0f2dc84e1d5b29e7358296ae7946c88e50d2ad7b8baa04f->leave($__internal_36f4ee5b40d340e6c0f2dc84e1d5b29e7358296ae7946c88e50d2ad7b8baa04f_prof);

    }

    // line 306
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8865a1b16e04329019c11f8f1e72454840242b085f43f709fcbfeebd50e050f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8865a1b16e04329019c11f8f1e72454840242b085f43f709fcbfeebd50e050f6->enter($__internal_8865a1b16e04329019c11f8f1e72454840242b085f43f709fcbfeebd50e050f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_98ca71fee88a8eecc67646e56143d4208afc8e776e379e9cc55371e64162ba9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ca71fee88a8eecc67646e56143d4208afc8e776e379e9cc55371e64162ba9b->enter($__internal_98ca71fee88a8eecc67646e56143d4208afc8e776e379e9cc55371e64162ba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 307
        echo "   
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>


  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/FrontJs.js"), "html", null, true);
        echo "\"></script>

      
    <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/country/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>

    <script>
        ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    <script>
  var \$genre = document.getElementById('oui');
onchange = function() {
    if (document.getElementById('oui').checked) {
      console.log(\"click\");
        }
       
}
</script>
    ";
        
        $__internal_98ca71fee88a8eecc67646e56143d4208afc8e776e379e9cc55371e64162ba9b->leave($__internal_98ca71fee88a8eecc67646e56143d4208afc8e776e379e9cc55371e64162ba9b_prof);

        
        $__internal_8865a1b16e04329019c11f8f1e72454840242b085f43f709fcbfeebd50e050f6->leave($__internal_8865a1b16e04329019c11f8f1e72454840242b085f43f709fcbfeebd50e050f6_prof);

    }

    public function getTemplateName()
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  674 => 321,  670 => 320,  666 => 319,  662 => 318,  658 => 317,  654 => 316,  648 => 313,  641 => 309,  637 => 308,  634 => 307,  625 => 306,  612 => 296,  603 => 295,  563 => 263,  554 => 262,  504 => 222,  486 => 207,  475 => 199,  464 => 191,  453 => 183,  404 => 136,  395 => 135,  383 => 300,  381 => 295,  378 => 294,  376 => 262,  374 => 135,  369 => 132,  360 => 131,  314 => 89,  300 => 78,  290 => 71,  278 => 62,  274 => 61,  263 => 52,  254 => 51,  241 => 47,  237 => 46,  231 => 42,  222 => 41,  210 => 125,  208 => 51,  205 => 50,  203 => 41,  199 => 39,  190 => 38,  180 => 306,  175 => 303,  173 => 131,  168 => 128,  166 => 38,  162 => 36,  153 => 35,  139 => 27,  135 => 26,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  105 => 16,  96 => 15,  85 => 31,  83 => 15,  74 => 8,  65 => 7,  52 => 352,  50 => 35,  46 => 33,  44 => 7,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
{% block head %}


    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% block stylesheet %}
    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/flag-icon.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/cs-skin-elastic.css') }}\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less\"> -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/scss/style.css') }}\">
    <link href=\"{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}\" rel=\"stylesheet\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
{% endblock %}
    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->
{% endblock %}
</head>
<body>
{% block body %}

        <!-- Left Panel -->
{% block PanelLeft %}
    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">
{% block logo %}
            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"./\"><img src=\"{{ asset('img/logo change.png')}}\" style=\"width:90px\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"{{ asset('img/logo change.png')}}\" alt=\"Logo\"></a>
            </div>
{% endblock %}

{% block contenuMenu %}
            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                    </li>
                    <h3 class=\"menu-title\">Biens</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Opérations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"{{path('Res')}}\">Liste des biens</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"{{path('disponi')}}\">Nouveaux</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Les localités</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Les types</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Les clients</a></li>
                              </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Les reservations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"{{path('poni')}}\">Liste des reservations</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Nouveaux</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Les contrats</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"{{path('disponi')}}\">Liste des contrats</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title\">Proprietaires</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Opérations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-fort-awesome\"></i><a href=\"font-fontawesome.html\">Liste des Proprietaires</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"{{path('ponid')}}\">Confessions non validées</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Contrats de confessions </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href=\"widgets.html\"> <i class=\"menu-icon ti-email\"></i>Widgets </a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Charts</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            {% endblock %}
        </nav>
    </aside><!-- /#left-panel -->
{% endblock %}
    <!-- Left Panel -->

    <!-- Right Panel -->
{% block content %}
    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        {% block header %}
        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"count bg-danger\">5</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                            <p class=\"red\">You have 3 Notification</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class=\"dropdown for-message\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ti-email\"></i>
                            <span class=\"count bg-primary\">9</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">You have 4 Mails</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{asset('images/avatar/1.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{asset('images/avatar/2.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{ asset('images/avatar/3.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{ asset('images/avatar/4.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"{{asset('images/admin.jpg')}}\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
{% endblock %}
{% block entete %}
        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li class=\"active\">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">

            <div class=\"col-sm-12\">
                <div class=\"alert  alert-success alert-dismissible fade show\" role=\"alert\">
                  <span class=\"badge badge-pill badge-success\">Success</span> You successfully read this important alert message.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>

{% endblock %}

{% block upload %}



{% endblock %}
          </div> <!-- .content -->
    </div><!-- /#right-panel -->
 {% endblock %}


    <!-- Right Panel -->
{% block javascript %}
   
    <script src=\"{{ asset('assets/js/plugins.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>


  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{ asset('js/FrontJs.js') }}\"></script>

      
    <script src=\"{{ asset('assets/js/lib/chart-js/Chart.bundle.js') }}\"></script>
    <script src=\"{{ asset('assets/js/dashboard.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/jquery.vmap.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/jquery.vmap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') }}\"></script>

    <script>
        ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    <script>
  var \$genre = document.getElementById('oui');
onchange = function() {
    if (document.getElementById('oui').checked) {
      console.log(\"click\");
        }
       
}
</script>
    {% endblock %}
{% endblock %}

</body>
</html>
", "::LayoutAdmin/integration.html.twig", "/var/www/html/GroupJoob/app/Resources/views/LayoutAdmin/integration.html.twig");
    }
}
