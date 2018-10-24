<?php

/* {# inline_template_start #}{#

Description text for the Menu Example.

#}

{% set custom_access = path('examples.menu_example.custom_access') %}
{% set permissioned = path('examples.menu_example.permissioned') %}
{% set route_only = path('examples.menu_example.route_only') %}
{% set tabs = path('examples.menu_example.tabs') %}
{% set use_url_arguments = path('examples.menu_example.use_url_arguments') %}
{% set title_callbacks = path('examples.menu_example.title_callbacks') %}
{% set placeholder_argument = path('examples.menu_example.placeholder_argument') %}
{% set path_override = path('example.menu_example.path_override') %}

{% trans %}

<p>This page is displayed by the simplest (and base) menu example. Note that
the title of the page is the same as the link title. There are a number of
examples here, from the most basic (like this one) to extravagant mappings of
loaded placeholder arguments. Enjoy!</p>

<ul>
    <li><a href={{ custom_access }}>Custom Access Example</a></li>
    <li><a href={{ permissioned }}>Permissioned Example</a></li>
    <li><a href={{ route_only }}>Route only example</a></li>
    <li><a href={{ tabs }}>Tabs</a></li>
    <li><a href={{ use_url_arguments }}>URL Arguments</a></li>
    <li><a href={{ title_callbacks }}>Dynamic title</a></li>
    <li><a href={{ placeholder_argument }}>Placeholder Arguments</a></li>
    <li><a href={{ path_override }}>Path Override</a></li>
</ul>

{% endtrans %}
 */
class __TwigTemplate_acbcfc3e93947b7d8950e5b1091ceebccfa1a4fa85b5a90ae9bf580dc26bcaf5 extends Twig_Template
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
        $tags = array("set" => 7, "trans" => 16);
        $filters = array();
        $functions = array("path" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans'),
                array(),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 6
        echo "
";
        // line 7
        $context["custom_access"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("examples.menu_example.custom_access");
        // line 8
        $context["permissioned"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("examples.menu_example.permissioned");
        // line 9
        $context["route_only"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("examples.menu_example.route_only");
        // line 10
        $context["tabs"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("examples.menu_example.tabs");
        // line 11
        $context["use_url_arguments"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("examples.menu_example.use_url_arguments");
        // line 12
        $context["title_callbacks"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("examples.menu_example.title_callbacks");
        // line 13
        $context["placeholder_argument"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("examples.menu_example.placeholder_argument");
        // line 14
        $context["path_override"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("example.menu_example.path_override");
        // line 15
        echo "
";
        // line 16
        echo t("<p>This page is displayed by the simplest (and base) menu example. Note that
the title of the page is the same as the link title. There are a number of
examples here, from the most basic (like this one) to extravagant mappings of
loaded placeholder arguments. Enjoy!</p>

<ul>
    <li><a href=@custom_access>Custom Access Example</a></li>
    <li><a href=@permissioned>Permissioned Example</a></li>
    <li><a href=@route_only>Route only example</a></li>
    <li><a href=@tabs>Tabs</a></li>
    <li><a href=@use_url_arguments>URL Arguments</a></li>
    <li><a href=@title_callbacks>Dynamic title</a></li>
    <li><a href=@placeholder_argument>Placeholder Arguments</a></li>
    <li><a href=@path_override>Path Override</a></li>
</ul>", array("@custom_access" =>         // line 24
($context["custom_access"] ?? null), "@permissioned" =>         // line 25
($context["permissioned"] ?? null), "@route_only" =>         // line 26
($context["route_only"] ?? null), "@tabs" =>         // line 27
($context["tabs"] ?? null), "@use_url_arguments" =>         // line 28
($context["use_url_arguments"] ?? null), "@title_callbacks" =>         // line 29
($context["title_callbacks"] ?? null), "@placeholder_argument" =>         // line 30
($context["placeholder_argument"] ?? null), "@path_override" =>         // line 31
($context["path_override"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Menu Example.

#}

{% set custom_access = path('examples.menu_example.custom_access') %}
{% set permissioned = path('examples.menu_example.permissioned') %}
{% set route_only = path('examples.menu_example.route_only') %}
{% set tabs = path('examples.menu_example.tabs') %}
{% set use_url_arguments = path('examples.menu_example.use_url_arguments') %}
{% set title_callbacks = path('examples.menu_example.title_callbacks') %}
{% set placeholder_argument = path('examples.menu_example.placeholder_argument') %}
{% set path_override = path('example.menu_example.path_override') %}

{% trans %}

<p>This page is displayed by the simplest (and base) menu example. Note that
the title of the page is the same as the link title. There are a number of
examples here, from the most basic (like this one) to extravagant mappings of
loaded placeholder arguments. Enjoy!</p>

<ul>
    <li><a href={{ custom_access }}>Custom Access Example</a></li>
    <li><a href={{ permissioned }}>Permissioned Example</a></li>
    <li><a href={{ route_only }}>Route only example</a></li>
    <li><a href={{ tabs }}>Tabs</a></li>
    <li><a href={{ use_url_arguments }}>URL Arguments</a></li>
    <li><a href={{ title_callbacks }}>Dynamic title</a></li>
    <li><a href={{ placeholder_argument }}>Placeholder Arguments</a></li>
    <li><a href={{ path_override }}>Path Override</a></li>
</ul>

{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  120 => 30,  119 => 29,  118 => 28,  117 => 27,  116 => 26,  115 => 25,  114 => 24,  99 => 16,  96 => 15,  94 => 14,  92 => 13,  90 => 12,  88 => 11,  86 => 10,  84 => 9,  82 => 8,  80 => 7,  77 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}{#

Description text for the Menu Example.

#}

{% set custom_access = path('examples.menu_example.custom_access') %}
{% set permissioned = path('examples.menu_example.permissioned') %}
{% set route_only = path('examples.menu_example.route_only') %}
{% set tabs = path('examples.menu_example.tabs') %}
{% set use_url_arguments = path('examples.menu_example.use_url_arguments') %}
{% set title_callbacks = path('examples.menu_example.title_callbacks') %}
{% set placeholder_argument = path('examples.menu_example.placeholder_argument') %}
{% set path_override = path('example.menu_example.path_override') %}

{% trans %}

<p>This page is displayed by the simplest (and base) menu example. Note that
the title of the page is the same as the link title. There are a number of
examples here, from the most basic (like this one) to extravagant mappings of
loaded placeholder arguments. Enjoy!</p>

<ul>
    <li><a href={{ custom_access }}>Custom Access Example</a></li>
    <li><a href={{ permissioned }}>Permissioned Example</a></li>
    <li><a href={{ route_only }}>Route only example</a></li>
    <li><a href={{ tabs }}>Tabs</a></li>
    <li><a href={{ use_url_arguments }}>URL Arguments</a></li>
    <li><a href={{ title_callbacks }}>Dynamic title</a></li>
    <li><a href={{ placeholder_argument }}>Placeholder Arguments</a></li>
    <li><a href={{ path_override }}>Path Override</a></li>
</ul>

{% endtrans %}
", "");
    }
}
