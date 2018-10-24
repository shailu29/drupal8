<?php

/* {# inline_template_start #}{#

Description text for the Node type Example.

#}


{% set content_type_path = path('entity.node_type.collection') %}
{% set add_types = path ('node.type_add') %}

{% trans %}


<p>Config Node Type Example is a basic example of defining a content type through configuration YAML files.</p>
<p>In this example we create two content types for Drupal 8, using only YAML files. Well, mostly only YAML files...
    One of our content types is locked, so the user can&#39;t delete it while the module is installed. For this we need
    a very tiny amount of support code.</p>
<p>You can observe these content types on <a href= {{ content_type_path }}>the content type admin page</a>.</p>
<p>The simplest way to author the per-type YAML files is to create the content types within Drupal and then take the
    YAML files from the configuration directory. Like this:</p>
<ul>
    <li>Install Drupal 8.</li>
    <li>Create a new content type at {{ add_types }}. Let&#39;s call it &#39;Nifty Content Type&#39;.</li>
    <li>Export the configuration from <code>admin/config/development/configuration</code>. Specific steps depending
        on needs, and decisions made during Drupal 8 beta. You&#39;ll see a file called
        <code>node.type.nifty_content_type.yml</code>.</li>
    <li>Copy or move that file to your module&#39;s <code>config/install</code> directory, along with associated field
        and form yml files.</li>
    <li>Remove the uuid information from the configuration files.</li>
</ul>
<p>You can see some of these YAML files in this module&#39;s <code>config/install</code> directory.</p>
<p>If you want to lock a content type created in this way, you&#39;ll have to implement <code>hook_install()</code> and
    <code>hook_uninstall()</code>. In <code>hook_install()</code>, you&#39;ll set the content type to be locked.
    In <code>hook_uninstall()</code> you&#39;ll set the content type to be unlocked.</p>
<p>Content types created in this way will remain available after the user has uninstalled the module.
    If you were to fail to set the content type as unlocked, the user would not be able to delete it.</p>
<p>This example is based on this change notification: <a href="https://drupal.org/node/2029519">https://drupal.org/node/2029519</a></p>

{% endtrans %}
 */
