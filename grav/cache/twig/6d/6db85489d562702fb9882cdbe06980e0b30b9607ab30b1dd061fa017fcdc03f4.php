<?php

/* categories.html.twig */
class __TwigTemplate_1b13a87b890e46b483235cb3f52f5022a03de15b4dcb6ab3e0a76ba2e99e0e5c extends Twig_Template
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
        if (($context["truncate"] ?? null)) {
            // line 2
            echo "<!-- se muestra si es la lista de categorías -->

<div class=\"list-item ";
            // line 4
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "commitee_type", array());
            echo " \">

\t";
            // line 6
            $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "logo_image", array()));
            // line 7
            echo "\t";
            $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
            // line 8
            echo "\t";
            $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
            // line 9
            echo "
\t";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 200), "method"), "html", array(), "method");
            echo "

\t<h2><a href=\"";
            // line 12
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h2>

\t";
            // line 14
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
\t<p><a href=\"";
            // line 15
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>

</div>

";
        } else {
            // line 20
            echo "<!-- se muestra si es el detalle de la categoría -->

\t";
            // line 22
            $this->loadTemplate("categories.html.twig", "categories.html.twig", 22, "492271348")->display($context);
            // line 129
            echo "
\t";
        }
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 129,  71 => 22,  67 => 20,  57 => 15,  53 => 14,  46 => 12,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if truncate %}
<!-- se muestra si es la lista de categorías -->

<div class=\"list-item {{page.header.commitee_type}} \">

\t{% set image_parts = pathinfo(page.header.logo_image) %}
\t{% set image_basename = image_parts.basename %}
\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t{{ image_page.media[image_basename].resize(200).html() }}

\t<h2><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>

\t{{ page.summary }}
\t<p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>

</div>

{% else %}
<!-- se muestra si es el detalle de la categoría -->

\t{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t<div class=\"category-item\">

\t\t{% set header_image = page.header.header_image|defined(true) %}
\t\t{% set header_image_file = page.header.header_image_file %}

\t\t<div class=\"list-blog-header\">
\t\t\t<h1>{{ page.title }}</h1>
\t\t</div>

\t\t<div class=\"content\">
\t\t\t<div class=\"logo\">
\t\t\t\t{% set image_parts = pathinfo(header.logo_image) %}
\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t{{ image_page.media[image_basename].resize(200).html() }}
\t\t\t</div>
\t\t\t<div class=\"category-content\">
\t\t\t\t{{ page.content }}
\t\t\t</div>
\t\t\t<div class=\"coordinator\">
\t\t\t\t<h3>Coordinador de la categoría</h3>
\t\t\t\t{% set image_parts = pathinfo(header.coordinator_picture) %}
\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t{{ image_page.media[image_basename].resize(300).html() }}
\t\t\t\t<p>{{header.coordinator_name}}</p>
\t\t\t\t<p>{{header.coordinator_org}}</p>
\t\t\t\t<p>{{header.coordinator_email}}</p>
\t\t\t\t<p>{{header.coordinator_tel}}</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"steps\">
\t\t\t<h3>Steps</h3>
\t\t\t{% if header.steps_signup_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_signup_title}}</h3>
\t\t\t\t{{header.steps_signup_description}}
\t\t\t\t{{header.steps_signup_date_start}}
\t\t\t\t{{header.steps_signup_date_end}}
\t\t\t\t{{header.steps_signup_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_diagnose_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_diagnose_title}}</h3>
\t\t\t\t{{header.steps_diagnose_description}}
\t\t\t\t{{header.steps_diagnose_date_start}}
\t\t\t\t{{header.steps_diagnose_date_end}}
\t\t\t\t{{header.steps_diagnose_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_plan_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_plan_title}}</h3>
\t\t\t\t{{header.steps_plan_description}}
\t\t\t\t{{header.steps_plan_date_start}}
\t\t\t\t{{header.steps_plan_date_end}}
\t\t\t\t{{header.steps_plan_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_report_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_report_title}}</h3>
\t\t\t\t{{header.steps_report_description}}
\t\t\t\t{{header.steps_report_date_start}}
\t\t\t\t{{header.steps_report_date_end}}
\t\t\t\t{{header.steps_report_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>

\t\t<div class=\"resources\">
\t\t\t<h3>Recursos relacionados</h3>
\t\t\t{% for resource in page.header.document_files %}
\t\t\t<div class=\"resources-item\">
\t\t\t\t<h4>{{resource.resource_title}}</h4>
\t\t\t\t<p>{{resource.resource_description}}</p>
\t\t\t\t<p>{{resource.resource_select}}</p>

\t\t\t\t{% if resource.resource_url %}
\t\t\t\t\t<p><a href=\"{{resource.resource_url}}\">Ver recurso</a></p>
\t\t\t\t{% endif %}

\t\t\t\t{% if resource.resource_file_upload %}
\t\t\t\t\t<p>{{resource.resource_file_upload}}</p>
\t\t\t\t{% endif %}
\t\t\t\t[falta meter como jalar el file]

\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t</div>
\t{% endblock %}

\t{% endembed %}

\t{% endif %}
", "categories.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/categories.html.twig");
    }
}


