<?php

/* {# inline_template_start #}{#

Description text for the Tour Example.

Note that we have defined some 'buttons.' These page elements are targets for
the tour we're demonstrating.

The id of the target elements are used in the tour definition file as targets
for the various tour steps.

#}

{% trans %}


<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class="button" id="tour-target-1">First item.</div>
<div class="button" id="tour-target-2">Second item.</div>
<div class="button" id="tour-target-3">Third item.</div>
<div class="button" id="tour-target-4">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href="https://drupal.org/project/tour_ui">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href="https://github.com/zurb/joyride">https://github.com/zurb/joyride</a></p>

{% endtrans %}
 */
class __TwigTemplate_f10d6491619c0ca72f1dd98f1f6c03f6976da76f571ca31755463a9d7411f616 extends Twig_Template
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
        $tags = array("trans" => 13);
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

        // line 12
        echo "
";
        // line 13
        echo t("<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class=\"button\" id=\"tour-target-1\">First item.</div>
<div class=\"button\" id=\"tour-target-2\">Second item.</div>
<div class=\"button\" id=\"tour-target-3\">Third item.</div>
<div class=\"button\" id=\"tour-target-4\">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href=\"https://github.com/zurb/joyride\">https://github.com/zurb/joyride</a></p>", array());
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Tour Example.

Note that we have defined some 'buttons.' These page elements are targets for
the tour we're demonstrating.

The id of the target elements are used in the tour definition file as targets
for the various tour steps.

#}

{% trans %}


<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class=\"button\" id=\"tour-target-1\">First item.</div>
<div class=\"button\" id=\"tour-target-2\">Second item.</div>
<div class=\"button\" id=\"tour-target-3\">Third item.</div>
<div class=\"button\" id=\"tour-target-4\">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href=\"https://github.com/zurb/joyride\">https://github.com/zurb/joyride</a></p>

{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  91 => 12,);
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

Description text for the Tour Example.

Note that we have defined some 'buttons.' These page elements are targets for
the tour we're demonstrating.

The id of the target elements are used in the tour definition file as targets
for the various tour steps.

#}

{% trans %}


<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class=\"button\" id=\"tour-target-1\">First item.</div>
<div class=\"button\" id=\"tour-target-2\">Second item.</div>
<div class=\"button\" id=\"tour-target-3\">Third item.</div>
<div class=\"button\" id=\"tour-target-4\">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href=\"https://github.com/zurb/joyride\">https://github.com/zurb/joyride</a></p>

{% endtrans %}
", "");
    }
}
