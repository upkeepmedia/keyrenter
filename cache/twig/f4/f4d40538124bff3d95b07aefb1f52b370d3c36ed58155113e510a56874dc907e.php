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

/* partials/navigation.html.twig */
class __TwigTemplate_189e9f63cdf58dac988e61f8bae824ab81e2b424c557a9e904fd765ce97f711d extends \Twig\Template
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
        echo "<ul class=\"flex flex-row\" x-data=\"{open: 'tenants'}\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []), 0, 4));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "    <li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "active", []));
            echo "\">
      <a class=\"px-4 cursor-pointer py-1 block rounded-full border-4 border-transparent hover:border-green-800 transition-all duration-200\" @click=\"open = '";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", []), "html", null, true);
            echo "'\"> 
      ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
      </a>
      ";
            // line 7
            if (($this->getAttribute($context["page"], "template", []) == "areas")) {
                // line 8
                echo "      ";
                $this->loadTemplate("partials/navigation/areas.html.twig", "partials/navigation.html.twig", 8)->display(twig_array_merge($context, ["page" =>                 // line 9
$context["page"]]));
                // line 11
                echo "      ";
            } else {
                // line 12
                echo "      ";
                $this->loadTemplate("partials/navigation/big.html.twig", "partials/navigation.html.twig", 12)->display(twig_array_merge($context, ["page" =>                 // line 13
$context["page"]]));
                // line 15
                echo "      ";
            }
            // line 16
            echo "    </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  80 => 16,  77 => 15,  75 => 13,  73 => 12,  70 => 11,  68 => 9,  66 => 8,  64 => 7,  59 => 5,  55 => 4,  50 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/navigation.html.twig", "/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/templates/partials/navigation.html.twig");
    }
}
