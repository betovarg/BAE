<?php

/* category-page.html.twig */
class __TwigTemplate_a99072aa8c806f93e8fc040fa3ced6a505294e94ec06b45c287d4029a27ff683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("category-page.html.twig", "category-page.html.twig", 1, "1898526538")->display($context);
    }

    public function getTemplateName()
    {
        return "category-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}

\t\t<div class=\"intro\">
\t\t\t<h1>{{ page.header.page_title }}</h1>
\t\t\t{{ page.content }}
\t\t</div>

\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t{% for child in collection %}
\t\t        {% include 'categories.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t  {% endfor %}
\t\t</div>

\t{% endblock %}

{% endembed %}
", "category-page.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/category-page.html.twig");
    }
}


/* category-page.html.twig */
class __TwigTemplate_a99072aa8c806f93e8fc040fa3ced6a505294e94ec06b45c287d4029a27ff683_1898526538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "category-page.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t\t<div class=\"intro\">
\t\t\t<h1>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "page_title", array());
        echo "</h1>
\t\t\t";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>

\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 14
            echo "\t\t        ";
            $this->loadTemplate("categories.html.twig", "category-page.html.twig", 14)->display(array_merge($context, array("category" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
            // line 15
            echo "\t\t  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "category-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 16,  132 => 15,  129 => 14,  112 => 13,  105 => 9,  101 => 8,  97 => 6,  94 => 5,  90 => 1,  88 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}

\t\t<div class=\"intro\">
\t\t\t<h1>{{ page.header.page_title }}</h1>
\t\t\t{{ page.content }}
\t\t</div>

\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t{% for child in collection %}
\t\t        {% include 'categories.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t  {% endfor %}
\t\t</div>

\t{% endblock %}

{% endembed %}
", "category-page.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/category-page.html.twig");
    }
}
