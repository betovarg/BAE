<?php

/* forms/fields/display/display.html.twig */
class __TwigTemplate_d3a4e306c19e1f3dff19fd438e15ac6ee116f4f5d6484bb3e507478b9323bb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/display/display.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-display-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">
        ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
            // line 6
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 7
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "content", array())));
                echo "
            ";
            } else {
                // line 9
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "content", array())));
                echo "
            ";
            }
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 13
                echo "                ";
                echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "content", array()));
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "content", array()));
                echo "
            ";
            }
            // line 17
            echo "        ";
        }
        // line 18
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/display/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  71 => 17,  65 => 15,  59 => 13,  56 => 12,  53 => 11,  47 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"form-display-wrapper {{ field.size }}\">
        {% if field.markdown %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ field.content|tu|markdown|raw }}
            {% else %}
                {{ field.content|t|markdown|raw }}
            {% endif %}
        {% else %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ field.content|tu|raw }}
            {% else %}
                {{ field.content|t|raw }}
            {% endif %}
        {% endif %}
    </div>
{% endblock %}
", "forms/fields/display/display.html.twig", "/Applications/MAMP/htdocs/grav/user/plugins/form/templates/forms/fields/display/display.html.twig");
    }
}
