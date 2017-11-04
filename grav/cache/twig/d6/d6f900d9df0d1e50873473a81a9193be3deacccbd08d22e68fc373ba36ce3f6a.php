<?php

/* landing-home.html.twig */
class __TwigTemplate_89f81007ce74984b005477882f36196e650c757be73f173067de93f124a7fd3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "landing-home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<!-- facebook code -->
\t<div id=\"fb-root\"></div>
\t<script>(function(d, s, id) {
\t  var js, fjs = d.getElementsByTagName(s)[0];
\t  if (d.getElementById(id)) return;
\t  js = d.createElement(s); js.id = id;
\t  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=195932157209239';
\t  fjs.parentNode.insertBefore(js, fjs);
\t}(document, 'script', 'facebook-jssdk'));</script>

\t<div class=\"intro\">
\t\t\t<h1>";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
\t\t\t";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t<a href=\"header.button_first_url\">";
        // line 17
        echo $this->getAttribute(($context["header"] ?? null), "button_first_text", array());
        echo "</a>
\t\t\t<a href=\"header.button_second_url\">";
        // line 18
        echo $this->getAttribute(($context["header"] ?? null), "button_second_text", array());
        echo "</a>
\t\t\t<a href=\"header.button_third_url\">";
        // line 19
        echo $this->getAttribute(($context["header"] ?? null), "button_third_text", array());
        echo "</a>
\t</div>

\t<div class=\"categories\">
\t\t";
        // line 23
        echo $this->getAttribute(($context["header"] ?? null), "categories_title", array());
        echo "
\t\t";
        // line 24
        echo $this->getAttribute(($context["header"] ?? null), "categories_content", array());
        echo "
\t\t<!-- tenemos que enlistar todas las categorías -->
\t\t<a href=\"#\">Ver todas las categorías</a>
\t</div>

\t<div class=\"success-stories\">
\t\t<!-- meter casos de éxito -->
\t</div>

\t<div class=\"facebook-block\">
\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" data-tabs=\"timeline\" data-width=\"300px\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"true\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\">Programa Bandera Azul Ecologica(Costa Rica)</a></blockquote></div>
\t</div>

\t<div class=\"allies\">
\t\t<h3>";
        // line 38
        echo $this->getAttribute(($context["header"] ?? null), "allies_title", array());
        echo "</h3>
\t\t";
        // line 39
        echo $this->getAttribute(($context["header"] ?? null), "allies_content", array());
        echo "
\t\t<div class=\"allied-item\">

\t\t\t<!-- get collection from path /aliados  -->
\t\t\t";
        // line 43
        $context["options"] = array("items" => array("@page.children" => "/aliados"), "limit" => 0, "order" => array("by" => "title", "dir" => "asc"), "pagination" => false);
        // line 44
        echo "\t\t\t";
        $context["allied_logos"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => ($context["options"] ?? null)), "method");
        // line 45
        echo "
\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allied_logos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 47
            echo "
\t\t\t\t<h2>";
            // line 48
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
\t\t\t\t";
            // line 49
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "header_image_file", array()), array(), "array"), "cache", array()), "url", array());
            echo "
\t\t\t\t[imagen]

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "landing-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  118 => 49,  114 => 48,  111 => 47,  107 => 46,  104 => 45,  101 => 44,  99 => 43,  92 => 39,  88 => 38,  71 => 24,  67 => 23,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
\t<!-- facebook code -->
\t<div id=\"fb-root\"></div>
\t<script>(function(d, s, id) {
\t  var js, fjs = d.getElementsByTagName(s)[0];
\t  if (d.getElementById(id)) return;
\t  js = d.createElement(s); js.id = id;
\t  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=195932157209239';
\t  fjs.parentNode.insertBefore(js, fjs);
\t}(document, 'script', 'facebook-jssdk'));</script>

\t<div class=\"intro\">
\t\t\t<h1>{{ header.title }}</h1>
\t\t\t{{ page.content }}
\t\t\t<a href=\"header.button_first_url\">{{header.button_first_text}}</a>
\t\t\t<a href=\"header.button_second_url\">{{header.button_second_text}}</a>
\t\t\t<a href=\"header.button_third_url\">{{header.button_third_text}}</a>
\t</div>

\t<div class=\"categories\">
\t\t{{header.categories_title}}
\t\t{{header.categories_content}}
\t\t<!-- tenemos que enlistar todas las categorías -->
\t\t<a href=\"#\">Ver todas las categorías</a>
\t</div>

\t<div class=\"success-stories\">
\t\t<!-- meter casos de éxito -->
\t</div>

\t<div class=\"facebook-block\">
\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" data-tabs=\"timeline\" data-width=\"300px\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"true\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\">Programa Bandera Azul Ecologica(Costa Rica)</a></blockquote></div>
\t</div>

\t<div class=\"allies\">
\t\t<h3>{{header.allies_title}}</h3>
\t\t{{header.allies_content}}
\t\t<div class=\"allied-item\">

\t\t\t<!-- get collection from path /aliados  -->
\t\t\t{% set options = { items: {'@page.children': '/aliados'}, 'limit': 0, 'order': {'by': 'title', 'dir': 'asc'}, 'pagination': false } %}
\t\t\t{% set allied_logos = page.collection(options) %}

\t\t\t{% for p in allied_logos %}

\t\t\t\t<h2>{{ p.title }}</h2>
\t\t\t\t{{ page.media[header.header_image_file].cache.url }}
\t\t\t\t[imagen]

\t\t\t{% endfor %}
\t\t</div>
\t</div>

{% endblock %}
", "landing-home.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/landing-home.html.twig");
    }
}
