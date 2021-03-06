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
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>

    <body style=\"display: flex; flex-direction: column;\">
\t\t<nav class=\"navbar navbar-expand-md navbar-light bg-light sticky-top\">
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-left\">
\t\t\t\t\t<li class=\"nav-item\"> <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Logo.png"), "html", null, true);
        echo "\" width=\"60px\" heigth=\"60px\" /> </li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"navbar-nav mr-auto mx-auto mt-2 mt-md-0\">
\t\t\t\t\t<li class=\"nav-item\"> ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchBarController::searchBarAction"));
        echo " </li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "\t\t\t\t\t\t<li class=\"nav-item\"><a  class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"> <img src=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "imagenPerfil", [], "any", false, false, false, 33), "html", null, true);
            echo " width=\"20px\" heigth=\"20px\" style=\"border-radius: 100%;\"/> </a></li>
\t\t\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t\t\t<li class=\"nav-item\"><a  class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-sign-in-alt\"></i> Iniciar Sesión </a></li>
    \t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>

        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
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
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Marquitos Mubis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Estilo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
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

    // line 61
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
        return array (  210 => 61,  192 => 41,  180 => 12,  174 => 8,  164 => 7,  145 => 6,  133 => 62,  131 => 61,  110 => 42,  108 => 41,  102 => 37,  96 => 35,  88 => 33,  86 => 32,  79 => 28,  72 => 24,  60 => 14,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Marquitos Mubis{% endblock %}</title>
        {% block stylesheets %}
            <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t\t<link href=\"{{ asset(\"css/Estilo.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock %}
    </head>

    <body style=\"display: flex; flex-direction: column;\">
\t\t<nav class=\"navbar navbar-expand-md navbar-light bg-light sticky-top\">
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-left\">
\t\t\t\t\t<li class=\"nav-item\"> <img src=\"{{ asset(\"Logo.png\") }}\" width=\"60px\" heigth=\"60px\" /> </li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"navbar-nav mr-auto mx-auto mt-2 mt-md-0\">
\t\t\t\t\t<li class=\"nav-item\"> {{ render(controller('App\\\\Controller\\\\SearchBarController::searchBarAction')) }} </li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"nav-item\"><a  class=\"nav-link\" href=\"{{ path('perfil', {'username': app.user.username}) }}\"> <img src={{app.user.imagenPerfil}} width=\"20px\" heigth=\"20px\" style=\"border-radius: 100%;\"/> </a></li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\"><a  class=\"nav-link\" href=\"{{ path('app_login') }}\"><i class=\"fas fa-sign-in-alt\"></i> Iniciar Sesión </a></li>
    \t\t\t\t{% endif %}
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
