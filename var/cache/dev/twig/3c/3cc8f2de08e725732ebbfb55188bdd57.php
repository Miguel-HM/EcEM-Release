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

/* pricing/index.html.twig */
class __TwigTemplate_dfa346e5d1de7fd25c2c07bbc5236908 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pricing/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pricing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pricing/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pricing";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     <div class=\"pricing\">
            <section>
                <h2 class=\"extra\">Choose your plan</h2>
                <div class=\"row-container\">
                    <div class=\"row\">
                        <h3>Single Lessons</h3>
                        <table>
                            <tr>
                                <th>Number of lessons</th>
                                <th>Price per lesson</th>
                            </tr>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>€30</td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"row\">
                        <h3>Bundles</h3>
                        <table>
                            <tr>
                                <th>Number of lessons</th>
                                <th>Total price</th>
                                <th>Price per lesson</th>
                            </tr>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>€120</td>
                                <td>€24</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>€220</td>
                                <td>€22</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>€400</td>
                                <td>€20</td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"row\">
                        <h3>Group Deals</h3>
                        <table>
                            <tr>
                                <th>Number of students</th>
                                <th>Number of lessons</th>
                                <th>Total price</th>
                                <th>Price per lesson and student</th>
                            </tr>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>€180</td>
                                <td>€18</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>10</td>
                                <td>€320</td>
                                <td>€16</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>5</td>
                                <td>€225</td>
                                <td>€15</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>10</td>
                                <td>€360</td>
                                <td>€12</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pricing/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pricing{% endblock %}

{% block body %}
     <div class=\"pricing\">
            <section>
                <h2 class=\"extra\">Choose your plan</h2>
                <div class=\"row-container\">
                    <div class=\"row\">
                        <h3>Single Lessons</h3>
                        <table>
                            <tr>
                                <th>Number of lessons</th>
                                <th>Price per lesson</th>
                            </tr>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>€30</td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"row\">
                        <h3>Bundles</h3>
                        <table>
                            <tr>
                                <th>Number of lessons</th>
                                <th>Total price</th>
                                <th>Price per lesson</th>
                            </tr>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>€120</td>
                                <td>€24</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>€220</td>
                                <td>€22</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>€400</td>
                                <td>€20</td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"row\">
                        <h3>Group Deals</h3>
                        <table>
                            <tr>
                                <th>Number of students</th>
                                <th>Number of lessons</th>
                                <th>Total price</th>
                                <th>Price per lesson and student</th>
                            </tr>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>€180</td>
                                <td>€18</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>10</td>
                                <td>€320</td>
                                <td>€16</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>5</td>
                                <td>€225</td>
                                <td>€15</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>10</td>
                                <td>€360</td>
                                <td>€12</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>
{% endblock %}", "pricing/index.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\pricing\\index.html.twig");
    }
}
