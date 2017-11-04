<?php

/* apply.html.twig */
class __TwigTemplate_543ff3bf30dd57d75c29bbf5036b9e059f7c7b48f7126415f7bc675bd38e4e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "apply.html.twig", 1);
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
\t</div>

\t<div class=\"pre-apply\">
\t\t<h2>Pre aplicación</h2>
\t\t";
        // line 12
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_content", array());
        echo "
\t\t<div class=\"pre-apply-step\">
\t\t\t";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_category_title", array());
        echo "
\t\t\t";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_category_content", array());
        echo "
\t\t\t<a href=\"#\">Conocer categorías</a>
\t\t</div>
\t\t<div class=\"pre-apply-step\">
\t\t\t";
        // line 19
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_committee_title", array());
        echo "
\t\t\t";
        // line 20
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_committee_content", array());
        echo "
\t\t\t<a href=\"\">Conformación del comité</a>
\t\t</div>
\t</div>

\t<div class=\"apply\">
\t\t<h2>Aplicación</h2>
\t\t<div class=\"apply-step\">
\t\t\t";
        // line 28
        echo $this->getAttribute(($context["header"] ?? null), "apply_signup_title", array());
        echo "
\t\t\t";
        // line 29
        echo $this->getAttribute(($context["header"] ?? null), "apply_signup_content", array());
        echo "
\t\t</div>
\t\t<div class=\"apply-step\">
\t\t\t";
        // line 32
        echo $this->getAttribute(($context["header"] ?? null), "apply_report_title", array());
        echo "
\t\t\t";
        // line 33
        echo $this->getAttribute(($context["header"] ?? null), "apply_report_content", array());
        echo "
\t\t</div>
\t</div>

\t<div class=\"discover-categories\">
\t\t<h2>¡Está listo para aplicar!</h2>
\t\t<a href=\"#\">Descubra su categoría</a>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "apply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  88 => 32,  82 => 29,  78 => 28,  67 => 20,  63 => 19,  56 => 15,  52 => 14,  47 => 12,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
\t</div>

\t<div class=\"pre-apply\">
\t\t<h2>Pre aplicación</h2>
\t\t{{header.pre_apply_content}}
\t\t<div class=\"pre-apply-step\">
\t\t\t{{header.pre_apply_category_title}}
\t\t\t{{header.pre_apply_category_content}}
\t\t\t<a href=\"#\">Conocer categorías</a>
\t\t</div>
\t\t<div class=\"pre-apply-step\">
\t\t\t{{header.pre_apply_committee_title}}
\t\t\t{{header.pre_apply_committee_content}}
\t\t\t<a href=\"\">Conformación del comité</a>
\t\t</div>
\t</div>

\t<div class=\"apply\">
\t\t<h2>Aplicación</h2>
\t\t<div class=\"apply-step\">
\t\t\t{{header.apply_signup_title}}
\t\t\t{{header.apply_signup_content}}
\t\t</div>
\t\t<div class=\"apply-step\">
\t\t\t{{header.apply_report_title}}
\t\t\t{{header.apply_report_content}}
\t\t</div>
\t</div>

\t<div class=\"discover-categories\">
\t\t<h2>¡Está listo para aplicar!</h2>
\t\t<a href=\"#\">Descubra su categoría</a>
\t</div>


{% endblock %}
", "apply.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/apply.html.twig");
    }
}
