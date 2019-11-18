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

/* BinovoElkarBackupBundle:Default:fields.html.twig */
class __TwigTemplate_fdc0090dbf85d7664b1bd03cb6bd2b817a19dd33e5dd2c80cc00166dbcdebe92 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'form_label' => [$this, 'block_form_label'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'form_errors' => [$this, 'block_form_errors'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BinovoElkarBackupBundle:Default:fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BinovoElkarBackupBundle:Default:fields.html.twig"));

        // line 9
        $this->displayBlock('form_row', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_label', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 10
        ob_start();
        // line 11
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "block_prefixes", [], "any", false, false, false, 11), 1, [], "any", false, false, false, 11) == "percent")) {
            // line 12
            echo "    <div class=\"form-group has-feedback\">
  ";
        } else {
            // line 14
            echo "    <div class=\"form-group\">
  ";
        }
        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors');
        echo "
        <div class=\"col-xs-12 col-md-9\">
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'widget');
        echo "
        </div>
    </div>
";
        $___internal_5583534dd39c5d796d278764d80d3975b2532c6ea9c1153563b28e2329300223_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo twig_spaceless($___internal_5583534dd39c5d796d278764d80d3975b2532c6ea9c1153563b28e2329300223_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 28, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })())]);
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 31, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " required"))]);
            // line 32
            echo "    ";
        }
        // line 33
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "        ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })()));
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 36, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")) . " control-label col-xs-12 col-md-3"))]);
        // line 37
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 37, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 37, $this->source); })())), "html", null, true);
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "      <span class=\"required\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("This field is required", [], "messages");
            echo "\">*</span>
    ";
        }
        // line 39
        echo "</label>
";
        $___internal_714035cb23c145887c69c003a730970f192c6759587857475b3062981750412a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo twig_spaceless($___internal_714035cb23c145887c69c003a730970f192c6759587857475b3062981750412a_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 44
        echo "  ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  <span class=\"form-control-feedback percent\">%</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 49
        ob_start();
        // line 50
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })()), "text")) : ("text"));
        // line 51
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()) == "file")) {
            // line 52
            echo "    <div class=\"input-group\">
      <span class=\"input-group-btn\">
        <span class=\"btn btn-elkarbackup btn-file\"><span class=\"glyphicon glyphicon-folder-open\"></span> ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "BinovoElkarBackup"), "html", null, true);
            echo "&hellip; <input type=\"file\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " /></span>
      </span>
      <input type=\"text\" class=\"form-control\" id=\"visual_";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\" readonly>
    </div>

    <script type=\"text/javascript\">
        dojo.connect(dojo.byId('";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "'), 'onchange',
                     function() {
                         dojo.byId('visual_";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "').value = dojo.byId('";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "').value;
                     });
        dojo.connect(dojo.byId('visual_";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "'), 'onchange',
                     function(){
                         dojo.byId('";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "').value = dojo.byId('visual_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "').value;
                     });
    </script>
    ";
            // line 72
            echo "    ";
        } elseif ((((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 72, $this->source); })()) == "Client_quota") && ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 72, $this->source); })()) > 0))) {
            // line 73
            echo "      ";
            $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 73, $this->source); })()) / 1024) / 1024);
            // line 74
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 74, $this->source); })()))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 74, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        } else {
            // line 76
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })()))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })()), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        }
        $___internal_fbf763bddcc5068492a3c56cd9daa60caff713ebe71bf0858477931233cc86dc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo twig_spaceless($___internal_fbf763bddcc5068492a3c56cd9daa60caff713ebe71bf0858477931233cc86dc_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 82
        ob_start();
        // line 83
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 85
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 85), "label", [], "any", false, false, false, 85), "html", null, true);
            echo "<br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </div>
