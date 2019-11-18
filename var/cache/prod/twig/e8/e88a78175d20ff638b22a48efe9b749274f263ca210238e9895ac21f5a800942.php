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

/* BinovoElkarBackupBundle:Default:logs.html.twig */
class __TwigTemplate_5fcc0d173aa57438dd7f0c362b07790a381600fb3feb4772b405d54a18e4645a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "BinovoElkarBackupBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:logs.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
<h3>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Logs", [], "BinovoElkarBackup");
        echo "</h3>

<form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showLogs");
        echo "\">
<table id=\"logs\" class=\"table table-condensed table-hover table-striped\">
    <tr>
        ";
        // line 16
        echo "        <th>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Time", [], "BinovoElkarBackup");
        echo "</th>
        <th style=\"width: 160px;\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Level", [], "BinovoElkarBackup");
        echo "<br />
            ";
        // line 18
        echo $this->extensions['Binovo\ElkarBackupBundle\Twig\Extension']->filterSelect(($context["levels"] ?? null), ["style" => "width: 150px;"]);
        echo "</th>
        <th>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Source", [], "BinovoElkarBackup");
        echo "<br />
            ";
        // line 20
        echo $this->extensions['Binovo\ElkarBackupBundle\Twig\Extension']->filterSelect(($context["source"] ?? null), ["style" => "width: 150px;"]);
        echo "</th>
        <th>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", [], "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Message", [], "BinovoElkarBackup");
        echo "</th>
        <th></th>
        <th>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Object", [], "BinovoElkarBackup");
        echo "<br />
            ";
        // line 25
        echo $this->extensions['Binovo\ElkarBackupBundle\Twig\Extension']->filterText(($context["object"] ?? null), ["style" => "width: 150px;"]);
        echo "</th>
    </tr>

    ";
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["logRecord"]) {
            // line 30
            echo "    <tr class=\"
    ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["logRecord"], "levelName", [], "any", false, false, false, 31) == "ERROR")) {
                echo "danger ";
            }
            // line 32
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["logRecord"], "levelName", [], "any", false, false, false, 32) == "WARNING")) {
                echo "warning ";
            }
            // line 33
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["logRecord"], "message", [], "any", false, false, false, 33) == "OK")) {
                echo "success ";
            }
            // line 34
            echo "    logs\" >

        <td style=\"white-space: nowrap;\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["logRecord"], "dateTime", [], "any", false, false, false, 36), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 36), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logRecord"], "levelName", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logRecord"], "source", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logRecord"], "userName", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logRecord"], "message", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
        <td>";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["logRecord"], "logfile", [], "any", false, false, false, 41)) {
                echo " <a href=\"/log/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logRecord"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "/download\"><span class=\"glyphicon glyphicon-file\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Logfile", [], "BinovoElkarBackup");
                echo "\"></span></a>";
            }
            echo "</td>
        <td style=\"white-space: nowrap;\">";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["logRecord"], "link", [], "any", false, false, false, 42)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logRecord"], "link", [], "any", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logRecord"], "link", [], "any", false, false, false, 42), "html", null, true);
                echo "</a>";
            }
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</table>
</form>
<div class=\"navigation binovo-pagination\">
    ";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 48,  175 => 45,  160 => 42,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  134 => 37,  130 => 36,  126 => 34,  121 => 33,  116 => 32,  112 => 31,  109 => 30,  104 => 29,  98 => 25,  94 => 24,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  64 => 16,  58 => 12,  53 => 10,  50 => 9,  46 => 8,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "BinovoElkarBackupBundle:Default:logs.html.twig", "/app/elkarbackup/src/Binovo/ElkarBackupBundle/Resources/views/Default/logs.html.twig");
    }
}
