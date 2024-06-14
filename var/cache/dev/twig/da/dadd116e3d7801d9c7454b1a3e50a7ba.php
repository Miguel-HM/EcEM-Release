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

/* account/index.html.twig */
class __TwigTemplate_25e3bd681f6ba9ae65fc31b8f674d73e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
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

        echo "Account";
        
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
        echo "<section class=\"multi-panel\">
<div class=\"row-container\">
<div class=\"row\">
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "parent", [], "any", false, false, false, 9)) {
            // line 10
            echo "    <div class=\"primera\">
        <h2>Welcome, ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
            echo "!</h2>
        <p style=\"text-align: left\">Here you can manage your credit, request a top-up, and manage your children's accounts.</p>
        <p style=\"text-align: left\">To book a class simply go to the <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar");
            echo "\">lesson calendar</a>, select the student for whom you wish to book a lesson, and make the booking request.</p>
    </div>
";
        } else {
            // line 16
            echo "    <div class=\"primera\">
        <h2 style=\"text-align: left\">Welcome, ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
            echo "!</h2>
        <p>Here you can manage your credit, request a top-up, and manage your account details.</p>
        <p>To book a class simply go to the <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar");
            echo "\">lesson calendar</a> and make the booking request.</p>
    </div>
";
        }
        // line 22
        echo "<div class=\"row col-container\">
    <div class=\"col\">
    <h2>Your credit</h2>
    <div class=\"credit multi-item\">
        <p>Your current credit is: </p>
        <div class=\"stat\">
            <div class=\"saldo-odometer odometer\"></div>
            <span class=\"type\"> lessons left</span>
        </div>
        <script>
                /* Saldo */
                    const createOdometer = (el, value) => {
                        const odometer = new Odometer({
                        el: el,
                        value: 0,
                        });
                    
                        let hasRun = false;
                    
                        const options = {
                        threshold: [0, 0.9],
                        };
                    
                        const callback = (entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                            if (!hasRun) {
                                odometer.update(value);
                                hasRun = true;
                            }
                            }
                        });
                        };
                        const observer = new IntersectionObserver(callback, options);
                        observer.observe(el);
                    };
                    
                    const saldoOdometer = document.querySelector(\".saldo-odometer\");
                    createOdometer(saldoOdometer, ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "saldo", [], "any", false, false, false, 60), "html", null, true);
        echo ");

                /* End Saldo */
            </script>
        <button id=\"top-up-button\" class=\"conFlecha\" onclick=\"toggleTopUpForm()\"><i class=\"arrowDown\"></i> &emsp; Top up</button>
        </div>
        <div class=\"top-up-form\" style=\"display: none\">
            <h2>Top up your credit</h2>
            <form class=\"p-3 y-3 x-4\" id=\"top-up\"";
        // line 68
        echo ">
                <div class=\"d-flex flex-column\">
                    <label for=\"plan\">Select your plan: </label>
                </div>
                <div>
                    <select id=\"plan\" name=\"plan\" class=\"form-control\" required>
                        <option value=\"s1\">Single lesson (30€)</option>
                        <option value=\"b5\">Bundle: 5 lessons (120€)</option>
                        <option value=\"b10\">Bundle: 10 lessons (220€)</option>
                        <option value=\"b20\">Bundle: 20 lessons (400€)</option>
                        <option value=\"g25\">Group of 2: 5 lessons (180€)</option>
                        <option value=\"g210\">Group of 2: 10 lessons (320€)</option>
                        <option value=\"g35\">Group of 3: 5 lessons (225€)</option>
                        <option value=\"g310\">Group of 3: 10 lessons (360€)</option>
                        <option value=\"custom\">Request a personalised plan (fill the message box)</option>
                    </select>
                </div>
                <div id=\"request-container\" style=\"display: none;\">
                    <div>
                        <label for=\"request\">Custom plan: </label>
                    </div>
                    <div>
                        <textarea id=\"request\" name=\"request\" placeholder=\"Request a specific bundle\"></textarea>
                    </div>
                </div>
                <button type=\"submit\">Request Top up</button>
            </form>
        </div>
    </div>
    <div class=\"col\">
        <h2>Your account</h2>
        <div class=\"account multi-item\">
            <p>Your account details:</p>
            <p><strong>Username:</strong> ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "username", [], "any", false, false, false, 101), "html", null, true);
        echo "<br>
            <strong>Email:</strong> ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "email", [], "any", false, false, false, 102), "html", null, true);
        echo "<br>
            <strong>Account Type:</strong> ";
        // line 103
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "parent", [], "any", false, false, false, 103)) ? ("Parent") : ("Student"));
        echo "</p>
            <button onclick=\"location.href='";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "';\">Change account details</button>        
        </div>
    </div>

    ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "parent", [], "any", false, false, false, 108)) {
            // line 109
            echo "        <div class=\"col\">
        <h2>Student profiles</h2>
        <div class=\"studentProfile multi-item\">
            ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 112), "students", [], "any", true, true, false, 112)) {
                // line 113
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "students", [], "any", false, false, false, 113));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 114
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                    echo "\">
                    <div class=\"student-card\">
                        <img src=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["student"], "avatar", [], "any", false, false, false, 116))), "html", null, true);
                    echo "\" alt=\"A\"> &emsp;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 116), "html", null, true);
                    echo "
                    </div>
                </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                <button onclick=\"location.href='";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_new");
                echo "';\">Add child</button>    
            ";
            } else {
                // line 122
                echo "                <button onclick=\"location.href='";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_new");
                echo "';\">Create your student profile</button>           
            ";
            }
            // line 124
            echo "        </div>
        </div>
