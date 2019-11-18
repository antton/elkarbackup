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

/* BinovoElkarBackupBundle:Default:clients.html.twig */
class __TwigTemplate_1278160b6d65564b3065cc883b2832d0dfa5251e2a401f3df29b55656be857a0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:clients.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"js/show-clients.js\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
<div class=\"row\">
    <div class=\"col-md-12\" id=\"jobs-container\">

<!-- top action buttons -->
<div class=\"top-action-buttons pull-right\" style=\"padding-bottom: 10px;\">
  <!-- Disk usage -->
  ";
        // line 21
        if ((($context["fsDiskUsage"] ?? null) <= 80)) {
            // line 22
            echo "    ";
            $context["discIconClass"] = "ico-success";
            // line 23
            echo "    ";
            $context["discBarClass"] = "progress-bar-success";
            // line 24
            echo "  ";
        } elseif ((($context["fsDiskUsage"] ?? null) <= 90)) {
            // line 25
            echo "    ";
            $context["discIconClass"] = "ico-warning";
            // line 26
            echo "    ";
            $context["discBarClass"] = "progress-bar-warning";
            // line 27
            echo "  ";
        } elseif ((($context["fsDiskUsage"] ?? null) > 90)) {
            // line 28
            echo "    ";
            $context["discIconClass"] = "ico-danger";
            // line 29
            echo "    ";
            $context["discBarClass"] = "progress-bar-danger";
            // line 30
            echo "  ";
        }
        // line 31
        echo "
  <div id=\"disc-usage\">
    ";
        // line 33
        if ((($context["fsDiskUsage"] ?? null) <= 90)) {
            // line 34
            echo "  \t<img src=\"/img/disc-status.png\" alt=\"disc\" />
    ";
        } else {
            // line 36
            echo "    <img src=\"img/disc-status-danger.png\" alt=\"disc\" />
    ";
        }
        // line 38
        echo "  \t<div id=\"usage-box\">
  \t\t<div id=\"usage\">
        <div class=\"tooltip-arrow\"></div>
  \t\t\t<div id=\"disc-status\" class=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["discIconClass"] ?? null), "html", null, true);
        echo "\"></div>
  \t\t\t<div id=\"disc-info\">
  \t\t\t\t<h3><span>Usage</span> ";
        // line 43
        echo twig_escape_filter($this->env, ($context["fsDiskUsage"] ?? null), "html", null, true);
        echo "%</h3>
  \t\t\t\t<div class=\"progress\">
  \t\t\t\t\t<div class=\"progress-bar ";
        // line 45
        echo twig_escape_filter($this->env, ($context["discBarClass"] ?? null), "html", null, true);
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, ($context["fsDiskUsage"] ?? null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo twig_escape_filter($this->env, ($context["fsDiskUsage"] ?? null), "html", null, true);
        echo "%;\">
  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t</div>
  \t</div>
  </div>
  <!-- End disk usage-->
  <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
    <button class=\"btn btn-default\" action=\"#\" eb-action=\"addClient\" eb-path=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClient", ["id" => "new"]);
        echo "\">
      <span class=\"glyphicon glyphicon-plus\"></span> ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add client", [], "BinovoElkarBackup");
        // line 56
        echo "    </button>
  <button class=\"btn btn-default\" action=\"#\" eb-action=\"sortJobs\" eb-path=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortJobs");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Sort jobs", [], "BinovoElkarBackup");
        echo "</button>

  <div class=\"btn-group\" role=\"group\">
    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Actions", [], "BinovoElkarBackup");
        // line 62
        echo "      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
      <li><a href=\"#\" eb-action=\"runSelected\">";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Run now", [], "BinovoElkarBackup");
        echo "</a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"#\" eb-action=\"deleteSelected\">";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", [], "BinovoElkarBackup");
        echo "</a></li>
    </ul>
  </div>
  </div>
</div>

<h3 id=\"legend\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Jobs", [], "BinovoElkarBackup");
        echo "</h3>


