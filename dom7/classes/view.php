<?php
class view
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include $template;
    }

    public function render($template)
    {
        ob_start();

        include $template;

        $html = ob_get_contents();

        ob_clean();

        return $html;
    }
}