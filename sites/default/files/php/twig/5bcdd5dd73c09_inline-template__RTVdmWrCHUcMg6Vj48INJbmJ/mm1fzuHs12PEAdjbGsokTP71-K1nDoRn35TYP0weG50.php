<?php

/* {# inline_template_start #}{#

Description text for the Ajax Example.

#}

{% set simple_ajax_example = path('ajax_example.simplest') %}
{% set ajax_generate_textfields = path('ajax_example.autotextfields') %}
{% set ajax_submit = path('ajax_example.submit_driven_ajax') %}
{% set ajax_dependent_dropdown = path('ajax_example.dependent_dropdown') %}
{% set ajax_dependent_dropdown_nojs = path('ajax_example.dependent_dropdown', {'nojs': 'nojs'}) %}
{% set ajax_dynamic_form = path('ajax_example.dynamic_form_sections') %}
{% set ajax_dynamic_form_nojs = path('ajax_example.dynamic_form_sections', {'nojs': 'nojs'}) %}
{% set ajax_wizard_example = path('ajax_example.wizard') %}
{% set ajax_wizard_example_nojs = path('ajax_example.wizardnojs') %}

{% trans %}

<p>The AJAX example module provides many examples of AJAX including forms, links, and AJAX commands.</p>
<p><a href={{ simple_ajax_example }}>Simplest AJAX Example</a></p>
<p><a href={{ ajax_generate_textfields }}>Generate textfields</a></p>
<p><a href={{ ajax_submit }}>Submit-driven AJAX</a></p>
<p><a href={{ ajax_dependent_dropdown }}>Dependent dropdown</a></p>
<p><a href={{ ajax_dependent_dropdown_nojs }}>Dependent dropdown w/ no JS</a></p>
<p><a href={{ ajax_dynamic_form }}>Dynamic form sections</a></p>
<p><a href={{ ajax_dynamic_form_nojs }}>Dynamic form sections w/ no JS</a></p>
<p><a href={{ ajax_wizard_example }}>AJAX Wizard Example</a></p>
<p><a href={{ ajax_wizard_example_nojs }}>AJAX Wizard Example w/JS turned off</a></p>
{% endtrans %}
 */
