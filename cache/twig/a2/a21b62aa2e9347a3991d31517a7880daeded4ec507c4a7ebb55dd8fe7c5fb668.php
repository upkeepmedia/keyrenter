<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_bb37c277d6caf3ddd50794b6e78594078b1eb215579019c1ecb8b9afb7281736 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"bg-green-900 relative\" x-data=\"{inView: false}\" x-intersect.half=\"inView = true\">
  <iframe :src=\"inView ? 'https://www.google.com/maps/embed/v1/place?key=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 3
($context["upkeep"] ?? null), "places_api_key", []), "html", null, true);
        // line 4
        echo "&q=place_id:";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["upkeep"] ?? null), "place_id", []), "html", null, true);
        echo "' :''\"
    width=\"100%\"
    height=\"100%\"
    loading=\"lazy\"
    class=\"absolute left-0 right-0 top-0 bottom-0\"
    style=\"min-height: 300px;\"></iframe>
  <div class=\"mx-auto flex flex-row text-white\">
    <div class=\"w-2/5 -mt-24 mb-24\">
      <div class=\"bg-green-900 rounded-r-full relative z-50 p-20\">
        <div class=\"h3\">
          ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["upkeep"] ?? null), "company_name", []), "html", null, true);
        echo "
        </div>
        ";
        // line 16
        $this->loadTemplate("partials/dash.html.twig", "partials/footer.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute(($context["upkeep"] ?? null), "address", []));
        echo "
      </div>
    </div>
  </div>
</div>
<div class=\"bg-green-950 p-20\">
  <div class=\"mx-auto container flex flex-row text-white\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  55 => 16,  50 => 14,  36 => 4,  34 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/footer.html.twig", "/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/templates/partials/footer.html.twig");
    }
}