";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 76), "flashbag", [], "any", false, false, false, 76), "get", [0 => "clients"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 77
            echo "    <div class=\"controls help-block\">
        ";
            // line 78
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "<table id=\"clients\" class=\"table table-condensed table-hover\">
<tr>
  ";
        // line 84
        echo "  <th><input id=\"checkAll\" class=\"select-toggle-check\" type=\"checkbox\"></th>
  <th></th>
  <th>";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Id", [], "BinovoElkarBackup");
        echo "</th>
  <th>";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Name", [], "BinovoElkarBackup");
        echo "</th>
  <th style=\"text-align: center\">";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Disk usage", [], "BinovoElkarBackup");
        echo "</th>
  <th>";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Last log entry", [], "BinovoElkarBackup");
        echo "</th>
  <th>";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Status", [], "BinovoElkarBackup");
        echo "</th>
  <!--<th>";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", [], "BinovoElkarBackup");
        echo "</th>-->
  <th>";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Actions", [], "BinovoElkarBackup");
        echo "</th>
</tr>

    ";
        // line 96
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 97
            echo "
      ";
            // line 99
            echo "      ";
            if ((twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 99), "message", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 99), "message", [], "any", false, false, false, 99), "")) : (""))) > 50)) {
                // line 100
                echo "        ";
                $context["clientstatus"] = (twig_slice($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 100), "message", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 100), "message", [], "any", false, false, false, 100), "")) : ("")), 0, 50) . "...");
                // line 101
                echo "      ";
            } else {
                // line 102
                echo "        ";
                $context["clientstatus"] = twig_slice($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 102), "message", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 102), "message", [], "any", false, false, false, 102), "")) : ("")), 0, 50);
                // line 103
                echo "      ";
            }
            // line 104
            echo "
      ";
            // line 106
            echo "      ";
            if ((((twig_get_attribute($this->env, $this->source, $context["client"], "diskUsage", [], "any", false, false, false, 106) / 1024) / 1024) > 1024)) {
                // line 107
                echo "        ";
                $context["cdu"] = twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["client"], "diskUsage", [], "any", false, false, false, 107) / 1024) / 1024) / 1024), 1);
                // line 108
                echo "        ";
                $context["cduunit"] = "TB";
                // line 109
                echo "      ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["client"], "diskUsage", [], "any", false, false, false, 109) / 1024) > 1024)) {
                // line 110
                echo "        ";
                $context["cdu"] = twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["client"], "diskUsage", [], "any", false, false, false, 110) / 1024) / 1024), 1);
                // line 111
                echo "        ";
                $context["cduunit"] = "GB";
                // line 112
                echo "      ";
            } else {
                // line 113
                echo "        ";
                $context["cdu"] = twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["client"], "diskUsage", [], "any", false, false, false, 113) / 1024), 0);
                // line 114
                echo "        ";
                $context["cduunit"] = "MB";
                // line 115
                echo "      ";
            }
            // line 116
            echo "
      ";
            // line 118
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "quota", [], "any", false, false, false, 118) > 0)) {
                // line 119
                echo "        ";
                $context["cduused"] = twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["client"], "diskUsage", [], "any", false, false, false, 119) / twig_get_attribute($this->env, $this->source, $context["client"], "quota", [], "any", false, false, false, 119)) * 100), 0);
                // line 120
                echo "      ";
            }
            // line 121
            echo "

