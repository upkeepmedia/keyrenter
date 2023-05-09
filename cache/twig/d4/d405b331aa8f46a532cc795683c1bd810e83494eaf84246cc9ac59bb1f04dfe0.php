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

/* partials/dash.html.twig */
class __TwigTemplate_8225b72eeb2250a6569dae29290f13f6eaa32fca5f8cf35347e5974f7c154e7a extends \Twig\Template
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
        echo "<svg width=\"";
        echo twig_escape_filter($this->env, ((5 * 20) - 5), "html", null, true);
        echo "\"
  height=\"21\"
  fill=\"currentColor\"
  x-data=\"{inView: false}\"
  x-intersect=\"inView = true\"
  class=\"text-green-500 my-3 block ";
        // line 6
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->rangeFunc(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["shift"]) {
            // line 8
            echo "    <circle cx=\"";
            echo twig_escape_filter($this->env, (($context["shift"] * 20) - 14), "html", null, true);
            echo "\"
      cy=\"16\"
      r=\"5\"
      class=\"transition duration-500 origin-center\"
      style=\"transition-delay: ";
            // line 12
            echo twig_escape_filter($this->env, ($context["shift"] * 100), "html", null, true);
            echo "ms\"
      :class=\"inView ? 'scale-100':'scale-0'\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shift'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</svg>
";
    }

    public function getTemplateName()
    {
        return "partials/dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  55 => 12,  47 => 8,  43 => 7,  39 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/dash.html.twig", "/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/templates/partials/dash.html.twig");
    }
}
