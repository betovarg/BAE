<?php

/* partials/base.html.twig */
class __TwigTemplate_4d3b07bd1dadcf5441b78ff45106c44301070c4573aad63c967249f40ee1c78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'sidebar_navigation' => array($this, 'block_sidebar_navigation'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>
<body id=\"top\" class=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">

        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('showcase', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "
    </div>
    ";
        // line 64
        $this->displayBlock('sidebar_navigation', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('bottom', $context, $blocks);
        // line 85
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/styles.css"), "method");
        // line 15
        echo "    ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/azul.js"), "method");
        // line 22
        echo "    ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "        <header class=\"global-header\">
            <div class=\"limiter\">
              <div class=\"global-logo\">
                  <a href=\"";
        // line 34
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</a>
              </div>
              <div class=\"main-nav\">
                  ";
        // line 37
        $this->displayBlock('header_extra', $context, $blocks);
        // line 38
        echo "                  ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 41
        echo "                  <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
              </div>
            </div>
        </header>
        ";
    }

    // line 37
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 38
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 39
        echo "                  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "                  ";
    }

    // line 47
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "        <section class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"limiter\">
              ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "            </div>
        </section>
        ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "        <footer id=\"footer\">
            <p>footer</p>
        </footer>
        ";
    }

    // line 64
    public function block_sidebar_navigation($context, array $blocks = array())
    {
        // line 65
        echo "        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            ";
        // line 67
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "            </div>
        </div>
    ";
    }

    // line 72
    public function block_bottom($context, array $blocks = array())
    {
        // line 73
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 73,  255 => 72,  249 => 68,  247 => 67,  243 => 65,  240 => 64,  233 => 58,  230 => 57,  225 => 52,  219 => 53,  217 => 52,  211 => 50,  208 => 49,  203 => 47,  199 => 40,  196 => 39,  193 => 38,  188 => 37,  180 => 41,  177 => 38,  175 => 37,  167 => 34,  162 => 31,  159 => 30,  155 => 22,  152 => 21,  149 => 20,  146 => 19,  143 => 18,  139 => 15,  136 => 14,  133 => 13,  125 => 23,  123 => 18,  117 => 16,  115 => 13,  110 => 11,  106 => 10,  103 => 9,  101 => 8,  93 => 7,  90 => 6,  87 => 5,  80 => 85,  78 => 72,  75 => 71,  73 => 64,  69 => 62,  67 => 57,  64 => 56,  62 => 49,  59 => 48,  57 => 47,  54 => 46,  52 => 30,  46 => 27,  43 => 26,  41 => 5,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/styles.css') %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/azul.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">

        {% block header %}
        <header class=\"global-header\">
            <div class=\"limiter\">
              <div class=\"global-logo\">
                  <a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a>
              </div>
              <div class=\"main-nav\">
                  {% block header_extra %}{% endblock %}
                  {% block header_navigation %}
                  {% include 'partials/navigation.html.twig' %}
                  {% endblock %}
                  <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
              </div>
            </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section class=\"{{ class }}\">
            <div class=\"limiter\">
              {% block content %}{% endblock %}
            </div>
        </section>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\">
            <p>footer</p>
        </footer>
        {% endblock %}

    </div>
    {% block sidebar_navigation %}
        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            {% include 'partials/navigation.html.twig' %}
            </div>
        </div>
    {% endblock %}

    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/partials/base.html.twig");
    }
}