class __TwigTemplate_8b5402bb9465e24ecf949c3f25bd50ff92962b4f7bec9884eb23432bce34b1fe extends Twig_Template
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
        $tags = array("set" => 7, "trans" => 17);
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
        $context["simple_ajax_example"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.simplest");
        // line 8
        $context["ajax_generate_textfields"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.autotextfields");
        // line 9
        $context["ajax_submit"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.submit_driven_ajax");
        // line 10
        $context["ajax_dependent_dropdown"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dependent_dropdown");
        // line 11
        $context["ajax_dependent_dropdown_nojs"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dependent_dropdown", array("nojs" => "nojs"));
        // line 12
        $context["ajax_dynamic_form"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dynamic_form_sections");
        // line 13
        $context["ajax_dynamic_form_nojs"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dynamic_form_sections", array("nojs" => "nojs"));
        // line 14
        $context["ajax_wizard_example"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.wizard");
        // line 15
        $context["ajax_wizard_example_nojs"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.wizardnojs");
        // line 16
        echo "
";
        // line 17
        echo t("<p>The AJAX example module provides many examples of AJAX including forms, links, and AJAX commands.</p>
<p><a href=@simple_ajax_example>Simplest AJAX Example</a></p>
<p><a href=@ajax_generate_textfields>Generate textfields</a></p>
<p><a href=@ajax_submit>Submit-driven AJAX</a></p>
<p><a href=@ajax_dependent_dropdown>Dependent dropdown</a></p>
<p><a href=@ajax_dependent_dropdown_nojs>Dependent dropdown w/ no JS</a></p>
<p><a href=@ajax_dynamic_form>Dynamic form sections</a></p>
<p><a href=@ajax_dynamic_form_nojs>Dynamic form sections w/ no JS</a></p>
<p><a href=@ajax_wizard_example>AJAX Wizard Example</a></p>
<p><a href=@ajax_wizard_example_nojs>AJAX Wizard Example w/JS turned off</a></p>", array("@simple_ajax_example" =>         // line 20
($context["simple_ajax_example"] ?? null), "@ajax_generate_textfields" =>         // line 21
($context["ajax_generate_textfields"] ?? null), "@ajax_submit" =>         // line 22
($context["ajax_submit"] ?? null), "@ajax_dependent_dropdown" =>         // line 23
($context["ajax_dependent_dropdown"] ?? null), "@ajax_dependent_dropdown_nojs" =>         // line 24
($context["ajax_dependent_dropdown_nojs"] ?? null), "@ajax_dynamic_form" =>         // line 25
($context["ajax_dynamic_form"] ?? null), "@ajax_dynamic_form_nojs" =>         // line 26
($context["ajax_dynamic_form_nojs"] ?? null), "@ajax_wizard_example" =>         // line 27
($context["ajax_wizard_example"] ?? null), "@ajax_wizard_example_nojs" =>         // line 28
($context["ajax_wizard_example_nojs"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Ajax Example.

#}

{% set simple_ajax_example = path('ajax_example.simplest') %}
{% set ajax_generate_textfields = path('ajax_example.autotextfields') %}
{% set ajax_submit = path('ajax_example.submit_driven_ajax') %}
{% set ajax_dependent_dropdown = path('ajax_example.dependent_dropdown') %}
{% set ajax_dependent_dropdown_nojs = path('ajax_example.dependent_dropdown', {'nojs': 'nojs'}) %}
{% set ajax_dynamic_form = path('ajax_example.dynamic_form_sections') %}
{% set ajax_dynamic_form_nojs = path('ajax_example.dynamic_form_sections', {'nojs': 'nojs'}) %}
{% set ajax_wizard_example = path('ajax_example.wizard') %}
{% set ajax_wizard_example_nojs = path('ajax_example.wizardnojs') %}

{% trans %}

<p>The AJAX example module provides many examples of AJAX including forms, links, and AJAX commands.</p>
<p><a href={{ simple_ajax_example }}>Simplest AJAX Example</a></p>
<p><a href={{ ajax_generate_textfields }}>Generate textfields</a></p>
<p><a href={{ ajax_submit }}>Submit-driven AJAX</a></p>
<p><a href={{ ajax_dependent_dropdown }}>Dependent dropdown</a></p>
<p><a href={{ ajax_dependent_dropdown_nojs }}>Dependent dropdown w/ no JS</a></p>
<p><a href={{ ajax_dynamic_form }}>Dynamic form sections</a></p>
<p><a href={{ ajax_dynamic_form_nojs }}>Dynamic form sections w/ no JS</a></p>
<p><a href={{ ajax_wizard_example }}>AJAX Wizard Example</a></p>
<p><a href={{ ajax_wizard_example_nojs }}>AJAX Wizard Example w/JS turned off</a></p>
{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 28,  113 => 27,  112 => 26,  111 => 25,  110 => 24,  109 => 23,  108 => 22,  107 => 21,  106 => 20,  96 => 17,  93 => 16,  91 => 15,  89 => 14,  87 => 13,  85 => 12,  83 => 11,  81 => 10,  79 => 9,  77 => 8,  75 => 7,  72 => 6,);
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

Description text for the Ajax Example.

#}

{% set simple_ajax_example = path('ajax_example.simplest') %}
{% set ajax_generate_textfields = path('ajax_example.autotextfields') %}
{% set ajax_submit = path('ajax_example.submit_driven_ajax') %}
{% set ajax_dependent_dropdown = path('ajax_example.dependent_dropdown') %}
{% set ajax_dependent_dropdown_nojs = path('ajax_example.dependent_dropdown', {'nojs': 'nojs'}) %}
{% set ajax_dynamic_form = path('ajax_example.dynamic_form_sections') %}
{% set ajax_dynamic_form_nojs = path('ajax_example.dynamic_form_sections', {'nojs': 'nojs'}) %}
{% set ajax_wizard_example = path('ajax_example.wizard') %}
{% set ajax_wizard_example_nojs = path('ajax_example.wizardnojs') %}

{% trans %}

<p>The AJAX example module provides many examples of AJAX including forms, links, and AJAX commands.</p>
<p><a href={{ simple_ajax_example }}>Simplest AJAX Example</a></p>
<p><a href={{ ajax_generate_textfields }}>Generate textfields</a></p>
<p><a href={{ ajax_submit }}>Submit-driven AJAX</a></p>
<p><a href={{ ajax_dependent_dropdown }}>Dependent dropdown</a></p>
<p><a href={{ ajax_dependent_dropdown_nojs }}>Dependent dropdown w/ no JS</a></p>
<p><a href={{ ajax_dynamic_form }}>Dynamic form sections</a></p>
<p><a href={{ ajax_dynamic_form_nojs }}>Dynamic form sections w/ no JS</a></p>
<p><a href={{ ajax_wizard_example }}>AJAX Wizard Example</a></p>
<p><a href={{ ajax_wizard_example_nojs }}>AJAX Wizard Example w/JS turned off</a></p>
{% endtrans %}
", "");
    }
}