class __TwigTemplate_b4d9a216cddf11147d38ba631ba5b45979fc961fbd2d1a0d2a73ea17fffea564 extends Twig_Template
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
        $tags = array("set" => 8, "trans" => 11);
        $filters = array();
        $functions = array("path" => 8);

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
        // line 8
        $context["content_type_path"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node_type.collection");
        // line 9
        $context["add_types"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("node.type_add");
        // line 10
        echo "
";
        // line 11
        echo t("<p>Config Node Type Example is a basic example of defining a content type through configuration YAML files.</p>
<p>In this example we create two content types for Drupal 8, using only YAML files. Well, mostly only YAML files...
    One of our content types is locked, so the user can&#39;t delete it while the module is installed. For this we need
    a very tiny amount of support code.</p>
<p>You can observe these content types on <a href= @content_type_path>the content type admin page</a>.</p>
<p>The simplest way to author the per-type YAML files is to create the content types within Drupal and then take the
    YAML files from the configuration directory. Like this:</p>
<ul>
    <li>Install Drupal 8.</li>
    <li>Create a new content type at @add_types. Let&#39;s call it &#39;Nifty Content Type&#39;.</li>
    <li>Export the configuration from <code>admin/config/development/configuration</code>. Specific steps depending
        on needs, and decisions made during Drupal 8 beta. You&#39;ll see a file called
        <code>node.type.nifty_content_type.yml</code>.</li>
    <li>Copy or move that file to your module&#39;s <code>config/install</code> directory, along with associated field
        and form yml files.</li>
    <li>Remove the uuid information from the configuration files.</li>
</ul>
<p>You can see some of these YAML files in this module&#39;s <code>config/install</code> directory.</p>
<p>If you want to lock a content type created in this way, you&#39;ll have to implement <code>hook_install()</code> and
    <code>hook_uninstall()</code>. In <code>hook_install()</code>, you&#39;ll set the content type to be locked.
    In <code>hook_uninstall()</code> you&#39;ll set the content type to be unlocked.</p>
<p>Content types created in this way will remain available after the user has uninstalled the module.
    If you were to fail to set the content type as unlocked, the user would not be able to delete it.</p>
<p>This example is based on this change notification: <a href=\"https://drupal.org/node/2029519\">https://drupal.org/node/2029519</a></p>", array("@content_type_path" =>         // line 18
($context["content_type_path"] ?? null), "@add_types" =>         // line 23
($context["add_types"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Node type Example.

#}


{% set content_type_path = path('entity.node_type.collection') %}
{% set add_types = path ('node.type_add') %}

{% trans %}


<p>Config Node Type Example is a basic example of defining a content type through configuration YAML files.</p>
<p>In this example we create two content types for Drupal 8, using only YAML files. Well, mostly only YAML files...
    One of our content types is locked, so the user can&#39;t delete it while the module is installed. For this we need
    a very tiny amount of support code.</p>
<p>You can observe these content types on <a href= {{ content_type_path }}>the content type admin page</a>.</p>
<p>The simplest way to author the per-type YAML files is to create the content types within Drupal and then take the
    YAML files from the configuration directory. Like this:</p>
<ul>
    <li>Install Drupal 8.</li>
    <li>Create a new content type at {{ add_types }}. Let&#39;s call it &#39;Nifty Content Type&#39;.</li>
    <li>Export the configuration from <code>admin/config/development/configuration</code>. Specific steps depending
        on needs, and decisions made during Drupal 8 beta. You&#39;ll see a file called
        <code>node.type.nifty_content_type.yml</code>.</li>
    <li>Copy or move that file to your module&#39;s <code>config/install</code> directory, along with associated field
        and form yml files.</li>
    <li>Remove the uuid information from the configuration files.</li>
</ul>
<p>You can see some of these YAML files in this module&#39;s <code>config/install</code> directory.</p>
<p>If you want to lock a content type created in this way, you&#39;ll have to implement <code>hook_install()</code> and
    <code>hook_uninstall()</code>. In <code>hook_install()</code>, you&#39;ll set the content type to be locked.
    In <code>hook_uninstall()</code> you&#39;ll set the content type to be unlocked.</p>
<p>Content types created in this way will remain available after the user has uninstalled the module.
    If you were to fail to set the content type as unlocked, the user would not be able to delete it.</p>
<p>This example is based on this change notification: <a href=\"https://drupal.org/node/2029519\">https://drupal.org/node/2029519</a></p>

{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 23,  117 => 18,  93 => 11,  90 => 10,  88 => 9,  86 => 8,  82 => 6,);
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

Description text for the Node type Example.

#}


{% set content_type_path = path('entity.node_type.collection') %}
{% set add_types = path ('node.type_add') %}

{% trans %}


<p>Config Node Type Example is a basic example of defining a content type through configuration YAML files.</p>
<p>In this example we create two content types for Drupal 8, using only YAML files. Well, mostly only YAML files...
    One of our content types is locked, so the user can&#39;t delete it while the module is installed. For this we need
    a very tiny amount of support code.</p>
<p>You can observe these content types on <a href= {{ content_type_path }}>the content type admin page</a>.</p>
<p>The simplest way to author the per-type YAML files is to create the content types within Drupal and then take the
    YAML files from the configuration directory. Like this:</p>
<ul>
    <li>Install Drupal 8.</li>
    <li>Create a new content type at {{ add_types }}. Let&#39;s call it &#39;Nifty Content Type&#39;.</li>
    <li>Export the configuration from <code>admin/config/development/configuration</code>. Specific steps depending
        on needs, and decisions made during Drupal 8 beta. You&#39;ll see a file called
        <code>node.type.nifty_content_type.yml</code>.</li>
    <li>Copy or move that file to your module&#39;s <code>config/install</code> directory, along with associated field
        and form yml files.</li>
    <li>Remove the uuid information from the configuration files.</li>
</ul>
<p>You can see some of these YAML files in this module&#39;s <code>config/install</code> directory.</p>
<p>If you want to lock a content type created in this way, you&#39;ll have to implement <code>hook_install()</code> and
    <code>hook_uninstall()</code>. In <code>hook_install()</code>, you&#39;ll set the content type to be locked.
    In <code>hook_uninstall()</code> you&#39;ll set the content type to be unlocked.</p>
<p>Content types created in this way will remain available after the user has uninstalled the module.
    If you were to fail to set the content type as unlocked, the user would not be able to delete it.</p>
<p>This example is based on this change notification: <a href=\"https://drupal.org/node/2029519\">https://drupal.org/node/2029519</a></p>

{% endtrans %}
", "");
    }
}
