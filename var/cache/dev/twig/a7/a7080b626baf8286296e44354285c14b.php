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

/* blog/index.html.twig */
class __TwigTemplate_4c2fd3c08039006f5fb09273146aab22 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "blog/index.html.twig", 1);
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

        yield "Блоги/Новости";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "    <h1>Блоги/Новости</h1>

    ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 8, $this->source); })()), 'form_start');
        yield "
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 9, $this->source); })()), 'widget');
        yield "
    <button class=\"btn-success\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 10, $this->source); })()), "Поиск")) : ("Поиск")), "html", null, true);
        yield "</button>
    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 11, $this->source); })()), 'form_end');
        yield "

    <table class=\"table\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Автор</th>
            <th>Тема</th>
            <th>Описание</th>
            <th>Содержание</th>
            <th>Аватарка</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 27
            yield "            <tr>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                ";
            // line 29
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "user", [], "any", false, false, false, 29))) {
                // line 30
                yield "                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                ";
            } else {
                // line 32
                yield "                    <td>Автор изчес &#128561</td>
                ";
            }
            // line 34
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 35)) > 50)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 35), 0, 50) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 35))), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "text", [], "any", false, false, false, 36)) > 50)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "text", [], "any", false, false, false, 36), 0, 150) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "text", [], "any", false, false, false, 36))), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "user", [], "any", false, false, false, 37), "avatar", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">
                        <button class=\"btn-primary\"> читать</button>
                    </a>
                    ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 43
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\">
                            <button class=\"btn-success\"> edit</button>
                        </a>
                    ";
            } else {
                // line 47
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "pathInfo", [], "any", false, false, false, 47) == "/user/blog/")) {
                    // line 48
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                    yield "\">
                                <button class=\"btn-success\"> edit</button>
                            </a>
                        ";
                }
                // line 52
                yield "                    ";
            }
            // line 53
            yield "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "        </tbody>
    </table>

    <div class=\"navigation\">
    ";
        // line 65
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 65, $this->source); })()));
        yield "

    ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 68
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_new");
            yield "\">
            <button class=\"btn-secondary\">Создать статью</button>
        </a>
    ";
        } else {
            // line 72
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_blog_new");
            yield "\">
            <button class=\"btn-secondary\">Создать статью</button>
        </a>
    ";
        }
        // line 76
        yield "
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
        return "blog/index.html.twig";
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
        return array (  242 => 76,  234 => 72,  226 => 68,  224 => 67,  219 => 65,  213 => 61,  204 => 57,  196 => 53,  193 => 52,  185 => 48,  182 => 47,  174 => 43,  172 => 42,  166 => 39,  161 => 37,  157 => 36,  153 => 35,  148 => 34,  144 => 32,  138 => 30,  136 => 29,  132 => 28,  129 => 27,  124 => 26,  106 => 11,  102 => 10,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Блоги/Новости{% endblock %}

{% block body %}
    <h1>Блоги/Новости</h1>

    {{ form_start(searchForm) }}
    {{ form_widget(searchForm) }}
    <button class=\"btn-success\">{{ button_label|default('Поиск') }}</button>
    {{ form_end(searchForm) }}

    <table class=\"table\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Автор</th>
            <th>Тема</th>
            <th>Описание</th>
            <th>Содержание</th>
            <th>Аватарка</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for blog in pagination %}
            <tr>
                <td>{{ blog.id }}</td>
                {% if blog.user is not empty %}
                    <td>{{ blog.user.email }}</td>
                {% else %}
                    <td>Автор изчес &#128561</td>
                {% endif %}
                <td>{{ blog.title }}</td>
                <td>{{ blog.description | length > 50 ? blog.description | slice(0,50) ~ '...' : blog.description }}</td>
                <td>{{ blog.text | length > 50 ? blog.text | slice(0,150) ~ '...' : blog.text }}</td>
                <td>{{ blog.user.avatar }}</td>
                <td>
                    <a href=\"{{ path('app_blog_show', {'id': blog.id}) }}\">
                        <button class=\"btn-primary\"> читать</button>
                    </a>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_blog_edit', {'id': blog.id}) }}\">
                            <button class=\"btn-success\"> edit</button>
                        </a>
                    {% else %}
                        {% if app.request.pathInfo == '/user/blog/' %}
                            <a href=\"{{ path('app_user_blog_edit', {'id': blog.id}) }}\">
                                <button class=\"btn-success\"> edit</button>
                            </a>
                        {% endif %}
                    {% endif %}

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation\">
    {{ knp_pagination_render(pagination) }}

    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('app_blog_new') }}\">
            <button class=\"btn-secondary\">Создать статью</button>
        </a>
    {% else %}
        <a href=\"{{ path('app_user_blog_new') }}\">
            <button class=\"btn-secondary\">Создать статью</button>
        </a>
    {% endif %}

{% endblock %}", "blog/index.html.twig", "/var/www/symfonytask/task_project/templates/blog/index.html.twig");
    }
}
