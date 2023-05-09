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

/* partials/base.html.twig */
class __TwigTemplate_616dd2edd9c063ac7bc22143e60b4cace9113ca4db13ca0ebf9cabac4ec677f9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'convert' => [$this, 'block_convert'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["extension"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "production", [])) ? (".min") : (""));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))));
        echo "\">
  <head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('assets', $context, $blocks);
        // line 38
        echo "  </head>
  <body id=\"top\"
    x-data=\"{step: 'start', openConvert: false, atTop: false}\"
    class=\"bg-green-50 ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo " ";
        // line 44
        (($this->getAttribute($this->getAttribute(        // line 42
($context["config"] ?? null), "theme", []), "production", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "production", []), "html", null, true))) : (print ("debug-screens")));
        // line 45
        echo "\">
    ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "    ";
        $this->displayBlock('convert', $context, $blocks);
        // line 64
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "
    ";
        // line 75
        $this->displayBlock('bottom', $context, $blocks);
        // line 78
        echo "  </body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "      <meta charset=\"utf-8\" />
      <title>
        ";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            // line 11
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " |
        ";
        }
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "
      </title>

      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
      ";
        // line 17
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 17)->display($context);
        // line 18
        echo "
      <link rel=\"icon\"
        type=\"image/png\"
        href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"));
        echo "\" />
      <link rel=\"canonical\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"));
        echo "\" />
    ";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 26
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://use.typekit.net/fcg6zas.css", 1 => 98], "method");
        // line 27
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("theme://dist/css/site" . ($context["extension"] ?? null)) . ".css"), 1 => 98], "method");
        // line 28
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => (("theme://dist/js/main" . ($context["extension"] ?? null)) . ".js"), 1 => 98], "method");
        // line 32
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 34
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 46
    public function block_header($context, array $blocks = [])
    {
        // line 47
        echo "      <div class=\"header delay-1000 lg:px-20 lg:pt-10 transition-all duration-700 ease-in-out\" x-data=\"{inView: false}\" x-intersect=\"inView = true\" >
        <div class=\"flex flex-row\">
          <a class=\"\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null));
        echo "\">
            ";
        // line 50
        echo $this->getAttribute($this->getAttribute(($context["media"] ?? null), "theme://images/logo.png", [], "array"), "resize", [0 => 180], "method");
        echo "
          </a>
          ";
        // line 52
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 57
        echo "          <div class=\"bg-red-600 rounded-b-2xl text-white absolute top-0 right-20 cursor-pointer py-2 px-5  font-bold hover:bg-red-700 transition-all duration-500\" @click=\"openConvert = true\" >Choose Your Next Step</div>
        </div>
      </div>
    ";
    }

    // line 52
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 53
        echo "            <nav class=\"main-nav ml-auto my-auto text-lg font-bold text-neutral-600\">
              ";
        // line 54
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "            </nav>
          ";
    }

    // line 61
    public function block_convert($context, array $blocks = [])
    {
        // line 62
        echo "      ";
        $this->loadTemplate("partials/convert.html.twig", "partials/base.html.twig", 62)->display($context);
        // line 63
        echo "    ";
    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        // line 65
        echo "      <section id=\"body\">
        ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "      </section>
    ";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        // line 67
        echo "        ";
    }

    // line 71
    public function block_footer($context, array $blocks = [])
    {
        // line 72
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "    ";
    }

    // line 75
    public function block_bottom($context, array $blocks = [])
    {
        // line 76
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 76,  270 => 75,  266 => 73,  263 => 72,  260 => 71,  256 => 67,  253 => 66,  248 => 68,  246 => 66,  243 => 65,  240 => 64,  236 => 63,  233 => 62,  230 => 61,  225 => 55,  223 => 54,  220 => 53,  217 => 52,  210 => 57,  208 => 52,  203 => 50,  199 => 49,  195 => 47,  192 => 46,  185 => 36,  180 => 35,  177 => 34,  168 => 32,  165 => 31,  162 => 30,  158 => 28,  155 => 27,  152 => 26,  149 => 25,  143 => 22,  139 => 21,  134 => 18,  132 => 17,  124 => 12,  118 => 11,  116 => 10,  112 => 8,  109 => 7,  102 => 78,  100 => 75,  97 => 74,  95 => 71,  92 => 70,  89 => 64,  86 => 61,  84 => 46,  81 => 45,  79 => 42,  78 => 44,  75 => 41,  70 => 38,  68 => 34,  65 => 33,  63 => 30,  60 => 29,  58 => 25,  55 => 24,  53 => 7,  48 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/base.html.twig", "/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/templates/partials/base.html.twig");
    }
}
