<?php

/* @bolt/_nav/_secondary-filemanagement.twig */
class __TwigTemplate_169e946fde3ec84dfc9c5bf94ff8befcd0b067d31e33522288be070a77addf72 extends Twig_Template
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
        $__internal_f0e266b273be1bac81e56c9d904c38f81353f3faa45545aa9edebd54a360f1fd = $this->env->getExtension("native_profiler");
        $__internal_f0e266b273be1bac81e56c9d904c38f81353f3faa45545aa9edebd54a360f1fd->enter($__internal_f0e266b273be1bac81e56c9d904c38f81353f3faa45545aa9edebd54a360f1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-filemanagement.twig"));

        // line 1
        $context["files_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "files"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "permission", array())));
        // line 15
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt')->trans("File Management"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
        
        $__internal_f0e266b273be1bac81e56c9d904c38f81353f3faa45545aa9edebd54a360f1fd->leave($__internal_f0e266b273be1bac81e56c9d904c38f81353f3faa45545aa9edebd54a360f1fd_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  34 => 15,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% set files_menu = app['menu.admin'].get('files') %}*/
/* {% set sub = [*/
/*     {*/
/*         icon: files_menu.get('files_uploads').icon,*/
/*         label: files_menu.get('files_uploads').label,*/
/*         link: files_menu.get('files_uploads').uri,*/
/*         isallowed: files_menu.get('files_uploads').permission*/
/*     }, {*/
/*         icon: files_menu.get('files_themes').icon,*/
/*         label: files_menu.get('files_themes').label,*/
/*         link: files_menu.get('files_themes').uri,*/
/*         isallowed: files_menu.get('files_themes').permission*/
/*     }*/
/* ] %}*/
/* */
/* {{ nav.submenu('fa:folder-open', __('File Management'), sub, (page_nav == 'Settings/FileManagement')) }}*/
/* */
