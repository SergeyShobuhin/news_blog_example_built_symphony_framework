<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html.twig */
class __TwigTemplate_a5ba5229853e1ed6d8b78ea6d6a7bde9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\"
          integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.6/examples/carousel/\">

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    ";
        // line 13
        yield "
    <!-- Bootstrap core CSS -->
    ";
        // line 16
        yield "

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href=\"../assets/css/carousel.css\" rel=\"stylesheet\">

</head>
<body>


<div><a class=\"btn-success\" href=\"\"> ЛОГАУТ </a></div>

<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
            aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homePage");
        yield "\">Домашняя <span class=\"sr-only\">(current)</span></a>
            </li>
            ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 57
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 58
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">ПОЛЬЗОВАТЕЛИ</a>
                </li>
            ";
        }
        // line 61
        yield "
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homePageBlogs");
        yield "\"
                   role=\"button\" aria-expanded=\"false\">ВСЕ БЛОГИ</a>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homePageBlogs");
        yield "\">ВСЕ БЛОГИ</a></li>
";
        // line 70
        yield "
                    <li><a class=\"dropdown-item\" href=\"#\">Какая-нибудь категория</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Ещё категория</a></li>
                    <li>
                        <hr class=\"dropdown-divider\">
                        <p>Тут права админа</p>
                    </li>
                    ";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 78
            yield "                        <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
            yield "\">Создать категорию </a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Можно ещё что-то запихнуть</a></li>
                    ";
        }
        // line 81
        yield "                </ul>
            </li>

            ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84) == false)) {
            // line 85
            yield "                <li class=\"nav-item active\">
                    <a class=\"nav-link btn btn-success\" href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Залогинься</a>
                </li>
            ";
        }
        // line 89
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89)) {
            // line 90
            yield "                <li class=\"nav-item active\">
                    <a class=\"nav-link btn btn-outline-primary\" href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_blog_index");
            yield "\">МОИ БЛОГИ</a>
                </li>
            ";
        }
        // line 94
        yield "
            ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "attributes", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95) == "app_homePage")) {
            // line 96
            yield "                <div>
                    <i class=\"bi bi-cloud-sun\" style=\"color: #00cc00\"> Сейчас в Новосибирске:
                        ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["gismeteo"] ?? null), "gismeteo", [], "any", false, true, false, 98), "current", [], "array", false, true, false, 98), "temperature", [], "array", true, true, false, 98) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gismeteo"]) || array_key_exists("gismeteo", $context) ? $context["gismeteo"] : (function () { throw new RuntimeError('Variable "gismeteo" does not exist.', 98, $this->source); })()), "gismeteo", [], "any", false, false, false, 98), "current", [], "array", false, false, false, 98), "temperature", [], "array", false, false, false, 98)))) {
                // line 99
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gismeteo"]) || array_key_exists("gismeteo", $context) ? $context["gismeteo"] : (function () { throw new RuntimeError('Variable "gismeteo" does not exist.', 99, $this->source); })()), "gismeteo", [], "any", false, false, false, 99), "current", [], "array", false, false, false, 99), "temperature", [], "array", false, false, false, 99), "html", null, true);
                yield "&deg;C
                        ";
            } else {
                // line 101
                yield "                            сервис погоды сломался
                        ";
            }
            // line 103
            yield "                    </i>

                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                         class=\"bi bi-cloud-sun\" color=\"#00cc00\"
                         viewBox=\"0 0 16 16\">
                        <path d=\"M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.502 3.502 0 0 1 7 8m4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z\"></path>
                        <path d=\"M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129m4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377M14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z\"></path>
                    </svg>
                </div>
            ";
        }
        // line 113
        yield "
        </ul>


        ";
        // line 117
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117)) {
            // line 118
            yield "            <button type=\"button\" class=\"btn btn-primary\">
                ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "email", [], "any", false, false, false, 119), "html", null, true);
            yield " <span class=\"badge bg-secondary\">
                ";
            // line 120
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                yield " Друг, да ты у нас Администратор
                ";
            } else {
                // line 121
                yield " Пользователь
                ";
            }
            // line 123
            yield "            </span>
            </button>
            <a class=\"nav-link btn btn-danger text-white\" href=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">ЛОГАУТ</a>
        ";
        }
        // line 127
        yield "
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>

<br>
<br>

<main role=\"main\">

    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 144
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 145
        yield "            </div>
            <hr>
        </div> <!-- /container -->
    </div>
