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

/* BinovoElkarBackupBundle:Default:scripts.html.twig */
class __TwigTemplate_8885048c379d2a3d4e8d2dcec211bc7883749806fe6d76282c0f711d325cf4c3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:scripts.html.twig", 5);
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
        <script type=\"text/javascript\" src=\"js/show-scripts.js\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
<div class=\"row\">
<div class=\"max10\" >
<h3>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Scripts", [], "BinovoElkarBackup");
        echo "</h3>

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 19), "flashbag", [], "any", false, false, false, 19), "get", [0 => "showScripts"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "            <div class=\"controls help-block\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<table class=\"table table-condensed table-bordered table-striped\">
    <tr>
        ";
        // line 28
        echo "        <th>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Id", [], "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Name", [], "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Description", [], "BinovoElkarBackup");
        echo "</th>
        ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "          <th>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Actions", [], "BinovoElkarBackup");
            echo "</th>
        ";
        }
        // line 34
        echo "
    </tr>

    ";
        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 39
            echo "    <tr>
        <td onclick=\"document.location.href='";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editScript", ["id" => twig_get_attribute($this->env, $this->source, $context["script"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "'\" class=\"ids\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editScript", ["id" => twig_get_attribute($this->env, $this->source, $context["script"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["script"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["script"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["script"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
        ";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 44
                echo "
        <td class=\"actions\" style=\"width:20%; text-align: center\">



          <form action=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editScript", ["id" => twig_get_attribute($this->env, $this->source, $context["script"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" style=\"display:inline\">
            <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-pencil\"></span> ";
                // line 50
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit", [], "BinovoElkarBackup");
                echo " </button>
          </form>
          <form data-bnv-message=\"";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Really delete script %name%?", ["%name%" => twig_get_attribute($this->env, $this->source, $context["script"], "scriptname", [], "any", false, false, false, 52)], "BinovoElkarBackup");
                echo "\" class=\"delete-script\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteScript", ["id" => twig_get_attribute($this->env, $this->source, $context["script"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" method=\"POST\" style=\"display:inline\">
            <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnDeleteScriptDisabled'\">
                    ";
                // line 54
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("This script is used by some client or job", [], "BinovoElkarBackup");
                // line 55
                echo "            </div>
            <div class=\"btn-group inline\" ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["script"], "isUsed", [], "any", false, false, false, 56)) {
                    echo "id=\"btnDeleteScriptDisabled\"";
                }
                echo ">
              <button class=\"btn btn-default btn-danger\" type=\"submit\" ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["script"], "isUsed", [], "any", false, false, false, 57)) {
                    echo " disabled=\"True\"";
                }
                echo "><span class=\"glyphicon glyphicon-trash\"></span> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", [], "BinovoElkarBackup");
                echo " </button>
            </div>
          </form>
        </td>
        ";
            }
            // line 62
            echo "
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</table>
";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 67
            echo "
<button class=\"btn btn-default pull-right\" type=\"button\" onclick=\"document.location.href='";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editScript", ["id" => "new"]);
            echo "'\"><span class=\"glyphicon glyphicon-plus\"></span>  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New", [], "BinovoElkarBackup");
            echo "</button>

";
        }
        // line 71
        echo "
";
        // line 73
        echo "<div class=\"navigation binovo-pagination\">
    ";
        // line 74
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
</div>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 74,  219 => 73,  216 => 71,  208 => 68,  205 => 67,  203 => 66,  200 => 65,  192 => 62,  180 => 57,  174 => 56,  171 => 55,  169 => 54,  162 => 52,  157 => 50,  153 => 49,  146 => 44,  144 => 43,  140 => 42,  136 => 41,  128 => 40,  125 => 39,  120 => 38,  115 => 34,  109 => 32,  107 => 31,  103 => 30,  99 => 29,  94 => 28,  89 => 24,  80 => 21,  77 => 20,  73 => 19,  68 => 17,  63 => 14,  59 => 13,  51 => 9,  47 => 8,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "BinovoElkarBackupBundle:Default:scripts.html.twig", "/app/elkarbackup/src/Binovo/ElkarBackupBundle/Resources/views/Default/scripts.html.twig");
    }
}
