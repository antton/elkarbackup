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

/* BinovoElkarBackupBundle:Default:client.html.twig */
class __TwigTemplate_dd94cf128daf2961856b612e3713f50ceea971c8a9bbdf3cd5372248654e0b2e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BinovoElkarBackupBundle:Default:client.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BinovoElkarBackupBundle:Default:client.html.twig"));

        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:client.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 9
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"/js/edit-client.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<div class=\"top-action-buttons pull-right\">
  <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnAddJobDisabled'\">
          ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Client has not yet been saved", [], "BinovoElkarBackup");
        // line 18
        echo "  </div>
  <div class=\"btn-group inline\" ";
        // line 19
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)) {
            echo "id=\"btnAddJobDisabled\"";
        }
        echo ">
    <button type=\"button\" class=\"btn btn-default btn-pull-right\" ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)) {
            echo "disabled=\"true\" ";
        } else {
            echo " onclick=\"document.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editJob", ["idJob" => "new", "idClient" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "'\" ";
        }
        echo "> <span class=\"glyphicon glyphicon-plus\"></span> ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add job", [], "BinovoElkarBackup");
        echo "</button>
  </div>
</div>

";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    <h3 id=\"legend\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit client", [], "BinovoElkarBackup");
        echo "</h3>
    <div class=\"row\">
        <div class=\"col-md-6\">
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "flashbag", [], "any", false, false, false, 28), "get", [0 => "client"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "            <div class=\"controls help-block\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), [0 => "BinovoElkarBackupBundle:Default:fields.html.twig"], true);
        // line 34
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "url", [], "any", false, false, false, 35), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "quota", [], "any", false, false, false, 36), 'row');
        echo "
            <div class=\"form-group\">
                <label class=\"control-label col-xs-12 col-md-3\">";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Disk usage", [], "BinovoElkarBackup");
        echo "</label>
                <div class=\"col-xs-12 col-md-9\"><input style=\"";
        // line 39
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "quota", [], "any", false, false, false, 39) > 0) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "diskUsage", [], "any", false, false, false, 39) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "quota", [], "any", false, false, false, 39)) > (isset($context["warning_load_level"]) || array_key_exists("warning_load_level", $context) ? $context["warning_load_level"] : (function () { throw new RuntimeError('Variable "warning_load_level" does not exist.', 39, $this->source); })())))) {
            echo "color:red";
        }
        echo "\" type=\"text\" class=\"col-md-12\" disabled=\"disabled\" value=\"";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "diskUsage", [], "any", false, false, false, 39) / 1024), 0), "html", null, true);
        echo " MB";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "quota", [], "any", false, false, false, 39) > 0)) {
            echo " (";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "diskUsage", [], "any", false, false, false, 39) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "quota", [], "any", false, false, false, 39)) * 100), 0), "html", null, true);
            echo "%)";
        }
        echo "\" /></div>
            </div>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'row');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "isActive", [], "any", false, false, false, 42), 'row');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "preScripts", [], "any", false, false, false, 43), 'row');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "postScripts", [], "any", false, false, false, 44), 'row');
        echo "
            ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "owner", [], "any", false, false, false, 46), 'row');
            echo "
            ";
        }
        // line 48
        echo "
            <div class=\"panel panel-default\">
              <div class=\"panel-heading panel-collapsable-heading\">
                <a class=\"collapsed\" href=\"#viewadvanced\" data-toggle=\"collapse\" data-target=\"#viewadvanced\">Advanced</a></div>
              <div id=\"viewadvanced\" class=\"collapse panel-body\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "sshArgs", [], "any", false, false, false, 53), 'row');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "rsyncShortArgs", [], "any", false, false, false, 54), 'row');
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "rsyncLongArgs", [], "any", false, false, false, 55), 'row');
        echo "
              </div>
            </div>

            <div class=\"control-group\">
              <div class=\"controls control-row\">
                  <button type=\"submit\" class=\"btn btn-default pull-right\">";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Save", [], "BinovoElkarBackup");
        echo "</button>
              </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("client_help", [], "BinovoElkarBackup");
        // line 67
        echo "        </div>
    </div>
    <div>
        <div>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "_token", [], "any", false, false, false, 71), 'widget');
        echo "
        </div>
    </div>