</main>
<br>
<br>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Домашняя новости";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 144
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html.twig";
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
        return array (  310 => 144,  290 => 4,  269 => 145,  267 => 144,  248 => 127,  243 => 125,  239 => 123,  235 => 121,  230 => 120,  226 => 119,  223 => 118,  221 => 117,  215 => 113,  203 => 103,  199 => 101,  193 => 99,  191 => 98,  187 => 96,  185 => 95,  182 => 94,  176 => 91,  173 => 90,  170 => 89,  164 => 86,  161 => 85,  159 => 84,  154 => 81,  147 => 78,  145 => 77,  136 => 70,  132 => 66,  126 => 63,  122 => 61,  116 => 58,  113 => 57,  111 => 56,  106 => 54,  66 => 16,  62 => 13,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>{% block title %}Домашняя новости{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\"
          integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.6/examples/carousel/\">

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    {#    <link rel=\"canonical\" href=\"../assets/css/carousel.css\"> #}

    <!-- Bootstrap core CSS -->
    {#    <link href=\"../assets/dist/css/bootstrap.min.css\" rel=\"stylesheet\"> #}


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href=\"../assets/css/carousel.css\" rel=\"stylesheet\">

</head>
<body>


<div><a class=\"btn-success\" href=\"\"> ЛОГАУТ </a></div>

<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
            aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('app_homePage') }}\">Домашняя <span class=\"sr-only\">(current)</span></a>
            </li>
            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">ПОЛЬЗОВАТЕЛИ</a>
                </li>
            {% endif %}

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"{{ path('app_homePageBlogs') }}\"
                   role=\"button\" aria-expanded=\"false\">ВСЕ БЛОГИ</a>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_homePageBlogs') }}\">ВСЕ БЛОГИ</a></li>
{#                    {% for category in categories %}#}
{#                        <li><a class=\"dropdown-item\" href=\"#\">{{ category.name }}</a></li>#}
{#                    {% endfor %}#}

                    <li><a class=\"dropdown-item\" href=\"#\">Какая-нибудь категория</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Ещё категория</a></li>
                    <li>
                        <hr class=\"dropdown-divider\">
                        <p>Тут права админа</p>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_category_index') }}\">Создать категорию </a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Можно ещё что-то запихнуть</a></li>
                    {% endif %}
                </ul>
            </li>

            {% if app.user == false %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link btn btn-success\" href=\"{{ path('app_login') }}\">Залогинься</a>
                </li>
            {% endif %}
            {% if app.user %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link btn btn-outline-primary\" href=\"{{ path('app_user_blog_index') }}\">МОИ БЛОГИ</a>
                </li>
            {% endif %}

            {% if app.request.attributes.get('_route') == 'app_homePage' %}
                <div>
                    <i class=\"bi bi-cloud-sun\" style=\"color: #00cc00\"> Сейчас в Новосибирске:
                        {% if gismeteo.gismeteo['current']['temperature'] is defined and gismeteo.gismeteo['current']['temperature'] is not empty %}
                            {{ gismeteo.gismeteo['current']['temperature'] }}&deg;C
                        {% else %}
                            сервис погоды сломался
                        {% endif %}
                    </i>

                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                         class=\"bi bi-cloud-sun\" color=\"#00cc00\"
                         viewBox=\"0 0 16 16\">
                        <path d=\"M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.502 3.502 0 0 1 7 8m4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z\"></path>
                        <path d=\"M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129m4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377M14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z\"></path>
                    </svg>
                </div>
            {% endif %}

        </ul>


        {% if app.user %}
            <button type=\"button\" class=\"btn btn-primary\">
                {{ app.user.email }} <span class=\"badge bg-secondary\">
                {% if is_granted('ROLE_ADMIN') %} Друг, да ты у нас Администратор
                {% else %} Пользователь
                {% endif %}
            </span>
            </button>
            <a class=\"nav-link btn btn-danger text-white\" href=\"{{ path('app_login') }}\">ЛОГАУТ</a>
        {% endif %}

        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>

<br>
<br>

<main role=\"main\">

    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% block body %}{% endblock %}
            </div>
            <hr>
        </div> <!-- /container -->
    </div>
</main>
<br>
<br>

</body>
</html>
", "layout.html.twig", "/var/www/symfonytask/task_project/templates/layout.html.twig");
    }
}
