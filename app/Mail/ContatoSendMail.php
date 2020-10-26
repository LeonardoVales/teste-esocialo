<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contato;

class ContatoSendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $contato;

    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    public function build()
    {
        return $this
            ->subject('Contato eSocial')
            ->view('pages.contatos.sendmail')
            ->with(['contato' => $this->contato]);
    }
}