<tr id=\"client-";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\" class=\"client-row client-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "isActive", [], "any", false, false, false, 123) == false)) {
                echo "disabled";
            }
            echo "\">
  <td><input class=\"select-toggle-check\" type=\"checkbox\" value=\"client";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\"></td>
  <td><span class=\"client-icon\"></span></td>
  <td class=\"vert-align id\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit client", [], "BinovoElkarBackup");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "</a></td>
  <td class=\"vert-align name\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit client", [], "BinovoElkarBackup");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 127), "html", null, true);
            echo "</a></td>
  <td class=\"vert-align diskusage\" style=\"text-align:center";
            // line 128
            if (((twig_get_attribute($this->env, $this->source, $context["client"], "quota", [], "any", false, false, false, 128) > 0) && ((twig_get_attribute($this->env, $this->source, $context["client"], "diskUsage", [], "any", false, false, false, 128) / twig_get_attribute($this->env, $this->source, $context["client"], "quota", [], "any", false, false, false, 128)) > ($context["warning_load_level"] ?? null)))) {
                echo ";color:red";
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($context["cdu"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["cduunit"] ?? null), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "quota", [], "any", false, false, false, 128) > 0)) {
                echo " (";
                echo twig_escape_filter($this->env, ($context["cduused"] ?? null), "html", null, true);
                echo "%)";
            }
            echo "</td>
  <td class=\"vert-align logentry\"> <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 129
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 129), "dateTime", [], "any", false, true, false, 129), "format", [0 => "Y-m-d H:i:s"], "method", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 129), "dateTime", [], "any", false, true, false, 129), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 129), "")) : ("")), "html", null, true);
            echo "\" href=\"logs?filter[gte][l.level]=0&filter[eq][l.source]=&filter[like][l.link]=%2Fclient%2F";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 129), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 129), "dateTime", [], "any", false, true, false, 129), "format", [0 => "Y-m-d H:i:s"], "method", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 129), "dateTime", [], "any", false, true, false, 129), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 129), "")) : ("")), "html", null, true);
            echo " </a></td>
  <td class=\"vert-align status\"><span class=\"label
    ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, $context["client"], "isActive", [], "any", false, false, false, 131)) {
                // line 132
                echo "      ";
                if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 132), "levelName", [], "any", true, true, false, 132)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "logEntry", [], "any", false, true, false, 132), "levelName", [], "any", false, false, false, 132), "")) : ("")) == "ERROR")) {
                    echo "label-danger
      ";
                } else {
                    // line 134
                    echo "        ";
                    if ((($context["clientstatus"] ?? null) == "QUEUED")) {
                        echo "label-info
        ";
                    } elseif ((                    // line 135
($context["clientstatus"] ?? null) == "RUNNING")) {
                        echo "label-primary
        ";
                    } elseif ((                    // line 136
($context["clientstatus"] ?? null) == "FAIL")) {
                        echo "label-danger
        ";
                    } else {
                        // line 137
                        echo "label-success
        ";
                    }
                    // line 139
                    echo "      ";
                }
                echo "\">";
                echo twig_escape_filter($this->env, ($context["clientstatus"] ?? null), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 140
                echo "label-default\">INACTIVE</span>
    ";
            }
            // line 142
            echo "  </td>
  <!--<td class=\"vert-align isactive\">";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["client"], "isActive", [], "any", false, false, false, 143)) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", [], "BinovoElkarBackup");
            } else {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inactive", [], "BinovoElkarBackup");
            }
            echo "</td>-->
  <td class=\"actions vert-align\">

    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 147
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit client", [], "BinovoElkarBackup");
            echo "\" class=\"btn btn-default\" href=\"#\" eb-action=\"editClient\" eb-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 147), "html", null, true);
            echo "\">
          <span class=\"glyphicon glyphicon-pencil\"></span>
        </button>
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add job", [], "BinovoElkarBackup");
            echo "\" class=\"btn btn-default\" href=\"#\" eb-action=\"addJob\" eb-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editJob", ["idJob" => "new", "idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 150), "html", null, true);
            echo "\">
          <span class=\"glyphicon glyphicon-plus\"></span>
        </button>
        <div class=\"btn-group\" role=\"group\">
          <button id=\"btnGroupDrop1\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" type=\"button\">
            ";
            // line 155
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("More", [], "BinovoElkarBackup");
            // line 156
            echo "            <span class=\"caret-right\"></span>
          </button>
          <ul class=\"dropdown-menu dropright\" aria-labelledby=\"btnGroupDrop1\">
            <li><a href=\"#\" eb-action=\"runClient\" eb-clientid=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 159), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Run now", [], "BinovoElkarBackup");
            echo "</a></li>
            <li><a href=\"#\" eb-action=\"cloneClient\" eb-path=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cloneClient", ["idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 160)]), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 160), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Clone", [], "BinovoElkarBackup");
            echo "</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\" eb-action=\"deleteClient\" eb-path=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClient", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 162)]), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 162), "html", null, true);
            echo "\" eb-message=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Really delete client <strong>%name%</strong>? <br><br>This will remove all related jobs and backups", ["%name%" => twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 162)], "BinovoElkarBackup");
            echo "\" class=\"danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", [], "BinovoElkarBackup");
            echo "</a></li>
          </ul>
        </div>
    </div>

  </td>
