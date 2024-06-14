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

/* calendar/index.html.twig */
class __TwigTemplate_351c275b7665d3006bb5ef6f4b8f596c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendar/index.html.twig", 1);
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

        echo "Español con EvaMol";
        
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
        echo "    <div class=\"fondo\">
        <section>
            <h2>Lesson Calendar</h2>
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 9), "students", [], "any", true, true, false, 9)) {
            // line 10
            echo "                <div class=\"tab-container\">
                    <ul class=\"tabs\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "students", [], "any", false, false, false, 12));
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
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 13
                echo "                            <a style=\"color:white;\" href=\"#\" data-target=\"tabf0-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), "html", null, true);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) ? ("active first") : ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13) == 2)) ? ("second") : ("third"))));
                echo "\">
                                <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["student"], "avatar", [], "any", false, false, false, 14))), "html", null, true);
                echo "\" alt=\"A\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "
                            </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "students", [], "any", false, false, false, 19));
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
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 20
                echo "                            <div id=\"tabf0-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), "html", null, true);
                echo "\" style=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) ? ("display: block;") : ("display: none;"));
                echo "\">
                             ";
                // line 21
                $this->loadTemplate("calendar/fullcalendar.html.twig", "calendar/index.html.twig", 21)->display($context);
                // line 22
                echo "\t\t\t\t\t\t\t<div id=\"event-form-modal\" class=\"modal\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t\t\t<form id=\"event-form\">
\t\t\t\t\t\t\t\t\t\t<label for=\"start\">Start time:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"start\" name=\"start\" readonly>
\t\t\t\t\t\t\t\t\t\t<label for=\"duration\">Duration:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"duration\" name=\"duration\" readonly>
\t\t\t\t\t\t\t\t\t\t<label for=\"studentId\">Student ID:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"studentId\" name=\"studentId\" readonly>
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"Cancel\" onclick=\"document.getElementById('event-form-modal').style.display = 'none';\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </div>
                </div>
\t\t\t\t<div id=\"external-events\" class=\"col\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Drag and drop into the calendar to book a lesson</strong>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event\">
\t\t\t\t\t\t<div class=\"fc-event-main\" id='draggable-el'>
                        <button>
\t\t\t\t\t\t\t";
            // line 48
            $context["hhmm"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "classDuration", [], "any", false, false, false, 48), ":");
            // line 49
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["hhmm"]) || array_key_exists("hhmm", $context) ? $context["hhmm"] : (function () { throw new RuntimeError('Variable "hhmm" does not exist.', 49, $this->source); })()), 0, [], "array", false, false, false, 49) == "00")) {
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hhmm"]) || array_key_exists("hhmm", $context) ? $context["hhmm"] : (function () { throw new RuntimeError('Variable "hhmm" does not exist.', 50, $this->source); })()), 1, [], "array", false, false, false, 50), "html", null, true);
                echo " min Lesson
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
(isset($context["hhmm"]) || array_key_exists("hhmm", $context) ? $context["hhmm"] : (function () { throw new RuntimeError('Variable "hhmm" does not exist.', 51, $this->source); })()), 1, [], "array", false, false, false, 51) == "00")) {
                // line 52
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hhmm"]) || array_key_exists("hhmm", $context) ? $context["hhmm"] : (function () { throw new RuntimeError('Variable "hhmm" does not exist.', 52, $this->source); })()), 0, [], "array", false, false, false, 52), "html", null, true);
                echo " h Lesson
\t\t\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hhmm"]) || array_key_exists("hhmm", $context) ? $context["hhmm"] : (function () { throw new RuntimeError('Variable "hhmm" does not exist.', 54, $this->source); })()), 0, [], "array", false, false, false, 54), "html", null, true);
                echo " h ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hhmm"]) || array_key_exists("hhmm", $context) ? $context["hhmm"] : (function () { throw new RuntimeError('Variable "hhmm" does not exist.', 54, $this->source); })()), 1, [], "array", false, false, false, 54), "html", null, true);
                echo " min Lesson
