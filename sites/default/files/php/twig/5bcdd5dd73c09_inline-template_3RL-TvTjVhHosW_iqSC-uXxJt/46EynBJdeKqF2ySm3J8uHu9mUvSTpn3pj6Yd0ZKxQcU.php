<?php

/* {# inline_template_start #}{#

Description text for the Form API Example.

#}

{{ attach_library('core/drupal.dialog.ajax') }}
{% set simple_form = path('form_api_example.simple_form') %}
{% set multistep_form = path('form_api_example.multistep_form') %}
{% set input_demo = path('form_api_example.input_demo') %}
{% set build_demo = path('form_api_example.build_demo') %}
{% set container_demo = path('form_api_example.container_demo') %}
{% set state_demo = path('form_api_example.state_demo') %}
{% set vertical_tabs_demo = path('form_api_example.vertical_tabs_demo') %}
{% set ajax_demo = path('form_api_example.ajax_color_demo') %}
{% set ajax_addmore = path('form_api_example.ajax_addmore') %}
{% set modal_form = path('form_api_example.modal_form', {'nojs': 'nojs'}) %}
{% set block_admin = path('block.admin_display') %}

{% trans %}
<p>Form examples to demonstrate common UI solutions using the Drupal Form API</p>
<p><a href={{ simple_form }}>Simple form</a></p>
<p><a href={{ multistep_form }}>Multistep form</a></p>
<p><a href={{ input_demo }}>Common input elements</a></p>
<p><a href={{ build_demo }}>Build form demo</a></p>
<p><a href={{ container_demo }}>Container elements</a></p>
<p><a href={{ state_demo }}>Form state binding</a></p>
<p><a href={{ vertical_tabs_demo }}>Vertical tab elements</a></p>
<p><a href={{ ajax_demo }}>Ajax form</a></p>
<p><a href={{ ajax_addmore }}>Add-more button</a></p>
<p><a href={{ modal_form }}>Modal form</a></p>

<p>This module also provides a block, "Example: Display a form" that
    demonstrates how to display a form in a block. This same technique can be
    used whenever you need to display a form that is not the primary content of
    a page. You can enable it on your site <a href={{ block_admin }}>using the
    block admin page</a>.</p>
{% endtrans %}
 */
class __TwigTemplate_12a10bb83209fae1f40ee2a329aca5e45be6db535043e3152e56a90540414900 extends Twig_Template
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
        $tags = array("set" => 8, "trans" => 20);
        $filters = array();
        $functions = array("attach_library" => 7, "path" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans'),
                array(),
                array('attach_library', 'path')
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("core/drupal.dialog.ajax"), "html", null, true));
        echo "