</tr>


  ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "jobs", [], "any", false, false, false, 171));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 172
                echo "
  ";
                // line 174
                echo "  ";
                if ((((twig_get_attribute($this->env, $this->source, $context["job"], "diskUsage", [], "any", false, false, false, 174) / 1024) / 1024) > 1024)) {
                    // line 175
                    echo "    ";
                    $context["jdu"] = twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["job"], "diskUsage", [], "any", false, false, false, 175) / 1024) / 1024) / 1024), 1);
                    // line 176
                    echo "    ";
                    $context["jduunit"] = "TB";
                    // line 177
                    echo "  ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["job"], "diskUsage", [], "any", false, false, false, 177) / 1024) > 1024)) {
                    // line 178
                    echo "    ";
                    $context["jdu"] = twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["job"], "diskUsage", [], "any", false, false, false, 178) / 1024) / 1024), 1);
                    // line 179
                    echo "    ";
                    $context["jduunit"] = "GB";
                    // line 180
                    echo "  ";
                } else {
                    // line 181
                    echo "    ";
                    $context["jdu"] = twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["job"], "diskUsage", [], "any", false, false, false, 181) / 1024), 0);
                    // line 182
                    echo "    ";
                    $context["jduunit"] = "MB";
                    // line 183
                    echo "  ";
                }
                // line 184
                echo "