</form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 71,  243 => 67,  241 => 66,  233 => 61,  224 => 55,  220 => 54,  216 => 53,  209 => 48,  203 => 46,  201 => 45,  197 => 44,  193 => 43,  189 => 42,  185 => 41,  170 => 39,  166 => 38,  161 => 36,  157 => 35,  152 => 34,  150 => 33,  141 => 30,  138 => 29,  134 => 28,  128 => 25,  124 => 24,  109 => 20,  103 => 19,  100 => 18,  98 => 17,  93 => 14,  83 => 13,  69 => 9,  59 => 8,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{##
 # @copyright 2012,2013 Binovo it Human Project, S.L.
 # @license http://www.opensource.org/licenses/bsd-license.php New-BSD
 #}
{% extends 'BinovoElkarBackupBundle:Default:base.html.twig' %}
{% trans_default_domain 'BinovoElkarBackup' %}

{% block scripts %}
    {{ parent() }}
        <script type=\"text/javascript\" src=\"/js/edit-client.js\"></script>
{% endblock %}

{% block body %}

<div class=\"top-action-buttons pull-right\">
  <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnAddJobDisabled'\">
          {% trans %}Client has not yet been saved{% endtrans %}
  </div>
  <div class=\"btn-group inline\" {% if not form.vars.value.id %}id=\"btnAddJobDisabled\"{% endif %}>
    <button type=\"button\" class=\"btn btn-default btn-pull-right\" {% if not form.vars.value.id %}disabled=\"true\" {% else %} onclick=\"document.location.href='{{ path('editJob', {idJob: 'new', idClient: form.vars.value.id}) }}'\" {% endif %}> <span class=\"glyphicon glyphicon-plus\"></span> {% trans %}Add job{% endtrans %}</button>
  </div>
</div>

{{ form_start(form, {'attr': {'class': 'form-horizontal'} }) }}
    <h3 id=\"legend\">{% trans %}Edit client{% endtrans %}</h3>
    <div class=\"row\">
        <div class=\"col-md-6\">
{% for flashMessage in app.session.flashbag.get('client') %}
            <div class=\"controls help-block\">
                {{ flashMessage }}
            </div>
{% endfor %}
{% form_theme form 'BinovoElkarBackupBundle:Default:fields.html.twig' %}
            {{ form_row(form.name) }}
            {{ form_row(form.url) }}
            {{ form_row(form.quota) }}
            <div class=\"form-group\">
                <label class=\"control-label col-xs-12 col-md-3\">{% trans %}Disk usage{% endtrans %}</label>
                <div class=\"col-xs-12 col-md-9\"><input style=\"{% if form.vars.value.quota > 0 and form.vars.value.diskUsage / form.vars.value.quota > warning_load_level %}color:red{% endif %}\" type=\"text\" class=\"col-md-12\" disabled=\"disabled\" value=\"{{ (form.vars.value.diskUsage / 1024) | number_format(0)  }} MB{% if form.vars.value.quota > 0 %} ({{ (form.vars.value.diskUsage / form.vars.value.quota * 100) | number_format(0)}}%){% endif %}\" /></div>
            </div>
            {{ form_row(form.description) }}
            {{ form_row(form.isActive) }}
            {{ form_row(form.preScripts) }}
            {{ form_row(form.postScripts) }}
            {% if is_granted('ROLE_ADMIN') %}
                {{ form_row(form.owner) }}
            {% endif %}

            <div class=\"panel panel-default\">
              <div class=\"panel-heading panel-collapsable-heading\">
                <a class=\"collapsed\" href=\"#viewadvanced\" data-toggle=\"collapse\" data-target=\"#viewadvanced\">Advanced</a></div>
              <div id=\"viewadvanced\" class=\"collapse panel-body\">
                {{ form_row(form.sshArgs) }}
                {{ form_row(form.rsyncShortArgs)}}
                {{ form_row(form.rsyncLongArgs)}}
              </div>
            </div>

            <div class=\"control-group\">
              <div class=\"controls control-row\">
                  <button type=\"submit\" class=\"btn btn-default pull-right\">{% trans %}Save{% endtrans %}</button>
              </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            {% trans %}client_help{% endtrans %}
        </div>
    </div>
    <div>
        <div>
            {{ form_widget(form._token) }}
        </div>
    </div>
</form>


{% endblock %}
", "BinovoElkarBackupBundle:Default:client.html.twig", "/app/elkarbackup/src/Binovo/ElkarBackupBundle/Resources/views/Default/client.html.twig");
    }
}