\t\t\t\t\t\t\t";
            }
            // line 56
            echo "                        </button> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            ";
        } else {
            // line 61
            echo "                <p>You need to set your student details.</p> 
                <button onclick=\"location.href='";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_new");
            echo "';\">Set student details</button>
            ";
        }
        // line 64
        echo "            </div>
        </section>
        <script>
            \$(document).ready(function () {
        \t  var Draggable = FullCalendar.Draggable;
\t\t\t  var containerEl = document.getElementById('external-events');
\t\t\t  new Draggable(containerEl, {
\t\t\t\titemSelector: '.fc-event',
\t\t\t\teventData: function(eventEl) {
\t\t\t\treturn {
\t\t\t\t\ttitle: eventEl.innerText,
\t\t\t\t\tduration: '";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "classDuration", [], "any", false, false, false, 75), "html", null, true);
        echo "',
\t\t\t\t\tbackgroundColor: '#5A8BDF',
\t\t\t\t};
\t\t\t\t}
\t\t\t  });
\t\t\t  calendar= [];
              ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "students", [], "any", false, false, false, 81));
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 82
            echo "              NuevoCalendario(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo ");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\tcalendar[1].render();
\t\t\t\t\t\t\t\$(\".tabs a\").on(\"click\", function (e) {
\t\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\t\t// Hide all tab content
\t\t\t\t\t\t\t\t\t\$(this).parents(\".tab-container\").find(\".tab-content > div\").hide();
\t\t\t\t\t\t\t\t\t// Remove active class from all tabs
\t\t\t\t\t\t\t\t\t\$(this).parents(\".tabs\").find(\"a\").removeClass(\"active\");
\t\t\t\t\t\t\t\t\t// Add active class to clicked tab and show its content
\t\t\t\t\t\t\t\t\t\$(this).addClass(\"active\");
\t\t\t\t\t\t\t\t\t\$(\"#\" + \$(this).data(\"target\")).show();
\t\t\t\t\t\t\t\t\tcalendar[\$(this).data(\"target\").split('-')[1]].render();
\t\t\t\t\t\t\t});
            });
            // Creo un nuevo calendario para la pestaña del estudiante
            function NuevoCalendario(tab, estudiante) {
              calendar[tab]= new FullCalendar.Calendar(document.getElementById('calendar'+tab), {
\t\t\t\t\t\t\t\tgoogleCalendarApiKey: 'AIzaSyAUoArCj4EbKzjvcGHfGSbgUiSPqqGwKjE',
\t\t\t\t\t\t\t\teventSources: [
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tgoogleCalendarId: 'cerezocableado@gmail.com',
\t\t\t\t\t\t\t\t\t\tcolor: 'green',
\t\t\t\t\t\t\t\t\t\teditable: false
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t],
\t\t\t\t\t\t\t\tevents: function(fetchInfo, successCallback, failureCallback) {
\t\t\t\t\t\t\t\t\tfetch('/bookings/api/' + estudiante, {
\t\t\t\t\t\t\t\t\t\tmethod: 'GET',
\t\t\t\t\t\t\t\t\t\theaders: {
\t\t\t\t\t\t\t\t\t\t\t'Content-Type': 'application/json'
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tbody: JSON.stringify({
\t\t\t\t\t\t\t\t\t\t\tstudentId: estudiante,
\t\t\t\t\t\t\t\t\t\t\tstart: fetchInfo.startStr,
\t\t\t\t\t\t\t\t\t\t\tend: fetchInfo.endStr
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t.then(response => response.json())
\t\t\t\t\t\t\t\t\t.then(data => {
\t\t\t\t\t\t\t\t\t\tif (data.error) {
\t\t\t\t\t\t\t\t\t\t\tfailureCallback(data.error);
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tsuccessCallback(data.events);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t.catch(error => {
\t\t\t\t\t\t\t\t\t\tfailureCallback(error.message);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t
\t\t\t\t\t\t\t\tinitialView: 'timeGridWeek',
\t\t\t\t\t\t\t\theaderToolbar: {
\t\t\t\t\t\t\t\t\tleft: 'prev,next today',
\t\t\t\t\t\t\t\t\tcenter: 'title',
\t\t\t\t\t\t\t\t\tright: 'dayGridMonth,timeGridWeek,timeGridDay'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tslotMinTime: '09:00:00',
\t\t\t\t\t\t\t\tslotMaxTime: '21:00:00',
\t\t\t\t\t\t\t\tbusinessHours:  [
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tdaysOfWeek: [ 1,2,3,4,5 ],
\t\t\t\t\t\t\t\t\t\t\tstartTime: '14:00',
\t\t\t\t\t\t\t\t\t\t\tendTime: '20:00'
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t],
\t\t\t\t\t\t\t\theight: 'auto',
\t\t\t\t\t\t\t\tnowIndicator: true,
\t\t\t\t\t\t\t\tdroppable: true,
\t\t\t\t\t\t\t\teventReceive: function(info) {
\t\t\t\t\t\t\t\t\t// Open the modal and populate the form fields
\t\t\t\t\t\t\t\t\tdocument.getElementById('start').value = info.event.start.toISOString();
\t\t\t\t\t\t\t\t\tdocument.getElementById('duration').value = info.event.duration;
\t\t\t\t\t\t\t\t\tdocument.getElementById('studentId').value = estudiante;
\t\t\t\t\t\t\t\t\tdocument.getElementById('event-form-modal').style.display = 'block';
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\teventStartEditable: true,
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tdocument.addEventListener('DOMContentLoaded', calendar[tab]);
\t\t\t\t\t\t};
\t\t\t\t\t\t
\t\t\t\t\t\t// Get the modal and the close button
\t\t\t\t\t\tvar modal = document.getElementById('event-form-modal');
\t\t\t\t\t\tvar closeBtn = document.getElementsByClassName('close')[0];

\t\t\t\t\t\t// When the user clicks on the close button, close the modal
\t\t\t\t\t\tcloseBtn.onclick = function() {
\t\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t\t}

\t\t\t\t\t\t// When the user clicks anywhere outside of the modal, close it
\t\t\t\t\t\twindow.onclick = function(event) {
\t\t\t\t\t\t\tif (event.target == modal) {
\t\t\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Prevent the form from being submitted normally
\t\t\t\t\t\tdocument.getElementById('event-form').addEventListener('submit', function(e) {
\t\t\t\t\t\t\te.preventDefault();

\t\t\t\t\t\t\t// Get the form data
\t\t\t\t\t\t\tvar data = {
\t\t\t\t\t\t\t\tstart: document.getElementById('start').value,
\t\t\t\t\t\t\t\tduration: document.getElementById('duration').value,
\t\t\t\t\t\t\t\tstudentId: document.getElementById('studentId').value
\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t// Make the API call
\t\t\t\t\t\t\tfetch('/api/bookings', {
\t\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\t\theaders: {
\t\t\t\t\t\t\t\t\t'Content-Type': 'application/json'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tbody: JSON.stringify(data)
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.then(response => {
\t\t\t\t\t\t\t\tif (!response.ok) {
\t\t\t\t\t\t\t\t\tthrow new Error(`HTTP error! status: \${response.status}`);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\treturn response.json();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.then(data => {
\t\t\t\t\t\t\t\tif (data.error) {
\t\t\t\t\t\t\t\t\t// Handle error
\t\t\t\t\t\t\t\t\tconsole.error('API call failed:', data.error);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t// Close the modal
\t\t\t\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.catch(error => {
\t\t\t\t\t\t\t\t// Handle error
\t\t\t\t\t\t\t\tconsole.error('API call failed:', error.message);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t</script>
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
        return "calendar/index.html.twig";
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
        return array (  312 => 84,  293 => 82,  276 => 81,  267 => 75,  254 => 64,  249 => 62,  246 => 61,  239 => 56,  231 => 54,  225 => 52,  223 => 51,  218 => 50,  215 => 49,  213 => 48,  202 => 39,  172 => 22,  170 => 21,  163 => 20,  146 => 19,  142 => 17,  123 => 14,  116 => 13,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Español con EvaMol{% endblock %}

{% block body %}
    <div class=\"fondo\">
        <section>
            <h2>Lesson Calendar</h2>
            {% if app.user.students is defined %}
                <div class=\"tab-container\">
                    <ul class=\"tabs\">
                        {% for student in app.user.students %}
                            <a style=\"color:white;\" href=\"#\" data-target=\"tabf0-{{ loop.index }}\" class=\"{{ loop.first ? 'active first' : (loop.index == 2 ? 'second' : 'third') }}\">
                                <img src=\"{{ asset('/img/avatar/' ~ student.avatar) }}\" alt=\"A\"> {{ student.name }}
                            </a>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for student in app.user.students %}
                            <div id=\"tabf0-{{ loop.index }}\" style=\"{{ loop.first ? 'display: block;' : 'display: none;' }}\">
                             {% include 'calendar/fullcalendar.html.twig' %}
\t\t\t\t\t\t\t<div id=\"event-form-modal\" class=\"modal\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t\t\t<form id=\"event-form\">
\t\t\t\t\t\t\t\t\t\t<label for=\"start\">Start time:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"start\" name=\"start\" readonly>
\t\t\t\t\t\t\t\t\t\t<label for=\"duration\">Duration:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"duration\" name=\"duration\" readonly>
\t\t\t\t\t\t\t\t\t\t<label for=\"studentId\">Student ID:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"studentId\" name=\"studentId\" readonly>
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"Cancel\" onclick=\"document.getElementById('event-form-modal').style.display = 'none';\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
\t\t\t\t<div id=\"external-events\" class=\"col\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Drag and drop into the calendar to book a lesson</strong>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event\">
\t\t\t\t\t\t<div class=\"fc-event-main\" id='draggable-el'>
                        <button>
\t\t\t\t\t\t\t{% set hhmm = app.user.classDuration|split(':') %}
\t\t\t\t\t\t\t{% if hhmm[0] == '00' %}
\t\t\t\t\t\t\t\t{{ hhmm[1] }} min Lesson
\t\t\t\t\t\t\t{% elseif hhmm[1] =='00' %}
\t\t\t\t\t\t\t\t{{ hhmm[0] }} h Lesson
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ hhmm[0] }} h {{ hhmm[1] }} min Lesson
\t\t\t\t\t\t\t{% endif %}
                        </button> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            {% else %}
                <p>You need to set your student details.</p> 
                <button onclick=\"location.href='{{ path('app_student_new') }}';\">Set student details</button>
            {% endif %}
            </div>
        </section>
        <script>
            \$(document).ready(function () {
        \t  var Draggable = FullCalendar.Draggable;
\t\t\t  var containerEl = document.getElementById('external-events');
\t\t\t  new Draggable(containerEl, {
\t\t\t\titemSelector: '.fc-event',
\t\t\t\teventData: function(eventEl) {
\t\t\t\treturn {
\t\t\t\t\ttitle: eventEl.innerText,
\t\t\t\t\tduration: '{{ app.user.classDuration }}',
\t\t\t\t\tbackgroundColor: '#5A8BDF',
\t\t\t\t};
\t\t\t\t}
\t\t\t  });
\t\t\t  calendar= [];
              {% for student in app.user.students %}
              NuevoCalendario({{ loop.index }}, {{ student.id }});
              {% endfor %}
\t\t\t\t\t\t\tcalendar[1].render();
\t\t\t\t\t\t\t\$(\".tabs a\").on(\"click\", function (e) {
\t\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\t\t// Hide all tab content
\t\t\t\t\t\t\t\t\t\$(this).parents(\".tab-container\").find(\".tab-content > div\").hide();
\t\t\t\t\t\t\t\t\t// Remove active class from all tabs
\t\t\t\t\t\t\t\t\t\$(this).parents(\".tabs\").find(\"a\").removeClass(\"active\");
\t\t\t\t\t\t\t\t\t// Add active class to clicked tab and show its content
\t\t\t\t\t\t\t\t\t\$(this).addClass(\"active\");
\t\t\t\t\t\t\t\t\t\$(\"#\" + \$(this).data(\"target\")).show();
\t\t\t\t\t\t\t\t\tcalendar[\$(this).data(\"target\").split('-')[1]].render();
\t\t\t\t\t\t\t});
            });
            // Creo un nuevo calendario para la pestaña del estudiante
            function NuevoCalendario(tab, estudiante) {
              calendar[tab]= new FullCalendar.Calendar(document.getElementById('calendar'+tab), {
\t\t\t\t\t\t\t\tgoogleCalendarApiKey: 'AIzaSyAUoArCj4EbKzjvcGHfGSbgUiSPqqGwKjE',
\t\t\t\t\t\t\t\teventSources: [
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tgoogleCalendarId: 'cerezocableado@gmail.com',
\t\t\t\t\t\t\t\t\t\tcolor: 'green',
\t\t\t\t\t\t\t\t\t\teditable: false
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t],
\t\t\t\t\t\t\t\tevents: function(fetchInfo, successCallback, failureCallback) {
\t\t\t\t\t\t\t\t\tfetch('/bookings/api/' + estudiante, {
\t\t\t\t\t\t\t\t\t\tmethod: 'GET',
\t\t\t\t\t\t\t\t\t\theaders: {
\t\t\t\t\t\t\t\t\t\t\t'Content-Type': 'application/json'
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tbody: JSON.stringify({
\t\t\t\t\t\t\t\t\t\t\tstudentId: estudiante,
\t\t\t\t\t\t\t\t\t\t\tstart: fetchInfo.startStr,
\t\t\t\t\t\t\t\t\t\t\tend: fetchInfo.endStr
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t.then(response => response.json())
\t\t\t\t\t\t\t\t\t.then(data => {
\t\t\t\t\t\t\t\t\t\tif (data.error) {
\t\t\t\t\t\t\t\t\t\t\tfailureCallback(data.error);
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tsuccessCallback(data.events);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t.catch(error => {
\t\t\t\t\t\t\t\t\t\tfailureCallback(error.message);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t
\t\t\t\t\t\t\t\tinitialView: 'timeGridWeek',
\t\t\t\t\t\t\t\theaderToolbar: {
\t\t\t\t\t\t\t\t\tleft: 'prev,next today',
\t\t\t\t\t\t\t\t\tcenter: 'title',
\t\t\t\t\t\t\t\t\tright: 'dayGridMonth,timeGridWeek,timeGridDay'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tslotMinTime: '09:00:00',
\t\t\t\t\t\t\t\tslotMaxTime: '21:00:00',
\t\t\t\t\t\t\t\tbusinessHours:  [
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tdaysOfWeek: [ 1,2,3,4,5 ],
\t\t\t\t\t\t\t\t\t\t\tstartTime: '14:00',
\t\t\t\t\t\t\t\t\t\t\tendTime: '20:00'
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t],
\t\t\t\t\t\t\t\theight: 'auto',
\t\t\t\t\t\t\t\tnowIndicator: true,
\t\t\t\t\t\t\t\tdroppable: true,
\t\t\t\t\t\t\t\teventReceive: function(info) {
\t\t\t\t\t\t\t\t\t// Open the modal and populate the form fields
\t\t\t\t\t\t\t\t\tdocument.getElementById('start').value = info.event.start.toISOString();
\t\t\t\t\t\t\t\t\tdocument.getElementById('duration').value = info.event.duration;
\t\t\t\t\t\t\t\t\tdocument.getElementById('studentId').value = estudiante;
\t\t\t\t\t\t\t\t\tdocument.getElementById('event-form-modal').style.display = 'block';
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\teventStartEditable: true,
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tdocument.addEventListener('DOMContentLoaded', calendar[tab]);
\t\t\t\t\t\t};
\t\t\t\t\t\t
\t\t\t\t\t\t// Get the modal and the close button
\t\t\t\t\t\tvar modal = document.getElementById('event-form-modal');
\t\t\t\t\t\tvar closeBtn = document.getElementsByClassName('close')[0];

\t\t\t\t\t\t// When the user clicks on the close button, close the modal
\t\t\t\t\t\tcloseBtn.onclick = function() {
\t\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t\t}

\t\t\t\t\t\t// When the user clicks anywhere outside of the modal, close it
\t\t\t\t\t\twindow.onclick = function(event) {
\t\t\t\t\t\t\tif (event.target == modal) {
\t\t\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Prevent the form from being submitted normally
\t\t\t\t\t\tdocument.getElementById('event-form').addEventListener('submit', function(e) {
\t\t\t\t\t\t\te.preventDefault();

\t\t\t\t\t\t\t// Get the form data
\t\t\t\t\t\t\tvar data = {
\t\t\t\t\t\t\t\tstart: document.getElementById('start').value,
\t\t\t\t\t\t\t\tduration: document.getElementById('duration').value,
\t\t\t\t\t\t\t\tstudentId: document.getElementById('studentId').value
\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t// Make the API call
\t\t\t\t\t\t\tfetch('/api/bookings', {
\t\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\t\theaders: {
\t\t\t\t\t\t\t\t\t'Content-Type': 'application/json'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tbody: JSON.stringify(data)
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.then(response => {
\t\t\t\t\t\t\t\tif (!response.ok) {
\t\t\t\t\t\t\t\t\tthrow new Error(`HTTP error! status: \${response.status}`);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\treturn response.json();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.then(data => {
\t\t\t\t\t\t\t\tif (data.error) {
\t\t\t\t\t\t\t\t\t// Handle error
\t\t\t\t\t\t\t\t\tconsole.error('API call failed:', data.error);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t// Close the modal
\t\t\t\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.catch(error => {
\t\t\t\t\t\t\t\t// Handle error
\t\t\t\t\t\t\t\tconsole.error('API call failed:', error.message);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t</script>
    </div>
{% endblock %}
", "calendar/index.html.twig", "C:\\Users\\User\\Documents\\EcEM_web\\EcEM_web\\EcEM\\templates\\calendar\\index.html.twig");
    }
}