";
        $___internal_a79c79151ac0ead36ebd4dc12957ba6e32d5764154f6b41e6537317181e6981a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo twig_spaceless($___internal_a79c79151ac0ead36ebd4dc12957ba6e32d5764154f6b41e6537317181e6981a_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 92
        ob_start();
        // line 93
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 93, $this->source); })())) > 0)) {
            // line 94
            echo "<div class=\"control-group error-top\">
    <div class=\"alert alert-danger\">
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 97
                echo "            <p>";
                echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                 // line 98
$context["error"], "messagePluralization", [], "any", false, false, false, 98))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                 // line 99
$context["error"], "messageTemplate", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 99), "validators")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                 // line 100
$context["error"], "messageTemplate", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 100), "validators"))), "html", null, true);
                // line 101
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </div>
</div>
    ";
        }
        $___internal_e3c0fb909e8eef3e14d35c925d62ab2140cb43f33478dc030bcba29fe906a2ae_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo twig_spaceless($___internal_e3c0fb909e8eef3e14d35c925d62ab2140cb43f33478dc030bcba29fe906a2ae_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  431 => 92,  425 => 103,  418 => 101,  416 => 100,  415 => 99,  414 => 98,  412 => 97,  408 => 96,  404 => 94,  401 => 93,  399 => 92,  389 => 91,  379 => 82,  375 => 87,  364 => 85,  360 => 84,  355 => 83,  353 => 82,  343 => 81,  333 => 49,  318 => 76,  304 => 74,  301 => 73,  298 => 72,  290 => 66,  285 => 64,  278 => 62,  273 => 60,  266 => 56,  259 => 54,  255 => 52,  252 => 51,  249 => 50,  247 => 49,  237 => 48,  223 => 44,  213 => 43,  203 => 26,  199 => 39,  193 => 38,  176 => 37,  173 => 36,  170 => 35,  167 => 34,  164 => 33,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  149 => 28,  146 => 27,  144 => 26,  134 => 25,  124 => 10,  117 => 19,  112 => 17,  107 => 16,  103 => 14,  99 => 12,  96 => 11,  94 => 10,  84 => 9,  74 => 91,  71 => 90,  69 => 81,  66 => 80,  64 => 48,  61 => 47,  59 => 43,  56 => 42,  54 => 25,  51 => 24,  49 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{##
 # @copyright 2012,2013 Binovo it Human Project, S.L.
 # @license http://www.opensource.org/licenses/bsd-license.php New-BSD
 #}
{#
 Customizations for
 vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/
#}
{% block form_row %}
{% apply spaceless %}
  {% if form.vars.block_prefixes.1 == 'percent' %}
    <div class=\"form-group has-feedback\">
  {% else %}
    <div class=\"form-group\">
  {% endif %}
        {{ form_label(form) }}
        {{ form_errors(form) }}
        <div class=\"col-xs-12 col-md-9\">
          {{ form_widget(form) }}
        </div>
    </div>
{% endapply %}
{% endblock form_row %}

{% block form_label %}
{% apply spaceless %}
    {% if not compound %}
        {% set label_attr = label_attr|merge({'for': id}) %}
    {% endif %}
    {% if required %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' control-label col-xs-12 col-md-3')|trim}) %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ label|trans({}, translation_domain) }}{% if required %}
      <span class=\"required\" title=\"{% trans %}This field is required{% endtrans %}\">*</span>
    {% endif %}</label>
{% endapply %}
{% endblock form_label %}

{% block percent_widget %}
  {{ block('form_widget_simple') }}
  <span class=\"form-control-feedback percent\">%</span>
{% endblock %}

{% block form_widget_simple %}
{% apply spaceless %}
    {% set type = type|default('text') %}
    {% if type == 'file' %}
    <div class=\"input-group\">
      <span class=\"input-group-btn\">
        <span class=\"btn btn-elkarbackup btn-file\"><span class=\"glyphicon glyphicon-folder-open\"></span> {{ 'Browse'|trans({}, 'BinovoElkarBackup') }}&hellip; <input type=\"file\" {{ block('widget_attributes') }} /></span>
      </span>
      <input type=\"text\" class=\"form-control\" id=\"visual_{{id}}\" readonly>
    </div>

    <script type=\"text/javascript\">
        dojo.connect(dojo.byId('{{id}}'), 'onchange',
                     function() {
                         dojo.byId('visual_{{id}}').value = dojo.byId('{{id}}').value;
                     });
        dojo.connect(dojo.byId('visual_{{id}}'), 'onchange',
                     function(){
                         dojo.byId('{{id}}').value = dojo.byId('visual_{{id}}').value;
                     });
    </script>
    {#
      Show Quota in GB
    #}
    {% elseif id == 'Client_quota' and value > 0 %}
      {% set value = value / 1024 / 1024 %}
      <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value|number_format(2, '.', ',') }}\" {% endif %}/>
    {% else %}
      <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endif %}
{% endapply %}
{% endblock form_widget_simple %}

{% block choice_widget_expanded %}
{% apply spaceless %}
    <div {{ block('widget_container_attributes') }}>
    {% for child in form %}
        {{ form_widget(child) }} {{child.vars.label}}<br />
    {% endfor %}
    </div>
{% endapply %}
{% endblock choice_widget_expanded %}

{% block form_errors %}
{% apply spaceless %}
    {% if errors|length > 0 %}
<div class=\"control-group error-top\">
    <div class=\"alert alert-danger\">
        {% for error in errors %}
            <p>{{
                error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'validators')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')
            }}</p>
        {% endfor %}
    </div>
</div>
    {% endif %}
{% endapply %}
{% endblock form_errors %}
", "BinovoElkarBackupBundle:Default:fields.html.twig", "/app/elkarbackup/src/Binovo/ElkarBackupBundle/Resources/views/Default/fields.html.twig");
    }
}
