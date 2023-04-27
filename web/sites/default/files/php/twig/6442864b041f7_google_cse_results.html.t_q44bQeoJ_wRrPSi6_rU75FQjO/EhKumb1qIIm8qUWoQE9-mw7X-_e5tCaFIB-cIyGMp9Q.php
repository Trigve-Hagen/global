<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/google_cse/templates/google_cse_results.html.twig */
class __TwigTemplate_7e58e318ba586db87696023654680f0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("google_cse/googlecseResults"), "html", null, true);
        echo "
";
        // line 3
        if (($context["prefix"] ?? null)) {
            // line 4
            echo "  <div class=\"google-cse-results-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 4, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        if (($context["results_searchbox_form"] ?? null)) {
            // line 8
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results_searchbox_form"] ?? null), 8, $this->source), "html", null, true);
            echo "
";
        }
        // line 10
        echo "
<div id=\"google-cse-results\">
  ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["cse_tag"] ?? null), 12, $this->source));
        echo "
  <noscript>
    ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noscript"] ?? null), 14, $this->source), "html", null, true);
        echo "
  </noscript>
</div>
";
        // line 17
        if (($context["suffix"] ?? null)) {
            // line 18
            echo "  <div class=\"google-cse-results-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 18, $this->source), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/google_cse/templates/google_cse_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  77 => 17,  71 => 14,  66 => 12,  62 => 10,  56 => 8,  54 => 7,  51 => 6,  45 => 4,  43 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# In a Twig template we attach the library. #}
{{ attach_library('google_cse/googlecseResults') }}
{% if prefix %}
  <div class=\"google-cse-results-prefix\">{{ prefix }}</div>
{% endif %}

{% if results_searchbox_form %}
  {{ results_searchbox_form }}
{% endif %}

<div id=\"google-cse-results\">
  {{ cse_tag | raw }}
  <noscript>
    {{ noscript }}
  </noscript>
</div>
{% if suffix %}
  <div class=\"google-cse-results-suffix\">{{ suffix }}</div>
{% endif %}
", "modules/contrib/google_cse/templates/google_cse_results.html.twig", "C:\\xampp\\htdocs\\global\\web\\modules\\contrib\\google_cse\\templates\\google_cse_results.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 2, "raw" => 12);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
