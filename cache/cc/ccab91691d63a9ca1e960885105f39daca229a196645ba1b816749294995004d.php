<?php

/* classes.twig */
class __TwigTemplate_b240e975a3c7f28d88acf82d871507b596b906e0bc5f98211722edf7a99b942b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<?php

/**
*
* ";
        // line 6
        echo (isset($context["tableName"]) ? $context["tableName"] : $this->getContext($context, "tableName"));
        echo "
*
* This class was generated by a script. Please be careful changing it.
* Regenerate it will erase all changes!
*/

namespace App\\Models\\Tables;

use Helpers\\DB\\Entity;

class ";
        // line 16
        echo (isset($context["tableName"]) ? $context["tableName"] : $this->getContext($context, "tableName"));
        echo " extends Entity {
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["type"]) {
            // line 18
            echo "    public \$";
            echo $context["field"];
            echo ";     // ";
            echo $context["type"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    public function __construct(
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["type"]) {
            // line 23
            echo "        \$";
            echo $context["field"];
            echo " = \"\",
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    \$id = false) {
        parent::__construct(\$id);

";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["type"]) {
            // line 29
            echo "        \$this->";
            echo $context["field"];
            echo " = \$";
            echo $context["field"];
            echo ";
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "classes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  83 => 29,  79 => 28,  74 => 25,  65 => 23,  61 => 22,  57 => 20,  46 => 18,  42 => 17,  38 => 16,  25 => 6,  19 => 2,);
    }
}
/* {% autoescape false %}*/
/* <?php*/
/* */
/* /***/
/* **/
/* * {{ tableName }}*/
/* **/
/* * This class was generated by a script. Please be careful changing it.*/
/* * Regenerate it will erase all changes!*/
/* *//* */
/* */
/* namespace App\Models\Tables;*/
/* */
/* use Helpers\DB\Entity;*/
/* */
/* class {{ tableName }} extends Entity {*/
/* {% for field,type in fields %}*/
/*     public ${{ field }};     // {{ type }}*/
/* {% endfor %}*/
/* */
/*     public function __construct(*/
/* {% for field,type in fields %}*/
/*         ${{ field }} = "",*/
/* {% endfor %}*/
/*     $id = false) {*/
/*         parent::__construct($id);*/
/* */
/* {% for field,type in fields %}*/
/*         $this->{{ field }} = ${{ field }};*/
/* {% endfor %}*/
/*     }*/
/* }*/
/* ?>*/
/* {% endautoescape %}*/
