<?php

/* {# inline_template_start #}{#

Description text for the Block Example.

#}

{% set block_admin_page = url('block.admin_display')['#markup'] %}

{% trans %}

<p>The Block Example provides three sample blocks which demonstrate the various
  block APIs. To experiment with the blocks, enable and configure them on
  <a href="{{ block_admin_page }}">the block admin page</a>.</p>

{% endtrans %}
 */
class __TwigTemplate_9a603b90578e3446dfb61129696d4e68aaffe0e487cc1a2baf96732ae8fe74f8 extends Twig_Template
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
        $tags = array("set" => 7, "trans" => 9);
        $filters = array();
        $functions = array("url" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans'),
                array(),
                array('url')
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
        $context["block_admin_page"] = $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("block.admin_display"), "#markup", array(), "array");
        // line 8
        echo "
";
        // line 9
        echo t("<p>The Block Example provides three sample blocks which demonstrate the various
  block APIs. To experiment with the blocks, enable and configure them on
  <a href=\"@block_admin_page\">the block admin page</a>.</p>", array("@block_admin_page" =>         // line 13
($context["block_admin_page"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Block Example.

#}

{% set block_admin_page = url('block.admin_display')['#markup'] %}

{% trans %}

<p>The Block Example provides three sample blocks which demonstrate the various
  block APIs. To experiment with the blocks, enable and configure them on
  <a href=\"{{ block_admin_page }}\">the block admin page</a>.</p>

{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  66 => 9,  63 => 8,  61 => 7,  58 => 6,);
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

Description text for the Block Example.

#}

{% set block_admin_page = url('block.admin_display')['#markup'] %}

{% trans %}

<p>The Block Example provides three sample blocks which demonstrate the various
  block APIs. To experiment with the blocks, enable and configure them on
  <a href=\"{{ block_admin_page }}\">the block admin page</a>.</p>

{% endtrans %}
", "");
    }
}
