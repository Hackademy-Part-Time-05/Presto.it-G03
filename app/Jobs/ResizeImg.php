<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ResizeImg implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $fileName;
    private $path;
    private $w;
    private $h;
    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h)
    {
        // dirname funzione php che ci restituisce il percorso
        // basename restituisce il nome
        $this->path = dirname($filePath);
        $this->fileName= basename($filePath);
        $this->w =$w;
        $this->h= $h;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $scrPath = storage_path() . '/app/public' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

    }
}
