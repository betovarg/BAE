<?php

/* success-story-page.html.twig */
class __TwigTemplate_396ffdbc21cf1a6234a5bd80e15c61080e3b0efe37cc5955d2251a4727326241 extends Twig_Template
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
        $this->loadTemplate("success-story-page.html.twig", "success-story-page.html.twig", 1, "1156277687")->display($context);
    }

    public function getTemplateName()
    {
        return "success-story-page.html.twig";
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

\t\t<div class=\"blog-header\">
\t\t\t<h1>{{ page.header.title }}</h1>
\t\t\t{{ page.content }}
\t\t</div>

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'success-story-item.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t\t  {% endfor %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "success-story-page.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/success-story-page.html.twig");
    }
}


/* success-story-page.html.twig */
class __TwigTemplate_396ffdbc21cf1a6234a5bd80e15c61080e3b0efe37cc5955d2251a4727326241_1156277687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "success-story-page.html.twig", 1);
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
\t\t<div class=\"blog-header\">
\t\t\t<h1>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
\t\t\t";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t";
        // line 14
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
            // line 15
            echo "\t\t\t        ";
            $this->loadTemplate("success-story-item.html.twig", "success-story-page.html.twig", 15)->display(array_merge($context, array("category" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
            // line 16
            echo "\t\t\t  ";
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
        // line 17
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "success-story-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 17,  134 => 16,  131 => 15,  114 => 14,  106 => 9,  102 => 8,  98 => 6,  95 => 5,  91 => 1,  89 => 3,  19 => 1,);
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

\t\t<div class=\"blog-header\">
\t\t\t<h1>{{ page.header.title }}</h1>
\t\t\t{{ page.content }}
\t\t</div>

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'success-story-item.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t\t  {% endfor %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "success-story-page.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/success-story-page.html.twig");
    }
}
