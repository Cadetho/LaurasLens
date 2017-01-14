<?php

/* modular/lightslidelauraslens.html.twig */
class __TwigTemplate_1667361a71a24c64d432e578ac583c47ee834aa0dcfd0c8ea99bdb4945adb5d6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($context["root_path"] ?? null) + "userpluginslightslider\templatesmodularlightslider.html.twig"), "modular/lightslidelauraslens.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modular/lightslidelauraslens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends root_path+ '\\user\\plugins\\lightslider\\templates\\modular\\lightslider.html.twig' %}


", "modular/lightslidelauraslens.html.twig", "C:\\xampp\\htdocs\\LaurasLens\\user\\themes\\lauraslens\\templates\\modular\\lightslideLaurasLens.html.twig");
    }
}
