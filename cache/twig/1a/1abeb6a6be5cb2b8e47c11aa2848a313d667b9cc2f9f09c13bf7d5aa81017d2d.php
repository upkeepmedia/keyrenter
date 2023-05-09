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

/* partials/navigation/areas.html.twig */
class __TwigTemplate_ed552a540d8c6de049f062849b0c252ef466427066e2b769128dd22e54f276e3 extends \Twig\Template
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
        echo "<div class=\"bg-green-200 absolute left-0 right-0 z-40 lg:py-10 mt-10\"
  x-show=\"open === '";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "slug", []), "html", null, true);
        echo "'\">
  <div class=\"mx-auto container px-10 flex flex-row flex-wrap relative\">
    <div class=\"absolute -top-5 right-5\" @click=\"open = false\">
      <svg xmlns=\"http://www.w3.org/2000/svg\"
        fill=\"none\"
        viewBox=\"0 0 24 24\"
        stroke-width=\"3\"
        stroke=\"currentColor\"
        class=\"w-10 h-10\">
        <path stroke-linecap=\"round\"
          stroke-linejoin=\"round\"
          d=\"M6 18L18 6M6 6l12 12\" />
      </svg>
    </div>

    <div class=\"w-full p-5\">
        <div class=\"h3 \">
            ";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "big_menu", [], "any", false, true), "title", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "big_menu", [], "any", false, true), "title", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "big_menu", [], "any", false, true), "title", [])) : ($this->getAttribute(($context["page"] ?? null), "title", []))), "html", null, true);
        echo "
        </div>
            ";
        // line 21
        $this->loadTemplate("partials/dash.html.twig", "partials/navigation/areas.html.twig", 21)->display($context);
        // line 22
        echo "        <div class=\"text-2xl font-normal\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "big_menu", []), "subtitle", []), "html", null, true);
        echo "
        </div>
    </div>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "header", []), "big_menu", []), "enabled", [])) {
                // line 28
                echo "      <a class=\"p-5 lg:w-1/3 hover:bg-white hover:text-green-600 transition-all duration-300 rounded-2xl\"
        href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                echo "\">
        <div class=\"text-2xl font-bold\">
          ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                echo "
        </div>
        <div class=\"font-normal\">
          ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "header", []), "big_menu", []), "subtitle", []), "html", null, true);
                echo "
        </div>
      </a>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    <div class=\"lg:w-1/3 border-4 border-transparent p-5\">
      <div class=\"text-2xl font-bold\">
        More ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("singular", $this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
        echo " Links
      </div>
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "header", []), "big_menu", []), "enabled", [])) {
                // line 43
                echo "        <div class=\"pr-10\">
          <div class=\"font-bold\">
            ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                echo "
          </div>
          <div class=\"font-normal leading-none\">
            ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "header", []), "big_menu", []), "subtitle", []), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation/areas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  124 => 48,  118 => 45,  114 => 43,  109 => 42,  104 => 40,  100 => 38,  89 => 34,  83 => 31,  78 => 29,  75 => 28,  70 => 27,  63 => 23,  60 => 22,  58 => 21,  53 => 19,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/navigation/areas.html.twig", "/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/templates/partials/navigation/areas.html.twig");
    }
}