<tr id=\"job-";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 185), "html", null, true);
                echo "\" class=\"job-row client-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 185), "html", null, true);
                echo " job-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 185), "html", null, true);
                echo " ";
                if (((twig_get_attribute($this->env, $this->source, $context["job"], "isActive", [], "any", false, false, false, 185) == false) || (twig_get_attribute($this->env, $this->source, $context["client"], "isActive", [], "any", false, false, false, 185) == false))) {
                    echo "disabled";
                }
                echo "\">
  <td><input class=\"select-toggle-check\" type=\"checkbox\" value=\"job\"></td>
  <td><span class=\"glyphicon glyphicon-folder-open\"></span></td>
  <td class=\"vert-align id\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 188
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit Job", [], "BinovoElkarBackup");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editJob", ["idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 188), "idJob" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 188)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 188), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 188), "html", null, true);
                echo "</a></td>
  <td class=\"vert-align name\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 189
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit Job", [], "BinovoElkarBackup");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editJob", ["idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 189), "idJob" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 189)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 189) . "/") . twig_get_attribute($this->env, $this->source, $context["job"], "name", [], "any", false, false, false, 189)), "html", null, true);
                echo "</a></td>
  <td class=\"vert-align diskusage\" style=\"text-align:center;\">";
                // line 190
                echo twig_escape_filter($this->env, ($context["jdu"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["jduunit"] ?? null), "html", null, true);
                echo "</td>
  <td class=\"vert-align logentry\"> <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 191
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "logEntry", [], "any", false, true, false, 191), "dateTime", [], "any", false, true, false, 191), "format", [0 => "Y-m-d H:i:s"], "method", true, true, false, 191)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "logEntry", [], "any", false, true, false, 191), "dateTime", [], "any", false, true, false, 191), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 191), "")) : ("")), "html", null, true);
                echo "\" href=\"logs?filter[gte][l.level]=0&filter[eq][l.source]=&filter[like][l.link]=%2Fclient%2F";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 191), "html", null, true);
                echo "%2Fjob%2F";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 191), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "logEntry", [], "any", false, true, false, 191), "dateTime", [], "any", false, true, false, 191), "format", [0 => "Y-m-d H:i:s"], "method", true, true, false, 191)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "logEntry", [], "any", false, true, false, 191), "dateTime", [], "any", false, true, false, 191), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 191), "")) : ("")), "html", null, true);
                echo "</a></td>
  <td class=\"vert-align status\"><span class=\"label
    ";
                // line 193
                if ((twig_get_attribute($this->env, $this->source, $context["job"], "isActive", [], "any", false, false, false, 193) && twig_get_attribute($this->env, $this->source, $context["client"], "isActive", [], "any", false, false, false, 193))) {
                    // line 194
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["job"], "status", [], "any", false, false, false, 194) == "QUEUED")) {
                        echo "label-info
      ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 195
$context["job"], "status", [], "any", false, false, false, 195) == "RUNNING")) {
                        echo "label-primary
      ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 196
$context["job"], "status", [], "any", false, false, false, 196) == "WARNING")) {
                        echo "label-warning
      ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 197
$context["job"], "status", [], "any", false, false, false, 197) == "FAIL")) {
                        echo "label-danger
      ";
                    } else {
                        // line 198
                        echo "label-success
      ";
                    }
                    // line 199
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "status", [], "any", false, false, false, 199), "html", null, true);
                    echo "</span>
    ";
                } else {
                    // line 200
                    echo "label-default\">INACTIVE</span>
    ";
                }
                // line 202
                echo "  </td>
  <!--<td class=\"vert-align isactive\">";
                // line 203
                if (twig_get_attribute($this->env, $this->source, $context["job"], "isActive", [], "any", false, false, false, 203)) {
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", [], "BinovoElkarBackup");
                } else {
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inactive", [], "BinovoElkarBackup");
                }
                echo "</td>-->
  <td class=\"vert-align actions\">

    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 207
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit Job", [], "BinovoElkarBackup");
                echo "\" class=\"btn btn-default\" href=\"#\" eb-action=\"editJob\" eb-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editJob", ["idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 207), "idJob" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 207)]), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 207), "html", null, true);
                echo "\">
          <span class=\"glyphicon glyphicon-pencil\"></span>
        </button>
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 210
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Restore", [], "BinovoElkarBackup");
                echo "\" class=\"btn btn-default\" href=\"#\" eb-action=\"showJobBackup\" eb-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showJobBackup", ["action" => "view", "idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 210), "idJob" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 210)]), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 210), "html", null, true);
                echo "\" id=\"btnRestore";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 210), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 210), "html", null, true);
                echo "\">
          <span class=\"glyphicon glyphicon-cloud-download\"></span>
        </button>
        <div class=\"btn-group\" role=\"group\">
          <button id=\"btnGroupDrop1\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" type=\"button\">
            ";
                // line 215
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("More", [], "BinovoElkarBackup");
                // line 216
                echo "            <span class=\"caret-right\"></span>
          </button>
          <ul class=\"dropdown-menu dropright\" aria-labelledby=\"btnGroupDrop1\">
            <li ";
                // line 219
                if (((twig_get_attribute($this->env, $this->source, $context["job"], "status", [], "any", false, false, false, 219) == "RUNNING") || (twig_get_attribute($this->env, $this->source, $context["job"], "status", [], "any", false, false, false, 219) == "QUEUED"))) {
                    echo "class=\"disabled\"";
                }
                echo "><a href=\"#\" eb-action=\"runJob\" eb-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("runJob", ["idJob" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 219), "idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 219)]), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 219), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Run now", [], "BinovoElkarBackup");
                echo "</a></li>
            <li ";
                // line 220
                if (((twig_get_attribute($this->env, $this->source, $context["job"], "status", [], "any", false, false, false, 220) != "RUNNING") && (twig_get_attribute($this->env, $this->source, $context["job"], "status", [], "any", false, false, false, 220) != "QUEUED"))) {
                    echo "class=\"disabled\"";
                }
                echo "><a href=\"#\" eb-action=\"abortJob\" eb-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abortJob", ["idJob" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 220), "idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 220)]), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 220), "html", null, true);
                echo "\" eb-message=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Job <strong>%name%</strong> is running. Do you really want to abort it ?", ["%name%" => twig_get_attribute($this->env, $this->source, $context["job"], "name", [], "any", false, false, false, 220)], "BinovoElkarBackup");
                echo "\" class=\"danger\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Abort", [], "BinovoElkarBackup");
                echo "</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\" eb-action=\"deleteJob\" eb-path=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteJob", ["idClient" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 222), "idJob" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 222)]), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 222), "html", null, true);
                echo "\" eb-clientid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 222), "html", null, true);
                echo "\" eb-message=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Really delete job <strong>%name%</strong>?<br><br>This will remove all related backups", ["%name%" => twig_get_attribute($this->env, $this->source, $context["job"], "name", [], "any", false, false, false, 222)], "BinovoElkarBackup");
                echo "\" class=\"danger\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", [], "BinovoElkarBackup");
                echo "</a></li>
          </ul>
        </div>
    </div>

  </td>
</tr>

  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "</table>


