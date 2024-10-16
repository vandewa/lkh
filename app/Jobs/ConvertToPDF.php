<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

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

        $path = public_path('lkh/' . $this->nama_file_docx);

        // $pathPDF = public_path('lkh/');

        $client = new Client();
        // $resource = fopen($pathPDF . $this->nama_file_pdf, 'w');

        // $client->request('POST', 'http://10.90.237.12:8080/api/v1/convert/file/pdf', [
        //     'multipart' => [
        //         [
        //             'name' => 'format',
        //             'contents' => 'pdf',
        //         ],
        //         [
        //             'name' => 'file',
        //             'contents' => File::get($this->pathSave),
        //             'filename' => $this->nama_file_docx,
        //         ]

        //     ],
        //     'sink' => $resource
        // ]);

        $response = $client->request('POST', 'http://10.90.237.12:8080/api/v1/convert/file/pdf', [
            'multipart' => [
                [
                    'name' => 'fileInput',
                    'contents' => fopen($path, 'r'),
                ]

            ]
        ]);

        // $pathWORD = public_path('lkh/' . $this->nama_file_docx);

        // $client = new Client();

        // $response = $client->request('POST', 'http://10.90.237.12:8080/api/v1/convert/file/pdf', [
        //     'multipart' => [
        //         [
        //             'name' => 'fileInput',
        //             'contents' => fopen($pathWORD, 'r'),
        //         ]

        //     ]
        // ]);

        // File::put(public_path('lkh/' . $this->nama_file_pdf), $response->getBody());

        // // Storage::disk('local')->put('mpp/path_pdf/' . $this->nama_file_pdf, $response->getBody());



    }
}
