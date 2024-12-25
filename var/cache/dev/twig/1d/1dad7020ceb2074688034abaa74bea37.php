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

/* homePage/index.html.twig */
class __TwigTemplate_de700b816966bd7a59c86f99227d98a1 extends Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homePage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homePage/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "homePage/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield " Домашнияя страница ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "
    <body>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
        <symbol id=\"check2\" viewBox=\"0 0 16 16\">
            <path d=\"M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z\"></path>
        </symbol>
        <symbol id=\"circle-half\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"></path>
        </symbol>
        <symbol id=\"moon-stars-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z\"></path>
            <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"></path>
        </symbol>
        <symbol id=\"sun-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"></path>
        </symbol>
    </svg>

    <div class=\"dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle\">
        <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"bd-theme-text\">
            <li>
                <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"light\"
                        aria-pressed=\"false\">
                    <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\">
                        <use href=\"#sun-fill\"></use>
                    </svg>
                    Light
                    <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\">
                        <use href=\"#check2\"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"dark\"
                        aria-pressed=\"false\">
                    <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\">
                        <use href=\"#moon-stars-fill\"></use>
                    </svg>
                    Dark
                    <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\">
                        <use href=\"#check2\"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type=\"button\" class=\"dropdown-item d-flex align-items-center active\" data-bs-theme-value=\"auto\"
                        aria-pressed=\"true\">
                    <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\">
                        <use href=\"#circle-half\"></use>
                    </svg>
                    Auto
                    <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\">
                        <use href=\"#check2\"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <main>

        <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\"
                        aria-current=\"true\" aria-label=\"Slide 1\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                         aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                        <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>Example headline.</h1>
                            <p class=\"opacity-75\">Некоторый репрезентативный контент-заполнитель для первого слайда
                                карусели.</p>
                            ";
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90) == false)) {
            // line 91
            yield "                                <p><a class=\"btn btn-lg btn-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_register");
            yield "\">Регистрация</a>
                                </p>
                            ";
        }
        // line 94
        yield "                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                         aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                        <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption\">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                         aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                        <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-end\">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class=\"container marketing\">

            <!-- Three columns of text below the carousel -->
            <div class=\"row\">
                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 144
            yield "                    <div class=\"col-lg-4\">
                        ";
            // line 146
            yield "                        ";
            // line 147
            yield "                        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\"
                             xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\"
                             preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                            <title>Placeholder</title>
                            <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                            <image href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["unsplashService"]) || array_key_exists("unsplashService", $context) ? $context["unsplashService"] : (function () { throw new RuntimeError('Variable "unsplashService" does not exist.', 152, $this->source); })()), "getRandomImage", [], "method", false, false, false, 152), "html", null, true);
            yield "\" width=\"140\" height=\"140\"></image>
                        </svg>
                        <h2 class=\"fw-normal\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 154), "html", null, true);
            yield "</h2>
                        <p>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "text", [], "any", false, false, false, 155), "html", null, true);
            yield ".</p>
                        <p><a class=\"btn btn-secondary\" href=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            yield "\"> Читать
                                &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "
            </div><!-- /.row -->
        </div><!-- /.container -->



        <!-- FOOTER -->
        <footer class=\"container\">
            <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
            <p>&copy; 2017–2024 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
        </footer>
    </main>

";
        // line 176
        yield "
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "homePage/index.html.twig";
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
        return array (  286 => 176,  271 => 161,  260 => 156,  256 => 155,  252 => 154,  247 => 152,  240 => 147,  238 => 146,  235 => 144,  231 => 143,  180 => 94,  173 => 91,  171 => 90,  90 => 11,  80 => 10,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Домашнияя страница {% endblock %}

{# {% block head %}#}
{# <link rel=\"canonical\" href=\"../../assets/css/carousel.css\">#}

{# {% endblock %}#}

{% block body %}

    <body>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
        <symbol id=\"check2\" viewBox=\"0 0 16 16\">
            <path d=\"M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z\"></path>
        </symbol>
        <symbol id=\"circle-half\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"></path>
        </symbol>
        <symbol id=\"moon-stars-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z\"></path>
            <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"></path>
        </symbol>
        <symbol id=\"sun-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"></path>
        </symbol>
    </svg>

    <div class=\"dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle\">
        <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"bd-theme-text\">
            <li>
                <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"light\"
                        aria-pressed=\"false\">
                    <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\">
                        <use href=\"#sun-fill\"></use>
                    </svg>
                    Light
                    <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\">
                        <use href=\"#check2\"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"dark\"
                        aria-pressed=\"false\">
                    <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\">
                        <use href=\"#moon-stars-fill\"></use>
                    </svg>
                    Dark
                    <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\">
                        <use href=\"#check2\"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type=\"button\" class=\"dropdown-item d-flex align-items-center active\" data-bs-theme-value=\"auto\"
                        aria-pressed=\"true\">
                    <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\">
                        <use href=\"#circle-half\"></use>
                    </svg>
                    Auto
                    <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\">
                        <use href=\"#check2\"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <main>

        <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\"
                        aria-current=\"true\" aria-label=\"Slide 1\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                         aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                        <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>Example headline.</h1>
                            <p class=\"opacity-75\">Некоторый репрезентативный контент-заполнитель для первого слайда
                                карусели.</p>
                            {% if app.user == false %}
                                <p><a class=\"btn btn-lg btn-primary\" href=\"{{ url('app_register') }}\">Регистрация</a>
                                </p>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                         aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                        <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption\">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                         aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                        <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-end\">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class=\"container marketing\">

            <!-- Three columns of text below the carousel -->
            <div class=\"row\">
                {% for blog in blogs %}
                    <div class=\"col-lg-4\">
                        {#        <img src=\"{{ unsplashService }}\" alt=\"Avatar\" style=\"max-width: 50px; height: auto;\"> #}
                        {#        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg> #}
                        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\"
                             xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\"
                             preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                            <title>Placeholder</title>
                            <rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"></rect>
                            <image href=\"{{ unsplashService.getRandomImage() }}\" width=\"140\" height=\"140\"></image>
                        </svg>
                        <h2 class=\"fw-normal\">{{ blog.title }}</h2>
                        <p>{{ blog.text }}.</p>
                        <p><a class=\"btn btn-secondary\" href=\"{{ path('app_blog_show', {'id': blog.id}) }}\"> Читать
                                &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->

                {% endfor %}

            </div><!-- /.row -->
        </div><!-- /.container -->



        <!-- FOOTER -->
        <footer class=\"container\">
            <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
            <p>&copy; 2017–2024 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
        </footer>
    </main>

{#    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">#}
{#    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>#}

    </body>
{% endblock %}

", "homePage/index.html.twig", "/var/www/symfonytask/task_project/templates/homePage/index.html.twig");
    }
}