/* categories.html.twig */
class __TwigTemplate_1b13a87b890e46b483235cb3f52f5022a03de15b4dcb6ab3e0a76ba2e99e0e5c_492271348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("partials/base.html.twig", "categories.html.twig", 22);
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

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
\t<div class=\"category-item\">

\t\t";
        // line 28
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 29
        echo "\t\t";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 30
        echo "
\t\t<div class=\"list-blog-header\">
\t\t\t<h1>";
        // line 32
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
\t\t</div>

\t\t<div class=\"content\">
\t\t\t<div class=\"logo\">
\t\t\t\t";
        // line 37
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "logo_image", array()));
        // line 38
        echo "\t\t\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 39
        echo "\t\t\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 40
        echo "
\t\t\t\t";
        // line 41
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 200), "method"), "html", array(), "method");
        echo "
\t\t\t</div>
\t\t\t<div class=\"category-content\">
\t\t\t\t";
        // line 44
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t</div>
\t\t\t<div class=\"coordinator\">
\t\t\t\t<h3>Coordinador de la categoría</h3>
\t\t\t\t";
        // line 48
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "coordinator_picture", array()));
        // line 49
        echo "\t\t\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 50
        echo "\t\t\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 51
        echo "
\t\t\t\t";
        // line 52
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 300), "method"), "html", array(), "method");
        echo "
\t\t\t\t<p>";
        // line 53
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_name", array());
        echo "</p>
\t\t\t\t<p>";
        // line 54
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_org", array());
        echo "</p>
\t\t\t\t<p>";
        // line 55
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_email", array());
        echo "</p>
\t\t\t\t<p>";
        // line 56
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_tel", array());
        echo "</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"steps\">
