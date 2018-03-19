<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6a012ecc65e82098e3e07331955dabc8be5dc273eac7a117395bbbce27a5a137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdc21baa4883059d22ddd7af965cd81188c5c839aba8168aa71cfeeb4ab3149d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc21baa4883059d22ddd7af965cd81188c5c839aba8168aa71cfeeb4ab3149d->enter($__internal_bdc21baa4883059d22ddd7af965cd81188c5c839aba8168aa71cfeeb4ab3149d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0061c3b1c8f46c554783e66723a4b6427c3da34844270835c18b261cb1077ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0061c3b1c8f46c554783e66723a4b6427c3da34844270835c18b261cb1077ce5->enter($__internal_0061c3b1c8f46c554783e66723a4b6427c3da34844270835c18b261cb1077ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bdc21baa4883059d22ddd7af965cd81188c5c839aba8168aa71cfeeb4ab3149d->leave($__internal_bdc21baa4883059d22ddd7af965cd81188c5c839aba8168aa71cfeeb4ab3149d_prof);

        
        $__internal_0061c3b1c8f46c554783e66723a4b6427c3da34844270835c18b261cb1077ce5->leave($__internal_0061c3b1c8f46c554783e66723a4b6427c3da34844270835c18b261cb1077ce5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c23106e106beafdd2461040e6284d621faea6adeadb82b060a231025c017cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c23106e106beafdd2461040e6284d621faea6adeadb82b060a231025c017cc->enter($__internal_78c23106e106beafdd2461040e6284d621faea6adeadb82b060a231025c017cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bf386c49a6b374ff95df960bd445e3dc1e35d7e197eb75d0208e202c761f16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf386c49a6b374ff95df960bd445e3dc1e35d7e197eb75d0208e202c761f16e->enter($__internal_5bf386c49a6b374ff95df960bd445e3dc1e35d7e197eb75d0208e202c761f16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5bf386c49a6b374ff95df960bd445e3dc1e35d7e197eb75d0208e202c761f16e->leave($__internal_5bf386c49a6b374ff95df960bd445e3dc1e35d7e197eb75d0208e202c761f16e_prof);

        
        $__internal_78c23106e106beafdd2461040e6284d621faea6adeadb82b060a231025c017cc->leave($__internal_78c23106e106beafdd2461040e6284d621faea6adeadb82b060a231025c017cc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_248d2db4b785fd814cf0cd25b0282c460848782fca38f1bc951e2cdd35cd4d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248d2db4b785fd814cf0cd25b0282c460848782fca38f1bc951e2cdd35cd4d67->enter($__internal_248d2db4b785fd814cf0cd25b0282c460848782fca38f1bc951e2cdd35cd4d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7f495af33b0d0d0ac7c443948c632e31d855304b9aa902490b3bc0f2bc18cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f495af33b0d0d0ac7c443948c632e31d855304b9aa902490b3bc0f2bc18cb7->enter($__internal_e7f495af33b0d0d0ac7c443948c632e31d855304b9aa902490b3bc0f2bc18cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e7f495af33b0d0d0ac7c443948c632e31d855304b9aa902490b3bc0f2bc18cb7->leave($__internal_e7f495af33b0d0d0ac7c443948c632e31d855304b9aa902490b3bc0f2bc18cb7_prof);

        
        $__internal_248d2db4b785fd814cf0cd25b0282c460848782fca38f1bc951e2cdd35cd4d67->leave($__internal_248d2db4b785fd814cf0cd25b0282c460848782fca38f1bc951e2cdd35cd4d67_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_40ba66e6574cb2031eb19f5bda8bc1feb839710e694a6ac3dc43a28b8e2a0e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ba66e6574cb2031eb19f5bda8bc1feb839710e694a6ac3dc43a28b8e2a0e2d->enter($__internal_40ba66e6574cb2031eb19f5bda8bc1feb839710e694a6ac3dc43a28b8e2a0e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_046281802242d954d1a51b30f4433c0dc30caef4737765cfb46997e0f5962c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046281802242d954d1a51b30f4433c0dc30caef4737765cfb46997e0f5962c10->enter($__internal_046281802242d954d1a51b30f4433c0dc30caef4737765cfb46997e0f5962c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_046281802242d954d1a51b30f4433c0dc30caef4737765cfb46997e0f5962c10->leave($__internal_046281802242d954d1a51b30f4433c0dc30caef4737765cfb46997e0f5962c10_prof);

        
        $__internal_40ba66e6574cb2031eb19f5bda8bc1feb839710e694a6ac3dc43a28b8e2a0e2d->leave($__internal_40ba66e6574cb2031eb19f5bda8bc1feb839710e694a6ac3dc43a28b8e2a0e2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
