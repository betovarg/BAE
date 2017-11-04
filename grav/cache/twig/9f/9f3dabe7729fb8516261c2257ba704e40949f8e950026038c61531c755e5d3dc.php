<?php

/* winners.html.twig */
class __TwigTemplate_a21290ba0d9bd953ea4f455946c66c367e19770e289481d3bca07afd3433641f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "winners.html.twig", 1);
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
        echo "
\t<div class=\"intro\">
\t\t\t<h1>";
        // line 6
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
\t\t\t";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

\t\t\t<a href=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "winners_file_select", array()), array(), "array"), "cache", array()), "url", array());
        echo "\">Ver lista completa</a>
\t</div>

\t<div class=\"indicators\">
\t\t<p> ";
        // line 13
        echo $this->getAttribute(($context["header"] ?? null), "kpi_first", array());
        echo " </p>
\t\t<p> ";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "kpi_second", array());
        echo " </p>
\t\t<p> ";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "kpi_third", array());
        echo " </p>
\t\t<p> ";
        // line 16
        echo $this->getAttribute(($context["header"] ?? null), "kpi_fourth", array());
        echo " </p>
\t</div>

\t<div class=\"closing\">
\t\t<h3> Sea parte del cambio <br> con Bandera Azul Ecológica Costa Rica</h3>
\t\t<a href=\"#\">Conozca como aplicar</a>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "winners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 15,  55 => 14,  51 => 13,  44 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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

\t<div class=\"intro\">
\t\t\t<h1>{{ header.title }}</h1>
\t\t\t{{ page.content }}

\t\t\t<a href=\"{{ page.media[header.winners_file_select].cache.url }}\">Ver lista completa</a>
\t</div>

\t<div class=\"indicators\">
\t\t<p> {{ header.kpi_first }} </p>
\t\t<p> {{ header.kpi_second }} </p>
\t\t<p> {{ header.kpi_third }} </p>
\t\t<p> {{ header.kpi_fourth }} </p>
\t</div>

\t<div class=\"closing\">
\t\t<h3> Sea parte del cambio <br> con Bandera Azul Ecológica Costa Rica</h3>
\t\t<a href=\"#\">Conozca como aplicar</a>
\t</div>

{% endblock %}
", "winners.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/winners.html.twig");
    }
}