\t\t\t<h3>Steps</h3>
\t\t\t";
        // line 62
        if (($this->getAttribute(($context["header"] ?? null), "steps_signup_enable", array()) == 1)) {
            // line 63
            echo "\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>";
            // line 64
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_title", array());
            echo "</h3>
\t\t\t\t";
            // line 65
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_description", array());
            echo "
\t\t\t\t";
            // line 66
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_date_start", array());
            echo "
\t\t\t\t";
            // line 67
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_date_end", array());
            echo "
\t\t\t\t";
            // line 68
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_file", array());
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 71
        echo "
\t\t\t";
        // line 72
        if (($this->getAttribute(($context["header"] ?? null), "steps_diagnose_enable", array()) == 1)) {
            // line 73
            echo "\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>";
            // line 74
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_title", array());
            echo "</h3>
\t\t\t\t";
            // line 75
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_description", array());
            echo "
\t\t\t\t";
            // line 76
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_date_start", array());
            echo "
\t\t\t\t";
            // line 77
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_date_end", array());
            echo "
\t\t\t\t";
            // line 78
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_file", array());
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 81
        echo "
\t\t\t";
        // line 82
        if (($this->getAttribute(($context["header"] ?? null), "steps_plan_enable", array()) == 1)) {
            // line 83
            echo "\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>";
            // line 84
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_title", array());
            echo "</h3>
\t\t\t\t";
            // line 85
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_description", array());
            echo "
\t\t\t\t";
            // line 86
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_date_start", array());
            echo "
\t\t\t\t";
            // line 87
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_date_end", array());
            echo "
\t\t\t\t";
            // line 88
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_file", array());
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 91
        echo "
\t\t\t";
        // line 92
        if (($this->getAttribute(($context["header"] ?? null), "steps_report_enable", array()) == 1)) {
            // line 93
            echo "\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>";
            // line 94
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_title", array());
            echo "</h3>
\t\t\t\t";
            // line 95
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_description", array());
            echo "
\t\t\t\t";
            // line 96
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_date_start", array());
            echo "
\t\t\t\t";
            // line 97
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_date_end", array());
            echo "
\t\t\t\t";
            // line 98
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_file", array());
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 101
        echo "
\t\t</div>

\t\t<div class=\"resources\">
\t\t\t<h3>Recursos relacionados</h3>
\t\t\t";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "document_files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 107
            echo "\t\t\t<div class=\"resources-item\">
\t\t\t\t<h4>";
            // line 108
            echo $this->getAttribute($context["resource"], "resource_title", array());
            echo "</h4>
\t\t\t\t<p>";
            // line 109
            echo $this->getAttribute($context["resource"], "resource_description", array());
            echo "</p>
\t\t\t\t<p>";
            // line 110
            echo $this->getAttribute($context["resource"], "resource_select", array());
            echo "</p>

\t\t\t\t";
            // line 112
            if ($this->getAttribute($context["resource"], "resource_url", array())) {
                // line 113
                echo "\t\t\t\t\t<p><a href=\"";
                echo $this->getAttribute($context["resource"], "resource_url", array());
                echo "\">Ver recurso</a></p>
\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t";
            // line 116
            if ($this->getAttribute($context["resource"], "resource_file_upload", array())) {
                // line 117
                echo "\t\t\t\t\t<p>";
                echo $this->getAttribute($context["resource"], "resource_file_upload", array());
                echo "</p>
\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t[falta meter como jalar el file]

\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t</div>

\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 123,  511 => 119,  505 => 117,  503 => 116,  500 => 115,  494 => 113,  492 => 112,  487 => 110,  483 => 109,  479 => 108,  476 => 107,  472 => 106,  465 => 101,  459 => 98,  455 => 97,  451 => 96,  447 => 95,  443 => 94,  440 => 93,  438 => 92,  435 => 91,  429 => 88,  425 => 87,  421 => 86,  417 => 85,  413 => 84,  410 => 83,  408 => 82,  405 => 81,  399 => 78,  395 => 77,  391 => 76,  387 => 75,  383 => 74,  380 => 73,  378 => 72,  375 => 71,  369 => 68,  365 => 67,  361 => 66,  357 => 65,  353 => 64,  350 => 63,  348 => 62,  339 => 56,  335 => 55,  331 => 54,  327 => 53,  323 => 52,  320 => 51,  317 => 50,  314 => 49,  312 => 48,  305 => 44,  299 => 41,  296 => 40,  293 => 39,  290 => 38,  288 => 37,  280 => 32,  276 => 30,  273 => 29,  271 => 28,  266 => 25,  263 => 24,  246 => 22,  73 => 129,  71 => 22,  67 => 20,  57 => 15,  53 => 14,  46 => 12,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if truncate %}
<!-- se muestra si es la lista de categorías -->

<div class=\"list-item {{page.header.commitee_type}} \">

\t{% set image_parts = pathinfo(page.header.logo_image) %}
\t{% set image_basename = image_parts.basename %}
\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t{{ image_page.media[image_basename].resize(200).html() }}

\t<h2><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>

\t{{ page.summary }}
\t<p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>

</div>

{% else %}
<!-- se muestra si es el detalle de la categoría -->

\t{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t<div class=\"category-item\">

\t\t{% set header_image = page.header.header_image|defined(true) %}
\t\t{% set header_image_file = page.header.header_image_file %}

\t\t<div class=\"list-blog-header\">
\t\t\t<h1>{{ page.title }}</h1>
\t\t</div>

\t\t<div class=\"content\">
\t\t\t<div class=\"logo\">
\t\t\t\t{% set image_parts = pathinfo(header.logo_image) %}
\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t{{ image_page.media[image_basename].resize(200).html() }}
\t\t\t</div>
\t\t\t<div class=\"category-content\">
\t\t\t\t{{ page.content }}
\t\t\t</div>
\t\t\t<div class=\"coordinator\">
\t\t\t\t<h3>Coordinador de la categoría</h3>
\t\t\t\t{% set image_parts = pathinfo(header.coordinator_picture) %}
\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t{{ image_page.media[image_basename].resize(300).html() }}
\t\t\t\t<p>{{header.coordinator_name}}</p>
\t\t\t\t<p>{{header.coordinator_org}}</p>
\t\t\t\t<p>{{header.coordinator_email}}</p>
\t\t\t\t<p>{{header.coordinator_tel}}</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"steps\">
\t\t\t<h3>Steps</h3>
\t\t\t{% if header.steps_signup_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_signup_title}}</h3>
\t\t\t\t{{header.steps_signup_description}}
\t\t\t\t{{header.steps_signup_date_start}}
\t\t\t\t{{header.steps_signup_date_end}}
\t\t\t\t{{header.steps_signup_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_diagnose_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_diagnose_title}}</h3>
\t\t\t\t{{header.steps_diagnose_description}}
\t\t\t\t{{header.steps_diagnose_date_start}}
\t\t\t\t{{header.steps_diagnose_date_end}}
\t\t\t\t{{header.steps_diagnose_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_plan_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_plan_title}}</h3>
\t\t\t\t{{header.steps_plan_description}}
\t\t\t\t{{header.steps_plan_date_start}}
\t\t\t\t{{header.steps_plan_date_end}}
\t\t\t\t{{header.steps_plan_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_report_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<h3>{{header.steps_report_title}}</h3>
\t\t\t\t{{header.steps_report_description}}
\t\t\t\t{{header.steps_report_date_start}}
\t\t\t\t{{header.steps_report_date_end}}
\t\t\t\t{{header.steps_report_file}}
\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>

\t\t<div class=\"resources\">
\t\t\t<h3>Recursos relacionados</h3>
\t\t\t{% for resource in page.header.document_files %}
\t\t\t<div class=\"resources-item\">
\t\t\t\t<h4>{{resource.resource_title}}</h4>
\t\t\t\t<p>{{resource.resource_description}}</p>
\t\t\t\t<p>{{resource.resource_select}}</p>

\t\t\t\t{% if resource.resource_url %}
\t\t\t\t\t<p><a href=\"{{resource.resource_url}}\">Ver recurso</a></p>
\t\t\t\t{% endif %}

\t\t\t\t{% if resource.resource_file_upload %}
\t\t\t\t\t<p>{{resource.resource_file_upload}}</p>
\t\t\t\t{% endif %}
\t\t\t\t[falta meter como jalar el file]

\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t</div>
\t{% endblock %}

\t{% endembed %}

\t{% endif %}
", "categories.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/azul/templates/categories.html.twig");
    }
}