";
        } else {
            // line 127
            echo "        <div class=\"col\">
        <h2>Student profile</h2>
        <div class=\"studentProfile multi-item\">
        ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 130), "students", [], "any", true, true, false, 130)) {
                // line 131
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), "students", [], "any", false, false, false, 131));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 132
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                    echo "\">
                    <div class=\"student-card\">
                        <img src=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["student"], "avatar", [], "any", false, false, false, 134))), "html", null, true);
                    echo "\" alt=\"A\"> &emsp;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 134), "html", null, true);
                    echo "
                    </div>
                </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "        ";
            } else {
                echo "  
                <button onclick=\"location.href='";
                // line 139
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_new");
                echo "';\">Create your student profile</button>
        ";
            }
            // line 141
            echo "        </div>
        </div>
";
        }
        // line 144
        echo "</div>
<div id=\"DeleteUser\">
    <form method=\"post\" action=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146)]), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147))), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"delete\" onclick=\"event.preventDefault(); if (confirm('Are you sure you want to delete your account?')) { this.closest('form').submit(); }\">Delete account</button>
    </form>
</div>
    
</section>
<script>
\t\tfunction toggleTopUpForm() {
\t\t\t\tconst topUpForm = document.querySelector(\".top-up-form\");
\t\t\t\tif (topUpForm.style.display === \"none\") {
\t\t\t\t\t\ttopUpForm.style.display = \"block\";
\t\t\t\t} else {
\t\t\t\t\t\ttopUpForm.style.display = \"none\";
\t\t\t\t}
\t\t};
\t\t\$(document).ready(function () {
\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t\tconst planSelect = document.getElementById('plan');
\t\t\t\t\tconst requestContainer = document.getElementById('request-container');
\t\t\t\t\tplanSelect.addEventListener('change', function() {
\t\t\t\t\t\t\tif (planSelect.value === 'custom') {
\t\t\t\t\t\t\t\t\trequestContainer.style.display = 'block';
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\trequestContainer.style.display = 'none';
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t});
\t\t});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "account/index.html.twig";
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
        return array (  330 => 147,  326 => 146,  322 => 144,  317 => 141,  312 => 139,  307 => 138,  295 => 134,  289 => 132,  284 => 131,  282 => 130,  277 => 127,  272 => 124,  266 => 122,  260 => 120,  248 => 116,  242 => 114,  237 => 113,  235 => 112,  230 => 109,  228 => 108,  221 => 104,  217 => 103,  213 => 102,  209 => 101,  174 => 68,  163 => 60,  123 => 22,  117 => 19,  112 => 17,  109 => 16,  103 => 13,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Account{% endblock %}

{% block body %}
<section class=\"multi-panel\">
<div class=\"row-container\">
<div class=\"row\">
{% if app.user.parent %}
    <div class=\"primera\">
        <h2>Welcome, {{ app.user.username }}!</h2>
        <p style=\"text-align: left\">Here you can manage your credit, request a top-up, and manage your children's accounts.</p>
        <p style=\"text-align: left\">To book a class simply go to the <a href=\"{{ path('app_calendar') }}\">lesson calendar</a>, select the student for whom you wish to book a lesson, and make the booking request.</p>
    </div>
{% else %}
    <div class=\"primera\">
        <h2 style=\"text-align: left\">Welcome, {{ app.user.username }}!</h2>
        <p>Here you can manage your credit, request a top-up, and manage your account details.</p>
        <p>To book a class simply go to the <a href=\"{{ path('app_calendar') }}\">lesson calendar</a> and make the booking request.</p>
    </div>
{% endif %}
<div class=\"row col-container\">
    <div class=\"col\">
    <h2>Your credit</h2>
    <div class=\"credit multi-item\">
        <p>Your current credit is: </p>
        <div class=\"stat\">
            <div class=\"saldo-odometer odometer\"></div>
            <span class=\"type\"> lessons left</span>
        </div>
        <script>
                /* Saldo */
                    const createOdometer = (el, value) => {
                        const odometer = new Odometer({
                        el: el,
                        value: 0,
                        });
                    
                        let hasRun = false;
                    
                        const options = {
                        threshold: [0, 0.9],
                        };
                    
                        const callback = (entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                            if (!hasRun) {
                                odometer.update(value);
                                hasRun = true;
                            }
                            }
                        });
                        };
                        const observer = new IntersectionObserver(callback, options);
                        observer.observe(el);
                    };
                    
                    const saldoOdometer = document.querySelector(\".saldo-odometer\");
                    createOdometer(saldoOdometer, {{app.user.saldo}});

                /* End Saldo */
            </script>
        <button id=\"top-up-button\" class=\"conFlecha\" onclick=\"toggleTopUpForm()\"><i class=\"arrowDown\"></i> &emsp; Top up</button>
        </div>
        <div class=\"top-up-form\" style=\"display: none\">
            <h2>Top up your credit</h2>
            <form class=\"p-3 y-3 x-4\" id=\"top-up\"{# action=\"{{ path('app_top_up') }}\" method=\"post\"#}>
                <div class=\"d-flex flex-column\">
                    <label for=\"plan\">Select your plan: </label>
                </div>
                <div>
                    <select id=\"plan\" name=\"plan\" class=\"form-control\" required>
                        <option value=\"s1\">Single lesson (30€)</option>
                        <option value=\"b5\">Bundle: 5 lessons (120€)</option>
                        <option value=\"b10\">Bundle: 10 lessons (220€)</option>
                        <option value=\"b20\">Bundle: 20 lessons (400€)</option>
                        <option value=\"g25\">Group of 2: 5 lessons (180€)</option>
                        <option value=\"g210\">Group of 2: 10 lessons (320€)</option>
                        <option value=\"g35\">Group of 3: 5 lessons (225€)</option>
                        <option value=\"g310\">Group of 3: 10 lessons (360€)</option>
                        <option value=\"custom\">Request a personalised plan (fill the message box)</option>
                    </select>
                </div>
                <div id=\"request-container\" style=\"display: none;\">
                    <div>
                        <label for=\"request\">Custom plan: </label>
                    </div>
                    <div>
                        <textarea id=\"request\" name=\"request\" placeholder=\"Request a specific bundle\"></textarea>
                    </div>
                </div>
                <button type=\"submit\">Request Top up</button>
            </form>
        </div>
    </div>
    <div class=\"col\">
        <h2>Your account</h2>
        <div class=\"account multi-item\">
            <p>Your account details:</p>
            <p><strong>Username:</strong> {{ app.user.username }}<br>
            <strong>Email:</strong> {{ app.user.email }}<br>
            <strong>Account Type:</strong> {{ app.user.parent ? 'Parent' : 'Student' }}</p>
            <button onclick=\"location.href='{{ path('app_user_edit', {'id': app.user.id}) }}';\">Change account details</button>        
        </div>
    </div>

    {% if app.user.parent %}
        <div class=\"col\">
        <h2>Student profiles</h2>
        <div class=\"studentProfile multi-item\">
            {% if app.user.students is defined %}
                {% for student in app.user.students %}
                    <a href=\"{{ path('app_student_edit', {'id': student.id}) }}\">
                    <div class=\"student-card\">
                        <img src=\"{{ asset('/img/avatar/' ~ student.avatar) }}\" alt=\"A\"> &emsp;{{ student.name }}
                    </div>
                </a>
                {% endfor %}
                <button onclick=\"location.href='{{ path('app_student_new') }}';\">Add child</button>    
            {% else %}
                <button onclick=\"location.href='{{ path('app_student_new') }}';\">Create your student profile</button>           
            {% endif %}
        </div>
        </div>
{% else %}
        <div class=\"col\">
        <h2>Student profile</h2>
        <div class=\"studentProfile multi-item\">
        {% if app.user.students is defined %}
            {% for student in app.user.students %}
                <a href=\"{{ path('app_student_edit', {'id': student.id}) }}\">
                    <div class=\"student-card\">
                        <img src=\"{{ asset('/img/avatar/' ~ student.avatar) }}\" alt=\"A\"> &emsp;{{ student.name }}
                    </div>
                </a>
            {% endfor %}
        {% else %}  
                <button onclick=\"location.href='{{ path('app_student_new') }}';\">Create your student profile</button>
        {% endif %}
        </div>
        </div>
{% endif %}
</div>
<div id=\"DeleteUser\">
    <form method=\"post\" action=\"{{ path('app_user_delete', {'id': app.user.id}) }}\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ app.user.id) }}\">
        <button type=\"submit\" class=\"delete\" onclick=\"event.preventDefault(); if (confirm('Are you sure you want to delete your account?')) { this.closest('form').submit(); }\">Delete account</button>
    </form>
</div>
    
</section>
<script>
\t\tfunction toggleTopUpForm() {
\t\t\t\tconst topUpForm = document.querySelector(\".top-up-form\");
\t\t\t\tif (topUpForm.style.display === \"none\") {
\t\t\t\t\t\ttopUpForm.style.display = \"block\";
\t\t\t\t} else {
\t\t\t\t\t\ttopUpForm.style.display = \"none\";
\t\t\t\t}
\t\t};
\t\t\$(document).ready(function () {
\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t\tconst planSelect = document.getElementById('plan');
\t\t\t\t\tconst requestContainer = document.getElementById('request-container');
\t\t\t\t\tplanSelect.addEventListener('change', function() {
\t\t\t\t\t\t\tif (planSelect.value === 'custom') {
\t\t\t\t\t\t\t\t\trequestContainer.style.display = 'block';
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\trequestContainer.style.display = 'none';
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t});
\t\t});
</script>
{% endblock %}
", "account/index.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\account\\index.html.twig");
    }
}
