<?php
class Form
{
    private $formName;
    private $request;
    private $action;
    private $method;
    private $target;

    function __construct($formName, $request, $action = "index.php", $method = "get", $target = "_self")
    {
        $this->formName = $formName;
        $this->request = $request;
        $this->action = $action;
        $this->method = $method;
        $this->target = $target;
    }
    function __toString()
    {
        $str = '<table align=center border=0 width=400>';
        $str .= '<caption><h3>' . $this->formName . '</h3></caption>';
        $str .= '<form action=' . $this->action . ' method=' . $this->method . ' target=' . $this->target . '>';
        switch ($this->request["action"]) {
            case 1:
                $str .= '<tr><th>Rect height: </th><td>';
                $str .= '<input type="text" name="height" value=' . $this->request["height"] . '>';
                $str .= '</td></tr>';
                $str .= '<tr><th>Rect weidth: </th><td>';
                $str .= '<input type="text" name="width" value=' . $this->request["width"] . '>';
                $str .= '</td></tr>';
                break;
            case 2:
                $str .= '<tr><th>The first side: </th><td>';
                $str .= '<input type="text" name="side1" value=' . $this->request["side1"] . '>';
                $str .= '</td></tr>';
                $str .= '<tr><th>The second side: </th><td>';
                $str .= '<input type="text" name="side2" value=' . $this->request["side2"] . '>';
                $str .= '</td></tr>';
                $str .= '<tr><th>The third side: </th><td>';
                $str .= '<input type="text" name="side3" value=' . $this->request["side3"] . '>';
                $str .= '</td></tr>';
                break;
            case 3:
                $str .= '<tr><th>Circle radius: </th><td>';
                $str .= '<input type="text" name="radius" value=' . $this->request["radius"] . '>';
                $str .= '</td></tr>';
                break;
        }
        $str .= '<tr><td align=center colspan=2><input type="submit" value="CALCLUTE"></td></tr>';
        $str .= '<input type="hidden" name="act" value=' . $this->request["action"] . '>';
        $str .= '<input type="hidden" name="action" value=' . $this->request["action"] . '>';
        $str .= '</form>';
        $str .= '</table>';
        return $str;
    }
}