<div class=\"pull-right\" style=\"padding-bottom: 10px;\">
  <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
    <button class=\"btn btn-default\" action=\"#\" eb-action=\"addClient\" eb-path=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClient", ["id" => "new"]);
        echo "\">
      <span class=\"glyphicon glyphicon-plus\"></span> ";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add client", [], "BinovoElkarBackup");
        // line 239
        echo "    </button>
  <button class=\"btn btn-default\" action=\"#\" eb-action=\"sortJobs\" eb-path=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortJobs");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Sort jobs", [], "BinovoElkarBackup");
        echo "</button>

  <div class=\"btn-group dropup\" role=\"group\">
    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      ";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Actions", [], "BinovoElkarBackup");
        // line 245
        echo "      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
      <li><a href=\"#\" eb-action=\"runSelected\">";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Run now", [], "BinovoElkarBackup");
        echo "</a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"#\" eb-action=\"deleteSelected\">";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", [], "BinovoElkarBackup");
        echo "</a></li>
    </ul>
  </div>
  </div>
</div>

<div class=\"navigation binovo-pagination\">
    ";
        // line 257
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
</div>
</div>
</div>

<div id=\"footer\"></div>


<!--
MODALS
-->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content panel-danger\">
      <div class=\"modal-header panel-heading\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"exampleModalLabel\">Danger zone!</h4>
      </div>
      <div class=\"modal-body\">
        <span class=\"modal-message\">message</span>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
        <button type=\"button\" class=\"btn btn-danger\" action=\"#\" eb-action=\"\" eb-path=\"\" eb-jobid=\"\" eb-clientid=\"\" eb-action-confirmed=\"\">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"abortModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"abortModal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content panel-danger\">
      <div class=\"modal-header panel-heading\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"exampleModalLabel\">Danger zone!</h4>
      </div>
      <div class=\"modal-body\">
        <span class=\"modal-message\">message</span>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
        <button type=\"button\" class=\"btn btn-danger\" action=\"#\" eb-action=\"\" eb-path=\"\" eb-jobid=\"\" eb-clientid=\"\" eb-action-confirmed=\"\">Abort job</button>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 257,  746 => 250,  741 => 248,  736 => 245,  734 => 244,  725 => 240,  722 => 239,  720 => 238,  716 => 237,  709 => 232,  682 => 222,  667 => 220,  655 => 219,  650 => 216,  648 => 215,  633 => 210,  623 => 207,  612 => 203,  609 => 202,  605 => 200,  599 => 199,  595 => 198,  590 => 197,  586 => 196,  582 => 195,  577 => 194,  575 => 193,  564 => 191,  558 => 190,  550 => 189,  540 => 188,  526 => 185,  523 => 184,  520 => 183,  517 => 182,  514 => 181,  511 => 180,  508 => 179,  505 => 178,  502 => 177,  499 => 176,  496 => 175,  493 => 174,  490 => 172,  486 => 171,  468 => 162,  459 => 160,  453 => 159,  448 => 156,  446 => 155,  434 => 150,  424 => 147,  413 => 143,  410 => 142,  406 => 140,  398 => 139,  394 => 137,  389 => 136,  385 => 135,  380 => 134,  374 => 132,  372 => 131,  363 => 129,  348 => 128,  340 => 127,  332 => 126,  327 => 124,  317 => 123,  313 => 121,  310 => 120,  307 => 119,  304 => 118,  301 => 116,  298 => 115,  295 => 114,  292 => 113,  289 => 112,  286 => 111,  283 => 110,  280 => 109,  277 => 108,  274 => 107,  271 => 106,  268 => 104,  265 => 103,  262 => 102,  259 => 101,  256 => 100,  253 => 99,  250 => 97,  245 => 96,  239 => 92,  235 => 91,  231 => 90,  227 => 89,  223 => 88,  219 => 87,  215 => 86,  211 => 84,  207 => 81,  198 => 78,  195 => 77,  191 => 76,  185 => 73,  176 => 67,  171 => 65,  166 => 62,  164 => 61,  155 => 57,  152 => 56,  150 => 55,  146 => 54,  130 => 45,  125 => 43,  120 => 41,  115 => 38,  111 => 36,  107 => 34,  105 => 33,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  72 => 21,  63 => 14,  59 => 13,  51 => 9,  47 => 8,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "BinovoElkarBackupBundle:Default:clients.html.twig", "/app/elkarbackup/src/Binovo/ElkarBackupBundle/Resources/views/Default/clients.html.twig");
    }
}
