<?php

/* modules/contrib/examples/pager_example/templates/description.html.twig */
class __TwigTemplate_633255cb0dcaa844c60f7082d34c987eb1e8753b0a2866859fcd258e9a720899 extends Twig_Template
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
        $tags = array("trans" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array(),
                array()
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

        // line 7
        echo "
<div class='examples-description'>
";
        // line 9
        echo t("<p>The Pager Example shows you how to create a paginated table. It uses
        an Entity Query to retrieve nodes and the query checks that
        the user has access to the nodes. You may test the access checking
        feature by unpublishing some of your nodes and then viewing the
        example as a user that is not allowed to see unpublished content.</p>
    <p>In order to see this in action, make sure there are some nodes present in
        your site. You can use the
        <a href=\"https://www.drupal.org/project/devel\">devel</a> module to add
        some if needed, or just create them.</p>
    <p>The table on this page will show you two nodes per page.</p>", array());
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/examples/pager_example/templates/description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  47 => 9,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/examples/pager_example/templates/description.html.twig", "/var/www/html/drupaltest/modules/contrib/examples/pager_example/templates/description.html.twig");
    }
}
