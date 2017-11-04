<?php

/* about.html.twig */
class __TwigTemplate_579fa30b87e3f57f8cf765c35514d8806fe19183802324a7eb53d6581d7ebf63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
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

\t<div class=\"goals\">
\t\t<h2>";
        // line 11
        echo $this->getAttribute(($context["header"] ?? null), "goal_title", array());
        echo "</h2>
\t\t<p>";
        // line 12
        echo $this->getAttribute(($context["header"] ?? null), "goal_content", array());
        echo "</p>
\t\t<div class=\"goal-image\">
\t\t\t";
        // line 14
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "goal_image", array()));
        // line 15
        echo "\t\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 16
        echo "\t\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 17
        echo "
\t\t\t";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 600), "method"), "html", array(), "method");
        echo "
\t\t</div>
\t</div>

\t<div class=\"acievements\">
\t\t<h2>Logros</h2>

\t\t<div class=\"tab-1\">
\t\t\t<h3>";
        // line 26
        echo $this->getAttribute(($context["header"] ?? null), "achieve_first_title", array());
        echo "</h3>
\t\t\t<p>";
        // line 27
        echo $this->getAttribute(($context["header"] ?? null), "achieve_first_content", array());
        echo "</p>
\t\t</div>
\t\t<div class=\"tab-2\">
\t\t\t<h3>";
        // line 30
        echo $this->getAttribute(($context["header"] ?? null), "achieve_second_title", array());
        echo "</h3>
\t\t\t<p>";
        // line 31
        echo $this->getAttribute(($context["header"] ?? null), "achieve_second_content", array());
        echo "</p>
\t\t</div>
\t\t<div class=\"tab-3\">
\t\t\t<h3>";
        // line 34
        echo $this->getAttribute(($context["header"] ?? null), "achieve_third_title", array());
        echo "</h3>
\t\t\t<p>";
        // line 35
        echo $this->getAttribute(($context["header"] ?? null), "achieve_third_content", array());
        echo "</p>
\t\t</div>
\t\t<div class=\"tab-4\">
\t\t\t<h3>";
        // line 38
        echo $this->getAttribute(($context["header"] ?? null), "achieve_third_title", array());
        echo "</h3>
\t\t\t<p>";
        // line 39
        echo $this->getAttribute(($context["header"] ?? null), "achieve_third_content", array());
        echo "</p>
\t\t</div>
\t</div>

\t<div class=\"team\">
\t\t<h3>";
        // line 44
        echo $this->getAttribute(($context["header"] ?? null), "team_title", array());
        echo "</h3>
\t\t<p>";
        // line 45
        echo $this->getAttribute(($context["header"] ?? null), "team_content", array());
        echo "</p>

\t\t";
        // line 47
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "team_image", array()));
        // line 48
        echo "\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 49
        echo "\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 50
        echo "
\t\t";
        // line 51
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 800), "method"), "html", array(), "method");
        echo "
\t</div>

";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  136 => 50,  133 => 49,  130 => 48,  128 => 47,  123 => 45,  119 => 44,  111 => 39,  107 => 38,  101 => 35,  97 => 34,  91 => 31,  87 => 30,  81 => 27,  77 => 26,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  50 => 12,  46 => 11,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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

\t<div class=\"goals\">
\t\t<h2>{{header.goal_title}}</h2>
\t\t<p>{{header.goal_content}}</p>
\t\t<div class=\"goal-image\">
\t\t\t{% set image_parts = pathinfo(header.goal_image) %}
\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t{{ image_page.media[image_basename].resize(600).html() }}
\t\t</div>
\t</div>

\t<div class=\"acievements\">
\t\t<h2>Logros</h2>

\t\t<div class=\"tab-1\">
\t\t\t<h3>{{header.achieve_first_title}}</h3>
\t\t\t<p>{{header.achieve_first_content}}</p>
\t\t</div>
\t\t<div class=\"tab-2\">
\t\t\t<h3>{{header.achieve_second_title}}</h3>
\t\t\t<p>{{header.achieve_second_content}}</p>
\t\t</div>
\t\t<div class=\"tab-3\">
\t\t\t<h3>{{header.achieve_third_title}}</h3>
\t\t\t<p>{{header.achieve_third_content}}</p>
\t\t</div>
\t\t<div class=\"tab-4\">
\t\t\t<h3>{{header.achieve_third_title}}</h3>
\t\t\t<p>{{header.achieve_third_content}}</p>
\t\t</div>
\t</div>

\t<div class=\"team\">
\t\t<h3>{{header.team_title}}</h3>
\t\t<p>{{header.team_content}}</p>

\t\t{% set image_parts = pathinfo(header.team_image) %}
\t\t{% set image_basename = image_parts.basename %}
\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t{{ image_page.media[image_basename].resize(800).html() }}
\t</div>

{% endblock %}
", "about.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/about.html.twig");
    }
}
