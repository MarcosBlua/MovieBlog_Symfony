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

/* base.html.twig */
class __TwigTemplate_ac6c426d9d4792de69d764b92914c39d119626e652cedaa866f3e576d0242aa1 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>

    <body style=\"display: flex; flex-direction: column;\">
        <div class=\"header\" style=\"text-align:center\">
\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Logo.png"), "html", null, true);
        echo "\" width=\"170px\" heigth=\"170px\" />
\t\t</div>

\t\t<nav class=\"navbar navbar-expand-md navbar-light bg-light sticky-top\">
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"navbar-nav mr-auto mx-auto mt-2 mt-md-0\">
\t\t\t\t\t<li class=\"nav-item\"> Campo de busqueda </li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "        \t\t\t\tMostrar foto de perfil clickeable
\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t<li class=\"nav-item\"><a  class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-edit\"></i> Iniciar Sesión </a></li>
    \t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t
\t\t<nav class=\"navbar navbar-expand-md navbar-light bg-light sticky-top\">
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"navbar-nav mr-auto mx-auto mt-2 mt-md-0\">
\t\t\t\t\t<li class=\"nav-item activa\"><a class=\"nav-link\" href=\"Perfil.html\">Perfil</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Noticias.html\">Noticias</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Recomendaciones.html\">Recomendaciones</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>

        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
\t\t<div class=\"footer\">
\t\t\t<div style=\"text-align:center;\">
\t\t\t\t<p>Todos derechos de este sitio estan reservados a </p>
\t\t\t\t<a href=\"https://www.facebook.com/marcosblua\" target=\"_blank\">
\t\t\t\t\t<img src=\"https://img.icons8.com/nolan/64/facebook.png\" height=\"30px\"></img>
\t\t\t\t\tMarcos Blua
\t\t\t\t</a>
\t\t\t\t<a href=\"https://www.instagram.com/marcosblua/\" target=\"_blank\">
\t\t\t\t\t<img src=\"https://img.icons8.com/nolan/64/instagram-new.png\" height=\"30px\"></img>
\t\t\t\t\t@marcosblua
\t\t\t\t</a>
\t\t\t\t<a href=\"https://twitter.com/marcosblua\" target=\"_blank\">
\t\t\t\t\t<img src=\"https://img.icons8.com/nolan/64/twitter-circled.png\" height=\"30px\"></img>
\t\t\t\t\t@marcosblua
\t\t\t\t</a>
\t    \t</div>
\t\t</div>

        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Estilo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 74,  198 => 54,  186 => 11,  180 => 7,  170 => 6,  151 => 5,  139 => 75,  137 => 74,  116 => 55,  114 => 54,  94 => 36,  88 => 34,  84 => 32,  82 => 31,  65 => 17,  59 => 13,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t\t<link href=\"{{ asset(\"css/Estilo.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock %}
    </head>

    <body style=\"display: flex; flex-direction: column;\">
        <div class=\"header\" style=\"text-align:center\">
\t\t\t<img src=\"{{ asset(\"Logo.png\") }}\" width=\"170px\" heigth=\"170px\" />
\t\t</div>

\t\t<nav class=\"navbar navbar-expand-md navbar-light bg-light sticky-top\">
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"navbar-nav mr-auto mx-auto mt-2 mt-md-0\">
\t\t\t\t\t<li class=\"nav-item\"> Campo de busqueda </li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t{% if app.user %}
        \t\t\t\tMostrar foto de perfil clickeable
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\"><a  class=\"nav-link\" href=\"{{ path('app_login') }}\"><i class=\"fas fa-edit\"></i> Iniciar Sesión </a></li>
    \t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t
\t\t<nav class=\"navbar navbar-expand-md navbar-light bg-light sticky-top\">
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"navbar-nav mr-auto mx-auto mt-2 mt-md-0\">
\t\t\t\t\t<li class=\"nav-item activa\"><a class=\"nav-link\" href=\"Perfil.html\">Perfil</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Noticias.html\">Noticias</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Recomendaciones.html\">Recomendaciones</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>

        {% block body %}{% endblock %}

\t\t<div class=\"footer\">
\t\t\t<div style=\"text-align:center;\">
\t\t\t\t<p>Todos derechos de este sitio estan reservados a </p>
\t\t\t\t<a href=\"https://www.facebook.com/marcosblua\" target=\"_blank\">
\t\t\t\t\t<img src=\"https://img.icons8.com/nolan/64/facebook.png\" height=\"30px\"></img>
\t\t\t\t\tMarcos Blua
\t\t\t\t</a>
\t\t\t\t<a href=\"https://www.instagram.com/marcosblua/\" target=\"_blank\">
\t\t\t\t\t<img src=\"https://img.icons8.com/nolan/64/instagram-new.png\" height=\"30px\"></img>
\t\t\t\t\t@marcosblua
\t\t\t\t</a>
\t\t\t\t<a href=\"https://twitter.com/marcosblua\" target=\"_blank\">
\t\t\t\t\t<img src=\"https://img.icons8.com/nolan/64/twitter-circled.png\" height=\"30px\"></img>
\t\t\t\t\t@marcosblua
\t\t\t\t</a>
\t    \t</div>
\t\t</div>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\MovieBlog_Symfony\\templates\\base.html.twig");
    }
}
