<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;

class ConvertToPDF implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $nama_file_pdf;
    public $nama_file_docx;
    public $pathSave;

    public function __construct($nama_file_docx, $nama_file_pdf, $pathSave)
    {
        $this->nama_file_docx = $nama_file_docx;
        $this->nama_file_pdf = $nama_file_pdf;
        $this->pathSave = $pathSave;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $pathPDF = storage_path('app/pdf/');
        // if (!file_exists($pathPDF)) {
        //     mkdir($pathPDF);
        // }

        $pathPDF = public_path('lkh/');

        $client = new Client();
        $resource = fopen($pathPDF . $this->nama_file_pdf, 'w');

        $client->request('POST', 'http://103.155.105.35:3000/convert', [
            'multipart' => [
                [
                    'name' => 'format',
                    'contents' => 'pdf',
                ],
                [
                    'name' => 'file',
                    'contents' => File::get($this->pathSave),
                    'filename' => $this->nama_file_docx,
                ]

            ],
            'sink' => $resource
        ]);

    }
}
