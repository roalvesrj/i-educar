<?php

$desvio_diretorio = '';


return new class
{
    public function RenderHTML()
    {
        return '
                <table width=\'100%\' height=\'100%\'>
                    <tr align=center valign=\'top\'><td></td></tr>
                </table>
                ';

    }

    public function Formular()
    {
        $this->titulo = "i-Educar";
        $this->processoAp = 71;
    }
};


