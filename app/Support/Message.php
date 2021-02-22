<?php


namespace FabioVige\Support;


class Message
{
    private $text;
    private $type;
    private $title;

    public function getText()
    {
        return $this->text;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function question( string $message ): Message
    {
        $this->type = 'question';
        $this->title = 'Pergunta';
        $this->text = $message;

        return $this;
    }

    public function info( string $message ): Message
    {
        $this->type = 'info';
        $this->title = 'Informação';
        $this->text = $message;

        return $this;
    }

    public function warning( string $message ): Message
    {
        $this->type = 'warning';
        $this->title = 'Aviso';
        $this->text = $message;

        return $this;
    }

    public function success( string $message ): Message
    {
        $this->type = 'success';
        $this->title = 'Sucesso';
        $this->text = $message;

        return $this;
    }

    public function error( string $message ): Message
    {
        $this->type = 'error';
        $this->title = 'Erro';
        $this->text = $message;

        return $this;
    }

    public function render()
    {
        //return "<div class='message {$this->getType()} '>{$this->getText()}</div>";
        $arrayMessage = [
            'icon' => $this->getType(),
            'title' => $this->getTitle(),
            'text' => $this->getText()
        ];
        return json_encode($arrayMessage);
    }
}
