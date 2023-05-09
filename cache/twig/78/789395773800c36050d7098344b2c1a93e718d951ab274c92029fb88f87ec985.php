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

/* partials/convert.html.twig */
class __TwigTemplate_adc4c386b535af57c086d969bd4c020445cdafcb61a8f8001418540dcf846e5d extends \Twig\Template
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
        echo "<div class=\"text-white fixed z-50 transition-all duration-500 text-center\" @scroll.window=\"atTop = (window.pageYOffset < 50) ? false: true\"  :class=\"openConvert ? 'bottom-0 w-full h-screen left-0 right-0 flex bg-green-900 ':'right-10 bottom-10 '\">
    <div class=\"absolute top-10 right-10 p-4\" @click=\"step = 'start'; openConvert = false\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"3\" stroke=\"currentColor\" class=\"w-10 h-10\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
        </svg>
    </div>
    <div class=\"bg-red-600 rounded-full cursor-pointer py-2 px-5  font-bold hover:bg-red-700 transition-all duration-500\" x-show=\"!openConvert\" @click=\"openConvert = true\" :class=\"atTop ? 'translate-y-0':'translate-y-24'\">Choose Your Next Step</div>
    <div x-show=\"openConvert\" class=\"m-auto container p-20 font-bold transition-all duration-500 \">
        <div class=\" mx-auto w-1/2\">
        <div x-show=\"step === 'start'\">
            <div class=\"h1 text-white\">What Best Describes You?</div>
                ";
        // line 12
        $this->loadTemplate("partials/dash.html.twig", "partials/convert.html.twig", 12)->display(twig_array_merge($context, ["classes" => "text-white mx-auto"]));
        echo "            
                <label class=\"grid hover:scale-105 transition-all mt-8 cursor-pointer hover:bg-white  hover:text-green-900 border-4 border-white py-2 px-5 text-xl rounded-full mb-3\" >
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'owner'\">
                    I'm a Rental Property Owner
                </label>
                <label class=\"grid hover:scale-105 transition-all cursor-pointer hover:bg-white hover:text-green-900 border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'tenant'\">
                    I'm a Tenant or Resident
                </label>
                <label class=\"grid hover:scale-105 transition-all cursor-pointer hover:bg-white  hover:text-green-900  border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'form'\">
                     I'm a Third-Party Service Provider
                </label>
            </input>
        </div>
        <div class=\" mx-auto\" x-show=\"step === 'owner'\">
            <div class=\"h1 text-white\">How Can We Help With Your Rental?</div>
                ";
        // line 29
        $this->loadTemplate("partials/dash.html.twig", "partials/convert.html.twig", 29)->display(twig_array_merge($context, ["classes" => "text-white mx-auto"]));
        echo "            
                <label class=\"grid hover:scale-105 transition-all cursor-pointer mt-8 hover:bg-white  hover:text-green-900  border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'address'\">
                    Find Out if I'm Charging Enough Rent
                </label>                
                <label class=\"grid hover:scale-105 transition-all cursor-pointer hover:bg-white  hover:text-green-900 border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"window.location='https://calendly.com'\" >
                    Schedule a Phone Call to Find Out More
                </label>
                <label class=\"grid hover:scale-105 transition-all cursor-pointer hover:bg-white  hover:text-green-900  border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'form'\">
                    Receive a Copy of the Management Agreement
                </label>
                <label class=\"grid hover:scale-105 transition-all cursor-pointer hover:bg-white  hover:text-green-900  border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'form'\">
                    Ask a Question About Keyrenter Services
                </label>                
            </input>
        </div>
        <div class=\" mx-auto\" x-show=\"step === 'tenant'\">
            <div class=\"h1 text-white\">Some kind of Tenant Question?</div>
                ";
        // line 50
        $this->loadTemplate("partials/dash.html.twig", "partials/convert.html.twig", 50)->display(twig_array_merge($context, ["classes" => "text-white mx-auto"]));
        echo "            
                <label class=\"grid hover:scale-105 transition-all cursor-pointer mt-8 hover:bg-white  hover:text-green-900  border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'form'\">
                    I'm Currently Renting a Keyrenter-Managed Property
                </label>                
                <label class=\"grid hover:scale-105 transition-all cursor-pointer hover:bg-white  hover:text-green-900 border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"window.location='/homes-for-rent'\" @click=\"step = 'form'\">
                    I'm Interested in One of Your Rental Units
                </label>
                <label class=\"grid hover:scale-105 transition-all cursor-pointer hover:bg-white  hover:text-green-900  border-4 border-white py-2 px-5 text-xl rounded-full mb-3\">
                    <input type=\"radio\" name=\"radio\" class=\"mt-8 opacity-0 hidden\" @click=\"step = 'form'\">
                    Neither, I Just Have a Question
                </label>
            </input>
        </div>        
        <div class=\" mx-auto\" x-show=\"step === 'address'\">
            <div class=\"h1 text-white\">What is The Address of the Rental Property ?</div>
                ";
        // line 67
        $this->loadTemplate("partials/dash.html.twig", "partials/convert.html.twig", 67)->display(twig_array_merge($context, ["classes" => "text-white mx-auto"]));
        echo "            
                <input placeholder=\"Street Address, City, State, Zip\" type=\"text\" class=\"w-full transition-all mt-5 bg-white focus:border-green-500  border-4 border-white py-2 px-5 text-xl rounded-full text-grey-700\"/>
        </div>        
        <div class=\" mx-auto\" x-show=\"step === 'contact'\">
            <div class=\"h1 text-white\">What is The Address of the Rental Property ?</div>
                ";
        // line 72
        $this->loadTemplate("partials/dash.html.twig", "partials/convert.html.twig", 72)->display(twig_array_merge($context, ["classes" => "text-white"]));
        echo "            
                <input placeholder=\"Email Address\" type=\"text\" class=\"w-full transition-all mt-5 bg-white   border-4 border-white py-2 px-5 text-xl rounded-full text-grey-700\"/>
                <input placeholder=\"Phone Number\" type=\"text\" class=\"w-full transition-all mt-5 bg-white   border-4 border-white py-2 px-5 text-xl rounded-full text-grey-700\"/>
        </div>                
        <div class=\" mx-auto\" x-show=\"step === 'form'\">
            <div class=\"h1 text-white\">The Final Page is a Form?</div>
                ";
        // line 78
        $this->loadTemplate("partials/dash.html.twig", "partials/convert.html.twig", 78)->display(twig_array_merge($context, ["classes" => "text-white mx-auto"]));
        echo "            
                <input placeholder=\"First & Last Name\" type=\"text\" class=\"w-full transition-all mt-5 bg-white  focus:border-green-500 border-4 border-white py-2 px-5 text-xl rounded-full text-grey-700\"/>
                <input placeholder=\"Phone Number\" type=\"text\" class=\"w-full transition-all  mt-5 bg-white  focus:border-green-500 border-4 border-white py-2 px-5 text-xl rounded-full  text-grey-700\"/>
                <input placeholder=\"Email Address\" type=\"text\" class=\"w-full transition-all  mt-5 bg-white  focus:border-green-500 border-4 border-white py-2 px-5 text-xl rounded-full  text-grey-700\"/>
                <input placeholder=\"How Can We Help?\" type=\"text\" class=\"w-full transition-all  mt-5 bg-white  focus:border-green-500 border-4 border-white py-2 px-5 text-xl rounded-full  text-grey-700\"/>
        </div>                
        <div class=\"flex flex-row mt-3\" x-show=\"['address', 'form'].includes(step)\">
            <a class=\"mx-auto hover:scale-105 transition-all inline-block cursor-pointer hover:bg-white  hover:text-green-900  border-4 border-white py-2 px-5 text-xl rounded-full mt-3\">Get In Touch</a>
        </div>
    </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/convert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 78,  115 => 72,  107 => 67,  87 => 50,  63 => 29,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/convert.html.twig", "/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/templates/partials/convert.html.twig");
    }
}
