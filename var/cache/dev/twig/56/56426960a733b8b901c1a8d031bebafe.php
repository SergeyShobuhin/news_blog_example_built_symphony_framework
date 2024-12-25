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

/* blog/show.html.twig */
class __TwigTemplate_3ea379ea68870781bf91e46e3b20a96a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "blog/show.html.twig", 1);
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

        yield "Блог - Новость";
        
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
        yield "    <h1>Блог - Новость</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
        </tr>
        ";
        // line 18
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 18, $this->source); })()), "category", [], "any", false, false, false, 18))) {
            // line 19
            yield "            <tr>
                <th>Category</th>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 21, $this->source); })()), "category", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        // line 24
        yield "        <tr>
            <th>Description</th>
            <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Text</th>
            <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 30, $this->source); })()), "text", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
        </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_blog_index");
        yield "\">Вернуться к своим публикациям</a>
    <br><br>

    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">
        <button class=\"btn-success\"> edit</button>
    </a>
    <br><br>

    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_delete_form.html.twig");
        yield "

    <h2>Комментарии:</h2>

    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 47, $this->source); })()), "comments", [], "any", false, false, false, 47));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 48
            yield "        <div>
";
            // line 50
            yield "            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50), "html", null, true);
            yield "</strong> написал в
                <small>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 51), "d.m.Y H:i"), "html", null, true);
            yield " </small>:
            <p>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
            <br>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            yield "        <p>Это пока не кому не интересно.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
    <br>
    <h2>Напиши, что об этом думаешь:</h2>
    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_start');
        yield "
        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'widget');
        yield "
        <button class=\"btn-success\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 63, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
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
        return "blog/show.html.twig";
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
        return array (  212 => 64,  208 => 63,  204 => 62,  200 => 61,  195 => 58,  188 => 56,  179 => 52,  175 => 51,  170 => 50,  167 => 48,  162 => 47,  155 => 43,  147 => 38,  141 => 35,  133 => 30,  126 => 26,  122 => 24,  116 => 21,  112 => 19,  110 => 18,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Блог - Новость{% endblock %}

{% block body %}
    <h1>Блог - Новость</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ blog.id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ blog.title }}</td>
        </tr>
        {% if blog.category is not empty %}
            <tr>
                <th>Category</th>
                <td>{{ blog.category.name }}</td>
            </tr>
        {% endif %}
        <tr>
            <th>Description</th>
            <td>{{ blog.description }}</td>
        </tr>
        <tr>
            <th>Text</th>
            <td>{{ blog.text }}</td>
        </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_user_blog_index') }}\">Вернуться к своим публикациям</a>
    <br><br>

    <a href=\"{{ path('app_user_blog_edit', {'id': blog.id}) }}\">
        <button class=\"btn-success\"> edit</button>
    </a>
    <br><br>

    {{ include('blog/_delete_form.html.twig') }}

    <h2>Комментарии:</h2>

    {% for comment in blog.comments %}
        <div>
{#            {{ dump(comment) }}#}
            <strong>{{ comment.author.email }}</strong> написал в
                <small>{{ comment.createdAt|date('d.m.Y H:i') }} </small>:
            <p>{{ comment.content }}</p>
            <br>
        </div>
    {% else %}
        <p>Это пока не кому не интересно.</p>
    {% endfor %}

    <br>
    <h2>Напиши, что об этом думаешь:</h2>
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <button class=\"btn-success\">{{ button_label|default('Save') }}</button>
    {{ form_end(form) }}


{% endblock %}
", "blog/show.html.twig", "/var/www/symfonytask/task_project/templates/blog/show.html.twig");
    }
}
