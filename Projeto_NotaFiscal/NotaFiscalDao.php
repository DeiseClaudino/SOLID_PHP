<?php

class NotaFiscalDao implements AcaoAposGerarNota
{
    public function persiste(NotaFiscal $nf)
    {
        echo "Persistindo nota fiscal<br/>";
    }
}