";
        // line 8
        $context["simple_form"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.simple_form");
        // line 9
        $context["multistep_form"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.multistep_form");
        // line 10
        $context["input_demo"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.input_demo");
        // line 11
        $context["build_demo"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.build_demo");
        // line 12
        $context["container_demo"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.container_demo");
        // line 13
        $context["state_demo"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.state_demo");
        // line 14
        $context["vertical_tabs_demo"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.vertical_tabs_demo");
        // line 15
        $context["ajax_demo"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.ajax_color_demo");
        // line 16
        $context["ajax_addmore"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.ajax_addmore");
        // line 17
        $context["modal_form"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("form_api_example.modal_form", array("nojs" => "nojs"));
        // line 18
        $context["block_admin"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("block.admin_display");
        // line 19
        echo "
";
        // line 20
        echo t("<p>Form examples to demonstrate common UI solutions using the Drupal Form API</p>
<p><a href=@simple_form>Simple form</a></p>
<p><a href=@multistep_form>Multistep form</a></p>
<p><a href=@input_demo>Common input elements</a></p>
<p><a href=@build_demo>Build form demo</a></p>
<p><a href=@container_demo>Container elements</a></p>
<p><a href=@state_demo>Form state binding</a></p>
<p><a href=@vertical_tabs_demo>Vertical tab elements</a></p>
<p><a href=@ajax_demo>Ajax form</a></p>
<p><a href=@ajax_addmore>Add-more button</a></p>
<p><a href=@modal_form>Modal form</a></p>

<p>This module also provides a block, \"Example: Display a form\" that
    demonstrates how to display a form in a block. This same technique can be
    used whenever you need to display a form that is not the primary content of
    a page. You can enable it on your site <a href=@block_admin>using the
    block admin page</a>.</p>", array("@simple_form" =>         // line 22
($context["simple_form"] ?? null), "@multistep_form" =>         // line 23
($context["multistep_form"] ?? null), "@input_demo" =>         // line 24
($context["input_demo"] ?? null), "@build_demo" =>         // line 25
($context["build_demo"] ?? null), "@container_demo" =>         // line 26
($context["container_demo"] ?? null), "@state_demo" =>         // line 27
($context["state_demo"] ?? null), "@vertical_tabs_demo" =>         // line 28
($context["vertical_tabs_demo"] ?? null), "@ajax_demo" =>         // line 29
($context["ajax_demo"] ?? null), "@ajax_addmore" =>         // line 30
($context["ajax_addmore"] ?? null), "@modal_form" =>         // line 31
($context["modal_form"] ?? null), "@block_admin" =>         // line 36
($context["block_admin"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Form API Example.

#}

{{ attach_library('core/drupal.dialog.ajax') }}
{% set simple_form = path('form_api_example.simple_form') %}
{% set multistep_form = path('form_api_example.multistep_form') %}
{% set input_demo = path('form_api_example.input_demo') %}
{% set build_demo = path('form_api_example.build_demo') %}
{% set container_demo = path('form_api_example.container_demo') %}
{% set state_demo = path('form_api_example.state_demo') %}
{% set vertical_tabs_demo = path('form_api_example.vertical_tabs_demo') %}
{% set ajax_demo = path('form_api_example.ajax_color_demo') %}
{% set ajax_addmore = path('form_api_example.ajax_addmore') %}
{% set modal_form = path('form_api_example.modal_form', {'nojs': 'nojs'}) %}
{% set block_admin = path('block.admin_display') %}

{% trans %}
<p>Form examples to demonstrate common UI solutions using the Drupal Form API</p>
<p><a href={{ simple_form }}>Simple form</a></p>
<p><a href={{ multistep_form }}>Multistep form</a></p>
<p><a href={{ input_demo }}>Common input elements</a></p>
<p><a href={{ build_demo }}>Build form demo</a></p>
<p><a href={{ container_demo }}>Container elements</a></p>
<p><a href={{ state_demo }}>Form state binding</a></p>
<p><a href={{ vertical_tabs_demo }}>Vertical tab elements</a></p>
<p><a href={{ ajax_demo }}>Ajax form</a></p>
<p><a href={{ ajax_addmore }}>Add-more button</a></p>
<p><a href={{ modal_form }}>Modal form</a></p>

<p>This module also provides a block, \"Example: Display a form\" that
    demonstrates how to display a form in a block. This same technique can be
    used whenever you need to display a form that is not the primary content of
    a page. You can enable it on your site <a href={{ block_admin }}>using the
    block admin page</a>.</p>
{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 36,  139 => 31,  138 => 30,  137 => 29,  136 => 28,  135 => 27,  134 => 26,  133 => 25,  132 => 24,  131 => 23,  130 => 22,  113 => 20,  110 => 19,  108 => 18,  106 => 17,  104 => 16,  102 => 15,  100 => 14,  98 => 13,  96 => 12,  94 => 11,  92 => 10,  90 => 9,  88 => 8,  84 => 7,  81 => 6,);
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

Description text for the Form API Example.

#}

{{ attach_library('core/drupal.dialog.ajax') }}
{% set simple_form = path('form_api_example.simple_form') %}
{% set multistep_form = path('form_api_example.multistep_form') %}
{% set input_demo = path('form_api_example.input_demo') %}
{% set build_demo = path('form_api_example.build_demo') %}
{% set container_demo = path('form_api_example.container_demo') %}
{% set state_demo = path('form_api_example.state_demo') %}
{% set vertical_tabs_demo = path('form_api_example.vertical_tabs_demo') %}
{% set ajax_demo = path('form_api_example.ajax_color_demo') %}
{% set ajax_addmore = path('form_api_example.ajax_addmore') %}
{% set modal_form = path('form_api_example.modal_form', {'nojs': 'nojs'}) %}
{% set block_admin = path('block.admin_display') %}

{% trans %}
<p>Form examples to demonstrate common UI solutions using the Drupal Form API</p>
<p><a href={{ simple_form }}>Simple form</a></p>
<p><a href={{ multistep_form }}>Multistep form</a></p>
<p><a href={{ input_demo }}>Common input elements</a></p>
<p><a href={{ build_demo }}>Build form demo</a></p>
<p><a href={{ container_demo }}>Container elements</a></p>
<p><a href={{ state_demo }}>Form state binding</a></p>
<p><a href={{ vertical_tabs_demo }}>Vertical tab elements</a></p>
<p><a href={{ ajax_demo }}>Ajax form</a></p>
<p><a href={{ ajax_addmore }}>Add-more button</a></p>
<p><a href={{ modal_form }}>Modal form</a></p>

<p>This module also provides a block, \"Example: Display a form\" that
    demonstrates how to display a form in a block. This same technique can be
    used whenever you need to display a form that is not the primary content of
    a page. You can enable it on your site <a href={{ block_admin }}>using the
    block admin page</a>.</p>
{% endtrans %}
", "");
    }
}
