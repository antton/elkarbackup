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

/* BinovoElkarBackupBundle:Default:base.html.twig */
class __TwigTemplate_bb57babf329434f425e46c38dd06d4af9d7ed280e9c2ef5c60914a007c771773 extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BinovoElkarBackupBundle:Default:base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BinovoElkarBackupBundle:Default:base.html.twig"));

        // line 5
        echo "<!DOCTYPE html>
";
        // line 7
        echo "<html>
    <head>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Dojo 1.8.1-->
        <link rel=\"stylesheet\" href=\"/js/dojo-release/dijit/themes/claro/claro.css\" media=\"screen\" />

        <!-- Bootstrap 3.3-->
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" media=\"screen\" />

        <!-- @ChristianGR elkarbackup theme -->
          <link rel=\"stylesheet\" href=\"/css/elkarbackup.css\" media=\"screen\" />

        <!-- jQuery -->
        <script type=\"text/javascript\" src=\"/js/jquery/jquery-1.12.0.min.js\"></script>

        <!-- Dojo -->
        <script type=\"text/javascript\" src=\"/js/dojo-release/dojo/dojo.js\" data-dojo-config=\"async: true\"></script>

        <!-- Bootstrap and Elkarbackup js -->
        <script type=\"text/javascript\" src=\"/js/bootstrap/bootstrap.min.js\" ></script>
        <script type=\"text/javascript\" src=\"/js/base.js\"></script>
\t<script type=\"text/javascript\">var context=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url_prefix"]) || array_key_exists("url_prefix", $context) ? $context["url_prefix"] : (function () { throw new RuntimeError('Variable "url_prefix" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\";</script>

    </head>
    <body class=\"claro\">

        <div id=\"top\">
          <div id=\"cont-top\">
            <div class=\"logo\">
                ";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showClients");
        echo "\"><img src=\"/img/elkarbackup.png\" alt=\"ElkarBackup\" /></a>
            </div>

\t\t        <div class=\"navbar\" role=\"navigation\">
                ";
        // line 42
        $this->displayBlock('menu', $context, $blocks);
        // line 45
        echo "            </div>
          </div>
        </div>

        <div id=\"contenido\" class=\"container\">
            <div class=\"row\">
                ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "            </div>

            <div class=\"row\">
                ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "            </div>
        </div>

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ElkarBackup";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 37
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "                    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("BinovoElkarBackupBundle:Builder:mainMenu", ["allow_safe_labels" => true]);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 57,  214 => 56,  204 => 52,  194 => 51,  181 => 43,  171 => 42,  161 => 37,  151 => 36,  132 => 9,  117 => 58,  115 => 56,  110 => 53,  108 => 51,  100 => 45,  98 => 42,  90 => 38,  88 => 36,  77 => 28,  55 => 9,  51 => 7,  48 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{##
 # @copyright 2012,2013 Binovo it Human Project, S.L.
 # @license http://www.opensource.org/licenses/bsd-license.php New-BSD
 #}
<!DOCTYPE html>
{% trans_default_domain 'BinovoElkarBackup' %}
<html>
    <head>
        <title>{% block title %}ElkarBackup{% endblock %}</title>
        <!-- Dojo 1.8.1-->
        <link rel=\"stylesheet\" href=\"/js/dojo-release/dijit/themes/claro/claro.css\" media=\"screen\" />

        <!-- Bootstrap 3.3-->
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" media=\"screen\" />

        <!-- @ChristianGR elkarbackup theme -->
          <link rel=\"stylesheet\" href=\"/css/elkarbackup.css\" media=\"screen\" />

        <!-- jQuery -->
        <script type=\"text/javascript\" src=\"/js/jquery/jquery-1.12.0.min.js\"></script>

        <!-- Dojo -->
        <script type=\"text/javascript\" src=\"/js/dojo-release/dojo/dojo.js\" data-dojo-config=\"async: true\"></script>

        <!-- Bootstrap and Elkarbackup js -->
        <script type=\"text/javascript\" src=\"/js/bootstrap/bootstrap.min.js\" ></script>
        <script type=\"text/javascript\" src=\"/js/base.js\"></script>
\t<script type=\"text/javascript\">var context=\"{{url_prefix}}\";</script>

    </head>
    <body class=\"claro\">

        <div id=\"top\">
          <div id=\"cont-top\">
            <div class=\"logo\">
                {% block header %}
                {% endblock %}
                <a href=\"{{path('showClients')}}\"><img src=\"/img/elkarbackup.png\" alt=\"ElkarBackup\" /></a>
            </div>

\t\t        <div class=\"navbar\" role=\"navigation\">
                {% block menu %}
                    {{ knp_menu_render('BinovoElkarBackupBundle:Builder:mainMenu',{'allow_safe_labels': true})|raw }}
                {% endblock %}
            </div>
          </div>
        </div>

        <div id=\"contenido\" class=\"container\">
            <div class=\"row\">
                {% block body %}
                {% endblock %}
            </div>

            <div class=\"row\">
                {% block footer %}
                {% endblock %}
            </div>
        </div>

    </body>
</html>
", "BinovoElkarBackupBundle:Default:base.html.twig", "/app/elkarbackup/src/Binovo/ElkarBackupBundle/Resources/views/Default/base.html.twig");
    }
}
