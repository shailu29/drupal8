<?php

/* {# inline_template_start #}{#

Description text for the Hooks Example.

#}

{% set help_hooks_example = path('help.page', {'name': 'hooks_example'}) %}
{% set node_add_page = path('node.add_page') %}
{% set user_login = path('user.login') %}

{% trans %}

<h2>Implementing, defining, and invoking hooks</h2>

<p>The code in this module implements a couple of new features which you can see
in action.</p>

<p><strong>Implements <code>hook_help()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of the
<code>hook hook_help()</code> which is used to add contents to this module's
help overview. Visible at <a href={{ help_hooks_example }}>
<code>admin/help/hooks_example</code></a>.</p>

<p><strong>View counts:</strong> <code>hooks_example_node_view()</code> is an
implementation of the hook <code>hook_ENTITY_TYPE_view()</code> that adds a
basic page view counter. You can see this in action by navigating to any node on
the site and looking for the the text telling you how many times you've viewed
that page.</p>

<p>Don't have any nodes? <a href={{ node_add_page }}>Add some</a> and look at
their counters.</p>

<p><strong>Implements <code>hook_form_alter()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of
<code>hook_form_alter()</code> which demonstrates the use of one of the most
commonly used alter hooks. You can view the altered form at
<a href={{ user_login }}><code>user/login</code></a>.</p>

<p>To learn more about how to implement an existing hook, or how to define and
invoke a new hook start by reading the <code>@docblock</code> comments in
<code>hooks_example.module</code>.</p>

{% endtrans %}
 */
class __TwigTemplate_8a45685fe93450c4cce19bf68be1e0758cb4af7c0c8b0ec6305266e317451188 extends Twig_Template
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
        $tags = array("set" => 7, "trans" => 11);
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
        $context["help_hooks_example"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("help.page", array("name" => "hooks_example"));
        // line 8
        $context["node_add_page"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("node.add_page");
        // line 9
        $context["user_login"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login");
        // line 10
        echo "
";
        // line 11
        echo t("<h2>Implementing, defining, and invoking hooks</h2>

<p>The code in this module implements a couple of new features which you can see
in action.</p>

<p><strong>Implements <code>hook_help()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of the
<code>hook hook_help()</code> which is used to add contents to this module's
help overview. Visible at <a href=@help_hooks_example>
<code>admin/help/hooks_example</code></a>.</p>

<p><strong>View counts:</strong> <code>hooks_example_node_view()</code> is an
implementation of the hook <code>hook_ENTITY_TYPE_view()</code> that adds a
basic page view counter. You can see this in action by navigating to any node on
the site and looking for the the text telling you how many times you've viewed
that page.</p>

<p>Don't have any nodes? <a href=@node_add_page>Add some</a> and look at
their counters.</p>

<p><strong>Implements <code>hook_form_alter()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of
<code>hook_form_alter()</code> which demonstrates the use of one of the most
commonly used alter hooks. You can view the altered form at
<a href=@user_login><code>user/login</code></a>.</p>

<p>To learn more about how to implement an existing hook, or how to define and
invoke a new hook start by reading the <code>@docblock</code> comments in
<code>hooks_example.module</code>.</p>", array("@help_hooks_example" =>         // line 21
($context["help_hooks_example"] ?? null), "@node_add_page" =>         // line 30
($context["node_add_page"] ?? null), "@user_login" =>         // line 37
($context["user_login"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Hooks Example.

#}

{% set help_hooks_example = path('help.page', {'name': 'hooks_example'}) %}
{% set node_add_page = path('node.add_page') %}
{% set user_login = path('user.login') %}

{% trans %}

<h2>Implementing, defining, and invoking hooks</h2>

<p>The code in this module implements a couple of new features which you can see
in action.</p>

<p><strong>Implements <code>hook_help()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of the
<code>hook hook_help()</code> which is used to add contents to this module's
help overview. Visible at <a href={{ help_hooks_example }}>
<code>admin/help/hooks_example</code></a>.</p>

<p><strong>View counts:</strong> <code>hooks_example_node_view()</code> is an
implementation of the hook <code>hook_ENTITY_TYPE_view()</code> that adds a
basic page view counter. You can see this in action by navigating to any node on
the site and looking for the the text telling you how many times you've viewed
that page.</p>

<p>Don't have any nodes? <a href={{ node_add_page }}>Add some</a> and look at
their counters.</p>

<p><strong>Implements <code>hook_form_alter()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of
<code>hook_form_alter()</code> which demonstrates the use of one of the most
commonly used alter hooks. You can view the altered form at
<a href={{ user_login }}><code>user/login</code></a>.</p>

<p>To learn more about how to implement an existing hook, or how to define and
invoke a new hook start by reading the <code>@docblock</code> comments in
<code>hooks_example.module</code>.</p>

{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  128 => 30,  127 => 21,  98 => 11,  95 => 10,  93 => 9,  91 => 8,  89 => 7,  86 => 6,);
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

Description text for the Hooks Example.

#}

{% set help_hooks_example = path('help.page', {'name': 'hooks_example'}) %}
{% set node_add_page = path('node.add_page') %}
{% set user_login = path('user.login') %}

{% trans %}

<h2>Implementing, defining, and invoking hooks</h2>

<p>The code in this module implements a couple of new features which you can see
in action.</p>

<p><strong>Implements <code>hook_help()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of the
<code>hook hook_help()</code> which is used to add contents to this module's
help overview. Visible at <a href={{ help_hooks_example }}>
<code>admin/help/hooks_example</code></a>.</p>

<p><strong>View counts:</strong> <code>hooks_example_node_view()</code> is an
implementation of the hook <code>hook_ENTITY_TYPE_view()</code> that adds a
basic page view counter. You can see this in action by navigating to any node on
the site and looking for the the text telling you how many times you've viewed
that page.</p>

<p>Don't have any nodes? <a href={{ node_add_page }}>Add some</a> and look at
their counters.</p>

<p><strong>Implements <code>hook_form_alter()</code>:</strong> In
<code>hooks_example.module</code> you'll find an implementation of
<code>hook_form_alter()</code> which demonstrates the use of one of the most
commonly used alter hooks. You can view the altered form at
<a href={{ user_login }}><code>user/login</code></a>.</p>

<p>To learn more about how to implement an existing hook, or how to define and
invoke a new hook start by reading the <code>@docblock</code> comments in
<code>hooks_example.module</code>.</p>

{% endtrans %}
", "");
    }
}
