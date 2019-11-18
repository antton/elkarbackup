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
class __TwigTemplate_13415f7404c4986b7088ab39e54f143ff9aa7d7820407ae2b2068e06c0bff25f extends \Twig\Template
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
        <link rel=\"stylesheet\" href=\"js/dojo-release/dijit/themes/claro/claro.css\" media=\"screen\" />

        <!-- Bootstrap 3.3-->
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" media=\"screen\" />

        <!-- @ChristianGR elkarbackup theme -->
          <link rel=\"stylesheet\" href=\"css/elkarbackup.css\" media=\"screen\" />

        <!-- jQuery -->
        <script type=\"text/javascript\" src=\"js/jquery/jquery-1.12.0.min.js\"></script>

        <!-- Dojo -->
        <script type=\"text/javascript\" src=\"js/dojo-release/dojo/dojo.js\" data-dojo-config=\"async: true\"></script>

        <!-- Bootstrap and Elkarbackup js -->
        <script type=\"text/javascript\" src=\"js/bootstrap/bootstrap.min.js\" ></script>
        <script type=\"text/javascript\" src=\"js/base.js\"></script>
\t<script type=\"text/javascript\">var context=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["url_prefix"] ?? null), "html", null, true);
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
        echo "\"><img src=\"img/elkarbackup.png\" alt=\"ElkarBackup\" /></a>
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
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ElkarBackup";
    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                ";
    }

    // line 42
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("BinovoElkarBackupBundle:Builder:mainMenu", ["allow_safe_labels" => true]);
        echo "
                ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                ";
    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                ";
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
        return array (  158 => 57,  154 => 56,  150 => 52,  146 => 51,  139 => 43,  135 => 42,  131 => 37,  127 => 36,  120 => 9,  111 => 58,  109 => 56,  104 => 53,  102 => 51,  94 => 45,  92 => 42,  84 => 38,  82 => 36,  71 => 28,  49 => 9,  45 => 7,  42 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "BinovoElkarBackupBundle:Default:base.html.twig", "/app/elkarbackup/src/Binovo/ElkarBackupBundle/Resources/views/Default/base.html.twig");
    }
}
